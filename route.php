<?php

    require_once './Controllers/HotelesController.php';
    require_once './Controllers/HabitacionesController.php';
    require_once './Controllers/HomeController.php';
    require_once './Controllers/LoginController.php';
    require_once './Controllers/UsuariosController.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if(!empty($_GET['action'])) {
        $action = $_GET['action'];
    }
    else {
        $action = 'home';
    }

    $homeController = new HomeController;
    $hotelesController = new HotelesController;
    $habitacionesController = new HabitacionesController;
    $loginController = new LoginController;
    $usuarioscontroller= new UsuariosController;

    $params = explode('/', $action);

    switch($params[0]) {
        case 'home': {
            $homeController->showhome();
            break;
        }

        case 'hoteles': 
            $hotelesController->showHoteles();
            break;

        case 'habitaciones': 
            if(!empty($params[1])){
                $habitacionesController->showHabitacionesPorHotel($params[1]);
                break;
            }
            else {
                $habitacionesController->showHabitaciones();
                break;
            }
            $habitacionesController->showHabitaciones($params[1]);
            break;

        case 'hotel': 
            $hotelesController->showHotel($params[1]);
            break;

        case 'agregar-hotel': 
            $hotelesController->createHotel();
            break;

        case 'habitacion': 
            $habitacionesController->showHabitacion($params[1]);
            break;

        case 'agregar-habitacion': 
            $habitacionesController->createHabitacion();
            break;
        
        case 'form': 
            $hotelesController->editarHotel($params[1]);
            break;

        case 'editar-hotel':
            $hotelesController->enviarHotelEditado($params[1]);
            break;

        case 'delete-hotel': 
            $hotelesController->deleteHotel($params[1]);
            break;
    
        case 'form-habitacion':        
            $habitacionesController->editHabitacion($params[1]);
            break;

        case 'ordenar':  
            $habitacionesController->ordenarhabitaciones();
            break;

        case 'busquedaavanzada':  
            $habitacionesController->buscarhabitaciones();
            break;

        case 'editar-habitacion': 
            $habitacionesController->enviarHabitacionlEditada($params[1]);
            break;

        case 'delete-habitacion': 
            $habitacionesController->deleteHabitacion($params[1]);
            break;
    
        case 'login': 
            $loginController->mostrarLogin();
            break;
    
        case 'logout': 
            $loginController->logout();
            break;

        case 'registro': 
            $loginController->mostrarRegistro();
            break;
    
        case 'enviar-registro':
            $loginController->enviarRegistro();
            break;

        case 'verificar':
            $loginController->verificarLogin();
            break;

        case 'buscar-hotel':
            $hotelesController->buscarHotel();
            break;  

        case 'modificarpermiso':
            $usuarioscontroller-> modificarPermisos($params[1]);
            break;  

        case 'verusuarios':
            $usuarioscontroller->verusuarios();
            break;  

        case 'delete-usuario':
            $usuarioscontroller->deleteusuario($params[1]);
            break;  
            
        default: 
            echo 'Error 404 not found';
            break;
    }