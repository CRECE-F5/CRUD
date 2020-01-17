<?php 

include 'conexion.php';
$idusuario = $_GET['idusuario'];
$update = "UPDATE  usuario SET estatus='0' WHERE id_usuario='$idusuario'";
mysqli_query($link,$update);
echo mysqli_error($link);
?>

