<?php

require_once 'model/ComentsModel.php';
require_once 'api/ApiView.php';


class ApiComentsController
{
    private $model;
    private $view;
    private $data;
    private $apiLoginHelper;

    function __construct()
    {
        $this->model = new ComentsModel();
        $this->view = new ApiView();
    }

    function getAll($params = null)
    {
        // $this->view->response($_GET, 200);
        // die();
        if (!isset($params[':ID'])) {
            $this->view->response('Comentario Not Found', 404);
        }

        if (isset($_GET['campo']) && $_GET['campo'] == 'puntaje') {
            $campo = $_GET['campo'];
        } else {
            $campo = 'id_comen';
        }

        if (isset($_GET['orden'])  && ($_GET['orden'] == 'ASC' || $_GET['orden'] == 'DESC')) {
            $order = $_GET['orden'];
            $coments = $this->model->getAll($params[':ID'], $campo, $order);
        } else {
            $coments = $this->model->getAll($params[':ID'], $campo);
        }
        $this->view->response($coments, 200);
    }

    function filter($params = null)
    {
        if (!isset($params[':ID'])) {
            $this->view->response('Comentario Not Found', 404);
        }
        if (
            isset($_GET['puntaje']) &&
            ($_GET['puntaje'] == 1 ||
                $_GET['puntaje'] == 2 ||
                $_GET['puntaje'] == 3 ||
                $_GET['puntaje'] == 4 ||
                $_GET['puntaje'] == 5)
        ) {
            $filter = $_GET['puntaje'];
            $filtradas = $this->model->filtrarComents($params[':ID'], $filter);
            $this->view->response($filtradas, 200);
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

    private function getBody()
    {
        $data = file_get_contents("php://input");
        return json_decode($data);
    }

    function add($params = null)
    {
        $data = $this->getBody();

        $mensaje = $data->mensaje;
        $fecha = $data->fecha;
        $puntaje = $data->puntaje;
        $id_prod = $data->id_prod_fk;
        //hay que ver como tomar el id del usuario
        $id_user = $data->id_user_fk;

        $id = $this->model->insert($mensaje, $fecha, $puntaje, $id_user, $id_prod);

        $coment = $this->model->getOne($id);

        if ($coment) {
            $this->view->response($coment, 200);
        } else {
            $this->view->response("El Comentario no fue creado", 500);
        }
    }
}
