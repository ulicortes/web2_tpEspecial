<?php

class HotelModel {

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'
        .'dbname=hotelesdb;charset=utf8'
        , 'root', '');
    }

    function traerHoteles() {
        $sentencia = $this->db->prepare( "select * from hoteles");
        $sentencia->execute();

        $hoteles = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $hoteles;
    }

    function traerHotelPorId($id) {
        $sentencia = $this->db->prepare( "select * from hoteles WHERE ID_HOTEL=?");
        $sentencia->execute([$id]);

        $hotel = $sentencia->fetch(PDO::FETCH_OBJ);

        return $hotel;
    }

    function insertHotel($nombre, $direccion, $telefono, $puntuacion, $cantHabitaciones) {
        $sentencia = $this->db->prepare("INSERT INTO hoteles(Nombre_hotel, Direccion, Telefono, Puntuacion, Cant_habitaciones) VALUES(?, ?, ?, ?, ?)");
        $sentencia->execute(array($nombre, $direccion, $telefono, $puntuacion, $cantHabitaciones));
    }

    function delete_Hotel($id_hotel) {
        $sentencia = $this->db->prepare("DELETE FROM hoteles WHERE ID_HOTEL=?");
        $sentencia->execute(array($id_hotel));
    }

    function editarHotel($nombre, $direccion, $telefono, $puntuacion, $cantHabitaciones, $id) {
        $sentencia = $this->db->prepare("UPDATE hoteles SET Nombre_hotel=?, Direccion=?, Telefono=?, Puntuacion=?, Cant_habitaciones=? WHERE hoteles.ID_HOTEL=?");
        
        $sentencia->execute(array($nombre, $direccion, $telefono, $puntuacion, $cantHabitaciones, $id));
    }

    function buscar($palabra) {
        $sentencia = $this->db->prepare("SELECT * FROM hoteles WHERE Nombre_hotel LIKE ?");
        $sentencia->execute(array("%$palabra%"));
        $palabras = $sentencia->fetchAll(PDO::FETCH_OBJ);      

        return $palabras;
    }
}