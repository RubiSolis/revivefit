
<?php

include_once('conex.php');

$NOM=$_POST['NOM'];
$APELL=$_POST['APELL'];
$DNI=$_POST['DNI'];
$FECHAI=date('Y-m-d H:i:s');
$TIPO=$_POST['TIPO'];
$FECHAV= date('Y-m-d H:i:s', strtotime($FECHAI. '+30 days'));



$sql="INSERT INTO usuario (nom_usu, apell_usu, dni_usu, fechai_usu, clases_usu, fechav_usu) VALUES ('$NOM','$APELL', '$DNI', '$FECHAI','$TIPO', '$FECHAV')";

$query= mysqli_query($conex,$sql);

if ($query== TRUE) {
    sleep(1);

    header("Location: index.php");
}

?>
<a href="../html/inicio.html">Volver</a>



