<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// -----PRODUCTOS
require_once ('controller/ProductsController.php');
// -----TIPOS PRODUCTOS
require_once ('controller/TypeProdController.php');
// -----HOME
require_once ('controller/HomeController.php');
// -----LOGIN
// require_once ('controller/LoginController.php');

// defino la base url para la construccion de links con urls semánticas

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

switch($params[0]){
    case 'Home':
        if(!isset($params[1])){
            $HomeController -> showHome();
        }else{
            if($params[1] == 'Producto'){
                $ProductsController -> showProducts();
            }else if($params[1] == 'TipoProducto'){
                $TypeProdController -> showTypeProd();
            }
        }
    break;
    case 'add':
        if($params[1] == 'Producto'){
            $ProductsController -> addProduct();
        }else if($params[1] == 'TipoProducto'){
            $TypeProdController -> addTypeProd();
        }
    break;
    case 'del':
        if(!isset($params[1]) || !isset($params[2])){
            $HomeController -> showError('No existen parametros');
        }else if($params[1] == 'Producto'){
            $ProductsController -> delProduct($params[2]);
        }else if($params[1] == 'TipoProducto'){
            $TypeProdController -> delTypeProd($params[2]);
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
    case 'Filter':
        $HomeController -> showFiltrado();
    break;
    
}