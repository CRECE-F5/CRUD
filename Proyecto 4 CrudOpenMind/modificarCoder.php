<!DOCTYPE html>
<html>
<head>
	<title>MODIFICAR CODERS</title>
</head>
<body>
	<?php 
	include "index.php";

	?>
	<form method="post" action="">
		CODER
		<input type="text" name="coders">
		<input type="submit" name="">
	</form>
	<?php

		if (isset($_POST['coders'])) {
			
			include 'conexion.php';
			$coders = $_POST['coders'];
			$sql = "SELECT coders.nombre, promociones.nombre, pais.nombre, id_coders 
					FROM coders INNER JOIN promociones ON fk_promociones = id_promociones 
					INNER JOIN pais ON fk_pais = id_pais
					WHERE coders.nombre LIKE '%$coders%'";
			
			$resultado = mysqli_query($link,$sql);
			echo mysqli_error($link);
			while($arr = mysqli_fetch_array($resultado)) { ?>
			<tr>
				<td> <?php echo $arr[0]; ?> </td>
				<td> <?php echo $arr[1]; ?> </td>
				<td> <?php echo $arr[2]; ?> </td>
				<td> <a href="modificarCoder2.php?coders=<?php echo $arr[3];?>"> Modificar</a></td> 
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