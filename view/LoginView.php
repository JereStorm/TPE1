<?php

require_once 'libs/Smarty.class.php';

class LoginView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
        $this->smarty->assign('title', 'TPETomiJere');
    }

    function renderLogin($error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }
  
}