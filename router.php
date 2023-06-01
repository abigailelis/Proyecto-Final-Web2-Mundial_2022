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
        if(!empty ($params[1])){
            $jugadoresController= new jugadoresController();
            $jugadoresController -> showJugadoresByPais($params[1]); //listado de items x categoria
        }else{
            $jugadoresController= new jugadoresController();
            $jugadoresController -> showJugadores(); //listado de items
        }    
        break;
    case 'formulario':
        switch ($params[1]){
            case 'editar':
                $jugadorController= new jugadoresController();
                $jugadorController ->showFormularioEdit($params[2]);
                break;
            case 'add':
                $jugadorController= new jugadoresController();
                $jugadorController ->showFormularioAdd();
                break;
            default:
                //hacer template de error;
                break;
            }
        break;
    case 'jugador':
        switch ($params[1]){ 
            case 'ver':
                $jugadorController= new jugadoresController();
                $jugadorController ->showDataJugador($params[2]);  //detalle de item
                break;          
            case 'borrar':
                $jugadorController= new jugadoresController();
                $jugadorController ->deleteJugador($params[2]);
                break;
            case 'add':
                $jugadorController= new jugadoresController();
                $jugadorController ->addJugador();
                break;
            case 'editar':
                $jugadorController= new jugadoresController();
                $jugadorController ->editarJugador($params[2]);
                break;
            default:
                //hacer template de error;
                break;
        }
        break;
    case 'paises': 
        $paisesController= new paisesController();
        $paisesController ->showPaises(); //listado de categorias
        break;
    default:
        echo "error";
        break;
}
