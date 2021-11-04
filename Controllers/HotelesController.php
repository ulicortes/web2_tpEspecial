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
        $usuario = $this->authy->esAdmin();   
        $hoteles = $this->model->traerHoteles();        
        $this->view->mostrarHoteles($hoteles, $usuario);
    }

    function showHotel($id) {
        $usuario = $this->authy->esAdmin();   
        $hotel = $this->model->traerHotelPorId($id);
        $this->view->mostrarHotelPorId($hotel, $usuario);
    }
    
    function createHotel() {
        if($this->authy->esAdmin()){
            if(isset($_POST['nombre'])&&isset($_POST['direccion'])&&isset($_POST['telefono'])&&isset($_POST['puntuacion'])&&isset($_POST['cant-habitaciones'])){
                $this->model->insertHotel($_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['puntuacion'], $_POST['cant-habitaciones']);
                $this->view->showHotelesLocation();
            }
            else{
                $this->view->mostrarerror("Complete todos los parametros para crear un hotel");
            }
        }       
       
    }

    function deleteHotel($id) {
        if($this->authy->esAdmin()){
            $this->model->delete_Hotel($id);
            $this->view->showHotelesLocation();
        }
    }

    function editarHotel($id) {
        if($this->authy->esAdmin()){ 
            $hotel = $this->model->traerHotelPorId($id);
            if($hotel){
                $this->view->mostrarEditForm($hotel);
            }
          else{
            $this->view->mostrarerror("No existe el hotel que quiere editar"); 
          }
        }
    }

    function enviarHotelEditado($id) {
        if($this->authy->esAdmin()){ 
            if(isset($_POST['nombre'])&&isset($_POST['direccion'])&&isset($_POST['telefono'])&&isset($_POST['puntuacion'])&&isset($_POST['cant-habitaciones'])){
                $this->model->editarHotel($_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['puntuacion'], $_POST['cantHabitaciones'], $id);
                $this->view->showHotelesLocation();
            }
            else{
                $this->view->mostrarerror("Complete todos los parametros para editar el hotel");
            }
        }
    }

    function buscarHotel() {
        if(isset($_POST['buscar'])) {
            $usuario = $this->authy->esAdmin();
            $palabra = $_POST['buscar'];
            $hotel = $this->model->buscar($palabra);
            if($hotel){
                $this->view->mostrarHoteles($hotel, $usuario);
            }
            else{
                $this->view->mostrarerror("No se encontraron hoteles con los datos que busca");
            }
        }
    }
}

