<?php
namespace App;
use App\controllers\CitaController;
use App\Models\Cita;
use App\Core\SQLConexion;
$uri = $_SERVER["REQUEST_URI"];


//if ($uri == '/list'){
     
    $controller = new CitaController();
    $controller->index();
 }

if ($uri == '/list/create'){
    
   $controller->create();
}

 if ($uri == 'list/modify'){
     require_once __DIR__ . '/../views/pages/modify.php';
 }

