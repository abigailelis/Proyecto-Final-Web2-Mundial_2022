<?php
require_once './mundial_app/controllers/jugadores.controller.php';
require_once './mundial_app/controllers/paises.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])){
    $params = explode('/',$_GET['action']);
    $action = $params[0];
}

else{
    $action = 'home';
}



switch($action){
    case 'home':
        //crear funcion home
    break;
    case 'jugadores':
        $jugadoresController= new jugadoresController();
        $jugadoresController -> showJugadores();
    break;
    case 'jugador':
        $jugadorController= new jugadoresController();
        $jugadorController ->showDataJugador($params[1]); 
    break;
<<<<<<< HEAD
    
=======
    case 'jugador':
        $jugadorController= new jugadoresController();
        $jugadorController ->showDataJugador($params[1]); 
    break;
            

        
>>>>>>> adca2fb44674f74a741ad3d101568b3350f72c0e
        
}