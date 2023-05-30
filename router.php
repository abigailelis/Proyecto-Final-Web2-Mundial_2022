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
        switch ($params[1]){
            case (!empty($params[1])):
                $paisesController= new paisesController();
                $pais = $paisesController ->getPais($params[1]);
                $jugadoresController= new jugadoresController();
                $jugadoresController -> showJugadoresByPais($pais);
                break;
            default:
                $paisesController= new paisesController();
                $paises = $paisesController ->getPaises();
                $jugadoresController= new jugadoresController();
                $jugadoresController -> showJugadores($paises);
                break;
        }
        break;
    case 'jugador':
        $paisesController= new paisesController();
        $paises = $paisesController ->getPaises();
        switch ($params[1]){
            case 'editar':
                /*funcion editar con $params[2] que seria el id del jugador;
                *jugadores/editar/id precarga los datos en el formulario
                *el boton enviar del formulario es el que lo edita en la bbdd 
                *y luego hay que mostrarlo en la descripcion del jugador
                */
                break;
            case 'borrar':
                //funcion de borrar con $params[2];
            case 'add':
                //funcion agregar con $params[2];
                break;
            case 'ver':
                $jugadorController= new jugadoresController();
                $jugadorController ->showDataJugador($params[2], $paises);
                break;
            default:
                //hacer template de error;
                break;
        }
        break;
    case 'paises':
        $paisesController= new paisesController();
        $paisesController ->showPaises(); 
        break;
    default:
        echo "error";
        break;
}