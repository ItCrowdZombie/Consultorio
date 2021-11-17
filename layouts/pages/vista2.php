<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Consultorio</title>
</head>
<body>
<form class="row g-3">
  
<div class="col-md-6">
    <label for="inputName" class="form-label">Nombre y Apellidos</label>
    <input type="text" class="form-control" id="inputName">
</div>

<div class="col-md-4">
    <label for="inputEquipo" class="form-label">Equipo</label>
    <select id="inputEquipo" class="form-select">
      <option selected>Elige...</option>
      <option>Equipo1</option>
      <option>Equipo2</option>
      <option>Equipo3</option>
    </select>
</div>

<div class="col-md-6">
    <label for="inputTema" class="form-label">Tema de la consulta</label>
    <input type="text" class="form-control" id="inputTema">
</div>

<div class="col-12">
    <label for="inputAddress" class="form-label">Describe tu consulta</label>
    <input type="text" class="form-control" id="inputAddress" style="height: 100px">
  </div>

</form>
<section class="text-left">
    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="submit" class="btn btn-warning">Cancelar y volver</button>
    <button type="reset" class="btn btn-danger">Borrar</button>
</section>
</body>
</html>