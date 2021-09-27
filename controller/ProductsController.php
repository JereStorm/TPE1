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

        // VALIDACION
        if( (!isset($_REQUEST['producto']) || empty($_REQUEST['producto'])) || 
            (!isset($_REQUEST['precio']) || empty($_REQUEST['precio'])) || 
            (!isset($_REQUEST['tipo']) || $_REQUEST['tipo'] == 'false') )
        {
            $this -> view -> renderError('No se pudo agregar la materia por falta de parametros');
            die();
        }
        
        //SETEO DE DATOS
        $nombre = $_REQUEST['producto'];
        $precio = $_REQUEST['precio'];
        $tipo = $_REQUEST['tipo'];

        //INSERCION
        $this -> model -> insertProduct($nombre, $precio, $tipo);

        //RENDERIZADO
        header('Location:'. BASE_URL .'productos');
    }

    function delProduct($id){

        $verificar = $this -> model -> visarId($id);

        if(empty($verificar->val)){
            $this -> view -> renderError('identificador erroneo');
            die();
        }

       $execute = $this -> model -> delProduct($id);

       header('Location:'. BASE_URL .'productos');
    }
}