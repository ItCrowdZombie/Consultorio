<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h1>Lista de citas</h1>
<?php

require_once '/xampp/htdocs/Consultorio/src/routes.php';
require_once '/xampp/htdocs/Consultorio/src/cita.php';
require_once '/xampp/htdocs/Consultorio/src/citaList.php';
$nombre =$_POST["inputName"];
$equipo=$_POST["inputEquipo"];
$tema=$_POST["inputTema"];
$description=$_POST["inputDescription"];
$cita = new Cita($nombre,$equipo,$tema,$description);
array_push($listaCitas, $cita);

foreach ($listaCitas as $cita) {

  require_once __DIR__ . '/../componentes/card.php';
};
?>

   

<button>Create new ticket</button>
    
</body>
</html>