<h3>ejercicio2</h3>
<?php
$numeros = array(
    "pepe", "maria", "facu", "rosa", "pepe", "maria", "facu", "rosa",
    "pepe", "maria", "facu", "rosa", "pepe", "maria", "facu", "rosa"
);

$mostrar = count($numeros);

if (isset($_GET['cantidad'])) {
    echo $_GET['mostrar'];
}

echo "<ul>";
for ($i = 0; $i < $mostrar; $i++) {
    $lista = $numeros[$i];
    echo "<li>$lista</li>";
}
echo "</ul>";


echo "
<a href='ejercicio2.php?cantidad=2'>Ver los primeros 2</a>

<a href='ejercicio2.php?cantidad=5'>Ver los primeros 5</a>

<a href='ejercicio2.php?cantidad=15'>Ver todos</a>";



?>