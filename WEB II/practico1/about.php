<?php

$desarrolladores = array(
    "Web2",
    "Gabi",
    "Facu"
);

if (isset($_REQUEST['desarrollador'])) {
    echo "<ul>";
    foreach ($desarrolladores as $desarrollador) {
        echo "<li><a href='about.php?$desarrollador=$desarrollador'>$desarrollador</a></li>";
    }
    echo "</ul>";
}
