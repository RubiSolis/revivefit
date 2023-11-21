<?php

include_once('../php/conex.php');

$id_clase=$_POST['id_clase'];
$TIPO=$_POST['TIPO'];
$DESCRIPCION=$_POST['DESCRIPCION'];
$HORA=$_POST['HORA'];
$DIA=$_POST['DIA'];

$sql="UPDATE clase SET tipo_clase='$TIPO', descripcion_clase='$DESCRIPCION', hora_clase='$HORA', dia_clase='$DIA' WHERE id_clase='$id_clase'";

$query= mysqli_query($conex,$sql);

if($query){
    header('clases.php');
}

?>

<a href="../html/inicio.html">Volver</a>