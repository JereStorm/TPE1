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

    function renderProducts($products, $types){
        $this -> smarty -> assign('types', $types);
    
        $this -> smarty -> assign('productos', $products);

        $this -> smarty -> assign('URL', 'Producto');

        $this -> smarty -> display('templates/homeProducts.tpl');
    }

    function renderError($texto){
        $this -> smarty -> assign('texto', $texto);

        $this -> smarty -> display('templates/error.tpl');
    }

    function renderTypesProd($types){
        $this -> smarty -> assign ('productos', $types);

        $this -> smarty -> assign('URL', 'TipoProducto');

        $this -> smarty -> display('templates/homeTypeProd.tpl');
    }
}