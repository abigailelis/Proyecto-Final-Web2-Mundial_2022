<?php

Class usuariosHelper {
    /*Si verificó que el usuario existe y la contraseña es correcta 
    inicia la sesión y setea los datos en $_SESSION*/
    public function login($usuario) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['loggueado'] = true;
    }

    //Inicia la sesión, borra los datos seteados, destruye la sesión por completo.
    public function logout() {
        session_start();
        session_unset();
        session_destroy();
    }

    public function checkLoggedIn() {
        session_start();
        if (isset($_SESSION['loggueado']) && $_SESSION['loggueado'] == true){
            return $_SESSION;
        }else{
            $_SESSION['loggueado'] = false;
            $_SESSION['usuario'] = '';
            return $_SESSION;
        }     
    }
}
