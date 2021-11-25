<?php

require_once 'libs/Smarty.class.php';

class ProductsView{

    private $smarty;
    
    public function __construct(){
        $this -> smarty = new Smarty();
        $this -> smarty -> assign('base', BASE_URL);
        $this -> smarty -> assign('title', 'TPETomiJere');
    }

    function renderProducts($products, $types){
        $this -> smarty -> assign('types', $types);
    
        $this -> smarty -> assign('arreglo', $products);

        $this -> smarty -> assign('URL', 'Producto');

        $this -> smarty -> display('templates/homeTable.tpl');
    }

    function renderEditProduct($product, $types){
        $this -> smarty -> assign('types', $types);

        $this -> smarty -> assign('value_nombre', $product->Nombre);
        $this -> smarty -> assign('value_tipo', $product->Tipo);
        $this -> smarty -> assign('value_precio', $product->Precio);
        $this -> smarty -> assign('value_id', $product->id);
        $this -> smarty -> assign('image', $product->img_path);

        $this -> smarty -> assign('URL', 'Producto');

        $this -> smarty -> display('templates/homeEdit.tpl');
    }
    
    function renderError($texto){
        $this -> smarty -> assign('texto', $texto);

        $this -> smarty -> display('templates/error.tpl');
    }
}