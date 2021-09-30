<?php

// EXTERNOS
require_once 'model/ProductsModel.php';
require_once 'model/TypeProdModel.php';
// INTERNOS
require_once 'view/HomeView.php';


class HomeController{

    // EXTERNOS
    private $ProductsModel;
    private $TypeProdModel;

    // INTERNOS
    private $model;
    private $view;

    function __construct(){
        $this -> TypeProdModel = new TypeProdModel();
        $this -> ProductsModel = new ProductsModel();

       
        $this -> view = new HomeView();

    }

    function showHome(){

        $products = $this -> ProductsModel -> getAllProducts();
        $types = $this -> TypeProdModel -> getAllTypes();

        $this -> view -> renderHome($products, $types);
    }

    function showDetail($id){
        //FALTA CREAR LA VISTA DEL PRODUCTO
        echo 'detalles en proceso por:'. $id;
    }

    function showFiltrado(){
        echo 'filtrado en proceso por:'. $_REQUEST['tipo'];
        //falta terminar funcionalidad en el modelo;
    }

    function showError($texto){
        $this->view->renderError($texto);
    }
}