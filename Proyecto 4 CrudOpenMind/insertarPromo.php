<?php
$nombre = $_POST['nombre'];
$fechIn = $_POST['fechInicio'];
$fechFin = $_POST['fechFin'];
$fk_fabrica = $_POST['fabrica'];
$sql = "INSERT INTO promociones (nombre, fecha_inicio, fecha_fin, fk_fabrica, estatus) 
		VALUES ('$nombre', '$fechIn', '$fechFin', '$fk_fabrica', 1)";
include 'conexion.php';
mysqli_query($link,$sql);
echo mysqli_error($link);
header('location:index.php');
?>