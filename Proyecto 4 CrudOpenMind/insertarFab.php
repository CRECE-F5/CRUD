<?php
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$sql = "insert into fabrica 
	   (nombre,fk_ciudad,estatus) value ('$nombre','$ciudad',1)";
include 'conexion.php';
mysqli_query($link,$sql);
echo mysqli_error($link);
header('location:index.php');
?>
