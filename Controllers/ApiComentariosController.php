<?php
require_once "./Models/ComentariosModel.php";
require_once "./Views/ApiComentariosView.php";

class ApiTaskController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new ComentariosModel();
        $this->view = new ApiComentariosView();
    }

    function obtenerComentarios(){
        $idHabitacion=  = $params[":IDhabitacion"];
        $comentarios = $this->model->getComentarios($idHabitacion);
        if($comentarios){
            return $this->view->response($comentarios, 200);
        }
        else $this->view->response('No hay comentarios para esta habitacion'), 404);
    }

    function obtenerTarea($params = null) {
        $idTarea = $params[":ID"];
        $tarea = $this->model->getTask($idTarea);
        if ($tarea) {
            return $this->view->response($tarea, 200);
        } else {
            return $this->view->response("La tarea con el id=$idTarea no existe", 404);
        }
    }

    function eliminarTarea($params = null) {
        $idTarea = $params[":ID"];
        $tarea = $this->model->getTask($idTarea);

        if ($tarea) {
            $this->model->deleteTaskFromDB($idTarea);
            return $this->view->response("La tarea con el id=$idTarea fue borrada", 200);
        } else {
            return $this->view->response("La tarea con el id=$idTarea no existe", 404);
        }
    }

    function insertarComentario($params = null) {
       
        // obtengo el body del request (json)
        $body = $this->getBody();

        // TODO: VALIDACIONES -> 400 (Bad Request)

        $id = $this->model->insertComentario($body->id_usuario, $body->comentario,  $body->ID_HABITACION);
        if ($id != 0) {
            $this->view->response("La tarea se insertó con el id=$id", 200);
        } else {
            $this->view->response("La tarea no se pudo insertar", 500);
        }
    }

    function actualizarTarea($params = null) {
        $idTarea = $params[':ID'];
        $body = $this->getBody();
        
        // TODO: VALIDACIONES -> 400 (Bad Request)

        $tarea = $this->model->getTask($idTarea);

        if ($tarea) {
            $this->model->update($idTarea, $body->titulo, $body->descripcion, $body->prioridad, $body->finalizada);
            $this->view->response("La tarea se actualizó correctamente", 200);
        } else {
            return $this->view->response("La tarea con el id=$idTarea no existe", 404);
        }
    }

    /**
     * Devuelve el body del request
     */
    private function getBody() {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }

}
