<?php

require_once './Models/UserModel.php';
require_once './Views/UserView.php';
require_once './Helpers/AutenticacionHelper.php';

class UsuariosController{
    private $model;
    private $view;
    private $authy;

    function __construct(){
        $this->model= new UserModel();
        $this->view = new UserView();
        $this->authy = new AutenticacionHelper();
    }

    function modificarPermisos($id){
        $usuarioadmin= $this->authy->esAdmin();  
        if($usuarioadmin){
            $usuario= $this->model->obtenerUsuario($id);
          
            if($usuario->Admin == 1){
                $this->model->cambiarRol($id, 0);
            }
            else if ($usuario->Admin == 0) {
                $this->model->cambiarRol($id, 1);
            }
            /*$usuarios= $this->model->getusuarios();
            if($usuarios){
                $this->view->mostrarusarios($usuarios);
            }*/
        }
        else {
            $this->view->mostrarerror("A esta seccion solo pueden acceder administradores");   
        }
    }
    function verusuarios(){
        $usuario= $this->authy->esAdmin();  
        if($usuario){
            $usuarios= $this->model->getusuarios();
            if($usuarios){
                $this->view->mostrarusarios($usuarios);
            }
           else{
            $this->view->mostrarerror("No se encontraron usuarios");   
           }
        }
        else {
            $this->view->mostrarerror("A esta seccion solo pueden acceder administradores");   
        }
    }
    function deleteusuario($id){
        $usuarioadmin= $this->authy->esAdmin();  
        if($usuarioadmin){
            $this->model->BorrarUsuario($id);
            $usuarios= $this->model->getusuarios();
            if($usuarios){
                $this->view->mostrarusarios($usuarios);
            }
        }
        else {
            $this->view->mostrarerror("A esta seccion solo pueden acceder administradores");   
        }
    }
}