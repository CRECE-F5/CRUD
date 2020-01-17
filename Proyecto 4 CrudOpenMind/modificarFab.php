<!DOCTYPE html>
<html>
<head>
	<title>MODIFICAR FABRICA</title>
</head>
<body>
	<?php 
	include "index.php";

	?>
	<form method="post" action="">
		FABRICA
		<input type="text" name="fabrica">
		<input type="submit" name="">
	</form>
	<?php

		if (isset($_POST['fabrica'])) {
			include 'conexion.php';
			$fabrica = $_POST['fabrica'];

			$sql = "SELECT fabrica.nombre, ciudad.nombre, id_fabrica FROM 
			fabrica INNER JOIN ciudad ON fk_ciudad=id_ciudad
			WHERE fabrica.estatus=1 AND fabrica.nombre LIKE '%$fabrica%'";
			$resultado = mysqli_query($link,$sql);
			while($arr = mysqli_fetch_array($resultado)) { ?>
			<tr>
				<td> <?php echo $arr[0]; ?> </td>
				<td> <?php echo $arr[1]; ?> </td>
				<td> <a href="modificarFab2.php?fabrica=<?php echo $arr[2];?>"> Modificar</a></td> 
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