<?php
require_once './libs/smarty/Smarty.class.php';

Class jugadoresView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    //función para mostrar el listado de jugadores de un solo pais($arreglo de jugadores)
    function showJugadoresByPais($jugadores, $paisSelected,$logueado){
        $titulo = 'Listado de jugadores de '.$paisSelected->nombre;
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('titulo', $titulo);
        $this -> smarty -> assign ('jugadores', $jugadores);
        $this -> smarty -> assign ('paisSelected', $paisSelected);
        $this -> smarty -> assign ('paises','null');
        $this -> smarty -> assign ('logueado', $logueado);
        $this -> smarty -> display('./templates/jugadores.tpl');
    }

    //función para mostrar todos los jugadores
    function showJugadores($jugadores, $paises, $logueado){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('titulo', 'Listado completo de jugadores');
        $this -> smarty -> assign ('jugadores', $jugadores);
        $this -> smarty -> assign ('paisSelected', 'null');
        $this -> smarty -> assign ('paises', $paises);
        $this -> smarty -> assign ('logueado', $logueado);
        $this -> smarty -> display('./templates/jugadores.tpl');
    }

    //función para mostrar el detalle de un jugador($jugador->id)
    function showJugador($jugador, $pais){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('titulo', $jugador->nombre);
        $this -> smarty -> assign ('jugador', $jugador);
        $this -> smarty -> assign ('pais', $pais);
        $this -> smarty -> display('./templates/jugador.tpl');
    }
    
    //renderiza el formulario agregar jugador
    function showFormularioAdd($paises){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('action','jugador/add');
        $this -> smarty -> assign ('titulo', 'Agregar jugador');
        $this -> smarty -> assign ('paises', $paises);
        $this -> smarty -> display('./templates/formularioJugador.tpl');
    }

    //renderiza el formulario editar con los datos del jugador seleccionado
    function showFormularioEdit($id, $nombre, $apellido, $descripcion, $posicion, $foto, $paises){
        $action = 'jugador/editar/'.$id;
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('action',$action);
        $this -> smarty -> assign ('titulo', 'Editar jugador');
        $this -> smarty -> assign ('nombre', $nombre);
        $this -> smarty -> assign ('apellido', $apellido);
        $this -> smarty -> assign ('descripcion', $descripcion);
        $this -> smarty -> assign ('posicion', $posicion);
        $this -> smarty -> assign ('foto', $foto);
        $this -> smarty -> assign ('paises', $paises);
        $this -> smarty -> display('./templates/formularioJugador.tpl');
    }

    //Muestra el template error
    function showError($msg){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('titulo', 'Not found');
        $this -> smarty -> assign ('msg', $msg);
        $this -> smarty -> display('./templates/error.tpl');
    }
}