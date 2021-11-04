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
        $usuario = $this->authy->esAdmin();        
        $habitaciones = $this->model->traerHabitaciones(null);
        $hoteles = $this->hotelModel->traerHoteles();
        $this->view->listarHabitaciones($habitaciones, $usuario, $hoteles);
    }

    function showHabitacionesPorHotel($id) {
        $usuario = $this->authy->esAdmin();   
        $habitaciones = $this->model->traerHabitaciones($id);
        $hoteles = $this->hotelModel->traerHoteles($id);   
        $this->view->listarHabitaciones($habitaciones, $usuario, $hoteles);
    }

    function showHabitacion($id) {
        $usuario = $this->authy->esAdmin();   
        $habitacion = $this->model->traerHabitacionPorId($id);
        $this->view->mostrarHabitacionPorId($habitacion, $usuario);
    }

    function createHabitacion() {
       if($this->authy->esAdmin()){
            if(isset($_POST['id-hotel'])&& isset($_POST['nombre-habitacion']) && isset($_POST['descripcion'])&& isset($_POST['cant-camas']) && isset($_POST['capacidad']) && isset($_POST['precio']) && isset($_POST['disponible'])){
                $this->model->insertHabitacion($_POST['id-hotel'], $_POST['nombre-habitacion'], $_POST['descripcion'], $_POST['cant-camas'], $_POST['capacidad'], $_POST['precio'], $_POST['disponible']);
                $this->view->showHabitacionesLocation();
            }   
            else{
                $this->view->mostrarerror("Complete todos los parametros para crear una habitacion");
            }   
       }
       
    }
    //hace falta preguntar si el id esta seteado?
    function deleteHabitacion($id) {       
        if($this->authy->esAdmin()){
            $this->model->deleteHabitacion($id);
            $this->view->showHabitacionesLocation();
        }
    }

    function editHabitacion($id) {
        $this->authy->esAdmin();
        $habitacion = $this->model->traerHabitacionPorId($id);
        $hoteles = $this->hotelModel->traerHoteles();
        if($habitacion && $hoteles){
            $this->view->mostrarEditForm($habitacion, $hoteles);
        }
       else{
        $this->view->mostrarerror("El hotel o la habitacion solicitada no existen");
       }
    }

    function enviarHabitacionlEditada($id) {
        if($this->authy->esAdmin()){
            if(isset($_POST['id-hotel'])&&isset($_POST['nombre-habitacion'])&&isset($_POST['descripcion'])&& isset($_POST['cant-camas'])&&isset($_POST['capacidad'])&& isset($_POST['precio']) && isset($_POST['disponible'])){
                $this->model->editarHabitacion($_POST['id-hotel'], $_POST['nombre-habitacion'], $_POST['descripcion'], $_POST['cant-camas'], $_POST['capacidad'], $_POST['precio'], $_POST['disponible'], $id);
                $this->view->showHabitacionesLocation();
            }
            else{
                $this->view->mostrarerror("Complete todos los parametros para editar la habitacion");
            }
        }

    }
}