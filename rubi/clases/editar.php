<?php
include_once('../php/conex.php');
$id_clase=$_REQUEST['id_clase'];

$sql="SELECT * FROM clase WHERE id_clase='$id_clase'";
$query= mysqli_query($conex,$sql);
$fila= mysqli_fetch_array($query);

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar</title>
    <link rel="stylesheet" href="../css/editar.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="danger" p=2 text-white text-center>Editar</h1>
    <br>
    <div class="container">
    <form action="editarC.php" method="POST">
        <input type="Hidden" name="id_clase" value="<?php echo $fila['id_clase']?>">
  <div class="mb-3">
    <label class="form-label">clase</label>
    <input type="text" class="form-control" placeholder="" name="TIPO" value="<?php echo $fila['tipo_clase']?>">
  </div>
  <div class="mb-3">
  <label class="form-label">Profesor</label>
    <input type="text" class="form-control" placeholder="" name="DESCRIPCION" value="<?php echo $fila['descripcion_clase']?>">
  </div>
  <div class="mb-3">
  <label class="form-label">Horario</label>
    <input type="text" class="form-control" placeholder="" name="HORA" value="<?php echo $fila['hora_clase']?>">
  </div>
  <div class="mb-3">
  <label class="form-label">Capacidad</label>
    <input type="text" class="form-control" name="CAPACIDAD" value="<?php echo $fila['capacidad_clase']?>">
  </div>
  <div class="mb-3">
  <label class="form-label">Capacidad</label>
    <input type="text" class="form-control" name="DIA" value="<?php echo $fila['dia_clase']?>">
  </div>
  <div class="container text-center">
  <button type="submit" class="btn btn-primary">Editar cliente</button>
  <a href="../html/inicio.html" class="btn.btn-dark">Regresar</a>
  </div>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

