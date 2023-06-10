<?php
require_once './helpers/usuarios.helper.php';
require_once './mundial_app/models/paises.model.php';
require_once './mundial_app/views/paises.view.php';

Class paisesController{
    private $model;
    private $view;
    private $usuariosHelper;
    private $logueado;

    public function __construct(){
        $this->usuariosHelper = new usuariosHelper();
        $this->model = new paisesModel();
        $this->logueado = $this->usuariosHelper->checkLoggedIn();
        $this->view = new paisesView($this->logueado);

    }

    function showPaises(){ //función para obtener todos los paises
        $paises= $this-> model -> getPaises();
        $this-> view -> showPaises($paises);
    }

    function showHome(){
        $this->view->showHomePage();
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
    function showFormularioEdit($id){
        if($this->logueado['loggueado'] == true){
            $pais = $this -> model -> getPais($id);
            $nombre = $pais->nombre;
            $continente = $pais->continente;
            $clasificacion = $pais->clasificacion;
            $bandera = $pais->bandera;
            $this -> view -> showFormularioEdit($id, $nombre, $continente, $clasificacion, $bandera);
        }else{
            $this->showError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
        
    }

    //función para renderizar el formulario agregar nuevo pais
    function showFormularioAdd(){
        if ($this->logueado['loggueado'] == true){
           $this -> view -> showFormularioAdd(); 
        }else{
            $this->showError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
        
    } 
    function showMsgBorrar($id){
        $this ->view -> showMsgBorrar($id);
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
            $this->showError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
        
    }

    //Editar pais según id
    function editarPais($id){
        if ($this->logueado['loggueado'] == true){
            $pais = $this ->getDatosFormulario(); 
            $this -> model ->editarPais($pais['nombre'], 
                                        $pais['continente'], 
                                        $pais['clasificacion'], 
                                        $pais['bandera'], 
                                        $id);
            header('Location:'.BASE_URL.'paises/ver');
            die();
        }else{
            $this->showError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    //Agregar pais nuevo
    function addPais(){
        if ($this->logueado['loggueado'] == true){
            $pais = $this -> getDatosFormulario(); 
            $verifica = $this -> model -> getClasificacion($pais['clasificacion']);
            if($verifica){
                $msg="La clasificación ya existe.";
                $this->showError($msg);
            }else{
                $this -> model -> addPais($pais['nombre'], 
                $pais['continente'], 
                $pais['clasificacion'], 
                $pais['bandera']);
                header('Location:'.BASE_URL.'paises/ver');
                die();  
            }
        }else{
            $this->showError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    //función que obtiene los datos del formulario
    private function getDatosFormulario(){
        $nombre = $_POST['nombre'];
        $continente = $_POST['continente'];
        $clasificacion = $_POST['clasificacion'];
        $bandera = $_POST['bandera'];
        if(!empty($nombre) && !empty($continente) && !empty($clasificacion) && !empty($bandera)){
            $pais = ["nombre"=>$nombre,
                     "continente"=>$continente,
                     "clasificacion"=>$clasificacion,
                     "bandera"=>$bandera]; 
            return $pais;
        }else{
            $msg="Los campos no deben estar vacios";
            $this->showError($msg);
        }        
    }

    //Muestra el template error
    function showError($msg){
        $this -> view -> showError($msg);
    }
}