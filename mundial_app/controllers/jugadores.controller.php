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
    private $usuario;

    public function __construct(){
        $this->usuariosHelper = new usuariosHelper();
        $this->logueado = $this->usuariosHelper->checkLoggedIn();
        if($this->logueado)
            $this->usuario = $this->usuariosHelper->obtenerUsuario();
        $this->modelPaises = new paisesModel();
        $this->model = new jugadoresModel();       
        $this->view = new jugadoresView($this->logueado, $this->usuario);
    }

    //función para obtener todos los jugadores (listado de items)
    function mostrarJugadores(){
        $paises = $this->modelPaises -> getPaises();
        $jugadores = $this-> model -> getJugadores();
        $this-> view -> mostrarJugadores($jugadores, $paises);
    }

    //función para obtener todos los jugadores de un solo pais (listado de items x categoria)
    function mostrarJugadoresPorPais($paisSelected){ 
        $pais = $this -> modelPaises ->getPaisByName($paisSelected);
        if($pais){
            $jugadores = $this -> model -> getJugadoresByPais($pais);
            $this -> view -> mostrarJugadoresPorPais($jugadores, $pais);
        }else{
            $this->mostrarError("El país ingresado no es válido");
        }
    }    

    //función para obtener detalle de un solo jugador (detalle de item)
    function verMasJugador($id){ 
        $jugador = $this -> model -> getJugador($id);
        if($jugador){
            $pais = $this -> modelPaises -> getPais($jugador->id_pais);
            $this -> view -> mostrarJugador($jugador, $pais);  
        }else{
            $this->mostrarError("El jugador ingresado no es válido");
        }
    }

    //función para renderizar el formulario con los datos precargados para editar
    function mostrarFormularioEditarJugador($id){
        if ($this->logueado == true){
            $paises = $this -> modelPaises -> getPaises();
            $jugador = $this -> model -> getJugador($id);
            if($jugador){
                $this -> view -> mostrarFormularioEditarJugador($jugador, $paises);
            }else{
                $this->mostrarError("No se encontró el jugador seleccionado.");
            }
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    //función para renderizar el formulario agregar nuevo jugador
    function mostrarFormularioAgregarJugador(){
        if($this->logueado == true){
            $paises = $this -> modelPaises -> getPaises();
            $this -> view -> mostrarFormularioAgregarJugador($paises);
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    } 
    
    //Borra un jugador según id
    function borrarJugador($id){
        if($this->logueado == true){
            $this-> model -> borrarJugador($id);
            header("Location:".BASE_URL."jugadores");
            die();
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    //Agrega un nuevo jugador
    function agregarJugador(){
        if ($this->logueado == true){
            $jugadorFormulario = $this -> getDatosFormulario();
            if($jugadorFormulario != null){
                $jugador = new stdClass();
                $jugador -> nombre = $jugadorFormulario['nombre'];
                $jugador -> apellido = $jugadorFormulario['apellido'];
                $jugador -> descripcion = $jugadorFormulario['descripcion'];
                $jugador -> posicion = $jugadorFormulario['posicion'];
                $jugador -> foto = $jugadorFormulario['foto'];
                $jugador -> pais =  $jugadorFormulario['pais'];
                $id = $this -> model -> agregarJugador($jugador);
                header('Location:'.BASE_URL.'jugador/ver/'.$id);
                die();
            } 
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    //Edita un jugador según id
    function editarJugador($id){
        if ($this->logueado == true){
            $jugador = $this ->getDatosFormulario();
            if($jugador != null){
               $this -> model ->editarJugador($jugador['nombre'], 
                                        $jugador['apellido'], 
                                        $jugador['descripcion'], 
                                        $jugador['posicion'], 
                                        $jugador['foto'], 
                                        $jugador['pais'], 
                                        $id);
                header('Location:'.BASE_URL.'jugador/ver/'.$id);
                die(); 
            }      
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    //función que obtiene los datos del formulario
    private function getDatosFormulario(){
        if (!empty($_POST)){
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
                            "pais"=>$pais]; 
                return $jugador;
            }else{
                $this->mostrarError("Los campos no pueden estar vacíos");
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