<?php

require_once ('controller/ProductsController.php');

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//probando II merge

if (!empty($_GET['action'])){
    $action = $_GET['action'];
}
else {
    $action = 'home';
}

$params = explode('/', $action);

$controller = new ProductsController();

switch($params[0]){
    case 'home':
        $controller -> showHome();
    break;
}