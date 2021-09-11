<?php

//print_r($_POST); para imprimir el arreglo como viene para ver en la pag.

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
echo ('Nombre:' . $nombre);
echo ('<br>');
echo ('apellido:' . $apellido);
echo ('<br>');
echo ('edad:' . $edad);
echo ('<br>');

?>
<a href="ejercicio3.html">Volver</a>