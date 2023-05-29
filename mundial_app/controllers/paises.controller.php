<?php

require_once './mundial_app/models/jugadores.model.php';
require_once './mundial_app/views/jugadores.view.php';

Class paisesController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new paisesModel();
        $this->view = new paisesView();
    }

    public function showPaises(){ //función para obtener todos los paises
        $paises= $this-> model -> getPaises();
        $this-> view -> showPaises($paises);
    }

}