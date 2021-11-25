<?php

require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';

class HabitacionesView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function listarHabitaciones($habitaciones, $usuario, $hoteles, $criterio=0) {
       
        $this->smarty->assign('usuario', $usuario);        
        $this->smarty->assign('criterio', $criterio);        
      
        if(isset($habitaciones[0]->Nombre_hotel)){
            $this->smarty->assign('titulo', $habitaciones[0]->Nombre_hotel);
        }  
        else if(empty($habitaciones)) {
            $this->smarty->assign('titulo', 'No hay habitaciones disponibles para este hotel');    
        }
        else{
            $this->smarty->assign('titulo','Habitaciones');   
        }
        $this->smarty->assign('habitaciones', $habitaciones);
        $this->smarty->assign('hoteles', $hoteles);
        $this->smarty->display('templates/habitaciones.tpl');
    }

    function mostrarHabitacionPorId($habitacion, $usuario) {
        if(isset($usuario)) {
            $this->smarty->assign('usuario', $usuario);
        }
        else {
            $this->smarty->assign('usuario', null);
        }
        $this->smarty->assign('habitacion', $habitacion);
        $this->smarty->assign('titulo', $habitacion->Nombre_habitacion);
        $this->smarty->assign('nombreHotel', $habitacion->Nombre_hotel);
        $this->smarty->display('templates/habitacionesDescripcion.tpl');
    }

    function mostrarEditForm($habitacion, $hoteles) {
        $this->smarty->assign('hoteles', $hoteles);
        $this->smarty->assign('id', $habitacion->ID_HABITACION);
        $this->smarty->assign('idHotel', $habitacion->ID_HOTEL);
        $this->smarty->assign('nombre', $habitacion->Nombre_habitacion);
        $this->smarty->assign('descripcion', $habitacion->Descripcion);
        $this->smarty->assign('cantCamas', $habitacion->Cantidad_camas);
        $this->smarty->assign('capacidad', $habitacion->Capacidad);
        $this->smarty->assign('precio', $habitacion->Precio);
        $this->smarty->assign('disponible', $habitacion->Disponible);
        $this->smarty->display('templates/editHabitaciones.tpl');
    }

    function showHabitacionesLocation() {
        header("Location: ".BASE_URL."habitaciones");
    }

    function mostrarerror($error){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/errores.tpl');
    }
}

