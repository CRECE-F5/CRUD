<!DOCTYPE html>
<html>
<head>
	<title>ELIMINAR FABRICA</title>
</head>
<body>

	<form method= "post">
	fabrica
	<input type="text" name="nombre">
	<br>
	<input type="submit" name="">
	</form>

	<?php 
	 include 'conexion.php';
	 if(isset($_POST['nombre'])){

	 $nombre = $_POST['nombre'];
	 $select = "select id_fabrica,nombre from fabrica WHERE nombre LIKE '%$nombre%'";
	 $resultado = mysqli_query($link,$select);
	 echo mysqli_error($link);
	 while ($array = mysqli_fetch_array($resultado)) {
	?>
	<tr>
	 	<td><?php echo $array[0]; ?></td>
	 	<td><?php echo $array[1]; ?></td>
	 	
	 	<td>
	 		<a href="eliminarFab2.php?idfabrica=<?php echo $array[0];?>">
	 			ELIMINAR
	 		</a>
	 	</td>
	 </tr>
	
	<?php } } ?>



</body>
</html>