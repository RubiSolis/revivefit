<?php
include_once('conex.php');

// Inicializar variables de mensaje
$mensajeExito = $mensajeError = '';

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_usu = $_POST['id_usu'];
    $NOM = $_POST['NOM'];
    $APELL = $_POST['APELL'];
    $DNI = $_POST['DNI'];
    $FECHAI = $_POST['FECHAI'];
    $TIPO = $_POST['TIPO'];

    // Validar y limpiar datos
    $NOM = mysqli_real_escape_string($conex, $NOM);
    $APELL = mysqli_real_escape_string($conex, $APELL);
    $DNI = mysqli_real_escape_string($conex, $DNI);
    $FECHAI = mysqli_real_escape_string($conex, $FECHAI);
    $TIPO = mysqli_real_escape_string($conex, $TIPO);

    // Actualizar el usuario en la base de datos
    $sql_update = "UPDATE usuario SET nom_usu='$NOM', apell_usu='$APELL', dni_usu='$DNI', fechai_usu='$FECHAI', clases_usu='$TIPO' WHERE id_usu='$id_usu'";
    $result = mysqli_query($conex, $sql_update);

    if ($result) {
       
        sleep(1);
        header('Location: index.php');
        exit();
    } else {
        $mensajeError = 'Error al actualizar: ' . mysqli_error($conex);
    }
}


$id_usu = $_REQUEST['id_usu'];
$sql = "SELECT * FROM usuario WHERE id_usu='$id_usu'";
$query = mysqli_query($conex, $sql);
$resultado = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="es">
<head>

</head>
<body>
    <div class="container">
        <h1 class="text-danger p-2 text-white text-center">Editar Cliente</h1>

        <?php if ($mensajeExito): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $mensajeExito; ?>
            </div>
        <?php endif; ?>

        <?php if ($mensajeError): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $mensajeError; ?>
            </div>
        <?php endif; ?>

   
        <form action="editarusu.php" method="POST">
       
        </form>
    </div>

    <a href="index.php">Regresar</a>
</body>
</html>








