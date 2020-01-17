<!DOCTYPE html>
<html>
<head>
	<title>ELIMINAR PROMOCIONES</title>
</head>
<body>

	<form method= "post">
	Promocion
	<input type="text" name="nombre">
	<br>
	<input type="submit" name="">
	</form>

	<?php 
	 include 'conexion.php';
	 if(isset($_POST['nombre'])){

	 $nombre = $_POST['nombre'];
	
	 $select = "SELECT id_promociones, nombre, fecha_inicio, fecha_fin FROM promociones WHERE nombre LIKE '%$nombre%'";
	 $resultado = mysqli_query($link,$select);
	 echo mysqli_error($link);
	 while ($array = mysqli_fetch_array($resultado)) {
	?>
	<tr>
	 	<td><?php echo $array[0]; ?></td>
	 	<td><?php echo $array[1]; ?></td>
	 	<td><?php echo $array[2]; ?></td>
	 	
	 	<td>
	 		<a href="eliminarPromo2.php?id_promociones=<?php echo $array[0];?>">
	 			ELIMINAR
	 		</a>
	 	</td>
	 </tr>
	
	<?php } } ?>



</body>
</html>