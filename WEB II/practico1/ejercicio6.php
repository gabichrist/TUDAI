<?php

if (isset($_GET['limite'])) {
    echo "<table>
    <thead>
      </thead>
      <tbody>";

    // filas
    for ($i = 1; $i < $_GET['limite']; $i++) {
        echo "<tr>";
        // columnas
        for ($j = 1; $j < $_GET['limite']; $j++) {
            $resultado = $i * $j;
            echo "<td>$resultado</td>";
        }
        echo "</tr>";
    }

    echo "</tbody></table>";
}
