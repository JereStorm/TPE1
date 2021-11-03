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
        $_SESSION['USER_EMAIL'] = $user->Usuario;
        $_SESSION['USER_ROL'] = $user->Rol;
        $_SESSION['LAST_ACTIVITY'] = time();
    }

    public function checkLoggedIn($rol)
    {

        if (empty($_SESSION['USER_ID'])) {
            header("Location: " . BASE_URL . 'Login');
            die();
        } else if ($_SESSION['USER_ROL'] > $rol) {
            $this->viewError->renderError("Usted no tiene permisos suficientes");
            die();
        }
    }
    public function checkTimeLogin()
    {
        if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > SESSIONTIME)) { 
                session_destroy(); // destruye la sesión, y vuelve al login
                header("Location: " . BASE_URL.'Login');
        } 
        $_SESSION['LAST_ACTIVITY'] = time(); // actualiza el último instante de actividad
        
        
    }

    function logout()
    {
        session_destroy();
        header("Location: " . BASE_URL);
    }
}
