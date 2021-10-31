<?php

require_once "ejercicioMedicos/MedicoModelo.php";
require_once "ejercicioMedicos/MedicoView.php";
require_once "ejercicioMedicos/authhelper.php";


class MedicoController
{
    private $model;
    private $view;
    private $authhelper;

    function __construct()
    {
        //$this->view = new MedicoView();
        $this->view = new MedicoModelo();
        $this->view = new authhelper();
    }



    function deleteMedico($id)
    {
        $this->authhelper->checkLoggedIn();

        $medico = $this->model->getMedicoById($id);


        if (isset($medico)) {

            $turnos = $this->model->getTurnos($id);

            if (!isset($turnos)) {
                $this->model->deleteMedico($id);
            } else {
                $this->view->showError("el medico tiene turnos asociados");
            }
        } else {
            $this->view->showError("El medico no existe");
        }
    }
}
