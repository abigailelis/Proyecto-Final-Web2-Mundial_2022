<?php 
require_once './libs/smarty/Smarty.class.php';

Class usuariosView{
    public $smarty;

    public function __construct($logueado){
        $this-> smarty = new Smarty();
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        if($logueado != false){
            $this-> smarty -> assign('logueado', $logueado['loggueado']);
            $this-> smarty -> assign('usuario', $logueado['usuario']);  
        }else{
            $this-> smarty -> assign('logueado', $logueado);
        }
    }

    function mostrarLogin($msg){
        $this -> smarty -> assign ('msg', $msg);
        $this -> smarty -> assign ('titulo', 'Login');
        $this -> smarty -> display ('./templates/login.tpl');
    }

}