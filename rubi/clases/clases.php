<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>inicio</title>
    <link rel="stylesheet" href="../css/registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="titulo" >Registrar</h1>
    <br>
    <div class="container">
        <a href="registrarC.php" class="btn">Agregar otro actividad fisica</a>
    </div>
    <br>
    <div class="container bg-light p-3 border border-dark rounder">
     
        <table class="table">
          
  <thead class="table">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tipo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Hora</th>
      <th scope="col">Capacidad</th>
      <th scope="col">Dias</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
         <?php
              include("../php/conex.php");
              $sql= "SELECT * FROM clase";
              $query=mysqli_query($conex,$sql);

             while ($fila=mysqli_fetch_array($query)){
                ?>
                 <tr>

                     <th scope="row"><?php echo $fila['id_clase']?></th>
                     <th scope="row"><?php echo $fila['tipo_clase']?></th>
                     <th scope="row"><?php echo $fila['descripcion_clase']?></th>
                     <th scope="row"><?php echo $fila['hora_clase']?></th>
                     <th scope="row"><?php echo $fila['capacidad_clase']?></th>
                     <th scope="row"><?php echo $fila['dia_clase']?></th>
                     <th scope="row">
                        <a href="editar.php?id_clase=<?php echo $fila['id_clase']?>" class="btn btn-warning">Editar datos</a>
                        <a href="eliminarC.php?id_clase=<?php echo $fila['id_clase']?>" class="btn btn-danger">Eliminar datos</a>

                     </th>
            
                     </tr>
                <?php
             }

             ?>

  </tbody>
</table>
    </div>
    <div class="container">
    <a href="../html/inicio.html" class="btn">Volver</a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>