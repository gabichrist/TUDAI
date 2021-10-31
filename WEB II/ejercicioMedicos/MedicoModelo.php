<?php

class MedicoModelo
{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=salud;charset=utf8', 'root', '');
    }

    function deleteMedico($id)
    {

        $query = $this->db->prepare('delete from medico where id=?');
        $query->execute([$id]);
    }

    function getMedicoById($id)
    {
        $query = $this->db->prepare("select * from medico where id=?");
        $query->execute([$id]);
        $medico = $query->fetch(PDO::FETCH_OBJ);
        return $medico;
    }

    function getTurnos($id)
    {
        $query = $this->db->prepare("select * from medico m join turno t on m.id = t.id_medico where id=?");
        $query->execute([$id]);
        $turnos = $query->fetchAll(PDO::FETCH_OBJ);
        return $turnos;
    }

    function editTurno($fecha, $id_turno)
    {
        $query = $this->db->prepare("update medico set fecha=? where id_turno=?");
        $query->execute([$fecha, $id_turno]);
    }
}
