<?php

require_once "ejercicioFixture/FixtureModel.php";
require_once "ejercicioFixture/FixtureView.php";
require_once "ejercicioFixture/CanchaModel.php";
require_once "ejercicioFixture/CanchaView.php";


class FixtureController
{

    private $view;
    private $model;

    function __construct()
    {
        $this->view = new FixtureView();
        $this->view = new CanchaView();
        $this->model = new FixtureModel();
        $this->model = new CanchaModel();
    }

    function addFixture($fecha, $hora, $id_cancha, $id_equipo1, $id_equipo2)
    {
        if (
            !isset($_POST['fecha']) || !isset($_POST['hora']) || !isset($_POST['id_cancha']) ||
            !isset($_POST['id_equipo1']) || !isset($_POST['id_equipo2'])
        ) {
            $this->view->showErrorForm();
        } else {
            $this->model->addFixture($fecha, $hora, $id_cancha, $id_equipo1, $id_equipo2);
        }
    }
}
