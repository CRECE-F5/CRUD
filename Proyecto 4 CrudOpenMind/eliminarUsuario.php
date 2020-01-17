<!DOCTYPE html>
<html>
<head>
	<title>ELIMINAR USUARIO</title>
</head>
<body>

	<form method= "post">
	Usuario
	<input type="text" name="nombre">
	<br>
	<input type="submit" name="">
	</form>

	<?php 
	 include 'conexion.php';
	 if(isset($_POST['nombre'])){

	 $nombre = $_POST['nombre'];
	 $select = "SELECT id_usuario, nombre FROM usuario WHERE nombre LIKE '%$_POST[nombre]%'";
	 $resultado = mysqli_query($link,$select);
	 echo mysqli_error($link);
	 while ($array = mysqli_fetch_array($resultado)) {
	?>
	<tr>
	 	<td><?php echo $array[0]; ?></td>
	 	<td><?php echo $array[1]; ?></td>
	 	
	 	<td>
	 		<a href="eliminarUsuario2.php?idusuario=<?php echo $array[0];?>">
	 			ELIMINAR
	 		</a>
	 	</td>
	 </tr>
	
	<?php } } ?>

</body>
</html>