<?php
//require_once './config/config.php';
Class usuariosModel{
    private $db;

    public function __construct(){
        //$port= $config["db_port"];
        //echo $port;
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_mundial;charset=utf8', 'root', '');
    }

    public function getUsuario($usuario){
        $sentencia = $this -> db ->prepare("SELECT * FROM usuarios WHERE (usuario) = :usuario");
        $sentencia -> execute([":usuario" => $usuario]);
        $usuariodb = $sentencia -> fetch(PDO::FETCH_OBJ);
        return $usuariodb;
    }
}