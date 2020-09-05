<?php
include_once ('sections.php');

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $table = false;
        showHome($table);
        break;
    case 'tabla':
        showTable($params[1]);
        break;
    default:
        echo('404 Page not found');
        break;
}
