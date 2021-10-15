<?php

require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';

class HotelView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function mostrarHoteles($hoteles, $usuario) {
        if(isset($usuario)) {
            $this->smarty->assign('usuario', $usuario);
        }
        else {
            $this->smarty->assign('usuario', null);
        }

        $this->smarty->assign('hoteles', $hoteles);
        if(empty($hoteles)) {
            $this->smarty->assign('titulo', 'No hay resultados para su busqueda');    
        }
        else {
            $this->smarty->assign('titulo', 'Hoteles');    
        }
        $this->smarty->display('templates/hoteles.tpl');
    }

    function mostrarEditForm($hotel) {
        $this->smarty->assign('id', $hotel->ID_HOTEL);
        $this->smarty->assign('nombre', $hotel->Nombre_hotel);
        $this->smarty->assign('direccion', $hotel->Direccion);
        $this->smarty->assign('telefono', $hotel->Telefono);
        $this->smarty->assign('puntuacion', $hotel->Puntuacion);
        $this->smarty->assign('cantHabitaciones', $hotel->Cant_habitaciones);
        $this->smarty->display('templates/editHoteles.tpl');
    }

    function mostrarHotelPorId($hotel) {
        $this->smarty->assign('hoteles', $hotel);
        $this->smarty->display('templates/hoteles.tpl');
    }

    function showHotelesLocation() {
        header("Location: ".BASE_URL."hoteles");
    }
}