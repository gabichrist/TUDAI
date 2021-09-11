<?php
require_once "Figuras/src/home.php";
require_once "Figuras/src/filtro.php";
require_once "Figuras/src/lista.php";
require_once "Figuras/src/verFigura.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        showHome();
        break;
    case 'filtro':
        filtrar($params[0]);
        break;
    case 'lista':
        lista();
        break;
    case 'verFigura':
        verFigura($params[1]);
        break;
    default:
        echo ('404 Page not found');
        break;
}
