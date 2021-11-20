<?php

require_once 'model/ComentsModel.php';
require_once 'api/ApiView.php';
require_once 'helpers/ApiLoginHelper.php';



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
        $this->apiLoginHelper = new ApiLoginHelper();
    }

    function getAll($params = null)
    {
        $sql = 'SELECT c.*, u.email 
        FROM `comentario` AS c 
        INNER JOIN `usuario` AS u 
        ON c.`id_user_fk` = u.`id_user` 
        WHERE c.`id_prod_fk` = ?';

        if (!empty($params[':ORDEN']) && ($params[':ORDEN'] == 'ASC' || $params[':ORDEN'] == 'DESC')) {
            $sql = $sql . 'ORDER BY id_comen ' . $params[':ORDEN'];
        }

        if (!isset($params[':ID'])) {
            $this->view->response('Comentario Not Found', 404);
        }
        $coments = $this->model->getAll($params[':ID'], $sql);

        $this->view->response($coments, 200);
    }

    function delete($params = null)
    {
        // $verificado = $this->apiLoginHelper->apiCheckLoggedIn(ADMIN); // REVISION DE AUTORIZACION

        // if (!$verificado) {
        //     $this->view->response('No Permissions', 404);
        // }
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

    // function getOrder($params = null)
    // {
    //     $sql = 'SELECT c.*, u.email 
    //     FROM `comentario` AS c 
    //     INNER JOIN `usuario` AS u 
    //     ON c.`id_user_fk` = u.`id_user` 
    //     WHERE c.`id_prod_fk` = ?
    //     ORDER BY `id_comen` ';

    //     if (!empty($params[':ORDEN']) && ($params[':ORDEN'] == 'ASC' || $params[':ORDEN'] == 'DESC')) {
    //         $sql = $sql . $params[':ORDEN'];
    //     } else {
    //         $this->view->response('Comentario Not Found', 404);
    //     }

    //     if (!empty($params[':ID'])) {
    //         $this->view->response('Comentario Not Found', 404);
    //     }
    //     $coments = $this->model->getAllOrder($params[':ID'], $sql);

    //     $this->view->response($coments, 200);
    // }
}
