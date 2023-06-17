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

    function mostrarPaises(){ //función para obtener todos los paises
        $paises= $this-> model -> getPaises();
        $this-> view -> mostrarPaises($paises);
    }

    function mostrarInicio(){
        $this->view->mostrarInicio();
    }

    function getPaises(){
        $paises= $this-> model -> getPaises();
        return $paises;
    }

    function getPaisByName($nombre_pais){
        $pais= $this-> model -> getPaisByName($nombre_pais);
        return $pais;
    }

    //función para renderizar el formulario con los datos precargados para editar
    function mostrarFormularioEditarPais($id){
        if($this->logueado == true){
            $pais = $this -> model -> getPais($id);
            $nombre = $pais->nombre;
            $continente = $pais->continente;
            $clasificacion = $pais->clasificacion;
            $bandera = $pais->bandera;
            $this -> view -> mostrarFormularioEditarPais($id, $nombre, $continente, $clasificacion, $bandera);
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
        
    }

    //función para renderizar el formulario agregar nuevo pais
    function mostrarFormularioAgregarPais(){
        if ($this->logueado['loggueado'] == true){
           $this -> view -> mostrarFormularioAgregarPais(); 
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }   
    } 

    //Mostrar mensaje de borrar pais si/no
    function mostrarMsgBorrar($id){
        $this ->view -> mostrarMsgBorrar($id);
    }

    //Borrar pais según id
    function borrarPais($id){
        if ($this->logueado['loggueado'] == true){
            $response = $_POST['borrarPais'];
            if($response == 'si'){
                $this-> model -> borrarPais($id);
            }        
            header("Location:".BASE_URL."paises/ver");
            die(); 
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }   
    }

    //Editar pais según id
    function editarPais($id){
        if ($this->logueado['loggueado'] == true){
            $pais = $this ->getDatosFormulario(); 
            if($pais != null){
               $verifica = $this -> model -> getClasificacion($pais['clasificacion']);
                if($verifica){
                    $msg="La clasificación ya existe.";
                    $this->mostrarError($msg);
                }else{
                    $this -> model ->editarPais($pais['nombre'], 
                                                $pais['continente'], 
                                                $pais['clasificacion'], 
                                                $pais['bandera'], 
                                                $id);
                    header('Location:'.BASE_URL.'paises/ver');
                    die();
                } 
            }
            
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    //Agregar pais nuevo
    function agregarPais(){
        if ($this->logueado['loggueado'] == true){
            $pais = $this -> getDatosFormulario(); 
            if($pais != null){
                $verifica = $this -> model -> getClasificacion($pais['clasificacion']);
                if($verifica){
                    $msg="La clasificación ya existe.";
                    $this->mostrarError($msg);
                }else{
                    $this -> model -> agregarPais($pais['nombre'], 
                    $pais['continente'], 
                    $pais['clasificacion'], 
                    $pais['bandera']);
                    header('Location:'.BASE_URL.'paises/ver');
                    die();  
                }
            }
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    //función que obtiene los datos del formulario
    private function getDatosFormulario(){
        if (!empty($_POST)){ //verifica que se llenó el formulario previamente
            $nombre = $_POST['nombre'];
            $continente = $_POST['continente'];
            $clasificacion = $_POST['clasificacion'];
            $bandera = $_POST['bandera'];
        
            if(!empty($nombre) && !empty($continente) && !empty($clasificacion) && $clasificacion >0 && !empty($bandera)){
                $pais = ["nombre"=>$nombre,
                        "continente"=>$continente,
                        "clasificacion"=>$clasificacion,
                        "bandera"=>$bandera]; 
                return $pais;
            }else if ($clasificacion <= 0){
                $msg="La clasificación es incorrecta.";
                $this->mostrarError($msg);
            }else{
                $msg="Los campos no deben estar vacios";
                $this->mostrarError($msg);
            }
        }else{
            $msg="Verifique que el formulario se llenó correctamente";
            $this->mostrarError($msg);
            return null;
        }     
    }

    //Muestra el template error
    function mostrarError($msg){
        $this -> view -> mostrarError($msg);
    }
}