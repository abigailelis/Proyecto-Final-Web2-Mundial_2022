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

/*--Se instancian los controladores--*/
$paisesController= new paisesController();
$jugadoresController= new jugadoresController();
$usuariosController = new usuariosController();

/*--Verifica al principio que no existan parámetros de más--*/
$cantidadMaxParametros = 3;
if(isset($params[$cantidadMaxParametros])){
    $jugadoresController ->mostrarError("Url no encontrada.");
}else{
    switch($action){
        case 'home':
            if(!isset($params[1]))
                $paisesController ->mostrarInicio();
            else
                $paisesController->mostrarError('Url no encontrada.');
        break;
        case 'jugadores':
            if(isset($params[2]))
                $jugadoresController ->mostrarError("Url no encontrada.");
            else if(!empty ($params[1]) && !isset($params[2]))
                $jugadoresController -> mostrarJugadoresPorPais($params[1]); /*--listado de items por categoria--*/
            else
                $jugadoresController -> mostrarJugadores(); /*--listado de items--*/
        break;
        case 'jugador':
            if(isset($params[1])){
                if($params[1] == 'ver' && !empty($params[2]))
                    $jugadoresController ->verMasJugador($params[2]);  //detalle de item
                else if($params[1] == 'borrar' && !empty($params[2]))
                    $jugadoresController ->borrarJugador($params[2]);
                else if($params[1] == 'agregar' && !isset($params[2]))    
                    $jugadoresController ->agregarJugador(); 
                else if($params[1] == 'editar' && !empty($params[2]))
                    $jugadoresController ->editarJugador($params[2]);
                else if($params[1] == 'msgBorrar' && !empty($params[2]))
                    $jugadoresController ->mostrarMsgBorrar($params[2]);
                else
                    $jugadoresController ->mostrarError("Url no encontrada.");
            }
            else
                $jugadoresController ->mostrarError("Url no encontrada.");
        break;
        case 'paises':
            if(isset($params[1])){ 
                if($params[1] == 'borrar' && !empty($params[2]))
                    $paisesController ->borrarPais($params[2]);
                else if($params[1] == 'editar' && !empty($params[2]))
                    $paisesController ->editarPais($params[2]);
                else if($params[1] == 'agregar' && !isset($params[2]))
                    $paisesController ->agregarPais();
                else if($params[1] == 'msgBorrar' && !empty($params[2]))
                    $paisesController ->mostrarMsgBorrar($params[2]);
                else
                    $paisesController ->mostrarError("Url no encontrada.");
            }
            else
                $paisesController ->mostrarPaises(); //listado de categorias
        break;
        case 'formularioPais':
            if(isset($params[1])){
                if($params[1] == 'agregar' && !isset($params[2]))
                    $paisesController ->mostrarFormularioAgregarPais();
                else if ($params[1] == 'editar' && !empty($params[2]))
                    $paisesController ->mostrarFormularioEditarPais($params[2]);
                else
                    $paisesController ->mostrarError("Url no encontrada.");
            }
            else
                $paisesController ->mostrarError("Url no encontrada.");
        break;
        case 'formularioJugador':
            if(isset ($params[1])){ 
                if ($params[1] == 'editar' && !empty($params[2]))
                    $jugadoresController ->mostrarFormularioEditarJugador($params[2]);
                else if ($params[1] == 'agregar' && !isset($params[2]))
                    $jugadoresController ->mostrarFormularioAgregarJugador();
                else
                    $jugadoresController ->mostrarError("Url no encontrada.");
            }
            else
                $jugadoresController ->mostrarError("Url no encontrada.");
        break;
        case 'login':
            if(!isset($params[1]))
                $usuariosController ->mostrarLogin();
            else
                $usuariosController ->mostrarError("Url no encontrada.");
        break;
        case 'verificar':
            if(!isset($params[1]))
                $usuariosController ->verificarUsuario();
            else
                $usuariosController ->mostrarError("Url no encontrada.");
        break;
        case 'logout':
            if(!isset($params[1]))
                $usuariosController ->logout();
            else
                $usuariosController ->mostrarError("Url no encontrada.");
        break;
        default:
            $paisesController ->mostrarError('Url no encontrada');
        break;
    }
}


