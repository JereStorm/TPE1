<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once ('controller/ProductsController.php');

// defino la base url para la construccion de links con urls semánticas

if (!empty($_GET['action'])){
    $action = $_GET['action'];
}
else {
    $action = 'Home';
}

$params = explode('/', $action);

$controller = new ProductsController();

switch($params[0]){
    case 'Home':
        if(!isset($params[1])){
            $controller -> showHome();
        }else{
            if($params[1] == 'Producto'){
            $controller -> showProducts();
            }else if($params[1] == 'TipoProducto'){
                $controller -> showTypeProd();
            }
        }
    break;
    case 'add':
        if($params[1] == 'Producto'){
            $controller -> addProduct($params[2]);
        }else if($params[1] == 'TipoProducto'){
            $controller -> addTypeProd($params[2]);
        }
    break;
    case 'del':
        if($params[1] == 'Producto'){
            $controller -> delProduct($params[2]);
        }else if($params[1] == 'TipoProducto'){
            $controller -> delTypeProd($params[2]);
        }
    break;
    case 'HomeEdit':
        if($params[1] == 'Producto'){
            $controller -> showEditProduct($params[2]);
        }else if($params[1] == 'TipoProducto'){
            $controller -> showEditTypeProd($params[2]);
        }
    break;
    case 'edit':
        if($params[1] == 'Producto'){
            $controller -> editProduct();
        }else if($params[1] == 'TipoProducto'){
            $controller -> editTypeProd();
        }
    break;
}