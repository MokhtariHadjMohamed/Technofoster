<?php

require_once __DIR__ . '/src/Controller/HomeController.php';
require_once __DIR__ . '/src/Controller/DiplomaController.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
    default:
        $controller = new HomeController();
        $controller->home();
        break;

    case 'diploma':
        $controller = new DiplomaController();
        $controller->diploma();
        break;

    case 'downloadDiploma':
        $controller = new DiplomaController();
        $controller->downloadDiploma();
        break;
}