<?php
require_once './mundial_app/controllers/jugadores.controller.php';
require_once './mundial_app/controllers/paises.controller.php';
require_once './mundial_app/controllers/usuarios.controller.php';

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
        $paisesController ->mostrarInicio();
        break;
    case 'jugadores':
        if(!empty ($params[1])){
            $jugadoresController= new jugadoresController();
            $jugadoresController -> mostrarJugadoresPorPais($params[1]); //listado de items x categoria
        }else{
            $jugadoresController= new jugadoresController();
            $jugadoresController -> mostrarJugadores(); //listado de items
        }    
        break;//hacer template de error
    case 'formulario':
        switch ($params[1]){
            case 'editar':
                $jugadorController= new jugadoresController();
                $jugadorController ->mostrarFormularioEdit($params[2]);
                break;
            case 'agregar':
                $jugadorController= new jugadoresController();
                $jugadorController ->mostrarFormularioAgregarJugador();
                break;
            default:
                $jugadorController= new jugadoresController();
                $jugadorController ->mostrarError("Url no encontrada.");
                break;
            }
        break;
    case 'jugador':
        switch ($params[1]){ 
            case 'ver':
                $jugadorController= new jugadoresController();
                $jugadorController ->verMasJugador($params[2]);  //detalle de item
                break;          
            case 'borrar':
                $jugadorController= new jugadoresController();
                $jugadorController ->borrarJugador($params[2]);
                break;
            case 'agregar':
                $jugadorController= new jugadoresController();
                $jugadorController ->agregarJugador();
                break;
            case 'editar':
                $jugadorController= new jugadoresController();
                $jugadorController ->editarJugador($params[2]);
                break;
            default:
                $jugadorController= new jugadoresController();
                $jugadorController ->mostrarError("Url no encontrada.");
                break;
        }
        break;
    case 'paises': 
        switch ($params[1]){
            case 'msgBorrar':
                $paisesController= new paisesController();
                $paisesController ->mostrarMsgBorrar($params[2]);
                break;
            case 'borrar':
                $paisesController= new paisesController();
                $paisesController ->borrarPais($params[2]);
                break;
            case 'editar':
                $paisesController= new paisesController();
                $paisesController ->editarPais($params[2]);
                break;
            case 'agregar':
                $paisesController= new paisesController();
                $paisesController ->agregarPais();
                break;
            case 'ver':
                $paisesController= new paisesController();
                $paisesController ->mostrarPaises(); //listado de categorias
                break;
            default:
                $paisesController= new paisesController();
                $paisesController ->mostrarError("Url no encontrada.");
                break;
        }
        break;
    case 'formularioPais':
        switch ($params[1]){
            case 'agregar':
                $paisesController= new paisesController();
                $paisesController ->mostrarFormularioAgregarPais();
                break;
            case 'editar':
                $paisesController= new paisesController();
                $paisesController ->mostrarFormularioEditarPais($params[2]);
                break;
            default:
                $paisesController= new paisesController();
                $paisesController ->mostrarPaises();
             break;
        }
        break;
    case 'login':
        $usuariosController = new usuariosController();
        $usuariosController ->mostrarLogin();
        break;
    case 'verificar':
        $usuariosController = new usuariosController();
        $usuariosController ->verificarUsuario();
        break;
    case 'logout':
        $usuariosController = new usuariosController();
        $usuariosController ->logout();
        break;
    default:
        $paisesController= new paisesController();
        $paisesController ->mostrarError('Url no encontrada');
        break;
}
