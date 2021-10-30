<?php

require_once "practico6/VueloModel.php";
require_once "practico6/APIView.php";

class VueloController
{
    private $view;
    private $model;

    function __construct()
    {
        $this->view = new APIView();
        $this->model = new VueloModel();
    }

    function getFlightDetail($params = null)
    {
        $id_vuelo = $params[":ID"];
        $vuelo = $this->model->getFlightDetail($id_vuelo);
        if ($vuelo) {
            return $this->view->response($vuelo, 200);
        } else {
            return $this->view->response("El vuelo con el id= $id_vuelo no existe", 404);
        }
    }

    function getCities()
    {
        $cities = $this->model->getCities();
        return $this->view->response($cities, 200);
    }

    function addFlight()
    {
        $body = $this->getBody();

        if (
            !isset($body->nro_vuelo) || !isset($body->fecha_salida) || !isset($body->ciudad_orig) ||
            !isset($body->ciudad_destino) || !isset($body->estado)
        ) {
            $this->view->response("falto ingresar un parametro del vuelo", 400);
        }

        $id = $this->model->addFlight(
            $body->nro_vuelo,
            $body->fecha_salida,
            $body->ciudad_orig,
            $body->ciudad_destino,
            $body->estado
        );
        if ($id != 0) {
            $this->view->response("el vuelo se inserto correctamente con el id = $id", 200);
        } else {
            $this->view->response("la tarea no se pudo insertar", 500);
        }
    }

    //DEVUELVE EL BODY DEL REQUEST
    private function getBody()
    {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }
}
