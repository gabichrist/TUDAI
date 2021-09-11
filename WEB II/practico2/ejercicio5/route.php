<?php
require_once "src/home.php";
require_once "src/calcularTabla.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

switch($params[0]) {
    case 'home': 
        showHome(); 
        break;
    case 'tabla':
        calcularTabla($params[1]);
        break;
    default: 
    echo('404 Page not found'); 
    break;

}