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

//Instanciamos los controladores
$paisesController= new paisesController();
$jugadoresController= new jugadoresController();
$usuariosController = new usuariosController();

switch($action){
    case 'home':
        $paisesController ->mostrarInicio();
        break;
    case 'jugadores':
        if(!empty ($params[1]) && !isset($params[2])){ //verifica que no vengan más parametros después del país
            $jugadoresController -> mostrarJugadoresPorPais($params[1]); //listado de items x categoria
        }else if (isset($params[2])){
            $jugadoresController ->mostrarError("Url no encontrada.");
        }else{
            $jugadoresController -> mostrarJugadores(); //listado de items
        }   
        break;
    case 'formularioJugador':
        if(!empty ($params[1]) && !isset($params[3])){ 
            switch ($params[1]){
                case 'editar':
                    if (isset($params[2]))
                        $jugadoresController ->mostrarFormularioEditarJugador($params[2]);
                    else
                        $jugadoresController ->mostrarError("Jugador no encontrado.");
                    break;
                case 'agregar':
                    if(!isset($params[2]))
                        $jugadoresController ->mostrarFormularioAgregarJugador();
                    else
                        $jugadoresController ->mostrarError("Url no encontrada.");
                    break;
                default:
                    $jugadoresController ->mostrarError("Url no encontrada.");
                    break;
            }
        }
        else
            $jugadoresController ->mostrarError("Url no encontrada.");
        break;
    case 'jugador':
        if(!empty($params[1]) && !isset($params[3]) ){
            switch ($params[1]){ 
                case 'ver':
                    if(!empty($params[2])){
                    $jugadoresController ->verMasJugador($params[2]);  //detalle de item
                    }
                    else
                        $jugadoresController ->mostrarError("Jugador no encontrado.");
                    break; 
                case 'msgBorrar':
                    $jugadoresController ->mostrarMsgBorrar($params[2]);
                    break;         
                case 'borrar':
                    if(!empty($params[2])){
                        $jugadoresController ->borrarJugador($params[2]);
                    }
                    else
                        $jugadoresController ->mostrarError("Jugador no encontrado.");
                    break;
                case 'agregar':
                    if(!isset($params[2])){
                        $jugadoresController ->agregarJugador();
                    }
                    else
                        $jugadoresController ->mostrarError("Url no encontrada.");    
                    break;
                case 'editar':
                    if(!empty($params[2])){
                        $jugadoresController ->editarJugador($params[2]);
                    }
                    else
                        $jugadoresController ->mostrarError("Jugador no encontrado.");
                    break;
                default:
                    $jugadoresController ->mostrarError("Url no encontrada.");
                    break;
            }
        }
        else
            $jugadoresController ->mostrarError("Url no encontrada.");
        break;
    case 'paises': 
        switch ($params[1]){
            case 'msgBorrar':
                $paisesController ->mostrarMsgBorrar($params[2]);
                break;
            case 'borrar':
                $paisesController ->borrarPais($params[2]);
                break;
            case 'editar':
                $paisesController ->editarPais($params[2]);
                break;
            case 'agregar':
                $paisesController ->agregarPais();
                break;
            case 'ver':
                $paisesController ->mostrarPaises(); //listado de categorias
                break;
            default:
                $paisesController ->mostrarError("Url no encontrada.");
                break;
        }
        break;
    case 'formularioPais':
        switch ($params[1]){
            case 'agregar':
                $paisesController ->mostrarFormularioAgregarPais();
                break;
            case 'editar':
                $paisesController ->mostrarFormularioEditarPais($params[2]);
                break;
            default:
                $paisesController ->mostrarPaises();
             break;
        }
        break;
    case 'login':
        $usuariosController ->mostrarLogin();
        break;
    case 'verificar':
        $usuariosController ->verificarUsuario();
        break;
    case 'logout':
        $usuariosController ->logout();
        break;
    default:
        $paisesController ->mostrarError('Url no encontrada');
        break;
}
