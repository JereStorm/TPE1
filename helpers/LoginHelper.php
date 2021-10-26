<?php
require_once 'helpers/RenderErrorHelper.php';
class LoginHelper
{
    private $viewError;

    function __construct()
    {
        $this->viewError = new RenderErrorHelper();
        // abre la sessión siempre para usar el helper
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public function login($user)
    {
        $_SESSION['USER_ID'] = $user->id;
        $_SESSION['USER_EMAIL'] = $user->email;
        $_SESSION['USER_ROL'] = $user->rol;
    }

    public function checkLoggedIn($rol)
    {
        
        if (empty($_SESSION['USER_ID'])) {
            header("Location: " . BASE_URL . 'Login');
            die();
        } else if ($_SESSION['USER_ROL'] > $rol){
            $this->viewError->renderError("Usted no tiene permisos suficientes");
            die();
        }

    }

    function logout()
    {
        session_destroy();
        header("Location: " . BASE_URL);
    }
}
