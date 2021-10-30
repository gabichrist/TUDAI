<?php

class VueloModel
{

    private $db;

    function __construct()
    {
    }

    function getFlightDetail($id_vuelo)
    {
        $query = $this->db->prepare("select * from vuelo where nro_vuelo=?");
        $query->execute([$id_vuelo]);
        $flight = $query->fetch(PDO::FETCH_OBJ);
        return $flight;
    }

    function getCities()
    {
        $query = $this->db->prepare("select * from ciudad");
        $query->execute();
        $cities = $query->fetchAll(PDO::FETCH_OBJ);
        return $cities;
    }

    function addFlight($nro_vuelo, $fecha_salida, $ciudad_orig, $ciudad_destino, $estado)
    {
        $query = $this->db->prepare("insert into vuelo (nro_vuelo, fecha_salida, ciudad_origen_id_fk,
         ciudad_destino_id_fk, estado values(?,?,?,?,?)");
        $query->execute($nro_vuelo, $fecha_salida, $ciudad_orig, $ciudad_destino, $estado);
    }
}
