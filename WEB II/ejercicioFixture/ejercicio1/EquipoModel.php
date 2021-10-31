<?php

class EquipoModel
{

    private $db;

    function __construct()
    {
    }


    function getEquipobyId($id_equipo)
    {
        $query = $this->model->prepare("select * from equipo where id_equipo=?");
        $query->execute([$id_equipo]);
        $equipo = $query->fetch(PDO::FETCH_OBJ);
        return $equipo;
    }
}
