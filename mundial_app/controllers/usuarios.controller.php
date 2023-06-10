<?php
require_once './mundial_app/models/usuarios.model.php';
require_once './mundial_app/views/usuarios.view.php';
require_once './helpers/usuarios.helper.php';


Class usuariosController{
    private $model;
    private $view;
    private $usuariosHelper;

    public function __construct(){
        $this -> usuariosHelper = new usuariosHelper();
        $this -> model = new usuariosModel();
        $this -> view = new usuariosView($this->usuariosHelper->checkLoggedIn());
    }
    //muestra el formulario del login
    function showLogin(){
        $this -> view -> showLogin('');
    }

    //Cierra la sesión del usuario
    function logout(){
        $this->usuariosHelper->logout();
        header ('location: ' .BASE_URL.'login');
    }
    
   /*
   *Verifica que el usuario exista en la base de datos, si es asi compara 
   *la contraseña ingresada por formulario con el hash de la BBDD,
   *sino, vuelve al login con el mensaje usuario/contraseña incorrectos
   */
    function verifyUsuario() {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $usuario_db = $this -> model -> getUsuario($usuario);
        if(!empty($usuario_db) && password_verify($password, $usuario_db->password)){
            $this -> usuariosHelper -> login($usuario);
            header('Location: '.BASE_URL.'paises/ver');
            die();
        }
        else{
            $this-> view -> showLogin('Usuario o contraseña incorrectos');
        }
    }
}