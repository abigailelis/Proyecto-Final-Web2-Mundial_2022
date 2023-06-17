<?php
//require_once './config/config.php';
Class jugadoresModel{
    private $db; 
    private $port;

    public function __construct(){
        //$this->port= $config["db_port"];
        $this->db = new PDO('mysql:host=localhost:4306;'.'dbname=db_mundial;charset=utf8', 'root', '');
    }

    //función para obtener los jugadores segun pais (items x categoria)
    function getJugadoresByPais($pais){
        $sentencia = $this -> db ->prepare("SELECT * FROM jugadores WHERE (id_pais)=:id_pais");
        $sentencia -> execute([":id_pais" => $pais->id]);
        $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $jugadores;
    }

    //función para obtener todos los jugadores
    function getJugadores(){
        $sentencia = $this -> db -> prepare("SELECT * FROM jugadores ORDER BY id_pais");
        $sentencia -> execute();
        $jugadores = $sentencia -> fetchAll(PDO::FETCH_OBJ);
        return $jugadores;
    }

    //función para obtener un jugador ($jugador->id)
    function getJugador ($id) {
        $sentencia = $this -> db ->prepare("SELECT * FROM jugadores WHERE (id)=:id");
        $sentencia -> execute([":id"=>$id]);
        $jugador = $sentencia -> fetch(PDO::FETCH_OBJ);
        return $jugador;
    }

    //Borrar jugador según id
    function borrarJugador($id){
        $sentencia = $this -> db ->prepare("DELETE FROM jugadores WHERE (id)=:id");
        $sentencia -> execute([":id"=>$id]);
    }

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
        $last_id = $this -> db ->lastInsertId();
        return $last_id;
    }
    function editarJugador($nombre, $apellido, $descripcion, $posicion, $foto, $pais, $id){
        $sentencia = $this -> db ->prepare("UPDATE jugadores 
                                            SET nombre = :nombre,
                                                apellido = :apellido,
                                                descripcion = :descripcion,
                                                posicion = :posicion,
                                                foto = :foto,
                                                id_pais = :id_pais
                                                WHERE id = :id");
        $sentencia -> execute([":nombre" => $nombre, 
                               ":apellido"=> $apellido, 
                               ":descripcion"=>$descripcion,
                               ":posicion"=>$posicion,
                               ":foto"=>$foto, 
                               ":id_pais"=>$pais,
                               ":id" => $id]);
    }

}