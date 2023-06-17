<?php
require_once './helpers/usuarios.helper.php';
require_once './mundial_app/models/paises.model.php';
require_once './mundial_app/models/jugadores.model.php';
require_once './mundial_app/views/jugadores.view.php';


Class jugadoresController{
    private $model;
    private $view;
    private $modelPaises;
    private $usuariosHelper;
    private $logueado;

    public function __construct(){
        $this->usuariosHelper = new usuariosHelper();
        $this->model = new jugadoresModel();
        $this->modelPaises = new paisesModel();
        $this->logueado = $this->usuariosHelper->checkLoggedIn();
        $this->view = new jugadoresView($this->logueado);
    } 
    //función para obtener todos los jugadores de un solo pais (listado de items x categoria)
    function showJugadoresByPais($paisSelected){ 
        $pais = $this -> modelPaises ->getPaisByName($paisSelected);
        $jugadores = $this -> model -> getJugadoresByPais($pais);
        $this -> view -> showJugadoresByPais($jugadores, $pais);
    }

    //función para obtener todos los jugadores (listado de items)
    function showJugadores(){
        $paises = $this -> modelPaises -> getPaises();
        $jugadores = $this-> model -> getJugadores();
        $this-> view -> showJugadores($jugadores, $paises);
    }

    //función para obtener detalle de un solo jugador (detalle de item)
    function showDataJugador($id){ 
        $jugador = $this -> model -> getJugador($id);
        $pais = $this -> modelPaises -> getPais($jugador->id_pais);
        $this -> view -> showJugador($jugador, $pais);
    }

    //función para renderizar el formulario con los datos precargados para editar
    function showFormularioEdit($id){
        if ($this->logueado['loggueado'] == true){
            $paises = $this -> modelPaises -> getPaises();
            $jugador = $this -> model -> getJugador($id);
            $nombre = $jugador->nombre;
            $apellido = $jugador->apellido;
            $descripcion = $jugador->descripcion;
            $posicion = $jugador->posicion;
            $foto = $jugador->foto;
            $this -> view -> showFormularioEdit($id,$nombre, $apellido, $descripcion,$posicion, $foto, $paises);
        }else{
            $this->showError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    //función para renderizar el formulario agregar nuevo jugador
    function showFormularioAdd(){
        if($this->logueado['loggueado'] == true){
            $paises = $this -> modelPaises -> getPaises();
            $this -> view -> showFormularioAdd($paises);
        }else{
            $this->showError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    } 
    
    //Borra un jugador según id
    function deleteJugador($id){
        $logueado = $this->logueado = $this->usuariosHelper->checkLoggedIn();
        if($this->logueado['loggueado'] == true){
            $this-> model -> deleteJugador($id);
            header("Location:".BASE_URL."jugadores");
            die();
        }else{
            $this->showError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    //Agrega un nuevo jugador
    function addJugador(){
        if ($this->logueado['loggueado'] == true){
            $jugador = $this -> getDatosFormulario(); 
            $id = $this -> model -> addJugador($jugador['nombre'], 
                                            $jugador['apellido'], 
                                            $jugador['descripcion'], 
                                            $jugador['posicion'], 
                                            $jugador['foto'], 
                                            $jugador['pais']);
            header('Location:'.BASE_URL.'jugador/ver/'.$id);
            die();
        }else{
            $this->showError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    //Edita un jugador según id
    function editarJugador($id){
        if ($this->logueado['loggueado'] == true){
            $jugador = $this ->getDatosFormulario(); 
            $this -> model ->editarJugador($jugador['nombre'], 
                                        $jugador['apellido'], 
                                        $jugador['descripcion'], 
                                        $jugador['posicion'], 
                                        $jugador['foto'], 
                                        $jugador['pais'], 
                                        $id);
            header('Location:'.BASE_URL.'jugador/ver/'.$id);
            die();
        }else{
            $this->showError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    //función que obtiene los datos del formulario
    private function getDatosFormulario(){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $descripcion = $_POST['descripcion'];
        $posicion = $_POST['posicion'];
        $foto = $_POST['foto'];
        $pais = $_POST['pais'];
        if(!empty($nombre) && !empty($apellido) && !empty($descripcion) 
            && !empty($posicion) && !empty($foto) && !empty($pais)){
            $jugador = ["nombre"=>$nombre,
                        "apellido"=>$apellido,
                        "descripcion"=>$descripcion,
                        "posicion"=>$posicion,
                        "foto"=>$foto,
                        "pais"=>$pais]; //no falta el id?
            return $jugador;
        }else{
            $this->showError("Los campos no pueden estar vacíos");
        }        
    }

    //Muestra el template error
    function showError($msg){
        $this -> view -> showError($msg);
    }
}