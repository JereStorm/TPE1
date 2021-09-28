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

    //---------- SHOW

    function showHome(){
        $this -> view -> renderHome();
    }

    function showProducts(){
        $types = $this -> model -> getAllTypes();
        $products = $this -> model -> getAllProducts();

        $this -> view -> renderProducts($products, $types);
    }

    function showTypeProd(){
        $types = $this -> model -> getAllTypes();

        $this -> view -> renderTypesProd($types);
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
        header('Location:'. BASE_URL .'productos');
    }

    function addTypeProd(){

        // VALIDACION
        if( (!isset($_REQUEST['tipo']) || empty($_REQUEST['descripcion'])) )
        {
            $this -> view -> renderError('No se pudo agregar el producto por falta de parametros');
            die();
        }
        
        //SETEO DE DATOS
        $tipo = $_REQUEST['tipo'];
        $descrip = $_REQUEST['descripcion'];

        //INSERCION
        $this -> model -> insertTypeProd($tipo, $descrip);

        //RENDERIZADO
        header('Location:'. BASE_URL .'typeProd');
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

       header('Location:'. BASE_URL .'productos');
    }
    function delTypeProd($id){

        //VALIDACION
        $verificar = $this -> model -> visarIdTypeProd($id);

        if(empty($verificar->val)){
            $this -> view -> renderError('identificador erroneo');
            die();
        }

        echo 'Esperar hasta ahbalr para terminar';
    // AUN EN PROCESO

    //    $execute = $this -> model -> delTypeProduct($id);

    //    header('Location:'. BASE_URL .'productos');
    }

    function editProduct($id){
        $verificado = $this -> model -> visarIdProd($id);

        if(!empty($verificar->val)){
            $this -> view -> renderError('identificador erroneo');
            die();
        }

        $product = $this -> model -> getOneProduct($id);
        $types = $this -> model -> getAllTypes();
        $this -> view -> renderEditProduct($product, $types);
    }
    function editTypeProd($id){

    }

    
    

}