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
        $this->usuario = $this->usuariosHelper->obtenerUsuario();
        $this->modelPaises = new paisesModel();
        $this->model = new jugadoresModel();       
        $this->view = new jugadoresView($this->logueado, $this->usuario);
    }

    /*--Pide los datos de todos los jugadores y los paises para renderizarlos en la vista (listado de ítems)--*/
    function mostrarJugadores(){
        $paises = $this-> modelPaises -> getPaises();
        $jugadores = $this-> model -> getJugadores();
        $this-> view -> mostrarJugadores($jugadores, $paises);
    }

    /*--Pide todos los jugadores del país seleccionado para renderizarlos en la vista (listado de ítems por categoría)--*/
    function mostrarJugadoresPorPais($paisSeleccionado){ 
        $pais = $this -> modelPaises ->getPaisByName($paisSeleccionado);
        if($pais){
            $jugadores = $this -> model -> getJugadoresByPais($pais);
            $this -> view -> mostrarJugadoresPorPais($jugadores, $pais);
        }else{
            $this->mostrarError("El país ingresado no es válido");
        }
    }    

    /*--Pide los datos del jugador seleccionado para renderizarlo en la vista (detalle de ítem)--*/
    function verMasJugador($id){ 
        $jugador = $this -> model -> getJugador($id);
        if($jugador){
            $pais = $this -> modelPaises -> getPais($jugador->id_pais);
            $this -> view -> mostrarJugador($jugador, $pais);  
        }else{
            $this->mostrarError("El jugador ingresado no es válido");
        }
    }

    /*--Si está logueado pide los datos del jugador para precargar el formulario con los mismos en la vista--*/
    function mostrarFormularioEditarJugador($id){
        if ($this->logueado == true){
            $paises = $this -> modelPaises -> getPaises();
            $jugador = $this -> model -> getJugador($id);
            if($jugador)
                $this -> view -> mostrarFormularioEditarJugador($jugador, $paises);
            else
                $this->mostrarError("No se encontró el jugador seleccionado.");
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    /*--Si está logueado pide a la vista renderizar el formulario para agregar un jugador--*/
    function mostrarFormularioAgregarJugador(){
        if($this->logueado == true){
            $paises = $this -> modelPaises -> getPaises();
            $this -> view -> mostrarFormularioAgregarJugador($paises);
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    } 

    /*--Si está logueado y se confirmó que se desea borra el jugador, se le pide al modelo borrarlo--*/
    function borrarJugador($id){
        if($this->logueado == true){
            $response = $_POST['borrarJugador'];
            if($response == 'si')
                $this-> model -> borrarJugador($id);
            header("Location:".BASE_URL."jugadores");
            die();
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }
   
    /*--Si está logueado obtiene los datos del formulario y si están bien pide al modelo que agregue al jugador--*/
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

    /*--Si está logueado obtiene los datos del formulario y si están bien pide al modelo actualizar a dicho jugador--*/
    function editarJugador($id){
        if ($this->logueado == true){
            $jugador = $this ->getDatosFormulario();
            if($jugador != null){
                $jugadorEditado = new stdClass();
                $jugadorEditado->nombre = $jugador['nombre'];
                $jugadorEditado->apellido = $jugador['apellido'];
                $jugadorEditado->descripcion = $jugador['descripcion'];
                $jugadorEditado->posicion = $jugador['posicion'];
                $jugadorEditado->foto = $jugador['foto'];
                $jugadorEditado->pais = $jugador['pais'];
                $this -> model ->editarJugador($jugadorEditado, $id);
                header('Location:'.BASE_URL.'jugador/ver/'.$id);
                die(); 
            }      
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

    /*--Obtiene los datos del formulario editar/agregar jugador--*/
    private function getDatosFormulario(){
        if (!empty($_POST)){
            if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['descripcion']) 
                && !empty($_POST['posicion']) && !empty($_POST['foto']) && !empty($_POST['pais'])){
                $jugador = ["nombre"=>$_POST['nombre'],
                            "apellido"=>$_POST['apellido'],
                            "descripcion"=>$_POST['descripcion'],
                            "posicion"=>$_POST['posicion'],
                            "foto"=>$_POST['foto'],
                            "pais"=>$_POST['pais']
                           ]; 
                return $jugador;
            }else{
                $this->mostrarError("Los campos no pueden estar vacíos");
            } 
        }else{
            $this->mostrarError("Verifique que el formulario se llenó correctamente");
            return null;
        }        
    }

    /*--Pide a la vista renderizar el template de consulta: ¿Seguro que desea borrar el jugador?--*/
    function mostrarMsgBorrar($id){
        if($this->logueado == true)
            $this ->view -> mostrarMsgBorrar($id);
        else
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
    }

    /*--Muestra el template de error con el mensaje adecuado--*/
    function mostrarError($msg){
        $this -> view -> mostrarError($msg);
    }
}