<?php
Class usuariosModel{
    private $db;

    public function __construct(){
<<<<<<< HEAD
=======
        //$port= $config["db_port"];
        //echo $port;
>>>>>>> 90f97ff1ed1fef949ac6ab028c24b778d2636be5
        $this->db = new PDO('mysql:host=localhost:4306;'.'dbname=db_mundial;charset=utf8', 'root', '');
    }

    public function obtenerUsuario($usuario){
        $sentencia = $this -> db ->prepare("SELECT * FROM usuarios WHERE (usuario) = :usuario");
        $sentencia -> execute([":usuario" => $usuario]);
        return $sentencia -> fetch(PDO::FETCH_OBJ);
    }
}