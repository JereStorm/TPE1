<?php
// -------- HELPER
require_once 'helpers/LoginHelper.php';
// -------- PRODUCTOS
require_once 'view/AdminView.php';
require_once 'model/AdminModel.php';

class AdminController
{
    private $model;
    private $view;
    private $LoginHelper;

    public function __construct()
    {
        $this->model = new AdminModel();
        $this->view = new AdminView();
        $this->LoginHelper = new LoginHelper();
    }

    function showAdmin()
    {
        $this->LoginHelper->checkLoggedIn(ADMIN);
        $users = $this->model->getAll();
        $this->view->renderUsers($users);
    }

    function showEditUser($id)
    {
        //$this->LoginHelper->checkLoggedIn(1);
        $this->LoginHelper->checkLoggedIn(ADMIN);

        $verificado = $this->model->visarIdUser($id);
        if (empty($verificado->val)) {
            $this->view->renderError('identificador erroneo');
            die();
        }
        $user = $this->model->getOne($id);
        $this->view->renderEditUser($user);
    }

    //-------- ADD
    /*
    function addProduct()
    {
        $this->LoginHelper->checkLoggedIn();

        // VALIDACION
        if ((!isset($_REQUEST['producto']) || empty($_REQUEST['producto'])) ||
            (!isset($_REQUEST['precio']) || empty($_REQUEST['precio'])) ||
            (!isset($_REQUEST['tipo']) || $_REQUEST['tipo'] == 'false')
        ) {
            $this->view->renderError('No se pudo agregar el producto por falta de parametros');
            die();
        }

        //SETEO DE DATOS
        $nombre = $_REQUEST['producto'];
        $precio = $_REQUEST['precio'];
        $tipo = $_REQUEST['tipo'];

        //INSERCION
        $this->model->insertProduct($nombre, $precio, $tipo);

        //RENDERIZADO
        header('Location:' . BASE_URL . 'Home/Producto');
    }*/

    //------------- DEL

    function delUser($id)
    {
        $this->LoginHelper->checkLoggedIn(ADMIN);

        //VALIDACION
        $verificado = $this->model->visarIdUser($id);

        // var_dump($verificado);
        // die();
        if (empty($verificado->val)) {
            $this->view->renderError('identificador erroneo');
            die();
        }
        $execute = $this->model->delUser($id);
        header('Location:' . BASE_URL . 'Home/Admin');
    }

    // ---------- EDIT

    function editUser()
    {
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
