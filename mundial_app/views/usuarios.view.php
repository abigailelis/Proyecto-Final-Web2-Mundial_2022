<?php 
require_once './libs/smarty/Smarty.class.php';

Class usuariosView{
    public $smarty;

    public function __construct($logueado){
        $this -> smarty = new Smarty();
        $this-> smarty -> assign('logueado', $logueado['loggueado']);
        if($logueado['loggueado'] == true){
            $this-> smarty -> assign('usuario', $logueado['usuario']);
        }   
    }

    function showLogin($msg){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('msg', $msg);
        $this -> smarty -> assign ('titulo', 'Login');
        $this -> smarty -> display ('./templates/login.tpl');
    }

    function botonDisable(){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> display ('botonLoginDeshabilitado', $_SESSION['botonLoginDeshabilitado']);
        $this -> smarty -> assign ('titulo', 'header');
        $this -> smarty -> display ('./templates/header.tpl');
    }
}