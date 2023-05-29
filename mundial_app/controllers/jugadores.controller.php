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

    function showJugadores(){//función para obtener todos los jugadores
        $jugadores= $this-> model -> getJugadores();
        $this-> view -> showJugadores($jugadores);
    }

    function showDataJugador($id){//función para obtener detalle de un solo jugador 
        $jugador= $this -> model -> getJugador($id);//necesita un id del jugador para traerlo
        $this -> view -> showJugador($jugador);
    }
    
    function showJugadoresByPais($id){ //función para obtener todos los jugadores de un solo pais
    $jugadores= $this -> model -> getJugadoresByPais($id);//el id debe ser del pais al que pertenecen
    $this -> view -> showJugadoresByID($jugadores);
    }
}