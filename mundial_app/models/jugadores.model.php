<?php
Class jugadoresModel{
    private $db; 

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_mundial;charset=utf8', 'root', '');
    }

    /*--Obtiene todos los jugadores (listado de ítems)--*/
    function getJugadores(){
        $sentencia = $this -> db -> prepare("SELECT * FROM jugadores ORDER BY id_pais");
        $sentencia -> execute();
        return $sentencia -> fetchAll(PDO::FETCH_OBJ);
    }

    /*--Obtiene los jugadores según el país seleccionado (items por categoria)--*/
    function getJugadoresByPais($pais){
        $sentencia = $this -> db ->prepare("SELECT * FROM jugadores WHERE (id_pais)=:id_pais");
        $sentencia -> execute([":id_pais" => $pais->id]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    /*--Obtiene un jugador (detalle de ítem)--*/
    function getJugador($id){
        $sentencia = $this -> db ->prepare("SELECT * FROM jugadores WHERE (id)=:id");
        $sentencia -> execute([":id"=>$id]);
        return $sentencia -> fetch(PDO::FETCH_OBJ);
    }

    /*--Borra un jugador según id--*/
    function borrarJugador($id){
        $sentencia = $this -> db ->prepare("DELETE FROM jugadores WHERE (id)=:id");
        $sentencia -> execute([":id"=>$id]);
    }

    /*--Agrega un jugador nuevo en la BBDD--*/
    function agregarJugador($jugador){
        $sentencia = $this -> db ->prepare("INSERT INTO jugadores 
                                                   (nombre, apellido, descripcion, posicion, foto, id_pais) 
                                            VALUES (:nombre, :apellido, :descripcion, :posicion, :foto, :id_pais)");
        $sentencia->execute([":nombre"=>$jugador->nombre,
                             ":apellido"=>$jugador->apellido,
                             ":descripcion"=>$jugador->descripcion,
                             ":posicion"=>$jugador->posicion,
                             ":foto"=>$jugador->foto,
                             ":id_pais"=>$jugador->pais]);
        return $this -> db ->lastInsertId();
    }

    /*--Edita un jugador según id--*/
    function editarJugador($jugador, $id){
        $sentencia = $this -> db ->prepare("UPDATE jugadores 
                                            SET nombre = :nombre,
                                                apellido = :apellido,
                                                descripcion = :descripcion,
                                                posicion = :posicion,
                                                foto = :foto,
                                                id_pais = :id_pais
                                            WHERE id = :id");
        $sentencia -> execute([":nombre" => $jugador->nombre, 
                               ":apellido"=> $jugador->apellido, 
                               ":descripcion"=>$jugador->descripcion,
                               ":posicion"=>$jugador->posicion,
                               ":foto"=>$jugador->foto, 
                               ":id_pais"=>$jugador->pais,
                               ":id" => $id]
                            );
    }
}