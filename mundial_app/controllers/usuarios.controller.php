<?php
require_once './mundial_app/models/usuarios.model.php';
require_once './mundial_app/views/usuarios.view.php';
require_once './helpers/usuarios.helper.php';


Class usuariosController{
    private $model;
    private $view;
    private $usuariosHelper;
    private $logueado;
    private $usuario;

    public function __construct(){
        $this-> usuariosHelper = new usuariosHelper();
        $this-> logueado = $this->usuariosHelper->verificarLogin();
        $this-> usuario = $this->usuariosHelper->obtenerUsuario();
        $this-> model = new usuariosModel();
        $this-> view = new usuariosView($this->logueado, $this->usuario);
    }

    /*--muestra el formulario del login--*/
    function mostrarLogin(){
        if($this->logueado != true)
            $this -> view -> mostrarLogin('');
        else
            $this -> view -> mostrarLogin('Ya se encuentra logueado.');
    }

    /*--Cierra la sesión del usuario--*/
    function logout(){
        $this->usuariosHelper->logout();
        header ('location: ' .BASE_URL.'login');
    }
    
   /*
   *Verifica que el usuario exista en la base de datos, si es asi compara 
   *la contraseña ingresada por formulario con el hash de la BBDD,
   *sino, vuelve al login con el mensaje usuario/contraseña incorrectos
   */
    function verificarUsuario() {
        if(!empty($_POST)){
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $usuario_db = $this -> model -> getUsuario($usuario);
            if(!empty($usuario_db) && password_verify($password, $usuario_db->password)){
                $this -> usuariosHelper -> login($usuario);
                header('Location: '.BASE_URL);
                die();
            }
            else{
                $this-> view -> mostrarLogin('Usuario o contraseña incorrectos');
            }
        }else{
            $this-> view -> mostrarLogin('Verifique que los campos usuario y password no se encuentren vacíos y vuelva a intentarlo.');
        }
    }
    
    /*--Muestra el template error--*/
    function mostrarError($msg){
        $this -> view -> mostrarError($msg);
    }
}