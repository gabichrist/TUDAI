<?php

require_once "ejercicioParcial1/HabitacionView.php";
require_once "ejercicioParcial1/HabitacionModel.php";


class HabitacionController
{

    private $view;
    private $model;


    function __construct()
    {
        $this->view = new HabitacionView();
        $this->model = new HabitacionModel();
    }

    function getHabitaciones()
    {
        $rooms = $this->model->getHabitaciones();
        $this->view->showRooms($rooms);
    }

    function addRoom()
    {
        if (
            isset($_POST['nro_habitacion']) && ($_POST['cant_camas']) && ($_POST['descripcion'])
            && ($_POST['ocupada'])
        ) {
            $nro_habitacion = $_POST['nro_habitacion'];
            $cant_camas = $_POST['cant_camas'];
            $descripcion = $_POST['descripcion'];
            $ocupada = $_POST['ocupada'];
            $this->model->addRoom($nro_habitacion, $cant_camas, $descripcion, $ocupada);
        }
    }

    function showcapacHotelera()
    {
        $resultado = $this->model->showcapacHotelera();
        $this->view->showcapacHotelera($resultado);
    }
}
