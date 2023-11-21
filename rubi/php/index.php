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
    <h1 class="titulo">Registrar</h1>
    <br>
    <div class="container">
        <a class="link" href="registro.php" class="btn">Agregar cliente</a>
    </div>
    <br>
    <div class="container bg-light p-3 border border-dark rounder">
        <h1>Lista de clientes</h1>
        <table class="table">
  <thead class="table">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">dni</th>
      <th scope="col">Fecha de ingreso</th>
      <th scope="col">Actividad</th>
      <th scope="col">Fecha de venecimiento</th>
    </tr>
  </thead>
  <tbody>

         <?php
              require("conex.php");
              $sql= $conex->query ("SELECT * FROM usuario 
              INNER JOIN clase ON usuario.clases_usu = clase.id_clase");
            

             while ($resultado= $sql ->fetch_assoc()){
              ?>

               <tr>

               <th scope="row"><?php echo $resultado['id_usu']?></th>
               <th scope="row"><?php echo $resultado['nom_usu']?></th>
               <th scope="row"><?php echo $resultado['apell_usu']?></th>
               <th scope="row"><?php echo $resultado['dni_usu']?></th>
               <th scope="row"><?php echo $resultado['fechai_usu']?></th>
               <th scope="row"><?php echo $resultado['tipo_clase']?></th>
               <th scope="row"><?php echo $resultado['fechav_usu']?></th>
               <th scope="row">
                  <a href="editar.php?id_usu=<?php echo $resultado['id_usu']?>" class="btn btn-warning">Editar datos</a>
                  <a href="eliminar.php?id_usu=<?php echo $resultado['id_usu']?>" class="btn btn-danger">Eliminar datos</a>

               </th>
      
               </tr>

               <?php

             }
            
        ?>
             </table>
                 </div>
                 <div class="container">
                <a href="../html/inicio.html" class="btn btn-primary">Volver</a>
                  </div>

                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
               </body>
             </html>

             

 