<?php

require_once './Models/HotelModel.php';
require_once './Models/HabitacionesModel.php';
require_once './Views/HotelView.php';
require_once './Views/HabitacionesView.php';
require_once './Helpers/AutenticacionHelper.php';



class HotelesController {
    private $model;
    private $modelHabitaciones;
    private $view;
    private $viewHabitaciones;
    private $authy;


    function __construct() {
        $this->model = new HotelModel();
        $this->modelHabitaciones = new HabitacionesModel();
        $this->view = new HotelView();
        $this->viewHabitaciones = new HabitacionesView();
        $this->authy = new AutenticacionHelper();
       
    }
    
    function showHoteles() {
        $usuario = $this->authy->checkLoggedIn();
        $hoteles = $this->model->traerHoteles();        
        $this->view->mostrarHoteles($hoteles, $usuario);
    }

    function showHotel($id) {
        $usuario = $this->authy->checkLoggedIn();
        $hotel = $this->model->traerHotelPorId($id);
        $this->view->mostrarHotelPorId($hotel, $usuario);
    }
    
    function createHotel() {
        $this->authy->estaLogueado();
        $this->model->insertHotel($_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['puntuacion'], $_POST['cant-habitaciones']);
        $this->view->showHotelesLocation();
    }

    function deleteHotel($id) {
        $this->authy->estaLogueado();
        $this->model->delete_Hotel($id);
        $this->view->showHotelesLocation();
    }

    function editarHotel($id) {
        $this->authy->estaLogueado();
        $hotel = $this->model->traerHotelPorId($id);
        $this->view->mostrarEditForm($hotel);
    }

    function enviarHotelEditado($id) {
        $this->authy->estaLogueado();
        $this->model->editarHotel($_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['puntuacion'], $_POST['cantHabitaciones'], $id);
        $this->view->showHotelesLocation();
    }

    function buscarHotel() {
        if(isset($_POST['buscar'])) {
            $usuario = $this->authy->checkLoggedIn();
            $palabra = $_POST['buscar'];
            $hotel = $this->model->buscar($palabra);
            $this->view->mostrarHoteles($hotel, $usuario);
        }
    }
}

