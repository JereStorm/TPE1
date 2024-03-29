<?php

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('ADMIN', 1);
define('USER', 3);
define('CLIENT', 5);
define('SESSIONTIME', 1800); //segundos
define('ITEMS_BY_PAGE', 6); //items de paginado
define('IMAGE_DEFAULT','images/no_image_uploaded.jpeg'); //imagen por defecto cuando no hay una subida
define('IMAGE_DEFAULT_BROKE','images/image_broke.png'); //imagen por defecto cuando no encuentra el path
define('IMG_PATH','images/upload/'); // ruta donde se guardan las imagenes subidas

// -----PRODUCTOS
require_once('controller/ProductsController.php');
// -----TIPOS PRODUCTOS
require_once('controller/TypeProdController.php');
// -----TIPOS PRODUCTOS
require_once('controller/StockController.php');
// -----HOME
require_once('controller/HomeController.php');
// -----LOGIN
require_once('controller/LoginController.php');
// -----ADMIN
require_once('controller/AdminController.php');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'Home';
}

$params = explode('/', $action);

$HomeController = new HomeController();
$ProductsController = new ProductsController();
$TypeProdController = new TypeProdController();
$StockController = new StockController();
$AdminController = new AdminController();
$LoginController = new LoginController();

// chequea el tiempo de login
//$this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION

switch ($params[0]) {
    case 'Home':
        if (!isset($params[1])) {
            $HomeController->showHome();
        } else {
            if ($params[1] == 'Producto') {
                $ProductsController->showProducts();
            } else if ($params[1] == 'TipoProducto') {
                $TypeProdController->showTypeProd();
            } else if ($params[1] == 'Stock') {
                $StockController->showStock();
            } else if ($params[1] == 'Admin') {
                $AdminController->showAdmin();
            } else {
                $HomeController->showError('Error: ruta incorrecta');
            }
        }
        break;
    case 'add':
        if (
            !isset($params[1])
            || empty($params[1])
        ) {
            $HomeController->showError('No existen parametros');
        }
        if ($params[1] == 'Producto') {
            $ProductsController->addProduct();
        } else if ($params[1] == 'TipoProducto') {
            $TypeProdController->addTypeProd();
        } else if ($params[1] == 'Stock') {
            $StockController->addStock();
        } else {
            $HomeController->showError('Error: ruta incorrecta');
        }
        break;
    case 'del':
        if (
            !isset($params[1])
            || !isset($params[2])
        ) {
        } else if ($params[1] == 'Producto') {
            $ProductsController->delProduct($params[2]);
        } else if ($params[1] == 'TipoProducto') {
            $TypeProdController->delTypeProd($params[2]);
        } else if ($params[1] == 'Stock') {
            $StockController->delStock($params[2]);
        } else if ($params[1] == 'Admin') {

            $AdminController->delUser($params[2]);
        } else {
            $HomeController->showError('Error: ruta incorrecta');
        }
        break;
    case 'HomeEdit':
        if (
            !isset($params[1])
            || empty($params[1])
            || !isset($params[2])
            || empty($params[2])
        ) {
            $HomeController->showError('No existen parametros');
        } else if ($params[1] == 'Producto') {
            $ProductsController->showEditProduct($params[2]);
        } else if ($params[1] == 'TipoProducto') {
            $TypeProdController->showEditTypeProd($params[2]);
        } else if ($params[1] == 'Stock') {
            $StockController->showEditStock($params[2]);
        } else if ($params[1] == 'Admin') {
            $AdminController->showEditUser($params[2]);
        } else {
            $HomeController->showError('Error: ruta incorrecta');
        }
        break;
    case 'edit':
        if (
            !isset($params[1])
            || empty($params[1])
        ) {
            $HomeController->showError('No existen parametros');
        } else if ($params[1] == 'Producto') {
            $ProductsController->editProduct();
        } else if ($params[1] == 'TipoProducto') {
            $TypeProdController->editTypeProd();
        } else if ($params[1] == 'Stock') {
            $StockController->editStock();
        } else if ($params[1] == 'Admin') {
            $AdminController->editUser();
        } else {
            $HomeController->showError('Error: ruta incorrecta');
        }
        break;
    case 'Details':
        if (
            !isset($params[1])
            || empty($params[1])
        ) {
            $HomeController->showError('No existen parametros');
        } else {
            $HomeController->showDetail($params[1]);
        }
        break;
    case 'Buy':
        if (
            !isset($params[1])
            || empty($params[1])
        ) {
            $HomeController->showError('No existen parametros');
        } else {
            $HomeController->comprar($params[1]);
        }
        break;
    case 'Filter':
        $HomeController->showFiltrado();
        break;
    case 'Login':
        $LoginController->showLogin();
        break;
    case 'Verify':
        $LoginController->login();
        break;
    case 'Logout':
        $LoginController->logout();
        break;
    case 'SignUp':
        $LoginController->showSignUp();
        break;
    case 'VerifySignUp':
        $LoginController->SignUp();
        break;
    case 'buscar':
        //Borrar una tarea de la DB
        $HomeController->buscarProduct();
        break;
    default:
        $HomeController->showError('Error: ruta incorrecta');
}
