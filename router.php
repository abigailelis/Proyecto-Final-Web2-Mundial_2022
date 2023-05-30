<?php
require_once './mundial_app/controllers/jugadores.controller.php';
require_once './mundial_app/controllers/paises.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
define('jugadores', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/jugadores');
define('paises', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/paises');
define('jugador', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/jugador');
define('login', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/login');
define('logout', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/logout');


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
            $paisesController= new paisesController();
            $paises = $paisesController ->getPaises();
            $jugadoresController= new jugadoresController();
            $jugadoresController -> showJugadores($paises);
        break;
    case 'jugador':
        $paisesController= new paisesController();
        $paises = $paisesController ->getPaises();
        switch ($params[1]){
            case 'editar':
                $jugadorController= new jugadoresController();
                $jugadorController ->showFormulario($params[1], $paises, $params[2]);
                if(!empty($params[3]) && $params[3] == 'ok'){ 
                        $jugadorController= new jugadoresController();
                        $jugadorController ->editarJugador($params[2]);
                }
                break;                
            case 'borrar':
                $jugadorController= new jugadoresController();
                $jugadorController ->deleteJugador($params[2]);
            case 'add':
                $jugadorController= new jugadoresController();
                $jugadorController ->showFormulario($params[1], $paises, null);
                if($params[2] == 'ok'){
                        $jugadorController= new jugadoresController();
                        $jugadorController ->addJugador();
                }
                break;
            
            case 'ver':
                if(($params[2]=="home")||($params[2]=="paises")||($params[2]=="jugadores")||($params[2]=="login")||($params[2]=="logout")){//tal vez hacer un arreglo que contenga los objetos del nav
                    header("Location:".BASE_URL.$params[2]); 
                }
                $jugadorController= new jugadoresController();
                $jugadorController ->showDataJugador($params[2], $paises);
                break;
            default:
                header("Location:".BASE_URL.$params[1]);//hacer template de error;
                break;
        }
        break;
    case 'paises': 
        if(!empty($params[1])){
            if(($params[1]=="home")||($params[1]=="paises")||($params[1]=="jugadores")||($params[1]=="login")||($params[1]=="logout")){//tal vez hacer un arreglo que contenga los objetos del nav
                header("Location:".BASE_URL.$params[1]); 
            }
            $paisesController= new paisesController();
            $pais = $paisesController ->getPais($params[1]);
            $jugadoresController= new jugadoresController();
            $jugadoresController -> showJugadoresByPais($pais);   
        }else{
            $paisesController= new paisesController();
            $paisesController ->showPaises();
        }
        break;
    default:
        echo "error";
        break;
}
