<?php
$nombre = $_POST ['nombre'];
$apellido= $_POST['apellido'];
$dni= $_POST['dni'];
$nacionalidad= $_POST['nacionalidad'];
$fechanacimiento= $_POST['fechaNac'];
$fk_promocion= $_POST['promocion'];
$fk_nacionalidad=$_POST['nacionalidad'];

$sql = "INSERT INTO coders (nombre, apellido, dni, fecha_nacimiento, fk_promociones, fk_pais ) 
        VALUES ('$nombre','$apellido','$dni','$fechanacimiento','$fk_promocion','$fk_nacionalidad')";
include 'conexion.php';
mysqli_query($link,$sql);
echo mysqli_error($link);
header('location:index.php');
?>