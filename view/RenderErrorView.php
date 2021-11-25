<?php

require_once 'libs/Smarty.class.php';

class RenderErrorView
{

    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
        $this->smarty->assign('title', 'TPETomiJere');
    }

    function renderError($texto)
    {
        $this->smarty->assign('texto', $texto);
        $this->smarty->display('templates/error.tpl');
    }
}
