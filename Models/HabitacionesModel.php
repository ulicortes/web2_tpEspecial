<?php

class HabitacionesModel {

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'
        .'dbname=hotelesdb;charset=utf8'
        , 'root', '');
    }

    function traerHabitaciones($id) {
        if(isset($id)) {
            $sentencia = $this->db->prepare("SELECT a.*, b.* FROM hoteles a LEFT JOIN habitaciones b ON a.ID_HOTEL = b.ID_HOTEL WHERE b.ID_HOTEL =?");
            $sentencia->execute([$id]);
        }
        else {
            $sentencia = $this->db->prepare("SELECT * FROM habitaciones");
            $sentencia->execute();
        }

        $habitaciones = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $habitaciones;
    }

    function traerHabitacionPorId($id) {
        $sentencia = $this->db->prepare("SELECT a.*, b.* FROM hoteles a LEFT JOIN habitaciones b ON a.ID_HOTEL = b.ID_HOTEL WHERE ID_HABITACION=?");
        $sentencia->execute([$id]);

        $habitacion = $sentencia->fetch(PDO::FETCH_OBJ);

        return $habitacion;
    }

    function insertHabitacion($id_hotel, $nombre, $descripcion, $cant_camas, $capacidad, $precio, $disponible) {
        $sentencia = $this->db->prepare("INSERT INTO habitaciones(ID_HOTEL, Nombre_habitacion, Descripcion, Cantidad_camas, Capacidad, Precio, Disponible) VALUES(?, ?, ?, ?, ?, ?, ?)");
        $sentencia->execute(array($id_hotel, $nombre, $descripcion, $cant_camas, $capacidad, $precio, $disponible));
    }

    function deleteHabitacion($id_habitacion) {
        $sentencia = $this->db->prepare("DELETE FROM habitaciones WHERE ID_HABITACION=?");
        $sentencia->execute(array($id_habitacion));
    }

    function editarHabitacion($id_hotel, $nombre, $descripcion, $cant_camas, $capacidad, $precio, $disponible, $id) {
        $sentencia = $this->db->prepare("UPDATE habitaciones SET ID_HOTEL=?, Nombre_habitacion=?, Descripcion=?, Cantidad_camas=?, 
        Capacidad=?, Precio=?, Disponible=? WHERE habitaciones.ID_HABITACION=?");
        
        $sentencia->execute(array($id_hotel, $nombre, $descripcion, $cant_camas, $capacidad, $precio, $disponible, $id));
    }

    function buscarHabitaciones($criterio){
        $order_query=[
            "precioascendente" => "ORDER BY Precio ASC",
            "preciodescendente" => "ORDER BY Precio DESC",
            "disponible" => "ORDER BY Disponible"
        ];
        
        $query=$order_query[$criterio];
           
        $sentencia = $this->db->prepare("SELECT * FROM habitaciones  $query");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    
}