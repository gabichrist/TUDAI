<?php

require_once "ejercicioFixture/ejercicio2/ApiView.php";
require_once "ejercicioFixture/ejercicio2/FixtureModel.php";

class FixtureController
{

    private $view;
    private $model;

    function __construct()
    {
        $this->view = new APIView();
        $this->model = new FixtureModel();
    }

    function insertPartido()
    {
        $body = $this->getBody();

        if (
            !isset($body->equipo1) || !isset($body->equipo2) || !isset($body->cancha) ||
            !isset($body->fecha)
        ) {
            return $this->view->response("Falta cargar un campo obligatorio", 400);
        }

        $id_partido = $this->model->insertPartido($body->equipo1, $body->equipo2, $body->cancha, $body->fecha);

        if ($id_partido != 0) {
            return $this->view->response("El partido se inserto correctamente", 200);
        } else {
            return $this->view->response("Not Found", 404);
        }
    }



    private function getBody()
    {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }
}
