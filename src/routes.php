<?php
namespace App;
use App\controllers\CitaController;
use App\Models\Cita;
use App\Core\SQLConexion;

$controller = new CitaController();
if($_POST){
   if(!isset($_POST['id'])){
      $controller->store($_POST);
   }else{
      $controller->update($_POST);
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
   if($_GET["action"]=="clear"){
      $controller->clear($_GET['id'],$_GET['created_at']);
   }
}





   


//  if ($uri == 'list/modify'){
//      require_once __DIR__ . '/../views/pages/modify.php';
//  }