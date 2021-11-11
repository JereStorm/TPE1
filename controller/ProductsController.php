<?php
// -------- HELPER
require_once 'helpers/LoginHelper.php';
// -------- PRODUCTOS
require_once 'view/ProductsView.php';
require_once 'model/ProductsModel.php';
// -------- TIPOS PRODUCTOS
require_once 'model/TypeProdModel.php';

class ProductsController
{
    private $TypeProdModel;
    private $model;
    private $view;
    private $LoginHelper;

    public function __construct()
    {
        $this->TypeProdModel = new TypeProdModel();
        $this->model = new ProductsModel();
        $this->view = new ProductsView();
        $this->LoginHelper = new LoginHelper();
    }

    function showProducts()
    {
        $this->LoginHelper->checkLoggedIn(CLIENT); // REVISION DE AUTORIZACION
        $this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION
        
        $types = $this->TypeProdModel->getAll();
        $products = $this->model->getAll();

        $this->view->renderProducts($products, $types);
    }

    function showEditProduct($id)
    {
        $verificado = $this->model->visarIdProd($id);

        if (empty($verificado->val)) {
            $this->view->renderError('identificador erroneo');
            die();
        }

        $product = $this->model->getOne($id);
        $types = $this->TypeProdModel->getAll();
        $this->view->renderEditProduct($product, $types);
    }

    //-------- ADD

    function addProduct()
    {
        $this->LoginHelper->checkLoggedIn(USER); // REVISION DE AUTORIZACION
        $this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION

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
        $this->model->insert($nombre, $precio, $tipo);

        //RENDERIZADO
        header('Location:' . BASE_URL . 'Home/Producto');
    }

    //------------- DEL

    function delProduct($id)
    {
        $this->LoginHelper->checkLoggedIn(USER); // REVISION DE AUTORIZACION
        $this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION

        //VALIDACION
        $verificado = $this->model->visarIdProd($id);

        if (empty($verificado->val)) {
            $this->view->renderError('identificador erroneo');
            die();
        }

        $conteo = $this->model->contarReferencia($id);

        if (empty($conteo->val)) {
            $execute = $this->model->delete($id);
            header('Location:' . BASE_URL . 'Home/Producto');
        } else {
            $this->view->renderError('No puede borrar dado que hay STOCK asociado a este elemento... borre primero este e intente de nuevo');
        }
    }

    // ---------- EDIT

    function editProduct()
    {
        $this->LoginHelper->checkLoggedIn(USER); // REVISION DE AUTORIZACION
        $this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION

        // VALIDACION
        if ((!isset($_REQUEST['producto']) || empty($_REQUEST['producto'])) ||
            (!isset($_REQUEST['precio']) || empty($_REQUEST['precio'])) ||
            (!isset($_REQUEST['tipo']) || $_REQUEST['tipo'] == 'false')
        ) {
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
        $this->model->update($nombre, $precio, $tipo, $id);

        //RENDERIZADO
        header('Location:' . BASE_URL . 'Home/Producto');
    }
}
