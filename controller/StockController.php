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
    function addStock(){

        // VALIDACION
        if( (!isset($_REQUEST['producto']) || empty($_REQUEST['producto'])) || 
            (!isset($_REQUEST['cantidad']) || empty($_REQUEST['cantidad'])))
        {
            $this -> view -> renderError('No se pudo agregar el producto por falta de parametros');
            die();
        }
        
        //SETEO DE DATOS
        $producto_id = $_REQUEST['producto'];
        $cantidad = $_REQUEST['cantidad'];
        
        
        
        //CONSULTA SI EL PRODUCTO EXISTE EN EL STOCK
        $prod_unico = $this -> model -> getOneStockId($producto_id);
        //var_dump($prod_unico);
        if ($prod_unico!=false){
            $cantidad_tot = $prod_unico->cantidad + $cantidad;
            $this->model->updateStock($prod_unico->id_stock, $cantidad_tot);
            header('Location:'. BASE_URL .'Home/Stock');
        }else{
            $this->model->insertNewStock($producto_id,$cantidad);
            header('Location:'. BASE_URL .'Home/Stock');
        }
        
        /*
        $stock = $this -> model -> getAllStockId();

        foreach ($stock as $prod_stock) {
            //var_dump($prod_stock);
            
            if ($prod_stock->producto_fk == $producto_id) {
                var_dump($prod_stock);
                $prod_unico = $this -> model -> getOneStockId($producto_id);
                
                
                $cantidad_tot = $prod_unico->cantidad + $cantidad;
                var_dump($cantidad_tot);
                $this->model->updateStock($prod_unico->id, $cantidad_tot);
                $this->showStock();
              
            }
        } */ 
 /*
        
        $this -> model -> insertStock($producto, $cantidad);

        //RENDERIZADO
        header('Location:'. BASE_URL .'Home/Producto');
        */
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