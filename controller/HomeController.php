<?php
// HELPER
require_once 'helpers/LoginHelper.php';

// EXTERNOS
require_once 'model/ProductsModel.php';
require_once 'model/TypeProdModel.php';
require_once 'model/StockModel.php';

// INTERNOS
require_once 'view/HomeView.php';

class HomeController
{

    // EXTERNOS
    private $ProductsModel;
    private $TypeProdModel;
    private $StockModel;
    private $LoginHelper;


    // INTERNOS
    private $view;

    function __construct()
    {
        //EXTERNOS
        $this->TypeProdModel = new TypeProdModel();
        $this->ProductsModel = new ProductsModel();
        $this->StockModel = new StockModel();
        $this->LoginHelper = new LoginHelper();
        $this->view = new HomeView();
    }

    function showHome()
    {
        // cuenta la cantidad de productos
        $cant_prod = $this->ProductsModel->countProd();
        $cant_prod = $cant_prod->cant;

        // calcula la cantidad de paginas que van a haber
        $cant_pag = ceil($cant_prod / ITEMS_BY_PAGE);

        //paginado de productos
        if (!isset($_GET['pagina'])) {
            $pagina = 1;
        } elseif ($_GET['pagina'] < 1 || $_GET['pagina'] > $cant_pag) {
            $this->view->renderError('Parametros de paginacion incorrectos');
            die();
        } else {
            $pagina = $_GET['pagina'];
        }

        // item inicial de la pagina
        $inicio = ($pagina - 1) * ITEMS_BY_PAGE;

        $types = $this->TypeProdModel->getAll();

        $products = $this->ProductsModel->getPage($inicio);

        //CARGO EL STOCK
        $products = $this->cargarStockInProd($products);

        //VERIFICO QUE LAS IMAGENES EXISTAN Y SI NO CARGO UNA DEFAULT
        $products = $this->cargarImgProd($products);

        $this->view->renderHome($products, $types, $cant_pag);
    }


    private function cargarStockInProd($products)
    {
        foreach ($products as $item) {
            $stockProd = $this->StockModel->getOneStockIdProd($item->id);

            if ($stockProd == false) {
                $item->stock = false;
            } else {
                $item->stock = $stockProd->cantidad;
            }
        }
        return $products;
    }

    private function cargarImgProd($products)
    {
        foreach ($products as $item) {

            if (!file_exists($item->img_path)) {
                $item->img_path = IMAGE_DEFAULT_BROKE;
            }
        }
        return $products;
    }

    function showFiltrado()
    {

        if ($_REQUEST['tipo'] == 'false' || !isset($_REQUEST['tipo'])) {
            header("Location:" . BASE_URL);
            die();
        }

        $tipo = $_REQUEST['tipo'];
        $filtradas = $this->ProductsModel->filtrarProducts($tipo);

        //CARGO EL STOCK
        $filtradas = $this->cargarStockinProd($filtradas);

        //CARGO SUS IMAGENES 
        $filtradas = $this->cargarImgProd($filtradas);

        $types = $this->TypeProdModel->getAll();

        $this->view->renderHome($filtradas, $types);
    }

    function showError($texto)
    {
        $this->view->renderError($texto);
        die();
    }

    // ACA SE TRABAJA EL DETALLE DEL PRODUCTO
    function showDetail($id)
    {
        //OBTENER DEL MODELO EL PRODUCTO COMPLETO
        $product = $this->ProductsModel->getOne($id);

        // VERIFICAR SI EL PRODUCTO EXISTE
        if (empty($product)) {
            $this->view->renderError('Producto inexistente');
            die();
        }
        // OBTENER STOK DEL PRODUCTO
        $stock = $this->StockModel->getOneStockIdProd($product->id);

        if ($stock == false || $stock->cantidad == NULL || $stock->cantidad == 0) {
            $product->stock = "Agotado";
        } else {
            $product->stock = $stock->cantidad;
        }

        // VERIFICAR SI LA IMAGEN EXISTE LOCALMENTE
        if (!file_exists($product->img_path)) {
            $product->img_path = IMAGE_DEFAULT_BROKE;
        }

        $this->view->renderDetail($product);
    }

    function comprar($id)
    {
        $this->LoginHelper->checkLoggedIn(CLIENT); // REVISION DE AUTORIZACION
        $this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION

        $cantidad = $_REQUEST['cantidad'];
        $stock_by_prod = $this->StockModel->getOneStockIdProd($id);
        $cantidad_tot = $stock_by_prod->cantidad - $cantidad;
        $this->StockModel->update($stock_by_prod->id_stock, $cantidad_tot);
        $producto = $this->ProductsModel->getOne($id);
        $this->success($producto->Nombre, $cantidad);
    }

    function success($nombre, $cant)
    {
        $this->LoginHelper->checkLoggedIn(CLIENT); // REVISION DE AUTORIZACION
        $this->LoginHelper->checkTimeLogin(); // REVISION DE TIEMPO DE SESSION

        $this->view->renderSuccess('Usted ha comprado ' . $nombre . ' por una cantidad de (' . $cant . ')');
    }

    function buscarProduct()
    {
        if (!isset($_REQUEST['nombre']) || empty($_REQUEST['nombre'])) {
            $this->view->renderError('Debe ingresar algo para BUSCAR');
            die();
        }
        $product = $_REQUEST['nombre'];
        $product = '%' . $product . '%';

        $productsBuscadas = $this->ProductsModel->buscarProduct($product);

        //CARGO EL STOCK
        $productsBuscadas = $this->cargarStockInProd($productsBuscadas);

        //CARGO SUS IMAGENES 
        $productsBuscadas = $this->cargarImgProd($productsBuscadas);

        $types = $this->TypeProdModel->getAll();

        if (empty($productsBuscadas)) {
            $this->view->renderError('No se han encontrado productos');
            die();
        } else {
            $this->view->renderHome($productsBuscadas, $types);
        }
    }
}
