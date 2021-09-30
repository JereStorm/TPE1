<?php

require_once 'model/ProductsModel.php';
require_once 'model/TypeProdModel.php';
require_once 'view/HomeView.php';


class HomeController{

    // EXTERNOS
    private $ProductsModel;
    private $TypeProdModel;

    // INTERNOS
    private $model;
    private $view;

    function __construct(){
        $this -> ProductsModel = new ProductsModel();
        $this -> TypeProdModel = new TypeProdModel();
        //ACA IRIA EL STOCK

        $this -> view = new HomeView();
    }

    function showHome(){

        $products = $this -> ProductsModel -> getAllProducts();

        $typeProd = $this -> TypeProdModel -> getAllTypes();

        $this -> view -> renderHome($products, $typeProd);
    }

}