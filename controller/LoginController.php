<?php
require_once 'model/UserModel.php';
require_once 'view/LoginView.php';
require_once 'helpers/LoginHelper.php';

class LoginController
{
    private $model;
    private $view;
    private $LoginHelper;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->view = new LoginView();
        $this->LoginHelper = new LoginHelper();
    }

    public function showLogin()
    {
        $this->view->renderLogin();
    }

    /**
     * Verifica si los datos del user son correctos
     */
    function login()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];

            // Obtengo el usuario de la base de datos
            $user = $this->model->getUser($email);

            // Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($password, $user->password)) {
                // armo la sesion del usuario
                $this->LoginHelper->login($user);
                header("Location: " . BASE_URL);
            } else {
                $this->view->renderLogin("Usuario o contraseña inválida");
            }
        } else {
            $this->view->renderLogin("Usuario o contraseña vacios");
        }
    }

    public function logout()
    {
        $this->LoginHelper->logout();
    }
}
