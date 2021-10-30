<?php

require_once "ejercicioParcial2/JuegoModel.php";
require_once "ejercicioParcial2/JuegoView.php";


class JuegoController
{

    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new JuegoView();
        $this->model = new JuegoModel();
    }

    function showJuegos()
    {
        $juegos = $this->model->getJuegos();
        $this->view->showJuegos($juegos);
    }

    function deleteJuego($id)
    {
        $this->model->deleteJuego($id);
    }

    function showApuestaswithJuego()
    {
        $apuestas = $this->model->getApuestawithJuego();
        $this->view->showApuestaswithJuego($apuestas);
    }

    function addApuestaAJuego()
    {
        if (isset($_POST['fecha']) && ($_POST['monto']) && ($_POST['id_juego'])) {
            $fecha = $_POST['fecha'];
            $monto = $_POST['monto'];
            $id_juego = $_POST['id_juego'];
            $this->model->addApuestaAJuego($fecha, $monto, $id_juego);
        }
    }
}
