<?php

class TypeProdView{
    
    private $smarty;
    
    public function __construct(){
        $this -> smarty = new Smarty();
        $this -> smarty -> assign('base', BASE_URL);
        $this -> smarty -> assign('title', 'TPETomiJere');
    }

    function renderTypesProd($types){
        $this -> smarty -> assign ('productos', $types);

        $this -> smarty -> assign('value_tipo', '');
        $this -> smarty -> assign('value_descripcion', '');
        $this -> smarty -> assign('value_id', '');

        $this -> smarty -> assign('URL', 'TipoProducto');

        $this -> smarty -> display('templates/homeTable.tpl');
    }

    function renderEditTypeProduct($typeProduct){
        // $this -> smarty -> assign('types', $types);

        $this -> smarty -> assign('value_tipo', $typeProduct->Tipo);
        $this -> smarty -> assign('value_descripcion', $typeProduct->Descripción);
        $this -> smarty -> assign('value_id', $typeProduct->id);


        $this -> smarty -> assign('URL', 'TipoProducto');

        $this -> smarty -> display('templates/homeEdit.tpl');
    }

    function renderError($texto){
        $this -> smarty -> assign('texto', $texto);

        $this -> smarty -> display('templates/error.tpl');
    }
}