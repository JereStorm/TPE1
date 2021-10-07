<?php

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// -----PRODUCTOS
require_once ('controller/ProductsController.php');
// -----TIPOS PRODUCTOS
require_once ('controller/TypeProdController.php');
// -----TIPOS PRODUCTOS
require_once ('controller/StockController.php');
// -----HOME
require_once ('controller/HomeController.php');
// -----LOGIN
// require_once ('controller/LoginController.php');

if (!empty($_GET['action'])){
    $action = $_GET['action'];
}
else {
    $action = 'Home';
}

$params = explode('/', $action);

$HomeController = new HomeController();
$ProductsController = new ProductsController();
$TypeProdController = new TypeProdController();
$StockController = new StockController();

switch($params[0]){
    case 'Home':
        if(!isset($params[1])){
            $HomeController -> showHome();
        }else{
            if($params[1] == 'Producto'){
                $ProductsController -> showProducts();
            }else if($params[1] == 'TipoProducto'){
                $TypeProdController -> showTypeProd();
            }else if($params[1] == 'Stock'){
                $StockController -> showStock();
            }
        }
    break;
    case 'add':
        if($params[1] == 'Producto'){
            $ProductsController -> addProduct();
        }else if($params[1] == 'TipoProducto'){
            $TypeProdController -> addTypeProd();
        }else if($params[1] == 'Stock'){
            $StockController -> addStock();
        }
    break;
    case 'del':
        if(!isset($params[1]) || !isset($params[2])){
            $HomeController -> showError('No existen parametros');
        }else if($params[1] == 'Producto'){
            $ProductsController -> delProduct($params[2]);
        }else if($params[1] == 'TipoProducto'){
            $TypeProdController -> delTypeProd($params[2]);
        }else if($params[1] == 'Stock'){
            $StockController -> delStock($params[2]);
        }else{
            header('Location:'. BASE_URL);
        }
    break;
    case 'HomeEdit':
        if(!isset($params[1])  || !isset($params[2])){
            $HomeController -> showError('No existen parametros');
        }else if($params[1] == 'Producto'){
            $ProductsController -> showEditProduct($params[2]);
        }else if($params[1] == 'TipoProducto'){
            $TypeProdController -> showEditTypeProd($params[2]);
        }else if($params[1] == 'Stock'){
            $StockController -> showEditStock($params[2]);
        }else{
            header('Location:'. BASE_URL);
        }
    break;
    case 'edit':
        if(!isset($params[1])){
            $HomeController -> showError('No existen parametros');
        }else if($params[1] == 'Producto'){
            $ProductsController -> editProduct();
        }else if($params[1] == 'TipoProducto'){
            $TypeProdController -> editTypeProd();
        }else if($params[1] == 'Stock'){
            $StockController -> editStock();
        }else{
            header('Location:'. BASE_URL);
        }
    break;
    case 'Details':
        if(!isset($params[1])){
            $HomeController -> showError('No existen parametros');
        }else{
            $HomeController -> showDetail($params[1]);
        }
    break;
    case 'Buy':
        if(!isset($params[1])){   
            $HomeController -> showError('No existen parametros');
        }else{
            $HomeController -> comprar($params[1]);
        }
    break;
    case 'Filter':
        $HomeController -> showFiltrado();
    break;
    
}