<?php

require_once 'libs/Router.php';
require_once 'api/ApiComentsController.php';

//creamos el router
$router = new Router();

//definimos la tabla (  $router->addRoute(RECURSO, METODO, CLASSE, FUNCION)  )
$router->addRoute('coments/producto/:ID', 'GET', 'ApiComentsController', 'getAll');
$router->addRoute('coments/:ID', 'DELETE', 'ApiComentsController', 'delete');
$router->addRoute('coments', 'POST', 'ApiComentsController', 'add');
$router->addRoute('coments/producto/:ID/filter', 'GET', 'ApiComentsController', 'filter');

// ruteo
$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resource, $method);
