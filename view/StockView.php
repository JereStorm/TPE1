<?php

require_once 'libs/Smarty.class.php';

class StockView{

    private $smarty;
    
    public function __construct(){
        $this -> smarty = new Smarty();
        $this -> smarty -> assign('base', BASE_URL);
        $this -> smarty -> assign('title', 'TPETomiJere');
    }

    function renderStock($products, $stock){
        $this -> smarty -> assign('types', $products);

        $this -> smarty -> assign('value_nombre', '');
        $this -> smarty -> assign('value_tipo', '');
        $this -> smarty -> assign('value_precio', '');
    
        $this -> smarty -> assign('productos', $stock);

        $this -> smarty -> assign('URL', 'Stock');

        $this -> smarty -> display('templates/homeTable.tpl');
    }

    function renderError($texto){
        $this -> smarty -> assign('texto', $texto);

        $this -> smarty -> display('templates/error.tpl');
    }

    /*
    function renderHome(){
        $this -> smarty -> display('templates/home.tpl');
    }

    function renderEditProduct($product, $types){
        $this -> smarty -> assign('types', $types);

        $this -> smarty -> assign('value_nombre', $product->nombre);
        $this -> smarty -> assign('value_tipo', $product->tipo);
        $this -> smarty -> assign('value_precio', $product->precio);
        $this -> smarty -> assign('value_id', $product->id);


        $this -> smarty -> assign('URL', 'Producto');

        $this -> smarty -> display('templates/homeEdit.tpl');
    }
    
    function renderError($texto){
        $this -> smarty -> assign('texto', $texto);

        $this -> smarty -> display('templates/error.tpl');
    }*/
}