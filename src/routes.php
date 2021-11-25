<?php
namespace App;
use App\controllers\CitaController;
use App\Models\Cita;
use App\Core\SQLConexion;

// var_dump($_POST);
$controller = new CitaController();
if($_POST){
   if(isset($_POST['id'])){
      $controller->update($_POST);
   }else{ 
      $controller->store($_POST); 
   };
}

$uri = $_SERVER["REQUEST_URI"];

if ($uri == '/list'){
   $controller->index();
  }

if ($uri == '/list/create'){
   $controller->create();
}

if ($uri == '/list/modify'){
   $controller->viewPageModify();
}


if($_GET){
   if ($_GET["action"]=="delete"){
      
      $controller->delete($_GET);
      
   }
   if ($_GET["action"]=="modify"){
      $controller->displayCitaData($_GET);
   }
}





   


//  if ($uri == 'list/modify'){
//      require_once __DIR__ . '/../views/pages/modify.php';
//  }