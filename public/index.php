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
require_once '/xampp/htdocs/Consultorio/src/cita.php';
require_once '/xampp/htdocs/Consultorio/src/citaList.php';
foreach ($listaCitas as $cita) {
  echo "<section id='SectionCitas' class='row justify-content-center'>
        <div class='card w-50'>
          <div class='card-body'>
            <h5 class='card-title'>{$cita->getUsuario()}</h5>
            <p class='card-text'>{$cita->getEquipo()}</p>
            <a href='#' class='btn btn-primary'>{$cita->getConsulta()}r</a>
            <a href='#' class='btn btn-danger'>{$cita->getDescripcion()}</a>
          </div>
        </div>
        </section>";
}
?>

   

<button>Create new ticket</button>
    
</body>
</html>