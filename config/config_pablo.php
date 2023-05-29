<?php

$config=["db_port"=>4306];



?>

global $config_pablo;
        $port= $config_pablo ["db_port"];
        $this->db = new PDO('mysql:host=localhost:'.$port.';'.'dbname=db_diario;charset=utf8', 'root');



se utiliza para configurar el port personal de cada uno
!!!!!!!!!!!!!!!!!preguntar al final del proyecto!!!!!!!!!!!!!!!!!!!!!!!!!