<?php
require_once "./src/index.php";
require_once "./src/deudas.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);



echo $params[0];
// echo $params[1];

switch ($params[0]) {
    case 'home':
        showHome();
        showList();
        break;
    case 'insert':
        addPago();
        break;
    case 'delete':
        deletePago($params[1]);
        break;
    case 'update':
        updatePago($params[1]);
        break;
    default:
        echo ('404 Page not found');
        break;
}
