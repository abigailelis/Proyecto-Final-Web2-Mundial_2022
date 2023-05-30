<?php
require_once './libs/smarty/Smarty.class.php';

Class paisesView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    function showPaises($paises){//función para mostrar todos los paises
        $this -> smarty -> assign ('paises', $paises);
        $this -> smarty -> display('./templates/paises.tpl');
    }
}