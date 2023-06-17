<?php 
require_once './libs/smarty/Smarty.class.php';

Class usuariosView{
    public $smarty;

    public function __construct($logueado, $usuario){
        $this-> smarty = new Smarty();
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this-> smarty -> assign('logueado', $logueado);
        $this-> smarty -> assign('usuario', $usuario);
    }

    function mostrarLogin($msg){
        $this -> smarty -> assign ('msg', $msg);
        $this -> smarty -> assign ('titulo', 'Login');
        $this -> smarty -> display ('./templates/login.tpl');
    }
    
    //Muestra el template error
    function mostrarError($msg){
        $this -> smarty -> assign ('titulo', 'Not found');
        $this -> smarty -> assign ('msg', $msg);
        $this -> smarty -> display('./templates/error.tpl');
    }

}