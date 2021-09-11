<?php

//print_r($_POST); para imprimir el arreglo como viene para ver en la pag.
if (!empty($_POST)) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    echo ('Nombre:' . $nombre);
    echo ('<br>');
    echo ('apellido:' . $apellido);
    echo ('<br>');
    echo ('edad:' . $edad);
    echo ('<br>');
}
?>

<form action="ejercicio3_1.php" method="POST">
    <label>nombre</label><input type="text" name="nombre">
    <label>apellido</label><input type="text" name="apellido">
    <label>edad</label><input type="number" name="edad">
    <button type="submit">enviar</button>
</form>

<a href="ejercicio3_1.php">Volver</a>