<?php

Class jugadoresModel{
    private $db; 

    public function __construct(){
        $this->db = new PDO ('mysql:host=localhost;'.'dbname=db_mundial;charset=utf8', 'root', ''); 
        //Creó un grupo de BBDD y lo guardo en ese mismo grupo.
    }

    function getJugadores(){//función para obtener todos los jugadores
        $sentencia = $this->db->prepare("SELECT * FROM jugadores");
        $sentencia->execute();
        $jugadores= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $jugadores;
    }
    
    function getJugador ($id) {//función para obtener un jugador ($jugador->id)
        $sentencia = $this->db->prepare("SELECT * FROM jugadores WHERE (id)=:id");
        $sentencia->execute(array(":id"=>$id));
        $jugador= $sentencia->fetch(PDO::FETCH_OBJ);
        return $jugador;
    }

    //función para obtener los jugadores segun pais ($pais->id)
    function getJugadoresByPais($pais){
        $id_pais = $pais->id;
        $sentencia = $this->db->prepare("SELECT * FROM jugadores WHERE (id_pais)=:id_pais");
        $sentencia->execute(array(":id_pais"=>$id_pais));
        $jugadores= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $jugadores;
    }

    function deleteJugador($id){
        $sentencia = $this->db->prepare("DELETE FROM jugadores WHERE (id)=:id");
        $sentencia->execute(array(":id"=>$id));
        header("Location:".jugadores);
    }
    function addJugador($nombre, $apellido, $descripcion, $posicion, $foto, $pais){
        $sentencia = $this->db->prepare("INSERT INTO jugadores (nombre, apellido, posicion, descripcion, foto, id_pais) 
                                        VALUES (:nombre, :apellido, :posicion, :descripcion, :foto, :id_pais)");
        $sentencia->execute(array(":nombre"=>$nombre,
                                  ":apellido"=>$apellido,
                                  ":posicion"=>$posicion,
                                  ":descripcion"=>$descripcion,
                                  ":foto"=>$foto,
                                  ":id_pais"=>$pais)
                            );
        $last_id =$this->db->lastInsertId();
        return $last_id;
    }
    function editarJugador($nombre, $apellido, $descripcion, $posicion, $foto, $pais, $id){
        $sentencia = $this->db->prepare("UPDATE jugadores SET (nombre) = :nombre, (apellido) = :apellido, (posicion)= :posicion, (descripcion)= :descripcion, (foto)=:foto, (id_pais)=:id_pais WHERE (id)=:id");
        $sentencia->execute([":id"=>$id,":nombre"=>$nombre, ":apellido"=>$apellido, ":posicion"=>$posicion,":descripcion"=>$descripcion, ":foto"=>$foto, ":id_pais"=>$pais]);
        $jugador = fetch(PDO::FETCH_OBJ);
        return $jugador;
    }

}