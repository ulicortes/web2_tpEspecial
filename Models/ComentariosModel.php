<?php

class ComentariosModel {
    private $db;

    function __construct() {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=hotelesdb;charset=utf8'
    , 'root', '');
    }
    function insertComentario($id_usuario, $comentario, $ID_HABITACION){
        $sentencia = $this->db->prepare("INSERT INTO comentarios(id_usario, comentaro, ID_HABITACION)");
        $sentencia->execute(array($id_usuario, $comentario, $ID_HABITACION));
    }
    function getComentarios($id){
        $sentencia = $this->db->prepare("SELECT a.*, b.* FROM comentarios a LEFT JOIN usuarios b ON a.id_usuario = b.id_usuario  WHERE ID_HABITACION = ?");
        $sentencia->execute(array($id));
        $comentarios= $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $comentarios;
    }
} 