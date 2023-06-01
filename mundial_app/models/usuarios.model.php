<?php

Class usuariosModel{
    private $db;

    public function __construct(){
        $this -> db = new PDO ('mysql:host=localhost;'.'db_name=db_mundial;charset=utf8','root','');
    }
}