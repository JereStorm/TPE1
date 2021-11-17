<?php

require_once 'model/ComentsModel.php';
require_once 'api/ApiView.php';
require_once 'helpers/LoginHelper.php';



class ApiComentsController
{
    private $model;
    private $view;
    private $data;
    private $loginHelper;

    function __construct()
    {
        $this->model = new ComentsModel();
        $this->view = new ApiView();
        $this->loginHelper = new LoginHelper();
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
        $this->loginHelper->checkLoggedIn(ADMIN); // REVISION DE AUTORIZACION

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
