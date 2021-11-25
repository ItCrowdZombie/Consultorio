<?php
namespace App;
use App\controllers\CitaController;
use App\Models\Cita;
use App\Core\SQLConexion;

// var_dump($_POST);
$controller = new CitaController();
if($_POST){
    $controller->store($_POST);
}

$uri = $_SERVER["REQUEST_URI"];

if ($uri == '/list'){
   $controller->index();
  }

if ($uri == '/list/create'){
   $controller->create();
}


if($_GET){
   if ($_GET["action"]=="delete"){
      
      $controller->delete($_GET);
      
   }
}




   


//  if ($uri == 'list/modify'){
//      require_once __DIR__ . '/../views/pages/modify.php';
//  }