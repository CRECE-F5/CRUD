<?php 

include 'conexion.php';
$id_promociones = $_GET['id_promociones'];
$update = "UPDATE  promociones SET estatus='0' WHERE id_promociones='$id_promociones'";
mysqli_query($link,$update);
echo mysqli_error($link);
?>