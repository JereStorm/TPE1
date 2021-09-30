<?php

// -------- STOCK
require_once 'view/StockView.php';
require_once 'model/StockModel.php';
// -------- PRODUCTOS
require_once 'model/ProductsModel.php';

class StockController{

    private $ProductsModel;
    private $model;
    private $view;

    public function __construct(){
        $this -> ProductsModel = new ProductsModel();
        $this -> model = new StockModel();
        $this -> view = new StockView();
    }

    //---------- SHOW

    function showStock(){
        $products = $this -> ProductsModel -> getAllProducts();
        $stock = $this -> model -> getAllStock();

        $this -> view -> renderStock($products, $stock);
    }
/*
    function showEditProduct($id){
        $verificado = $this -> model -> visarIdProd($id);

        if(empty($verificado->val)){
            $this -> view -> renderError('identificador erroneo');
            die();
        }

        $product = $this -> model -> getOneProduct($id);
        $types = $this -> TypeProdModel -> getAllTypes();
        $this -> view -> renderEditProduct($product, $types);
    }

    //-------- ADD

    function addProduct(){

        // VALIDACION
        if( (!isset($_REQUEST['producto']) || empty($_REQUEST['producto'])) || 
            (!isset($_REQUEST['precio']) || empty($_REQUEST['precio'])) || 
            (!isset($_REQUEST['tipo']) || $_REQUEST['tipo'] == 'false') )
        {
            $this -> view -> renderError('No se pudo agregar el producto por falta de parametros');
            die();
        }
        
        //SETEO DE DATOS
        $nombre = $_REQUEST['producto'];
        $precio = $_REQUEST['precio'];
        $tipo = $_REQUEST['tipo'];

        //INSERCION
        $this -> model -> insertProduct($nombre, $precio, $tipo);

        //RENDERIZADO
        header('Location:'. BASE_URL .'Home/Producto');
    }

    //------------- DEL

    function delProduct($id){

        //VALIDACION
        $verificado = $this -> model -> visarIdProd($id);

        if(empty($verificado->val)){
            $this -> view -> renderError('identificador erroneo');
            die();
        }

       $execute = $this -> model -> delProduct($id);

       header('Location:'. BASE_URL .'Home/Producto');
    }
    
    // ---------- EDIT

    function editProduct(){

        // VALIDACION
        if( (!isset($_REQUEST['producto']) || empty($_REQUEST['producto'])) || 
            (!isset($_REQUEST['precio']) || empty($_REQUEST['precio'])) || 
            (!isset($_REQUEST['tipo']) || $_REQUEST['tipo'] == 'false') )
        {
            $this -> view -> renderError('No se pudo agregar el producto por falta de parametros');
            die();
        }

        if(!isset($_REQUEST['id']) || empty($_REQUEST['id']))
        {
            $this -> view -> renderError('No se pudo agregar el producto por falta de id');
            die();
        }
    
        //SETEO DE DATOS
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['producto'];
        $precio = $_REQUEST['precio'];
        $tipo = $_REQUEST['tipo'];

        //UPDATEO
        $this -> model -> updateProduct($nombre, $precio, $tipo, $id);

        //RENDERIZADO
        header('Location:'. BASE_URL .'Home/Producto');
    }*/
}