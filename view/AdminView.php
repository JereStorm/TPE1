<?php

require_once 'libs/Smarty.class.php';

class AdminView{

    private $smarty;
    
    public function __construct(){
        $this -> smarty = new Smarty();
        $this -> smarty -> assign('base', BASE_URL);
        $this -> smarty -> assign('title', 'TPETomiJere');
    }

    function renderUsers($users){
        //$this -> smarty -> assign('types');
        $this -> smarty -> assign('arreglo', $users);
        $this -> smarty -> assign('URL', 'Admin');
        $this -> smarty -> assign('userSegment', true);
        $this -> smarty -> display('templates/homeTable.tpl');
    }

    function renderEditUser($user){
        //$this -> smarty -> assign('types', $types);
        $this -> smarty -> assign('value_nombre', $user->email);
        $this -> smarty -> assign('value_tipo', $user->rol);
       // $this -> smarty -> assign('value_precio', $product->Precio);
        $this -> smarty -> assign('value_id', $user->id);
        $this -> smarty -> assign('URL', 'Admin');
        $this -> smarty -> display('templates/homeEdit.tpl');
    }
    
    function renderError($texto){
        $this -> smarty -> assign('texto', $texto);
        $this -> smarty -> display('templates/error.tpl');
    }
}