<?php
// -------- HELPER
require_once 'helpers/LoginHelper.php';
require_once 'helpers/RenderErrorHelper.php';

// -------- PRODUCTOS
require_once 'view/AdminView.php';
require_once 'model/AdminModel.php';

class AdminController
{
    private $model;
    private $view;
    private $LoginHelper;
    private $error;

    public function __construct()
    {
        $this->model = new AdminModel();
        $this->view = new AdminView();
        $this->LoginHelper = new LoginHelper();
        $this->error = new RenderErrorHelper();
    }

    function showAdmin()
    {
        //BARRERA
        $this->LoginHelper->checkLoggedIn(ADMIN);

        $users = $this->model->getAll();
        $this->view->renderUsers($users);
    }

    function showEditUser($id)
    {
        //$this->LoginHelper->checkLoggedIn(1);
        //BARRERA
        $this->LoginHelper->checkLoggedIn(ADMIN);

        $verificado = $this->model->visarIdUser($id);
        if (empty($verificado->val)) {
            $this->view->renderError('identificador erroneo');
            die();
        }
        $user = $this->model->getOne($id);
        $this->view->renderEditUser($user);
    }

    //------------- DEL

    function delUser($id)
    {
        //BARRERA
        $this->LoginHelper->checkLoggedIn(ADMIN);

        //VALIDACION
        $user = $this->model->getOne($id);
        $response = $this->model->valAdmin();


        if ($response->cant == 1 && $user->Rol == 1) {
            $this->error->renderError('No se pudo borrar por falta de ADMINS');
            die();
        }
        $execute = $this->model->delUser($id);
        header('Location:' . BASE_URL . 'Home/Admin');
    }

    // ---------- EDIT

    function editUser()
    {
        //BARRERA
        $this->LoginHelper->checkLoggedIn(ADMIN);

        // VALIDACION
        if (!isset($_REQUEST['email']) || empty($_REQUEST['password'])) {
            $this->view->renderError('No se pudo editar el producto por falta de parametros');
            die();
        }

        if (!isset($_REQUEST['id']) || empty($_REQUEST['id'])) {
            $this->view->renderError('No se pudo editar el producto por falta de id');
            die();
        }

        //SETEO DE DATOS
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['producto'];
        $precio = $_REQUEST['precio'];
        $tipo = $_REQUEST['tipo'];

        //UPDATEO
        $this->model->updateProduct($nombre, $precio, $tipo, $id);

        //RENDERIZADO
        header('Location:' . BASE_URL . 'Home/Producto');
    }
}
