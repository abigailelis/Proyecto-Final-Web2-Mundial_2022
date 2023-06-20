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
        $this->logueado = $this->usuariosHelper->verificarLogin();
        $this->usuario = $this->usuariosHelper->obtenerUsuario();
        $this->modelPaises = new paisesModel();
        $this->model = new jugadoresModel();       
        $this->view = new jugadoresView($this->logueado, $this->usuario);
    }

    /*--Pide los datos de todos los jugadores y los paises para renderizarlos en la vista (listado de ítems)--*/
    function mostrarJugadores(){
        $paises = $this-> modelPaises -> obtenerPaises();
        $jugadores = $this-> model -> obtenerJugadores();
        $this-> view -> mostrarJugadores($jugadores, $paises);
    }

    /*--Pide todos los jugadores del país seleccionado para renderizarlos en la vista (listado de ítems por categoría)--*/
    function mostrarJugadoresPorPais($paisSeleccionado){ 
        $pais = $this -> modelPaises ->obtenerPaisPorNombre($paisSeleccionado);
        if($pais){
            $jugadores = $this -> model -> obtenerJugadoresPorPais($pais);
            $this -> view -> mostrarJugadoresPorPais($jugadores, $pais);
        }else{
            $this->mostrarError("Url no encontrada");
        }
    }    

    /*--Pide los datos del jugador seleccionado para renderizarlo en la vista (detalle de ítem)--*/
    function verMasJugador($id){ 
        $jugador = $this -> model -> obtenerJugador($id);
        if($jugador){
            $pais = $this -> modelPaises -> obtenerPais($jugador->id_pais);
            $this -> view -> mostrarJugador($jugador, $pais);  
        }else{
            $this->mostrarError("El jugador ingresado no es válido");
        }
    }

    /*--Si está logueado pide los datos del jugador para precargar el formulario con los mismos en la vista--*/
    function mostrarFormularioEditarJugador($id){
        if ($this->logueado == true){
            $paises = $this -> modelPaises -> obtenerPaises();
            $jugador = $this -> model -> obtenerJugador($id);
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
            $paises = $this -> modelPaises -> obtenerPaises();
            $this -> view -> mostrarFormularioAgregarJugador($paises);
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    } 

    /*--Si está logueado y se confirmó que se desea borra el jugador, se le pide al modelo borrarlo--*/
    function borrarJugador($id){
        if($this->logueado == true){
            if(!empty($_POST['borrarJugador'])){
                $response = $_POST['borrarJugador'];
                if($response == 'si')
                    $eliminado = $this-> model -> borrarJugador($id);
                    if ($eliminado != 0)
                        header("Location:".BASE_URL."jugadores");
                    else    
                        $this -> mostrarError("El jugador no pudo ser eliminado con éxito.");
            }
            else 
                $this -> mostrarError("Por favor, primero verifique si desea borrar el jugador");
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }
   
    /*--Si está logueado obtiene los datos del formulario y si están bien pide al modelo que agregue al jugador--*/
    function agregarJugador(){
        if ($this->logueado == true){
            $jugadorFormulario = $this -> obtenerDatosFormulario();
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
            $jugador = $this ->obtenerDatosFormulario();
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
            }      
        }else{
            $this->mostrarError("Acceso denegado. Por favor inicia sesión para realizar esta acción.");
        }
    }

<<<<<<< HEAD
    /*--Obtiene los datos del formulario editar/agregar jugador--*/
    private function obtenerDatosFormulario(){
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
            }
            else
                $this->mostrarError("Los campos no pueden estar vacíos");
=======
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
>>>>>>> 90f97ff1ed1fef949ac6ab028c24b778d2636be5
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