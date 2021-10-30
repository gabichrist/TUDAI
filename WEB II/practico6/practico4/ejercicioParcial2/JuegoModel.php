<?php

class JuegoModel
{

    private $db;

    function __construct()
    {

        $this->db = new PDO('mysql:host=localhost;' . 'dbname=casino;charset=utf8', 'root', '');
    }

    function getJuegos()
    {
        $query = $this->db->prepare("select * from juego");
        $query->execute();
        $juegos = $query->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }

    function deleteJuego($id)
    {
        $query = $this->db->prepare("delete from juego where id= ?");
        $query->execute([$id]);
    }

    function getApuestawithJuego()
    {
        $query = $this->db->prepare("select a.*, j.* from apuesta a join juego j on a.id_juego = j.id");
        $query->execute();
        $apuestas = $query->fetchAll(PDO::FETCH_OBJ);
        return $apuestas;
    }

    function addApuestaAJuego($fecha, $monto, $id_juego)
    {
        $query = $this->db->prepare("insert into juego (fecha, monto, id_juego) values(?,?,?)");
        $query->execute([$fecha, $monto, $id_juego]);
    }
}
