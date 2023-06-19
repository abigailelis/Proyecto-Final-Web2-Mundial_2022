<?php
require_once './libs/smarty/Smarty.class.php';

Class jugadoresView{
    private $smarty;
    
    public function __construct($logueado, $usuario = null){
        $this-> smarty = new Smarty();
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this-> smarty -> assign('logueado', $logueado);
        $this-> smarty -> assign('usuario', $usuario);
    }

    /*--Renderiza los jugadores de todos los paises (listado de ítems)--*/
    function mostrarJugadores($jugadores, $paises){
        $this -> smarty -> assign ('titulo', 'Listado completo de jugadores');
        $this -> smarty -> assign ('jugadores', $jugadores);
        $this -> smarty -> assign ('paises', $paises);
        $this -> smarty -> display('./templates/jugadores.tpl');
    }
    
    /*--Renderiza el listado de jugadores del país seleccionado (ítems por categoría)--*/
    function mostrarJugadoresPorPais($jugadores, $paisSeleccionado){
        $titulo = 'Listado de jugadores de '.$paisSeleccionado->nombre;
        $this -> smarty -> assign ('titulo', $titulo);
        $this -> smarty -> assign ('jugadores', $jugadores);
        $this -> smarty -> assign ('paisSeleccionado', $paisSeleccionado);
        $this -> smarty -> assign ('paises','null');
        $this -> smarty -> display('./templates/jugadores.tpl');
    }
  
    /*--Renderiza el detalle de un jugador (detalle de ítem)--*/
    function mostrarJugador($jugador, $pais){
        $this -> smarty -> assign ('titulo', $jugador->nombre);
        $this -> smarty -> assign ('jugador', $jugador);
        $this -> smarty -> assign ('pais', $pais);
        $this -> smarty -> display('./templates/jugador.tpl');
    }
    
    /*--Renderiza el formulario de agregar jugador--*/
    function mostrarFormularioAgregarJugador($paises){
        $this -> smarty -> assign ('action','jugador/agregar');
        $this -> smarty -> assign ('titulo', 'Agregar jugador');
        $this -> smarty -> assign ('paises', $paises);
        $this -> smarty -> display('./templates/formularioJugador.tpl');
    }

    /*--Renderiza el formulario de editar jugador con los datos precargados--*/
    function mostrarFormularioEditarJugador($jugador, $paises){
        $action = 'jugador/editar/'.$jugador->id;
        $this -> smarty -> assign ('action',$action);
        $this -> smarty -> assign ('titulo', 'Editar jugador');
        $this -> smarty -> assign ('jugador', $jugador);
        $this -> smarty -> assign ('paises',$paises);
        $this -> smarty -> display('./templates/formularioJugador.tpl');
    }

    /*--Renderiza template de consulta: ¿Seguro que deseas borrar el jugador--*/
    function mostrarMsgBorrar($id){
        $action = 'jugador/borrar/'.$id;
        $this -> smarty -> assign ('titulo', 'Borrar jugador');
        $this -> smarty -> assign ('action', $action);
        $this -> smarty -> assign ('elemento', 'Jugador');
        $this -> smarty -> display('./templates/msgBorrar.tpl');
    }

    /*--Muestra el template de error--*/
    function mostrarError($msg){
        $this -> smarty -> assign ('titulo', 'Error');
        $this -> smarty -> assign ('msg', $msg);
        $this -> smarty -> display('./templates/error.tpl');
    }
}