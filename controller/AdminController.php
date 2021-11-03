<?php
// -------- HELPER
require_once 'helpers/LoginHelper.php';
require_once 'helpers/RenderErrorHelper.php';

// -------- PRODUCTOS
require_once 'view/AdminView.php';
require_once 'model/UserModel.php';

// COmentando

class AdminController
{
    private $model;
    private $view;
    private $LoginHelper;
    private $error;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->view = new AdminView();
        $this->LoginHelper = new LoginHelper();
        $this->error = new RenderErrorHelper();
    }

    function showAdmin()
    {
        //BARRERA
        $this->LoginHelper->checkLoggedIn(ADMIN); // REVISION DE AUTORIZACION
        $this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION

        $users = $this->model->getAll();
        $this->view->renderUsers($users);
    }

    function showEditUser($id, $error = NULL)
    {
        //BARRERA
        $this->LoginHelper->checkLoggedIn(ADMIN); // REVISION DE AUTORIZACION
        $this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION

        $verificado = $this->model->visarIdUser($id);
        if (empty($verificado->val)) {
            $this->view->renderError('identificador erroneo');
            die();
        }
        $user = $this->model->getOne($id);
        $this->view->renderEditUser($user, $error);
    }

    //------------- DEL

    function delUser($id)
    {
        //BARRERA
        $this->LoginHelper->checkLoggedIn(ADMIN); // REVISION DE AUTORIZACION
        $this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION

        //VALIDACION
        $user = $this->model->getOne($id);
        $response = $this->model->valAdmin();


        if ($response->cant == 1 && $user->Rol == 1) {
            $this->error->renderError('No se pudo borrar por falta de ADMINS');
            die();
        }
        $execute = $this->model->delete($id);
        header('Location:' . BASE_URL . 'Home/Admin');
    }

    // ---------- EDIT

    function editUser()
    {
        //BARRERA
        $this->LoginHelper->checkLoggedIn(ADMIN); // REVISION DE AUTORIZACION
        $this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION

        // VALIDACION
        if (
            empty($_REQUEST['email'])
            || empty($_REQUEST['rol'])
        ) {
            $this->view->renderError('No se pudo editar el producto por falta de parametros');
            die();
        }

        if ($_REQUEST['password'] != $_REQUEST['password2']) {
            $this->showEditUser($_REQUEST['id'], "Error: las contraseñas no coinciden");
            die();
        } else if (!empty($_REQUEST['password'])) {
            $password = $_REQUEST['password'];
            $password = password_hash($password, PASSWORD_BCRYPT);
        } else {
            $password = $_REQUEST['password'];
        }

        //SETEO DE DATOS
        $id = $_REQUEST['id'];
        $email = $_REQUEST['email'];
        $rol = $_REQUEST['rol'];

        //VALIDACION
        $user = $this->model->getOne($id);
        $response = $this->model->valAdmin();

        if ($response->cant == 1 && $user->Rol == 1 && $rol != $user->Rol) {
            $this->error->renderError('No se pudo editar por falta de ADMINS');
            die();
        }
        //UPDATEO
        $this->model->update($email, $password, $rol, $id);

        //RENDERIZADO
        header('Location:' . BASE_URL . 'Home/Admin');
    }
}
