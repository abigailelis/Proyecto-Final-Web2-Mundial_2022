<?php
//agregar otro modelo de paises
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
        die();
    }
    function showFormulario($action, $paises, $id){
        switch($action){
            case 'editar':
                $datosJugador = $this->model->getJugador($id);
                $nombre = $datosJugador->nombre;
                $apellido = $datosJugador->apellido;
                $descripcion = $datosJugador->descripcion;
                $posicion = $datosJugador->posicion;
                $foto = $datosJugador->foto;
                $this->view->showFormulario($action, $paises,$nombre, $apellido, $descripcion, $foto, $posicion, $id);      
                break;
            case 'add':
                $this->view->showFormulario($action, $paises, null, null, null, null, null, null);
                break;
        }
    }
    function getDatosFormulario(){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $posicion = $_POST['posicion'];
            $descripcion = $_POST['descripcion'];
            $foto = $_POST['foto'];
            $pais = $_POST['pais'];
        if(!empty($nombre) && !empty($apellido) && !empty($posicion) && !empty($descripcion) && !empty($foto) && !empty($pais)){
            return array("nombre"=>$nombre,
                        "apellido"=>$apellido,
                        "posicion"=>$posicion,
                        "descripcion"=>$descripcion,
                        "foto"=>$foto,
                        "pais"=>$pais); 
        }        
    }
    function addJugador(){
        $jugador = $this->getDatosFormulario();
        $id =$this->model->addJugador($jugador['nombre'], $jugador['apellido'], $jugador['descripcion'], $jugador['posicion'], $jugador['foto'], $jugador['pais']);
        header("Location:".jugador."ver/".$id);
    }
    function editarJugador($id){
        $jugador = $this->getDatosFormulario(); 
        $jugador =$this->model->editarJugador($jugador['nombre'], $jugador['apellido'], $jugador['descripcion'], $jugador['posicion'], $jugador['foto'], $jugador['pais'], $id);
        print_r($jugador);
    }
}