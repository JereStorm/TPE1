<?php

require_once 'libs/Router.php';
require_once 'api/ApiComentsController.php';
require_once 'api/ApiUserController.php';

//creamos el router
$router = new Router();

//definimos la tabla (  $router->addRoute(RECURSO, METODO, CLASSE, FUNCION)  )
$router->addRoute('coments/producto/:ID', 'GET', 'ApiComentsController', 'getAll');
$router->addRoute('coments/:ID', 'DELETE', 'ApiComentsController', 'delete');
$router->addRoute('coments', 'POST', 'ApiComentsController', 'add');
$router->addRoute('coments/producto/:ID/filter', 'GET', 'ApiComentsController', 'filter');

$router->addRoute('users/token', 'GET', 'ApiUserController', 'obtenerToken');
$router->addRoute('users/:ID', 'GET', 'ApiUserController', 'obtenerUsuario');

// ruteo
$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resource, $method);
