<!DOCTYPE html>
<html>
<head>
	<title>MODIFICAR PROMOCIONES</title>
</head>
<body>
	<?php 
	include "index.php";

	?>
	<form method="post" action="">
		PROMOCIONES
		<input type="text" name="promociones">
		<input type="submit" name="">
	</form>
	<?php

		if (isset($_POST['promociones'])) {
			
			include 'conexion.php';
			$promociones = $_POST['promociones'];


			$sql = "SELECT promociones.nombre, promociones.fecha_inicio, promociones.fecha_fin, fabrica.nombre, promociones.id_promociones FROM promociones INNER JOIN fabrica ON fk_fabrica = id_fabrica 
					WHERE promociones.nombre LIKE '%$promociones%'";
			$resultado = mysqli_query($link,$sql);
			echo mysqli_error($link);
			
			while($arr = mysqli_fetch_array($resultado)) { ?>
			<tr>
				<td> <?php echo $arr[0]; ?> </td>
				<td> <?php echo $arr[1]; ?> </td>
				<td> <?php echo $arr[2]; ?> </td>
				<td> <?php echo $arr[3]; ?> </td>
				<td> <a href="modificarPromo2.php?promociones=<?php echo $arr[4];?>"> Modificar</a></td> 
			</tr>
		<?php	
			}
		}
	?>
	<div class="msj">
		<?php 
		if (isset($_GET['msj'])) {
			if ($_GET['msj'] == 1) {
				echo "error en la modificación";
			}
			else{
				echo "exito";
			}
		}
	?>	
	</div>
</body>
</html>