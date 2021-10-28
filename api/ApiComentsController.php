<?php

require_once 'model/ComentsModel.php';
require_once 'api/ApiView.php';



class ApiComentsController
{
    private $model;
    private $view;

    function __construct()
    {
        // $this->model = new ComentsModel();
        $this->view = new ApiView();
    }

    function getAll($params = null)
    {
        $coments = $this->model->getAllComents();

        $this->view->response($coments);
    }

    function getOne($params = null)
    {
        $id = $params[':ID'];
        $coment = $this->model->getOneComent($id);

        if ($coment) {
            $this->view->response($coment);
        } else {
            $this->view->response('Comentario id=' . $id . ' Not Found', 404);
        }
    }

    function delete($params = null)
    {
        $id = $params[':ID'];
        $coment = $this->model->getOneComent($id);

        if ($coment) {
            $this->model->delComent($id);
            $this->view->response('Comentario id=' . $id . ' Delete successfuly');
        } else {
            $this->view->response('Comentario id=' . $id . ' Not Found', 404);
        }
    }
}
