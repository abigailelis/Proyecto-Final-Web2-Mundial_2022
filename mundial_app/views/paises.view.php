<?php
require_once './libs/smarty/Smarty.class.php';

Class paisesView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }
    //función para mostrar todos los paises
    function showPaises($paises){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign('titulo', 'Mundial 2022');
        $this -> smarty -> assign ('paises', $paises);
        $this -> smarty -> display('./templates/paises.tpl');
    }
    //Muestra la pagina Home
    function showHomePage(){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign('titulo', 'Mundial 2022');
        $this -> smarty -> display('./templates/home.tpl');
    }
}