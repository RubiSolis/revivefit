<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>agregar</title>
    <link rel="stylesheet" href="../css/agregar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="danger" p=2 text-white text-center>Agregar</h1>
    <br>
    <div class="container">
    <form action="insertarC.php" method="POST">
  <div class="mb-3">
    <label for="">Escriba la actividad fisica</label>
    <input type="text" class="form-control" placeholder="" name="TIPO">
  </div>
  <div class="mb-3">
    <LAbel>añada una descripcion</LAbel>
    <input type="text" class="form-control" placeholder="" name="DESCRIPCION">
  </div>
  <div class="mb-3">
    <LAbel>Añada la duracion de la clase</LAbel>
    <input type="text" class="form-control" placeholder="" name="HORA">
  </div>
  <div class="mb-3">
    <LAbel>Añada la capacidad</LAbel>
    <input type="num" class="form-control" name="CAPACIDAD">
  </div>
  <div class="mb-3">
    <LAbel>Añada los dias</LAbel>
    <input type="num" class="form-control" name="DIA">
  </div>
  <div class="container text-center">
  <button type="submit" class="btn btn-primary">Agregar cliente</button>
  <a href="../html/inicio.html" class="btn.btn-dark">Regresar</a>
  </div>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>