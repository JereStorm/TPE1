<?php
// require_once "./Model/UserModel.php";
require_once "api/ApiView.php";
require_once "helpers/ApiLoginHelper.php";

class ApiUserController
{

    // private $model;
    private $view;
    private $apiLoginHelper;

    function __construct()
    {
        // $this->model = new UserModel();
        $this->view = new ApiView();
        $this->apiLoginHelper = new ApiLoginHelper();
    }

    function obtenerToken($params = null)
    {
        $userpass = $this->apiLoginHelper->getBasic();
        // Obtengo el usuario de la base de datos
        // $user = $this->model->getUser($email);
        $user = array("user" => $userpass["user"]);

        // Si el usuario existe y las contraseñas coinciden
        if (true/*$user && password_verify($password, $user->password)*/) {
            $token = $this->apiLoginHelper->createToken($user);

            // devolver un token
            $this->view->response(["token" => $token], 200);
        } else {
            $this->view->response("Usuario y contraseña incorrectos", 401);
        }
    }

    function obtenerUsuario($params = null)
    {
        // users/:ID
        $id = $params[":ID"];
        $user = $this->apiLoginHelper->getUser();
        if ($user)
            if ($id == $user->sub) {
                $this->view->response($user, 200);
            } else {
                $this->view->response("Forbidden", 403);
            }
        else {
            $this->view->response("Unauthorized", 401);
        }
    }
}
