<?php

require_once 'libs/Router.php';
require_once 'api/ApiComentsController.php';

//creamos el router
$router = new Router();

//definimos la tabla (  $router->addRoute(RECURSO, METODO, CLASSE, FUNCION)  )
$router->addRoute('coments', 'GET', 'ApiComentsController', 'getAll');
$router->addRoute('coments/:ID', 'GET', 'ApiComentsController', 'getOne');
$router->addRoute('coments/:ID', 'DELETE', 'ApiComentsController', 'delete');
//$router->addRoute('productos', 'POST', 'ApiComentsController', 'add');
//$router->addRoute('productos/:ID', 'UPDATE', 'ApiComentsController', 'update');

// ruteo
$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resourse, $method);
