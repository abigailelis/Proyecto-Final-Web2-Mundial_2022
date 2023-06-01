<?php
require_once './mundial_app/models/usuarios.model.php';
require_once './mundial_app/views/usuarios.view.php';

Class usuariosController{
    private $model;
    private $view;

    public function __construct(){
        $this -> model = new usuariosModel();
        $this -> view = new usuariosView();
    }

    //muestra el formulario del login
    function showLogin(){
        $this -> view -> showLogin();
    }
}