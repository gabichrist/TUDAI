<?php

class HabitacionModel
{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=hoteleria;charset=utf8', 'root', '');
    }

    function getHabitaciones()
    {
        $query = $this->db->prepare("select * from hoteleria");
        $query->execute();
        $rooms = $query->fetchAll(PDO::FETCH_OBJ);
        return $rooms;
    }

    function addRoom($nro_habitacion, $cant_camas, $descripcion, $ocupada)
    {
        $query = $this->db->prepare("insert into hoteleria (nro_habitacion, cant_camas, descripcion, ocupada)
         values(?, ?, ?, ?)");
        $query->execute([$nro_habitacion, $cant_camas, $descripcion, $ocupada]);
    }

    function showcapacHotelera()
    {
        $query = $this->db->prepare("select count(*) from hoteleria where ocupada=false");
        $query->execute();
        $resultado = $query->fetch(PDO::FETCH_OBJ);
        return $resultado;
    }
}
