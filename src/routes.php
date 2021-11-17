<?php



$uri = $_SERVER["REQUEST_URI"];

if ($uri == '/Consultorio/public'){
    require_once __DIR__ . '/../Views/layouts/index.php';
}

if ($uri == '/Consultorio/src/routes.php/create.php'){
    require_once __DIR__ . '/../Views/pages/create.php';
}

if ($uri == '/Consultorio/src/routes.php/modify.php'){
    require_once __DIR__ . '/../Views/pages/create.php';
}

