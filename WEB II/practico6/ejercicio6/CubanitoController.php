<?php

require_once "ejercicio6/ApiView.php";
require_once "ejercicio6/CubanitoModel.php";

class CubanitoController
{

    private $view;
    private $model;

    function __construct()
    {
        $this->view = new ApiView();
        //$this->model = new CubanitoModel();
    }

    function deleteCubanito($params = null)
    {
        $id_cubanito = $params[":ID"];

        $cubanito = $this->model->getCubanito($id_cubanito);

        if ($cubanito) {
            $this->model->deleteCubanito();
            return $this->view->response("el cubanito con id= $id_cubanito se ha eliminado", 200);
        } else {
            return $this->view->response("el cubanito con id=$id_cubanito no existe", 404);
        }
    }

    function actualizarTipo($params = null)
    {
        $id_tipo = $params[":ID"];

        $body = $this->getBody();

        $cubanito = $this->model->getCubanito($id_tipo);

        if ($cubanito) {
            $this->model->actualizarTipo($body->id_tipo, $body->nombre, $body->calorias, $body->apto_celiacos);
            return $this->view->response("el tipo $id_tipo se actualizo correctamente", 200);
        } else {
            return $this->view->response("el cubanito con el  id tipo: $id_tipo no existe", 404);
        }
    }

    function obtenerCubCeliacos()
    {

        $cubanitos = $this->model->obtenerCubCeliacos();

        if ($cubanitos) {
            return $this->view->response("los cubanitos de tipo celiaco se obtuvieron correctamente", 200);
        } else {
            return $this->view->response("no hay cubanitos aptos para celiacos", 404);
        }
    }

    function agregarCubanito()
    {

        $body = $this->getBody();

        $id_cubanito = $this->model->agregarCubanito($body->id_tipo, $body->fecha_vencimiento, $body->cantidad);

        if ($id_cubanito != 0) {
            return $this->view->response("se agrego el cubanito con id= $id_cubanito", 200);
        } else {
            return $this->view->response("no se pudo agregar el cubanito", 404);
        }
    }

    private function getBody()
    {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }
}
