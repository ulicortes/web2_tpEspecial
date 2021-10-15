<?php

    class UserModel {

        private $db;
        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=hotelesdb;charset=utf8', 'root', '');
        }

        function sendRegistro($nombre, $apellido, $email, $usuario, $contraseña) {
            $passwordHash = password_hash($contraseña, PASSWORD_BCRYPT);
            $sentencia = $this->db->prepare("INSERT INTO usuarios(Nombre_del_usuario, Apellido_del_usuario, Email_del_usuario, usuario, contraseña) VALUES(?, ?, ?, ?, ?)");
            $sentencia->execute(array($nombre, $apellido, $email, $usuario, $passwordHash));
        }

        function obtenerUsuario($usuario) {
            $sentencia = $this->db->prepare('SELECT * FROM usuarios WHERE usuario = ?');
            $sentencia->execute([$usuario]);

            return $sentencia->fetch(PDO::FETCH_OBJ);
        }
    }