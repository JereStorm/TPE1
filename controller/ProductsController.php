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

    // ---------- MOSTRAR TODOS LOS PRODUCTOS

    function showProducts()
    {
        $this->LoginHelper->checkLoggedIn(CLIENT); // REVISION DE AUTORIZACION
        $this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION
        
        $types = $this->TypeProdModel->getAll();
        $products = $this->model->getAll();

        $this->view->renderProducts($products, $types);
    }

    // --------- MOSTRAR LA EDICION DE PRODUCTO

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

        // SI NO SE ACTUALIZÓ LA IMAGEN QUEDA LA QUE YA TENIA GUARDADA
        if (!isset($_FILES['imagesToUpload']['name']) || empty($_FILES['imagesToUpload']['name']) )
             $path = $_REQUEST['imagen_original'];

        //VERIFICA EL FORMATO DE LA IMAGEN
        elseif($_FILES['imagesToUpload']['type'] == "image/jpg" || $_FILES['imagesToUpload']['type'] == "image/jpeg" || $_FILES['imagesToUpload']['type'] == "image/png"){
            $image = $_FILES['imagesToUpload']['tmp_name']; 
            $path = IMG_PATH . uniqid("", true) . "." .  strtolower(pathinfo($_FILES['imagesToUpload']['name'], PATHINFO_EXTENSION));
        }        
        else
            $this->view->renderError('El formato de imagen es incorrecto');     

        //SETEO DE DATOS
        $nombre = $_REQUEST['producto'];
        $precio = $_REQUEST['precio'];
        $tipo = $_REQUEST['tipo'];

        //INSERCION
        $this->model->insert($nombre, $precio, $tipo, $image, $path);

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

            $productoToDelete = $this->model->getOne($id);

            $execute = $this->model->delete($id);
            
            //ELIMINA IMAGEN ASOCIADA SI ES QUE LA TIENE
            if($productoToDelete->img_path!=IMAGE_DEFAULT)
                unlink($productoToDelete->img_path);

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

        // SI NO SE ACTUALIZÓ LA IMAGEN QUEDA LA QUE YA TENIA GUARDADA
        if (!isset($_FILES['imagesToUpload']['name']) || empty($_FILES['imagesToUpload']['name']) )
            $path = $_REQUEST['imagen_original'];
        
        //VERIFICA EL FORMATO DE LA IMAGEN
        elseif($_FILES['imagesToUpload']['type'] == "image/jpg" || $_FILES['imagesToUpload']['type'] == "image/jpeg" || $_FILES['imagesToUpload']['type'] == "image/png"){
            $image = $_FILES['imagesToUpload']['tmp_name']; 
            $path = IMG_PATH . uniqid("", true) . "." .  strtolower(pathinfo($_FILES['imagesToUpload']['name'], PATHINFO_EXTENSION));
        }        
        else
            $this->view->renderError('El formato de imagen es incorrecto');
        
        // ELIMINA LA IMAGEN ANTIGUA EN CASO QUE SE SUBA UNA NUEVA
        $path_image = explode('/', $_REQUEST['imagen_original']);
        if($path_image[2]!=['imagesToUpload']['name'])
            unlink($_REQUEST['imagen_original']);

        //SETEO DE DATOS
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['producto'];
        $precio = $_REQUEST['precio'];
        $tipo = $_REQUEST['tipo'];

        //UPDATEO
        $this->model->update($nombre, $precio, $tipo, $id, $image, $path);

        //RENDERIZADO
        header('Location:' . BASE_URL . 'Home/Producto');
    }

}
