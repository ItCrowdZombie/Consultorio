<?php
namespace App;
use App\controllers\CitaController;
use App\Models\Cita;
use App\Core\SQLConexion;

// var_dump($_POST);
$controller = new CitaController();
if($_POST){
   if($_POST['id']==null){
      $controller->store($_POST);
   }else{
      $controller->update($_POST['id']);
   }
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
   if ($_GET["action"]=="modify"){
      $controller->modify($_GET);
   }
}





   


//  if ($uri == 'list/modify'){
//      require_once __DIR__ . '/../views/pages/modify.php';
//  }