<?php 

include 'conexion.php';
$idcoders = $_GET['idcoders'];
$delete = "delete from coders where id_coders='$idcoders'";
mysqli_query($link,$delete);
echo mysqli_error($link);
?>