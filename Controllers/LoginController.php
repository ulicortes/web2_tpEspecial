<?php
    require_once './Models/UserModel.php';
    require_once './Views/LoginView.php';
    require_once './Views/HomeView.php';
   

    class LoginController {

        private $model;
        private $view;
        private $homeView;
        

        function __construct(){
            $this->model = new UserModel();
            $this->view = new LoginView();
            $this->homeView = new HomeView();            
        }

        function mostrarLogin() {
            $this->view->mostrarLoginForm(null);
        }

        function mostrarRegistro() {
            $this->view->mostrarRegistroForm();
        }

        function enviarRegistro() {
            if(!empty($_POST['nombre']) && !empty($_POST['apellido'] && !empty($_POST['email']) && !empty($_POST['usuario']) && !empty($_POST['contraseña']))){
                $this->model->sendRegistro($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['usuario'], $_POST['contraseña']);
               // $this->view->mostrarLoginForm('Su registro se ha completado con exito, utilice los datos cargados previamente para iniciar sesion');
               session_start();
               $_SESSION["usuario"] = $_POST['usuario']; 
               $_SESSION["role"] = 0;                   
               $this->homeView->showHome();  
            }
        }

        function verificarLogin() {
            if (!empty($_POST['usuario']) && !empty($_POST['contraseña'])) {
                $usuario = $_POST['usuario'];
                $password = $_POST['contraseña'];     
               
                $user = $this->model->obtenerUsuario($usuario);         
                
                if ($user && password_verify($password, ($user->Contraseña))) {
    
                    session_start();
                    $_SESSION["usuario"] = $user->Usuario;  
                    $_SESSION["role"] = $user->Admin;   
                    $_SESSION["id"] = $user->id_usuario;          
                    header("Location: ".BASE_URL."home");                 

                } else {
                    $this->view->mostrarLoginForm("El nombre del usuario o la contraseña son incorrectos, intentelo nuevamente");
                }
            }
            else{
                $this->view->mostrarLoginForm("Falta ingresar algun dato, intentelo nuevamente");
            }
        }

        function logout(){
            session_start();
            session_destroy();
            $_SESSION['usuario'] = '';
            $this->view->mostrarLoginForm("Tu sesión ha sido cerrada.
            ¡Gracias por utilizar nuestro servicio!");
        }
    }