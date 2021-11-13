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
        if (!isset($params[':ID'])) {
            $this->view->response('Comentario Not Found', 404);
        }
        $coments = $this->model->getAll($params[':ID']);

        $this->view->response($coments, 200);
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
