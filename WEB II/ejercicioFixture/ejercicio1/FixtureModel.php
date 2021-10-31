<?php

class FixtureModel
{

    private $db;

    function __construct()
    {
    }

    function addFixture($fecha, $hora, $id_cancha, $id_equipo1, $id_equipo2)
    {
        $query = $this->model->prepare("insert into fixture (fecha, hora, id_cancha, id_equipo1, id_equipo2 )
         values(?,?,?,?,?)");
        $query->execute([$fecha, $hora, $id_cancha, $id_equipo1, $id_equipo2]);
    }
}
