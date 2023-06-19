<?php
Class paisesModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_mundial;charset=utf8', 'root', '');
    }

    /*--Obtiene todos los paises (Listado de categorias)--*/
    function obtenerPaises(){
        $sentencia = $this -> db -> prepare("SELECT * FROM paises ORDER BY clasificacion");
        $sentencia -> execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    /*--Obtiene el pais según el nombre (items por categoria)--*/
    function obtenerPaisPorNombre($nombre_pais){
        $sentencia = $this -> db ->prepare("SELECT * FROM paises WHERE (nombre) = :nombre");
        $sentencia -> execute([":nombre"=>$nombre_pais]);
        return $sentencia -> fetch(PDO::FETCH_OBJ);
    }

    /*--Obtiene el pais segun id--*/
    function obtenerPais($id){
        $sentencia = $this -> db -> prepare("SELECT * FROM paises WHERE (id) = :id");
        $sentencia -> execute([":id"=>$id]);
        return $sentencia -> fetch(PDO::FETCH_OBJ);
    }

    /*--Borra el pais segun id --*/
    function  borrarPais($id){
        $sentencia = $this -> db ->prepare("DELETE FROM paises WHERE (id)=:id");
        $sentencia -> execute([":id"=>$id]);
        return $sentencia->rowCount();
    }

    /*--Agrega un nuevo pais y retorna el último id ingresado--*/
    function agregarPais($pais){
        $sentencia = $this -> db ->prepare("INSERT INTO paises 
                                                   (nombre, continente, clasificacion, bandera) 
                                            VALUES (:nombre, :continente, :clasificacion, :bandera)");
        $sentencia->execute([":nombre"=>$pais->nombre,
                             ":continente"=>$pais->continente,
                             ":clasificacion"=>$pais->clasificacion,
                             ":bandera"=>$pais->bandera]);
        return $this -> db ->lastInsertId();
    }

    /*--Edita el pais según el id--*/
    function editarPais($pais, $id){
        $sentencia = $this -> db ->prepare("UPDATE paises 
                                            SET nombre = :nombre,
                                                continente = :continente,
                                                clasificacion = :clasificacion,
                                                bandera = :bandera
                                            WHERE id = :id");
        $sentencia -> execute([":nombre" => $pais->nombre, 
                               ":continente"=> $pais->continente, 
                               ":clasificacion"=>$pais->clasificacion,
                               ":bandera"=>$pais->bandera,
                               ":id" => $id]
                            );
    }

    /*--Verifica si existe algún pais con el mismo nombre o clasificación en la BBDD--*/
    function verificarPaisExistente($clasificacion = null, $nombre = null){
        $sentencia = $this -> db -> prepare("SELECT * FROM paises WHERE (clasificacion) = :clasificacion OR (nombre) = :nombre");
        $sentencia -> execute([":clasificacion" => $clasificacion,
                                ":nombre" => $nombre]);
        return  $sentencia->fetch(PDO::FETCH_OBJ);
    }
}