<?php

class ArtistaModel
{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=libreria;charset=utf8', 'root', '');
    }

    function getAlbumsByArtista($id)
    {
        $query = $this->model->prepare("select *, avg(al.calificacion) from artista a 
                                            join album al on (a.id = al.id_artista) where a.id=?");
        $query->execute([$id]);
        $albums = $query->fetchAll(PDO::FETCH_OBJ);
        return $albums;
    }

    function getArtistabyID($id)
    {
        $query = $this->model->prepare("select * from artista where id=?");
        $query->execute([$id]);
        $artista = $query->fetch(PDO::FETCH_OBJ);
        return $artista;
    }

    function updateNombreArtista($nombre, $id)
    {
        $query = $this->model->prepare("update artista set nombre=? where id=?");
        $query->execute([$nombre, $id]);
    }
}
