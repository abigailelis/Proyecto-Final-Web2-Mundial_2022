<?php
//require_once './config/config.php';

Class paisesModel{
    private $db;

    public function __construct(){
        //$port= $config["db_port"];
        $this->db = new PDO('mysql:host=localhost:4306;'.'dbname=db_mundial;charset=utf8', 'root', '');
        //Creó un grupo de BBDD y lo guardo en ese mismo grupo.
    }

    //función para obtener todos los paises (Listado de categorias)
    function getPaises(){
        $sentencia = $this -> db -> prepare("SELECT * FROM paises");
        $sentencia -> execute();
        $paises = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $paises;
    }

    //función que devuelve el id del pais según el nombre de pais solicitado para el listado de items x categoria
    function getPaisByName($nombre_pais){
        $sentencia = $this -> db ->prepare("SELECT * FROM paises WHERE (nombre) = :nombre");
        $sentencia -> execute([":nombre"=>$nombre_pais]);
        $pais = $sentencia -> fetch(PDO::FETCH_OBJ);
        return $pais;
    }
    function getPais($id){
        $sentencia = $this -> db -> prepare("SELECT * FROM paises WHERE (id) = :id");
        $sentencia -> execute([":id"=>$id]);
        $pais = $sentencia -> fetch(PDO::FETCH_OBJ);
        return $pais;
    }

    function  borrarPais($id){
        $sentencia = $this -> db ->prepare("DELETE FROM paises WHERE (id)=:id");
        $sentencia -> execute([":id"=>$id]);
    }

    function agregarPais($nombre, $continente, $clasificacion, $bandera){
        $sentencia = $this -> db ->prepare("INSERT INTO paises 
                                                  (nombre, continente, clasificacion, bandera) 
                                           VALUES (:nombre, :continente, :clasificacion, :bandera)");
        $sentencia->execute([":nombre"=>$nombre,
                             ":continente"=>$continente,
                             ":clasificacion"=>$clasificacion,
                             ":bandera"=>$bandera]);
        $last_id = $this -> db ->lastInsertId();
        return $last_id;
    }


    function editarPais($nombre, $continente, $clasificacion, $bandera, $id){
        $sentencia = $this -> db ->prepare("UPDATE paises 
                                            SET nombre = :nombre,
                                                continente = :continente,
                                                clasificacion = :clasificacion,
                                                bandera = :bandera
                                                WHERE id = :id");
        $sentencia -> execute([":nombre" => $nombre, 
                               ":continente"=> $continente, 
                               ":clasificacion"=>$clasificacion,
                               ":bandera"=>$bandera,
                               ":id" => $id]);
    }

    function getClasificacion($clasificacion){
        $sentencia = $this -> db -> prepare("SELECT clasificacion FROM paises WHERE (clasificacion) = :clasificacion");
        $sentencia -> execute([":clasificacion" => $clasificacion]);
        $clasificacion = $sentencia->fetch(PDO::FETCH_ASSOC);
        return $clasificacion;
    }
}