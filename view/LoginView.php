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
        $this->smarty->assign('rute', 'logIn');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }
    
    function renderSignUp($error = null){
        $this->smarty->assign('rute', 'signUp');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }
  
}