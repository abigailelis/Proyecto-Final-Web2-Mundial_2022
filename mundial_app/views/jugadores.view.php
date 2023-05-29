<?php
require_once './libs/smarty/Smarty.class.php';

Class jugadoresView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    function showJugadores($jugadores){//función para mostrar todos los jugadores
        $this -> smarty -> assign ('jugadores', $jugadores);
        $this -> smarty -> display('../../templates/jugadores.tpl');
    }
    //función para mostrar el detalle de un jugador($jugador->id)

    //función para mostrar el listado de jugadores de un solo pais($arreglo de jugadores)
}