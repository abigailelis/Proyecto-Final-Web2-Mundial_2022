<?php
require_once './helpers/usuarios.helper.php';
require_once './mundial_app/models/paises.model.php';
require_once './mundial_app/views/paises.view.php';

Class paisesController{
    private $model;
    private $view;
    private $usuariosHelper;
    private $logueado;
    private $usuario;

    public function __construct(){
        $this->usuariosHelper = new usuariosHelper();
        $this->model = new paisesModel();
        $this->logueado = $this->usuariosHelper->checkLoggedIn();
        if($this->logueado)
            $this->usuario = $this->usuariosHelper->obtenerUsuario();
        $this->view = new paisesView($this->logueado, $this->usuario);
    }

    function mostrarPaises(){
        $paises= $this-> model -> getPaises();
        $this-> view -> mostrarPaises($paises);
    }

    function mostrarInicio(){
        $this->view->mostrarInicio();
    }

    /*--Renderiza el formulario con los datos precargados para editar pais--*/
    function mostrarFormularioEditarPais($id){
        if($this->logueado == true){
            $pais = $this -> model -> getPais($id);
            $this -> view -> mostrarFormularioEditarPais($id, $pais);
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    /*--Renderiza el formulario agregar nuevo pais--*/
    function mostrarFormularioAgregarPais(){
        if ($this->logueado == true)
           $this -> view -> mostrarFormularioAgregarPais(); 
        else
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
    } 

    /*--Borrar pais según id--*/
    function borrarPais($id){
        if ($this->logueado == true){
            $response = $_POST['borrarPais'];
            if($response == 'si')
                $this-> model -> borrarPais($id);
            header("Location:".BASE_URL."paises/ver");
            die(); 
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }   
    }

    /*--Editar pais según id--*/
    function editarPais($id){
        if ($this->logueado == true){
            $pais = $this ->getDatosFormulario(); 
            if($pais != null){
                $verifica = $this->verificarPaisExistente($pais['clasificacion'], $pais['nombre'], $id);
                if($verifica ==null || $verifica == false){
                    $paisNuevo = new stdClass();
                    $paisNuevo->nombre = $pais['nombre'];
                    $paisNuevo->continente = $pais['continente'];
                    $paisNuevo->clasificacion = $pais['clasificacion'];
                    $paisNuevo->bandera = $pais['bandera'];
                    $this -> model ->editarPais($paisNuevo, $id);
                    header('Location:'.BASE_URL.'paises/ver');
                    die(); 
                }else{
                    $this->mostrarError("El nombre o la clasificación ingresados ya existen.");
                } 
            } 
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    /*--Agregar pais nuevo--*/
    function agregarPais(){
        if ($this->logueado == true){
            $pais = $this -> getDatosFormulario(); 
            if($pais != null){
                $verificaPaisExistente = $this -> model -> verificarPaisExistente($pais['clasificacion'], $pais['nombre']);
                if($verificaPaisExistente){
                    $this->mostrarError("La clasificación o el nombre ingresado ya existen.");
                }else{
                    $paisNuevo = new stdClass();
                    $paisNuevo->nombre = $pais['nombre'];
                    $paisNuevo->continente = $pais['continente'];
                    $paisNuevo->clasificacion = $pais['clasificacion'];
                    $paisNuevo->bandera = $pais['bandera'];
                    $this -> model -> agregarPais($paisNuevo);
                    header('Location:'.BASE_URL.'paises/ver');
                    die();  
                }
            }
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    /*--Verifica que el pais a editar no repita país o clasificación existentes */
    public function verificarPaisExistente($clasificacion, $nombre, $id){
        $paisEditado = $this -> model -> getPais($id);
        if($paisEditado->nombre == $nombre){
            if($paisEditado->clasificacion == $clasificacion)
                return false;
            else
                return $this -> model -> verificarPaisExistente($clasificacion, null);   
        }else{
            if($paisEditado->clasificacion == $clasificacion)
                return $this -> model -> verificarPaisExistente(null, $nombre);
            else
                return $this -> model -> verificarPaisExistente($clasificacion, $nombre);
        }
    }

    /*--Obtiene los datos del formulario y retorna null si estan vacíos--*/
    private function getDatosFormulario(){
        if (!empty($_POST)){ //verifica que se llenó el formulario previamente        
            if(!empty($_POST['nombre']) && !empty($_POST['continente']) && !empty($_POST['clasificacion']) && !empty($_POST['bandera'])){
                $pais = ["nombre"=>$_POST['nombre'],
                        "continente"=>$_POST['continente'],
                        "clasificacion"=>$_POST['clasificacion'],
                        "bandera"=>$_POST['bandera']
                        ]; 
                return $pais;
            }else{
                $this->mostrarError("Los campos no deben estar vacios");
            }
        }else{
            $this->mostrarError("Verifique que el formulario se llenó correctamente");
            return null;
        }     
    }

    /*--Muestra el template error con el mensaje correspondiente--*/
    function mostrarError($msg){
        $this -> view -> mostrarError($msg);
    }

    /*--Mostrar mensaje de borrar pais si/no--*/
    function mostrarMsgBorrar($id){
        if($logueado == true)
            $this ->view -> mostrarMsgBorrar($id);
        else
            $this-> mostrarError("Se necesitan permisos para acceder a esta sección.");
    }
}