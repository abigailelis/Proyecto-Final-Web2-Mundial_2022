<?php
require_once './mundial_app/models/usuarios.model.php';
require_once './mundial_app/views/usuarios.view.php';
require_once './helpers/usuarios.helper.php';


Class usuariosController{
    private $model;
    private $view;
    private $usuariosHelper;

    public function __construct(){
        $this -> model = new usuariosModel();
        $this -> view = new usuariosView();
        $this -> usuariosHelper = new usuariosHelper();
    }

    function logout(){
        $this->usuariosHelper->logout();
        header ('location: ' .BASE_URL.'login');
    }
    //muestra el formulario del login
    function showLogin(){
        $this -> view -> showLogin('');
    }

    function verifyUsuario() {
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        $usuariodb=$this->model -> getUsuario($usuario);
        if(!empty($usuario) && password_verify($password, $usuariodb -> password)){
            $this -> usuariosHelper -> login($usuario);
            echo 'usuario loggeado';
            header('Location: '.BASE_URL); 
        }
        else{

            $this-> view -> showLogin('úsuario/contraseña incorrecto');
        }
    }
}