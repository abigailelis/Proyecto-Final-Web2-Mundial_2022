<?php

require_once './mundial_app/models/jugadores.model.php';
require_once './mundial_app/views/jugadores.view.php';

Class jugadoresController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new jugadoresModel();
        $this->view = new jugadoresView();
    }

    function showJugadores($paises){//función para obtener todos los jugadores
        $jugadores= $this-> model -> getJugadores();
        $this-> view -> showJugadores($jugadores, $paises);
        //$paises = $this -> model -> getPais() por si requerimos cambiar el idPais por el nombre
    }

    function showDataJugador($id, $paises){//función para obtener detalle de un solo jugador 
        $jugador= $this -> model -> getJugador($id);//necesita un id del jugador para traerlo
        $this -> view -> showJugador($jugador, $paises);
    }
    
    function showJugadoresByPais($pais){ //función para obtener todos los jugadores de un solo pais
        $jugadores= $this -> model -> getJugadoresByPais($pais);//pais es el objeto pais de la bbdd
        $this -> view -> showJugadoresByPais($jugadores, $pais);
    }
    function deleteJugador($id){
        $this-> model-> deleteJugador($id);
        header("Location:".jugadores);
    }
}