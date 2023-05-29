<?php
require_once './libs/smarty/Smarty.class.php';

Class paisesView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }
}