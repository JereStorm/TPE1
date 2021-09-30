<?php
require_once 'libs/Smarty.class.php';

class HomeView{

    private $smarty;

    public function __construct(){
        $this -> smarty = new Smarty();
        $this -> smarty -> assign('base', BASE_URL);
        $this -> smarty -> assign('title', 'TPETomiJere');
    }
    function renderHome($products, $types){

        // $this -> smarty -> assign('productos', $products);
        $this -> smarty -> assign('types', $types);
        
        $this -> smarty -> assign('productos', $products);

        $this -> smarty -> display('templates/home.tpl');
    }
    function renderError($texto){

        // $this -> smarty -> assign('productos', $products);
        // $this -> smarty -> assign('types', $types);
        
        $this -> smarty -> assign('texto', $texto);

        $this -> smarty -> display('templates/error.tpl');
    }
}