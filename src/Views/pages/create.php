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
    <form class="row g-3" action = "/list" method = "POST">
        <div class="col-md-6">
            <label for="usuario" class="form-label">Nombre y Apellidos</label>
            <input type="text" class="form-control" id="inputName" name="usuario"required>
        </div>
        <div class="col-md-4">
            <label for="equipo" class="form-label">Equipo</label>
            <input type="text" class="form-control" id="inputEquipo" name="equipo" required>
        </div>
        <div class="col-md-6">
            <label for="consulta" class="form-label">Tema de la consulta</label>
            <input type="text" class="form-control" id="inputTema" name="consulta" required>
        </div>
        <div class="col-12">
            <label for="description" class="form-label">Describe tu consulta</label>
            <input type="text" class="form-control" id="inputDescription" name="description" style="height: 100px" required>
        </div>
        <section class="text-left">
            <button id="send" type="submit" class="btn btn-primary">Enviar</button>
            <a href='/list' class="btn btn-warning">Cancelar y volver</a>
            <button id="delete" type="reset" class="btn btn-danger">Borrar</button>
        </section>
    </form>  
</body>
</html>