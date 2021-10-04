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
    
        $this -> smarty -> assign('arreglo', $stock);

        $this -> smarty -> assign('URL', 'Stock');

        $this -> smarty -> display('templates/homeTable.tpl');
    }

    function renderError($texto){
        $this -> smarty -> assign('texto', $texto);

        $this -> smarty -> display('templates/error.tpl');
    }

    function renderEditProduct($products, $product){


        $this -> smarty -> assign('types', $products);

        $this -> smarty -> assign('value_nombre', $product->id_stock);
        $this -> smarty -> assign('value_tipo', $product->producto_fk);
        $this -> smarty -> assign('value_precio', $product->cantidad);
    
        $this -> smarty -> assign('productos', '');

        $this -> smarty -> assign('URL', 'Stock');

        $this -> smarty -> display('templates/homeEdit.tpl');
    }
}