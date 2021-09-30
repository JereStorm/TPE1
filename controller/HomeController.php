<?php

require_once 'model/HomeModel.php';
require_once 'view/HomeView.php';


class HomeController{

    // EXTERNOS
    private $ProductsModel;
    private $TypeProdModel;

    // INTERNOS
    private $model;
    private $view;

    function __construct(){
       
        $this -> view = new HomeView();
        $this -> model = new HomeModel();
    }

    function showHome(){

        $products = $this -> model -> getAll();

        $this -> view -> renderHome($products);
    }

}