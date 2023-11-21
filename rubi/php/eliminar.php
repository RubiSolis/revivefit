<?php
include_once('conex.php');
$id_usu=$_REQUEST['id_usu'];

$sql="DELETE  FROM usuario WHERE id_usu='$id_usu'";
$query= mysqli_query($conex,$sql);

if ($query){
    sleep(1);

    header('index.php');
}
?>
<a href="../html/inicio.html">Volver</a>