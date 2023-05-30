<?php

Class paisesModel{
    private $db;

    public function __construct(){
        $this->db = new PDO ('mysql:host=localhost:4306;'.'dbname=db_mundial;charset=utf8', 'root', ''); 
        //Creó un grupo de BBDD y lo guardo en ese mismo grupo.
    }

    function getPaises(){//función para obtener todos los paises
        $sentencia = $this->db->prepare("SELECT * FROM paises");
        $sentencia->execute();
        $paises= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $paises;
    }
}