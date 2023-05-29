<?php
require_once './libs/smarty/Smarty.class.php';

Class jugadoresView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    function showJugadores($jugadores){//función para mostrar todos los jugadores
        $this -> smarty -> assign ('jugadores', $jugadores);
        $this -> smarty -> display('./templates/jugadores.tpl');
    }
      
    function showJugador($jugador){//función para mostrar el detalle de un jugador($jugador->id)
        $this -> smarty -> assign ('jugador', $jugador);
        $this -> smarty -> display('./templates/jugador.tpl');
    }
    //función para mostrar el listado de jugadores de un solo pais($arreglo de jugadores)
}