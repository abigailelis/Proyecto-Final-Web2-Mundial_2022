<?php

Class usuariosHelper {

    /*--Verifica que no esté iniciada ninguna sesión previamente sino la inicia--*/
    public function startSession(){
        if (session_status()==PHP_SESSION_NONE)
            session_start();
    }

    /*Si verificó que el usuario existe y la contraseña es correcta 
    inicia la sesión y setea el usuario en $_SESSION*/
    public function login($usuario) {
        $this->startSession();
        $_SESSION['usuario'] = $usuario;
    }

    /*--Inicia la sesión, borra los datos seteados, destruye la sesión por completo--*/
    public function logout() {
        $this->startSession();
        session_unset();
        session_destroy();
    }

    /*--Obtiene el usuario para mostrar en el header--*/
    public function obtenerUsuario(){
        $this->startSession();
        if(isset($_SESSION['usuario']))
            return $_SESSION['usuario'];
    }

    public function checkLoggedIn() {
        $this->startSession();
        if (isset($_SESSION['usuario']))
            return true;
        else
            return false;  
    }
}
