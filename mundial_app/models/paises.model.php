<?php

Class paisesModel{
    private $db;

    public function __construct(){
        $this->db = new PDO ('mysql:host=localhost;'.'dbname=db_mundial;charset=utf8', 'root', ''); 
    }

    //función para obtener todos los paises (Listado de categorias)
    function getPaises(){
        $sentencia = $this -> db -> prepare("SELECT * FROM paises");
        $sentencia -> execute();
        $paises = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $paises;
    }

    //función que devuelve el id del pais según el nombre de pais solicitado para el listado de items x categoria
    function getPais($nombre_pais){
        $sentencia = $this -> db ->prepare("SELECT * FROM paises WHERE (nombre) = :nombre");
        $sentencia -> execute([":nombre"=>$nombre_pais]);
        $pais = $sentencia -> fetch(PDO::FETCH_OBJ);
        return $pais;
    }
    function getPaisJugador($id){
        $sentencia = $this -> db -> prepare("SELECT * FROM paises WHERE (id) = :id");
        $sentencia -> execute([":id"=>$id]);
        $pais = $sentencia -> fetch(PDO::FETCH_OBJ);
        return $pais;
    }
}