<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pase al dia</title>
    
    <script>
        function cerrarVentana() {
            window.close();
            window.location.href = '../html/inicio.html';
        }

        setTimeout(cerrarVentana, 3000);
    </script>
</head>
<body>
    <h1>BIENVENIDO</h1>
    <?php
   
    include_once('conex.php');

    ?>
</body>
</html>
