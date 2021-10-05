<?php

// EXTERNOS
require_once 'model/ProductsModel.php';
require_once 'model/TypeProdModel.php';
require_once 'model/StockModel.php';

// INTERNOS
require_once 'view/HomeView.php';


class HomeController{

    // EXTERNOS
    private $ProductsModel;
    private $TypeProdModel;
    private $StockModel;

    // INTERNOS
    private $view;

    function __construct(){
        //EXTERNOS
        $this -> TypeProdModel = new TypeProdModel();
        $this -> ProductsModel = new ProductsModel();
        $this -> StockModel = new StockModel();

       //INTERNOS
        $this -> view = new HomeView();

    }

    function showHome(){

        $products = $this -> ProductsModel -> getAllProducts();

        //CARGO EL STOCK
        $products = $this -> cargarStockInProd($products);
        
        $types = $this -> TypeProdModel -> getAllTypes();

        $this -> view -> renderHome($products, $types);
    }

    private function cargarStockInProd($products){
        foreach($products as $item){
            $stockProd = $this -> StockModel -> getOneStockIdProd($item->id);
            
            if($stockProd == false){
               $item->stock = false;
            }else{
                $item->stock = $stockProd->cantidad;
            }
        }
        return $products;
    }

    function showFiltrado(){
        
        if($_REQUEST['tipo'] == 'false' || !isset($_REQUEST['tipo'])){
            header("Location:". BASE_URL);
            die();
        }

        $tipo = $_REQUEST['tipo'];
        $filtradas = $this -> ProductsModel -> filtrarProducts($tipo);

        //CARGO EL STOCK
        $filtradas = $this -> cargarStockinProd($filtradas);
        
        $types = $this -> TypeProdModel -> getAllTypes();
        
        $this -> view -> renderHome($filtradas, $types);
    }

    function showError($texto){
        $this->view->renderError($texto);
    }

    // ACA SE TRABAJA EL DETALLE DEL PRODUCTO
    function showDetail($id){
        //FALTA CREAR LA VISTA DEL PRODUCTO
        $product = $this -> ProductsModel -> getOneProduct($id);
        $stock = $this -> StockModel -> getOneStockIdProd($product->id);
        if ($stock->cantidad == NULL)
            $product->stock = "Agotado";
        else
            $product->stock = $stock->cantidad;
            
        
        if(empty($product)){
            $this -> view -> renderError('Producto inexistente');
            die();
        }
        //OBTENER DEL MODELO EL PRODUCTO COMPLETO
        $this->view->renderDetail($product);
    }
    function comprar($id){
    $cantidad = $_REQUEST['cantidad'];
    $stock_by_prod = $this -> StockModel -> getOneStockIdProd($id);
    $cantidad_tot = $stock_by_prod->cantidad - $cantidad;
    $this -> StockModel -> updateStock($stock_by_prod->id_stock, $cantidad_tot);
    $producto = $this -> ProductsModel -> getOneProduct($id);
    $this -> success($producto->Nombre, $cantidad);
    }

    function success($nombre, $cant){
        $this -> view -> renderSuccess('Usted ha comprado '.$nombre.' por una cantidad de ('.$cant.')');
    }
    
}