<?php

// EXTERNOS
require_once 'model/TypeProdModel.php';
// INTERNOS
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
        $this -> TypeProdModel = new TypeProdModel();
       
        $this -> view = new HomeView();
        $this -> model = new HomeModel();

    }

    function showHome(){

        $products = $this -> model -> getAll();
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