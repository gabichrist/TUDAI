<?php

class CanchaModel
{

    private $db;

    function __construct()
    {
    }


    function getCanchabyId($id_cancha)
    {
        $query = $this->model->prepare("select * from cancha where id_cancha=?");
        $query->execute([$id_cancha]);
        $cancha = $query->fetch(PDO::FETCH_OBJ);
        return $cancha;
    }
}
