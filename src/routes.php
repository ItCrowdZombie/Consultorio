<?php
namespace App;
use App\controllers\CitaController;
use App\Models\Cita;

require_once __DIR__ . '/Controllers/CitaController.php';

$uri = $_SERVER["REQUEST_URI"];

if ($uri == '/list'){
     require_once __DIR__ . '/../views/pages/citaList.php';
     $controller = new CitaController();
     $controller->index();
 }

if ($uri == '/list/create'){
    require_once __DIR__ . '/../views/pages/create.php';
    $controller->create();
}

 if ($uri == 'list/modify'){
     require_once __DIR__ . '/../views/pages/modify.php';
 }

