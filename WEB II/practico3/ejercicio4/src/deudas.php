<?php

//obtiene todos los pagos de la DB

function getPagos()
{
    //abrir la conexion de la DB
    $db = new PDO('mysql:host=localhost;' . 'dbname=db_deudas;charset=utf8', 'root', '');

    //ejecutar consulta sql

    $query = $db->prepare('SELECT * FROM pagos');
    $query->execute();

    //obtener datos de la consulta
    $pagos = $query->fetchAll(PDO::FETCH_OBJ); //devuelve un arreglo con todos los pagos (muchos registros)

    return $pagos;
}



function showList()
{
    $pagos = getPagos();
    echo "<ul>";
    foreach ($pagos as $pago) {
        echo "<li> $pago->deudor" . '<a href="delete/' . $pago->id . '">Borrar </a>'
            . '<a href="update/' . $pago->id . '">Actualizar </a></li>';
    }
    echo "</ul>";
}



//inserta un pago nuevo a traves de un form
function addPago()
{
    echo $_POST['input_deudor'];
    $db = new PDO('mysql:host=localhost;' . 'dbname=db_deudas;charset=utf8', 'root', '');
    $query = $db->prepare("INSERT INTO pagos(deudor, cuota, cuota_capital,fecha_pago) VALUES(?,?,?,?)");

    $query->execute(array($_POST['input_deudor'], $_POST['input_cuota'], $_POST['input_cuota_capital'], $_POST['input_fecha_pago']));
    header("Location: " . BASE_URL . "home");
}

// addPago();

//elimina un pago de la db
function deletePago($id_pago)
{
    $db = new PDO('mysql:host=localhost;' . 'dbname=db_deudas;charset=utf8', 'root', '');
    $query = $db->prepare("delete from pagos where id=?");

    $query->execute(array($id_pago));

    header("Location: " . BASE_URL . "home");
}

//actualiza un pago de la bd
function UpdatePago($id_pago)
{
    $db = new PDO('mysql:host=localhost;' . 'dbname=db_deudas;charset=utf8', 'root', '');
    $sentencia = $db->prepare("UPDATE pagos SET cuota=7 WHERE id=?");
    $sentencia->execute(array($id_pago));

    header("Location: " . BASE_URL . "home");
}
