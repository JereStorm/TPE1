<?php
// -------- HELPER
require_once 'helpers/LoginHelper.php';
// -------- PRODUCTOS
require_once 'view/TypeProdView.php';
require_once 'model/TypeProdModel.php';

class TypeProdController
{

    private $model;
    private $view;
    private $LoginHelper;

    function __construct()
    {
        $this->model = new TypeProdModel();
        $this->view = new TypeProdView();
        $this->LoginHelper = new LoginHelper();
    }

    // ---------- SHOWS

    function showTypeProd()
    {
        $types = $this->model->getAllTypes();

        $this->view->renderTypesProd($types);
    }

    function showEditTypeProd($id)
    {
        //para completar
        $verificado = $this->model->visarIdTypeProd($id);

        if (empty($verificado->val)) {
            $this->view->renderError('identificador erroneo');
            die();
        }

        $typeProduct = $this->model->getOneTypeProduct($id);

        $types = $this->model->getAllTypes();

        $this->view->renderEditTypeProduct($typeProduct);
    }

    // --------- ADD

    function addTypeProd()
    {
        $this->LoginHelper->checkLoggedIn();

        // VALIDACION
        if ((!isset($_REQUEST['tipo']) || empty($_REQUEST['tipo'])) ||
            (!isset($_REQUEST['descripcion']) || empty($_REQUEST['descripcion']))
        ) {
            $this->view->renderError('No se pudo agregar el producto por falta de parametros');
            die();
        }

        //SETEO DE DATOS
        $tipo = $_REQUEST['tipo'];
        $descrip = $_REQUEST['descripcion'];

        //INSERCION
        $this->model->insertTypeProd($tipo, $descrip);

        //RENDERIZADO
        header('Location:' . BASE_URL . 'Home/TipoProducto');
    }

    // -------- DELETE

    function delTypeProd($id)
    {
        $this->LoginHelper->checkLoggedIn();

        //VALIDACION
        $verificado = $this->model->visarIdTypeProd($id);

        if (empty($verificado->val)) {
            $this->view->renderError('identificador erroneo');
            die();
        }

        $conteo = $this->model->contarReferencia($id);

        if (empty($conteo->val)) {
            $this->model->delTypeProd($id);
            header('Location:' . BASE_URL . 'Home/TipoProducto');
        } else {
            $this->view->renderError('No puede borrar dado que hay (' . $conteo->val . ') elementos... borre primero estos e intente de nuevo');
        }
    }

    // ----------- EDIT 

    function editTypeProd()
    {
        $this->LoginHelper->checkLoggedIn();

        // VALIDACION
        if ((!isset($_REQUEST['tipo']) || empty($_REQUEST['tipo'])) ||
            (!isset($_REQUEST['descripcion']) || empty($_REQUEST['descripcion']))
        ) {
            $this->view->renderError('No se pudo agregar el producto por falta de parametros');
            die();
        }

        if (!isset($_REQUEST['id']) || empty($_REQUEST['id'])) {
            $this->view->renderError('No se pudo agregar el producto por falta de id');
            die();
        }

        //SETEO DE DATOS
        $id = $_REQUEST['id'];
        $tipo = $_REQUEST['tipo'];
        $descrip = $_REQUEST['descripcion'];

        //UPDATE
        $this->model->updateTypeProd($tipo, $descrip, $id);

        //RENDERIZADO
        header('Location:' . BASE_URL . 'Home/TipoProducto');
    }
}
