<?php

Class usuariosHelper {
    public function startSession(){
        if (session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }
    /*Si verificó que el usuario existe y la contraseña es correcta 
    inicia la sesión y setea los datos en $_SESSION*/
    public function login($usuario) {
        $this->startSession();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['loggueado'] = true;
    }

    //Inicia la sesión, borra los datos seteados, destruye la sesión por completo.
    public function logout() {
        $this->startSession();
        session_unset();
        session_destroy();
    }

    public function checkLoggedIn() {
        $this->startSession();
        if (isset($_SESSION['loggueado']) && $_SESSION['loggueado'] == true){
            return $_SESSION;
        }else{
            return false;
        }   
    }
}
