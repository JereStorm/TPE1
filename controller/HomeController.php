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
        //paginado de productos
        if (!isset($_GET['pagina']))
            $pagina = 1;
        else
            $pagina = $_GET['pagina'];

        // cuenta la cantidad de productos
        $cant_prod = $this->ProductsModel->countProd();
        $cant_prod = $cant_prod->cant;

        // item inicial de la pagina
        $inicio = ($pagina - 1) * ITEMS_BY_PAGE;

        // calcula la cantidad de paginas que van a haber
        $cant_pag = ceil($cant_prod / ITEMS_BY_PAGE);

        $types = $this->TypeProdModel->getAll();
        $products = $this->ProductsModel->getPage($inicio);

        //CARGO EL STOCK
        $products = $this->cargarStockInProd($products);

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

        $types = $this->TypeProdModel->getAll();

        $this->view->renderHome($filtradas, $types);
    }

    function showError($texto)
    {
        $this->view->renderError($texto);
    }

    // ACA SE TRABAJA EL DETALLE DEL PRODUCTO
    function showDetail($id)
    {

        $product = $this->ProductsModel->getOne($id);
        $stock = $this->StockModel->getOneStockIdProd($product->id);

        if ($stock == false || $stock->cantidad == NULL || $stock->cantidad == 0) {
            $product->stock = "Agotado";
        } else {
            $product->stock = $stock->cantidad;
        }

        if (empty($product)) {
            $this->view->renderError('Producto inexistente');
            die();
        }
        //OBTENER DEL MODELO EL PRODUCTO COMPLETO
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

        $types = $this->TypeProdModel->getAll();

        if (empty($productsBuscadas)) {
            $this->view->renderError('No se han encontrado productos');
            die();
        } else {
            $this->view->renderHome($productsBuscadas, $types);
        }
    }
}
