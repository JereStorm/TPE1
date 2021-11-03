<?php
// -------- HELPER
require_once 'helpers/LoginHelper.php';
// -------- STOCK
require_once 'view/StockView.php';
require_once 'model/StockModel.php';
// -------- PRODUCTOS
require_once 'model/ProductsModel.php';

class StockController
{

    private $ProductsModel;
    private $model;
    private $view;
    private $LoginHelper;

    public function __construct()
    {
        $this->ProductsModel = new ProductsModel();
        $this->model = new StockModel();
        $this->view = new StockView();
        $this->LoginHelper = new LoginHelper();
    }

    //---------- SHOW

    function showStock()
    {
        $this->LoginHelper->checkLoggedIn(CLIENT); // REVISION DE AUTORIZACION
        $this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION
        
        $products = $this->ProductsModel->getAll();

        $stock = $this->model->getAll();

        $this->view->renderStock($products, $stock);
    }

    function showEditStock($id)
    {
        $this->LoginHelper->checkLoggedIn(USER);
        $verificado = $this->model->visarIdStock($id);

        if (empty($verificado->val)) {
            $this->view->renderError('identificador erroneo');
            die();
        }

        $product = $this->model->getOne($id);
        $products = $this->ProductsModel->getAll();

        $this->view->renderEditProduct($products, $product);
    }
    //---------- ADD

    function addStock()
    {
        $this->LoginHelper->checkLoggedIn(USER); // REVISION DE AUTORIZACION
        $this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION

        // VALIDACION
        if ((!isset($_REQUEST['producto']) || empty($_REQUEST['producto']))) {
            $this->view->renderError('No se pudo agregar el producto por falta de parametros');
            die();
        }

        //SETEO DE DATOS
        $producto_id = $_REQUEST['producto'];
        $cantidad = $_REQUEST['cantidad'];

        //CONSULTA SI EL PRODUCTO EXISTE EN EL STOCK 
        $prod_unico = $this->model->getOneStockIdProd($producto_id);

        // var_dump($prod_unico);
        // die();

        if ($prod_unico != false) {
            $cantidad_tot = $prod_unico->cantidad + $cantidad;
            $this->model->update($prod_unico->id_stock, $cantidad_tot);
            header('Location:' . BASE_URL . 'Home/Stock');
        } else {
            $this->model->insert($producto_id, $cantidad);
            header('Location:' . BASE_URL . 'Home/Stock');
        }
    }

    //------------- DEL

    function delStock($id)
    {
        $this->LoginHelper->checkLoggedIn(USER); // REVISION DE AUTORIZACION
        $this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION

        //VALIDACION
        $verificado = $this->model->visarIdStock($id);

        if (empty($verificado->val)) {
            $this->view->renderError('identificador erroneo');
            die();
        }

        $execute = $this->model->delete($id);

        header('Location:' . BASE_URL . 'Home/Stock');
    }


    // ---------- EDIT

    function editStock()
    {
        $this->LoginHelper->checkLoggedIn(USER); // REVISION DE AUTORIZACION
        $this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION

        //SETEO DE DATOS
        $id = $_REQUEST['producto'];
        $cantidad = $_REQUEST['cantidad'];

        //UPDATEO
        $this->model->update($id, $cantidad);

        //RENDERIZADO
        header('Location:' . BASE_URL . 'Home/Stock');
    }
}
