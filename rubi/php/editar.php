<?php
include_once('conex.php');
$id_usu=$_REQUEST['id_usu'];

$sql="SELECT * FROM usuario WHERE id_usu='$id_usu'";
$query= mysqli_query($conex,$sql);
$resultado= mysqli_fetch_array($query);

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="danger" p=2 text-white text-center>Editar Cliente</h1>
    <br>
    <div class="container">
    <form action="editarusu.php" method="POST">
        <input type="Hidden" name="id_usu" value="<?php echo $resultado['id_usu']?>">
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" placeholder="Nombre" name="NOM" value="<?php echo $resultado['nom_usu']?>">
  </div>
  <div class="mb-3">
  <label class="form-label">Apellido</label>
    <input type="text" class="form-control" placeholder="Apellido" name="APELL" value="<?php echo $resultado['apell_usu']?>">
  </div>
  <div class="mb-3">
  <label class="form-label">Dni</label>
    <input type="text" class="form-control" placeholder="DNI" name="DNI" value="<?php echo $resultado['dni_usu']?>">
  </div>
  <div class="mb-3">
  <input type="hidden" name="FECHAI" value="<?php echo date('Y-m-d H:i:s'); ?>">
  </div>

  <label>Opciones </label>
  <select class="form-select mb-3" name="TIPO" aria-label="Default select example">
  <option select disabled>--Seleccionar Actividad--</option>
  <?php
  include("conex.php");

  $sql=$conex->query("SELECT * FROM clase ");
  while($resultado=$sql->fetch_assoc()){
    echo "<option value='".$resultado['id_clase']."'>".$resultado['tipo_clase']."</option>";

  }

  ?>



  </select>

  <div class="container text-center">
  <button type="submit" class="btn btn-primary">Editar cliente</button>
  <a href="../html/inicio.html" class="btn.btn-dark">Regresar</a>
  </div>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
