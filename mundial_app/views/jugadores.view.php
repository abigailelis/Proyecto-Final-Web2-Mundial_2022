<?php
require_once './libs/smarty/Smarty.class.php';

Class jugadoresView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }
}