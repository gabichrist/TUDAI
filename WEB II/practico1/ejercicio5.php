<?php

if (isset($_GET['peso']) && isset($_GET['altura'])) {
    $resultado = (int) $_GET['peso'] / doubleval($_GET['altura']);
    if (($resultado) < 18.50) {
        echo "<p> $resultado Su peso es bajo </p>";
    }
    if ((($resultado) > 18.51) && ($resultado < '24,99')) {
        echo "<p>$resultado Su peso es normal </p>";
    }
    if (($resultado) >= 25.00) {
        echo "<p>$resultado Tiene sobrepeso </p>";
    }
    if (($resultado) >= 30.00) {
        echo "<p>$resultado Tiene obesidad </p>";
    }
}
?>

<a href="ejercicio5.html">Volver</a>;