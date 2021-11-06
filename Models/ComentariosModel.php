<?php

class ComentariosModel {
    private $db;

    function __construct() {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=hotelesdb;charset=utf8'
    , 'root', '');
    }
    function insertComentario($id_usuario, $comentario, $ID_HABITACION){
        $sentencia = $this->db->prepare("INSERT INTO comentarios(id_usario, comentaro, ID_HABITACION) VALUES(?, ?, ?)");
        $sentencia->execute(array($id_usuario, $comentario, $ID_HABITACION));
    }
} 