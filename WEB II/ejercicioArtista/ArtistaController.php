<?php

require_once "ejercicioArtista/ArtistaView.php";
require_once "ejercicioArtista/ArtistaModel.php";

class ArtistaController
{

    private $view;
    private $model;

    function __construct()
    {
        //$this->view = new ArtistaView();
        $this->view = new ArtistaModel();
    }

    function getAlbumsByArtista($id)
    {
        $artista = $this->model->getArtistabyID($id);
        if (!isset($artista)) {
            $this->view->showError("El artista no existe");
        } else {
            $albums = $this->model->getAlbumsByArtista($id);
            $this->view->showAlbums($albums);
        }
    }
}
