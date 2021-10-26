<?php
require_once 'model/ProductsModel.php';
require_once 'api/apiView';

class apiProductsController{
    private $model;
    private $view;
    private $data;

    function __construct(){
        $this->model = new ProductsModel();
        $this->view = new ApiView();
        $this->data = file_get_contents("php://input");
    }

    public function getAll($params = NULL){
        $products = $this->model->getAllProducts();
        $this->view->response($products, 200);
    }

    public function getOne($params = NULL){
        $id = $params[':ID'];
        $task = $this->model->getOneProduct($id);

        if ($task)
            $this->view->response($task, 200);
        else
            $this->view->response("Task id=$id not found", 404);

    }
}