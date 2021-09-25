<?php


define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

echo $params[0];

switch ($params[0]) {
    case 'home':

        break;
        /* case 'insert':
        break;
    case 'delete':
        break;
    case 'update':
        break;
    default:
        echo ('404 Page not found');
        break;*/
}
