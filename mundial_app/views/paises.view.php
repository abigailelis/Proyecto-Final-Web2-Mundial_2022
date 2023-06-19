<?php
require_once './libs/smarty/Smarty.class.php';

Class paisesView{
    private $smarty;

    public function __construct($logueado, $usuario = null){
        $this-> smarty = new Smarty();
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this-> smarty -> assign('logueado', $logueado);
        $this-> smarty -> assign('usuario', $usuario);
    }

    /*--Renderiza el listado de todos los paises (listado de categorías)--*/
    function mostrarPaises($paises){
        $this -> smarty -> assign('titulo', 'Listado de paises');
        $this -> smarty -> assign ('paises', $paises);
        $this -> smarty -> display('./templates/paises.tpl');
    }

    /*--Renderiza el formulario de editar país con los datos precargados--*/
    function mostrarFormularioEditarPais($id, $pais){
        $action = "paises/editar/".$id;
        $this -> smarty -> assign ('action', $action);
        $this -> smarty -> assign ('titulo', 'Editar pais');
        $this -> smarty -> assign ('pais', $pais);
        $this -> smarty -> display('./templates/formularioPais.tpl');
    }

    /*--Renderiza el formulario de agregar país vacío--*/
    function mostrarFormularioAgregarPais(){
        $this -> smarty -> assign ('action','paises/agregar');
        $this -> smarty -> assign ('titulo', 'Agregar pais');
        $this -> smarty -> display('./templates/formularioPais.tpl');
    }

    /*--Renderiza la pagina de Inicio--*/
    function mostrarInicio(){
        $this -> smarty -> assign ('titulo', 'Mundial 2022');
        $this -> smarty -> display('./templates/home.tpl');
    }

    /*--Renderiza el template de consulta: ¿Estás seguro de borrar el pais?--*/
    function mostrarMsgBorrar($id){
        $action = 'paises/borrar/'.$id;
        $this -> smarty -> assign ('titulo', 'Borrar pais');
        $this -> smarty -> assign ('action', $action);
        $this -> smarty -> assign ('elemento', 'Pais');
        $this -> smarty -> display('./templates/msgBorrar.tpl');
    }

    /*--Renderiza la pagina de error con el mensaje adecuado--*/
    function mostrarError($msg){
        $this -> smarty -> assign ('titulo', 'Error');
        $this -> smarty -> assign ('msg', $msg);
        $this -> smarty -> display('./templates/error.tpl');
    }
}