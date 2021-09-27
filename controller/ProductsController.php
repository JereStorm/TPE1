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
}