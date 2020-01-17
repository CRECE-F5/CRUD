<!DOCTYPE html>
<html>
<head>
	<title>MODIFICAR USUARIO</title>
</head>
<body>
	<?php 
	include "index.php";

	?>
	<form method="post" action="">
		USUARIO
		<input type="text" name="usuario">
		<input type="submit" name="">
	</form>

	<table>
		<tr>
				<td> nombre </td>
				<td> email </td>
				<td> tipo> </td>
			</tr>
	<?php
		if (isset($_POST['usuario'])) {
			
			include 'conexion.php';
			$usuario = $_POST['usuario'];
			$sql = "SELECT usuario.nombre, usuario.email, usuario.tipo, promociones.nombre, usuario.id_usuario
					FROM usuario INNER JOIN promo_usuario ON usuario.id_usuario = promo_usuario.fk_usuario
					INNER JOIN promociones ON promociones.id_promociones = promo_usuario.fk_promociones
					WHERE usuario.nombre LIKE '%$usuario%'";

			$resultado = mysqli_query($link,$sql);
			echo mysqli_error($link);
			while($arr = mysqli_fetch_array($resultado)) { ?>
			<tr>
				<td> <?php echo $arr[0]; ?> </td>
				<td> <?php echo $arr[1]; ?> </td>
				<td> <?php if($arr[2]== 1){
                                echo "administradora";
        
                           }else if($arr[2]== 2){
                              echo "responsable";

                           }else{
                              echo "formadora";
                            } ?> </td>

				<td> <a href="modificarUsuario2.php?usuario=<?php echo $arr[4];?>"> Modificar</a></td> 
			</tr>
		<?php	
			}
		}
	?>
</table>
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