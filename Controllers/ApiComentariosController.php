<?php
require_once "./Models/ComentariosModel.php";
require_once "./Views/ApiComentariosView.php";
require_once "./Helpers/AutenticacionHelper.php";

class ApiComentariosController{

    private $model;
    private $view;
    private $authy;

    function __construct(){
        $this->model = new ComentariosModel();
        $this->view = new ApiComentariosView();
        $this->authy = new AutenticacionHelper();
    }

    function obtenerComentarios($params = null){
        $comentarios = $this->model->getComentarios();
        if($comentarios){
            return $this->view->response($comentarios, 200);
        }
        else $this->view->response('No hay comentarios para esta habitacion', 204);
    }

    function obtenerComentario($params = null) {
        $idComentario = $params[":ID"];
        $comentario = $this->model->getComentario($idComentario);
        if ($comentario) {
            return $this->view->response($comentario, 200);
        } else {
            return $this->view->response("El comentario con el id=$idComentario no existe", 404);
        }
    }

    function eliminarComentario($params = null) {
        if($this->authy->esAdmin()){
            $idComentario = $params[":ID"];
            $comentario = $this->model->getComentario($idComentario);
    
            if ($comentario) {
                $this->model->deleteComentario($idComentario);
                return $this->view->response("El comentario con el id=$idComentario fue borrado", 200);
            } else {
                return $this->view->response("El comentario con el id=$idComentario no existe", 404);
            }
        }
        else {
            return $this->view->response("Solo los administradores pueden borrar comentarios", 403);
        }
        
    }

    function insertarComentario($params = null) {
       
       
        $body = $this->getBody();
        if(!empty($body->comentario) && !empty($body->estrellas)){
            $id = $this->model->insertComentario($body->id_usuario, $body->ID_HABITACION, $body->comentario, $body->estrellas);

            if ($id != 0) {
                $this->view->response("El comentario id=$id", 200);
                header('Location: ' .BASE_URL. 'habitacion/'.$body->ID_HABITACION,);
            } else {
                $this->view->response("El comentario no se pudo insertar", 500);
            }
        }
        else{
            $this->view->response("Debe ingresar un comentario y un puntaje", 400);
        }
        
    }

    private function getBody() {
        $bodyString = file_get_contents("php://input");
        $bodyString = json_decode($bodyString);

        return $bodyString;
    }

}
