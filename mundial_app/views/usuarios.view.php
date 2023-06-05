<?php 
require_once './libs/smarty/Smarty.class.php';

Class usuariosView{
    public $smarty;

    public function __construct(){
        $this -> smarty = new Smarty();
    }

    function showLogin($msg){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('msg', $msg);
        $this -> smarty -> assign ('titulo', 'Login');
        $this -> smarty -> display ('./templates/login.tpl');
    }
}