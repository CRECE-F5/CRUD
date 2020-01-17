<?php 

include 'conexion.php';
$idfabrica = $_GET['idfabrica'];
$update = "update  fabrica set estatus='0' where id_fabrica='$idfabrica'";
mysqli_query($link,$update);
echo mysqli_error($link);
?>

