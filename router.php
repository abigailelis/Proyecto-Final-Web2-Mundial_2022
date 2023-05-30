<?php
require_once './mundial_app/controllers/jugadores.controller.php';
require_once './mundial_app/controllers/paises.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])){
    $params = explode('/',$_GET['action']);
    $action = $params[0];
}else{
    $action = 'home';
}

switch($action){
    case 'home':
        $paisesController= new paisesController();
        $paisesController ->showHome();
        break;
    case 'jugadores':
        $jugadoresController= new jugadoresController();
        $jugadoresController -> showJugadores();
        break;
    case 'jugador':
        $jugadorController= new jugadoresController();
        $jugadorController ->showDataJugador($params[1]); 
        break;
    case 'paises':
        $paisesController= new paisesController();
        $paisesController ->showPaises(); 
        break;
    default:
        echo "error";
        break;
}