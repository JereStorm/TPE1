<?php

require_once 'libs/Smarty.class.php';

class ProductsView{

    private $smarty;
    
    public function __construct(){
        $this -> smarty = new Smarty();
        $this -> smarty -> assign('base', BASE_URL);
        $this -> smarty -> assign('title', 'TPETomiJere');
    }

    function renderHome(){
        $this -> smarty -> display('templates/home.tpl');
    }

    function renderProducts($products){
    
        $this -> smarty -> assign('productos', $products);

        $this -> smarty -> display('templates/tabla.tpl');
    }
}