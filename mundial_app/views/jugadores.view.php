<?php
require_once './libs/smarty/Smarty.class.php';

Class jugadoresView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    function showJugadores($jugadores, $paises){//función para mostrar todos los jugadores
        $this -> smarty -> assign ('titulo', 'Jugadores');
        $this -> smarty -> assign ('jugadores', $jugadores);
        $this -> smarty -> assign ('paises', $paises);
        $this -> smarty -> display('./templates/jugadores.tpl');
    }
      
    function showJugador($jugador, $paises){//función para mostrar el detalle de un jugador($jugador->id)
        $this -> smarty -> assign ('titulo', 'Descripción del jugador');
        $this -> smarty -> assign ('jugador', $jugador);
        $this -> smarty -> assign ('paises', $paises);
        $this -> smarty -> display('./templates/jugador.tpl');
    }
    //función para mostrar el listado de jugadores de un solo pais($arreglo de jugadores)
    function showJugadoresByPais($jugadores, $pais){
        $this -> smarty -> assign ('titulo', $pais->nombre);
        $this -> smarty -> assign ('jugadores', $jugadores);
        $this -> smarty -> assign ('pais', $pais);
        $this -> smarty -> display('./templates/jugadoresByPais.tpl');
    }
    function showFormulario($action, $paises, $nombre, $apellido, $descripcion, $foto, $posicion, $id){
        switch($action){
            case 'add':
                $this -> smarty -> assign ('titulo', 'Agregar jugador');
                break;
            case 'editar':
                $this -> smarty -> assign ('titulo', 'Editar jugador');
                $this -> smarty -> assign ('nombre', $nombre);
                $this -> smarty -> assign ('apellido', $apellido);
                $this -> smarty -> assign ('posicion', $posicion);
                $this -> smarty -> assign ('foto', $foto);
                $this -> smarty -> assign ('descripcion', $descripcion);
                $this -> smarty -> assign ('id',$id);
                break;
                
        }
        $this -> smarty -> assign ('action', $action);
        $this -> smarty -> assign ('status','ok');
        $this -> smarty -> assign ('paises', $paises);
        $this -> smarty -> display('./templates/formulario.tpl');
        
    }
}