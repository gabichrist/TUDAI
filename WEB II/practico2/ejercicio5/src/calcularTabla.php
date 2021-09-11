<?php

function calcularTabla($valor) {
    include_once "templates/header.php";
    echo "<table>
    <thead>
      </thead>
      <tbody>";

    // filas
    for ($i = 1; $i < $valor; $i++) {
        echo "<tr>";
        // columnas
        for ($j = 1; $j < $valor; $j++) {
            $resultado = $i * $j;
            echo "<td>$resultado</td>";
        }
        echo "</tr>";
    }

    echo "</tbody></table>";

    include_once "templates/footer.php";
}
    