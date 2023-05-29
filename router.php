<?php
require_once('mundial_app/controllers/jugadores.controller.php');
require_once('mundial_app/controllers/paises.controller.php');


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])){
    $param = explode('/',$_GET['action']);
    $action = $param[0];
}

else{
    $action = 'home';
}



switch($action){
    case 'home':
        //crear funcion home
    break;
    case 'jugadores':
        $jugadoresControler= new jugadoresController();
        $jugadoresController -> showJugadores();
    break;
        
        
}