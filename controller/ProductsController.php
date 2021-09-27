<?php

require_once 'view/ProductsView.php';
require_once 'model/ProductsModel.php';

class ProductsController{

    private $model;
    private $view;

    public function __construct(){
        $this -> model = new ProductsModel();
        $this -> view = new ProductsView();
    }

    function showHome(){
        $this -> view -> renderHome();
    }

    function showProducts(){
        $types = $this -> model -> getAllTypes();
        $products = $this -> model -> getAllProducts();
        $this -> view -> renderProducts($products, $types);
    }

    function addProduct(){
        if( (!isset($_REQUEST['producto']) || empty($_REQUEST['producto'])) || 
            (!isset($_REQUEST['precio']) || empty($_REQUEST['precio'])) || 
            (!isset($_REQUEST['tipo']) || $_REQUEST['tipo'] == 'false') )
        {
            $this -> view -> renderError('No se pudo agregar la materia por falta de parametros');
            die();
        }
        
        $nombre = $_REQUEST['producto'];
        $precio = $_REQUEST['precio'];
        $tipo = $_REQUEST['tipo'];

        $this -> model -> insertProduct($nombre, $precio, $tipo);

        header('Location:'. BASE_URL);
    }
}