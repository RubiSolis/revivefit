<?php

include_once('../php/conex.php');

$TIPO=$_POST['TIPO'];
$DESCRIPCION=$_POST['DESCRIPCION'];
$HORA=$_POST['HORA'];
$CAPACIDAD=$_POST['CAPACIDAD'];
$DIA=$_POST['DIA'];

$sql="INSERT INTO clase (tipo_clase, descripcion_clase, hora_clase, capacidad_clase, dia_clase) VALUES ('$TIPO','$DESCRIPCION', '$HORA', '$CAPACIDAD', '$DIA')";

$query=mysqli_query($conex,$sql);

if ($query== TRUE) {

    header("clases.php");
}

?>
<a href="../html/inicio.html">Volver</a>