<?php

class ComentariosModel {
    private $db;

    function __construct() {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=hotelesdb;charset=utf8'
    , 'root', '');
    }
    function insertComentario($id_usuario, $ID_HABITACION, $comentario, $puntaje){
        $sentencia = $this->db->prepare("INSERT INTO comentarios(id_usuario, ID_HABITACION, comentario, puntaje) VALUES (?, ?, ?, ?)");
        $sentencia->execute(array($id_usuario, $ID_HABITACION, $comentario, $puntaje));
        return $this->db->lastInsertId();
    }
    function getComentarios(){
        $sentencia = $this->db->prepare("SELECT a.*, b.Nombre_del_usuario, b.Admin FROM comentarios a LEFT JOIN usuarios b ON a.id_usuario = b.id_usuario");
        $sentencia->execute();
        $comentarios= $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $comentarios;
    }

    function getComentario($idComentario){
        $sentencia = $this->db->prepare("SELECT a.*, b.Nombre_del_usuario, b.Admin FROM comentarios a LEFT JOIN usuarios b ON a.id_usuario = b.id_usuario WHERE id_comentario = ?");
        $sentencia->execute(array($idComentario));
        $comentario = $sentencia->fetch(PDO::FETCH_OBJ);

        return $comentario;
    }

    function deleteComentario($idComentario){
        $sentencia = $this->db->prepare("DELETE FROM comentarios WHERE id_comentario=?");
        $sentencia->execute(array($idComentario));
    }

    function updateComentario($idComentario, $id_usuario, $ID_HABITACION, $comentario, $puntaje){
        $sentencia = $this->db->prepare("UPDATE comentarios SET id_usuario=?, ID_HABITACION=?, comentario=?, puntaje=? WHERE id_comentario=?");
        
        $sentencia->execute(array($id_usuario, $ID_HABITACION, $comentario, $puntaje, $idComentario));
    }
} 