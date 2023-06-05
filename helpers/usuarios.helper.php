<?php

class usuariosHelper {
    public function __construct() {} //si no le agregamos nada, borrarlo

    public function login($usuario) { // INICIO LA SESSION Y LOGUEO AL USUARIO
        session_start();
        $_SESSION['id_usuario'] = $usuario->id;
        $_SESSION['usuario'] = $usuario->usuario;
        $_SESSION['loggueado']= true;
    
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
    }

    public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['loggueado'])) {
            header('Location: ' .BASE_URL. 'login');
            die();
        }       
    }

    public function getLoggedUsuario() {
        if (session_status() != PHP_SESSION_ACTIVE) //revisar constante int
            session_start();
        return $_SESSION['usuario'];
    }
}
