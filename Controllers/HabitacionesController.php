<?php

require_once './Models/HabitacionesModel.php';
require_once './Models/HotelModel.php';
require_once './Views/HabitacionesView.php';
require_once './Helpers/AutenticacionHelper.php';

class HabitacionesController {
    private $model;
    private $hotelModel;
    private $view;
    private $authy;

    function __construct() {
        $this->model = new HabitacionesModel();
        $this->hotelModel = new HotelModel();
        $this->view = new HabitacionesView();
        $this->authy = new AutenticacionHelper();
    }

    function showHabitaciones() {
        $usuario = $this->authy->checkLoggedIn();
        $habitaciones = $this->model->traerHabitaciones(null);
        $hoteles = $this->hotelModel->traerHoteles();
        $this->view->listarHabitaciones($habitaciones, $usuario, $hoteles);
    }

    function showHabitacionesPorHotel($id) {
        $usuario = $this->authy->checkLoggedIn();
        $habitaciones = $this->model->traerHabitaciones($id);
        $hoteles = $this->hotelModel->traerHoteles($id);   
        $this->view->listarHabitaciones($habitaciones, $usuario, $hoteles);
    }

    function showHabitacion($id) {
        $usuario = $this->authy->checkLoggedIn();
        $habitacion = $this->model->traerHabitacionPorId($id);
        $this->view->mostrarHabitacionPorId($habitacion, $usuario);
    }

    function createHabitacion() {
        $this->authy->estaLogueado();
        $this->model->insertHabitacion($_POST['id-hotel'], $_POST['nombre-habitacion'], $_POST['descripcion'], $_POST['cant-camas'], $_POST['capacidad'], $_POST['precio'], $_POST['disponible']);
        $this->view->showHabitacionesLocation();
    }

    function deleteHabitacion($id) {
        $this->authy->estaLogueado();
        $this->model->deleteHabitacion($id);
        $this->view->showHabitacionesLocation();
    }

    function editHabitacion($id) {
        $this->authy->estaLogueado();
        $habitacion = $this->model->traerHabitacionPorId($id);
        $hoteles = $this->hotelModel->traerHoteles();
        $this->view->mostrarEditForm($habitacion, $hoteles);
    }

    function enviarHabitacionlEditada($id) {
        $this->authy->estaLogueado();
        $this->model->editarHabitacion($_POST['id-hotel'], $_POST['nombre-habitacion'], $_POST['descripcion'], $_POST['cant-camas'], $_POST['capacidad'], $_POST['precio'], $_POST['disponible'], $id);
        $this->view->showHabitacionesLocation();
    }
}