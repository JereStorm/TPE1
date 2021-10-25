<?php

require_once 'libs/Router.php';
require_once 'api/apiProductsController.php';

$router = new Router();

// tabla de ruteo
$router->addRoute('Products', 'GET', 'apiProductsController', 'getAll');
$router->addRoute('Products/:ID', 'GET', 'apiProductsController', 'getOne');

// ruteo
$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resourse, $method);