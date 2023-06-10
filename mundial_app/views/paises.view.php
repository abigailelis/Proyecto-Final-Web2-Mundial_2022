<?php
require_once './libs/smarty/Smarty.class.php';

Class paisesView{
    private $smarty;

    public function __construct($logueado){
        $this-> smarty = new Smarty();
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this-> smarty -> assign('logueado', $logueado['loggueado']);
        $this-> smarty -> assign('usuario', $logueado['usuario']);
    }
    //función para mostrar todos los paises
    function mostrarPaises($paises){
        $this -> smarty -> assign('titulo', 'Mundial 2022');
        $this -> smarty -> assign ('paises', $paises);
        $this -> smarty -> display('./templates/paises.tpl');
    }

    function mostrarFormularioEditarPais($id, $nombre, $continente, $clasificacion, $bandera){
        $action = "paises/editar/".$id;
        $this -> smarty -> assign ('action', $action);
        $this -> smarty -> assign ('titulo', 'Editar pais');
        $this -> smarty -> assign ('nombre', $nombre);
        $this -> smarty -> assign ('continente', $continente);
        $this -> smarty -> assign ('clasificacion', $clasificacion);
        $this -> smarty -> assign ('bandera', $bandera);
        $this -> smarty -> display('./templates/formularioPais.tpl');
    }

    function mostrarFormularioAgregarPais(){
        $this -> smarty -> assign ('action','paises/agregar');
        $this -> smarty -> assign ('titulo', 'Agregar pais');
        $this -> smarty -> display('./templates/formularioPais.tpl');
    }

    //Muestra la pagina Home
    function mostrarInicio(){
        $this -> smarty -> assign ('titulo', 'Mundial 2022');
        $this -> smarty -> display('./templates/home.tpl');
    }

    //Consulta si estas seguro de borrar el pais.
    function mostrarMsgBorrar($id){
        $this -> smarty -> assign ('titulo', 'Borrar pais');
        $this -> smarty -> assign ('id', $id);
        $this -> smarty -> display('./templates/msgBorrarPais.tpl');
    }

    //Muestra la pagina de error.
    function mostrarError($msg){
        $this -> smarty -> assign ('titulo', 'Error');
        $this -> smarty -> assign ('msg', $msg);
        $this -> smarty -> display('./templates/error.tpl');
    }
}