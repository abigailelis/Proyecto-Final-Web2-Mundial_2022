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

<<<<<<< HEAD
    /*--Obtiene el usuario para mostrar en el header--*/
    public function obtenerUsuario(){
        $this->startSession();
        if(isset($_SESSION['usuario']))
            return $_SESSION['usuario'];
    }

    public function verificarLogin() {
        $this->startSession();
        if (isset($_SESSION['usuario']))
            return true;
        else
            return false;  
=======
    public function checkLoggedIn() {
        session_start();
        if (isset($_SESSION['loggueado']) && $_SESSION['loggueado'] == true){
            return $_SESSION;
        }else{
            $_SESSION['loggueado'] = false;
            $_SESSION['usuario'] = '';
            return $_SESSION;
        }     
>>>>>>> 90f97ff1ed1fef949ac6ab028c24b778d2636be5
    }
}
