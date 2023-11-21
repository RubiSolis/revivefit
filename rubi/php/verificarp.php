<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el DNI enviado por el formulario
    $DNI = $_POST["DNI"];

    include_once('conex.php');

    // Verificar si hay errores en la conexión
    if ($conex->connect_error) {
        die("La conexión a la base de datos falló: " . $conex->connect_error);
    }

    // Consulta SQL para obtener la fecha de vencimiento del pase
    $consulta = "SELECT fechav_usu FROM usuario WHERE dni_usu = '$DNI'";

    // Ejecutar la consulta
    $resultado = $conex->query($consulta);

    // Verificar si se encontró un usuario con el DNI
    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $fechav_usu= $fila['fechav_usu'];

        // Comparar la fecha de vencimiento con la fecha actual
        $fechaA= date('Y-m-d H:i:s');

        if ($fechav_usu > $fechaA) {
          header("location:acceso.php"); // Corregir la URL de redirección
    exit();
        } else {
            header("pasecadu.html"); // Redirigir a la página de pase caducado
            exit();
        }
    } else {
        // Si no se encuentra el DNI en la base de datos, puedes redirigir a una página de error
        header("Location: usuario_no_encontrado.html");
        exit();
    }

    // Cerrar la conexión a la base de datos
    $conex->close();
    
} else {
    // Si se intenta acceder directamente a este archivo sin enviar datos por POST, redirigir a la página principal
    header("Location: index.html");
    exit();
}

?>

