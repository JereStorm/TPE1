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
        //EXTERNOS
        $this -> TypeProdModel = new TypeProdModel();
        $this -> ProductsModel = new ProductsModel();

       //INTERNOS
        $this -> view = new HomeView();

    }

    function showHome(){

        $products = $this -> ProductsModel -> getAllProducts();
        $types = $this -> TypeProdModel -> getAllTypes();

        $this -> view -> renderHome($products, $types);
    }

    function showDetail($id){
        //FALTA CREAR LA VISTA DEL PRODUCTO
        //OBTENER DEL MODELO EL PRODUCTO COMPLETO
        $this->view->renderDetail();
    }

    function showFiltrado(){
        $tipo = $_REQUEST['tipo'];

        if($tipo == 'false'){
            header("Location:". BASE_URL);
            die();
        }

        $filtradas = $this -> ProductsModel -> filtrarProducts($tipo);

        if(empty($filtradas)){
            $this -> view -> renderError('no se han encontrado resultados');
            die();
        }
        $types = $this -> TypeProdModel -> getAllTypes();
        
        $this -> view -> renderFiltrado($filtradas, $types);
        //falta terminar funcionalidad en el productsModel;
        //y llamar a render home con estos parametros
    }

    function showError($texto){
        $this->view->renderError($texto);
    }
}