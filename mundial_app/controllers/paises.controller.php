<?php

require_once './mundial_app/models/paises.model.php';
require_once './mundial_app/views/paises.view.php';

Class paisesController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new paisesModel();
        $this->view = new paisesView();
    }

    function showPaises(){ //función para obtener todos los paises
        $paises= $this-> model -> getPaises();
        $this-> view -> showPaises($paises);
    }

    function showHome(){
        $this->view->showHomePage();
    }
    function getPaises(){
        $paises= $this-> model -> getPaises();
        return $paises;
    }
    function getPais($nombre_pais){
        $pais= $this-> model -> getPais($nombre_pais);
        return $pais;
    }
}