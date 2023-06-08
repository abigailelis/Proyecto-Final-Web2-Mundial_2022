<?php
require_once './libs/smarty/Smarty.class.php';

Class paisesView{
    private $smarty;

    public function __construct($logueado){
        $this-> smarty = new Smarty();
        $this-> smarty -> assign('logueado', $logueado);//agregar en paises view y acomodar los if para mostrar los botones

    }
    //función para mostrar todos los paises
    function showPaises($paises){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign('titulo', 'Mundial 2022');
        $this -> smarty -> assign ('paises', $paises);
        $this -> smarty -> display('./templates/paises.tpl');
    }

    function showFormularioEdit($id, $nombre, $continente, $clasificacion, $bandera){
        $action = "paises/editar/".$id;
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('action', $action);
        $this -> smarty -> assign ('titulo', 'Editar pais');
        $this -> smarty -> assign ('nombre', $nombre);
        $this -> smarty -> assign ('continente', $continente);
        $this -> smarty -> assign ('clasificacion', $clasificacion);
        $this -> smarty -> assign ('bandera', $bandera);
        $this -> smarty -> display('./templates/formularioPais.tpl');
    }

    function showFormularioAdd(){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('action','paises/add');
        $this -> smarty -> assign ('titulo', 'Agregar pais');
        $this -> smarty -> display('./templates/formularioPais.tpl');
    }
    //Muestra la pagina Home
    function showHomePage(){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('titulo', 'Mundial 2022');
        $this -> smarty -> display('./templates/home.tpl');
    }
    function showMsgBorrar($id){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('titulo', 'Borrar pais');
        $this -> smarty -> assign ('id', $id);
        $this -> smarty -> display('./templates/msgBorrarPais.tpl');
    }

    function showError($msg){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('titulo', 'Not found');
        $this -> smarty -> assign ('msg', $msg);
        $this -> smarty -> display('./templates/error.tpl');
    }
}