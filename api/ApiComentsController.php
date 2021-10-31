<?php

require_once 'model/ComentsModel.php';
require_once 'api/ApiView.php';



class ApiComentsController
{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new ComentsModel();
        $this->view = new ApiView();
    }

    function getAll($params = null)
    {
        $coments = $this->model->getAll();

        // $this->view->response($coments);
    }

    function getOne($params = null)
    {
        $id = $params[':ID'];
        $coment = $this->model->getOne($id);

        if ($coment) {
            // $this->view->response($coment);
        } else {
            $this->view->response('Comentario id=' . $id . ' Not Found', 404);
        }
    }

    function delete($params = null)
    {
        $id = $params[':ID'];
        $coment = $this->model->getOne($id);

        if ($coment) {
            $this->model->delete($id);
            $this->view->response('Comentario id=' . $id . ' Delete successfuly', 200);
        } else {
            $this->view->response('Comentario id=' . $id . ' Not Found', 404);
        }
    }
}
