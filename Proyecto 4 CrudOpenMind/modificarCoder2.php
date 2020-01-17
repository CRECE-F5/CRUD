<?php
	$coders = $_GET['coders'];
	$sql = "SELECT id_coders, nombre, apellido, dni, fecha_nacimiento, fk_promociones, fk_pais
	from coders where id_coders = '$coders'";
	
	include 'conexion.php';
	$resultado = mysqli_query($link,$sql);
	$array = mysqli_fetch_array($resultado);

	
?>
<form method="post">
		Nombre:
		<input type="text" name="nombre" value="<?php echo $array[1];?>">
		Apellido:
		<input type="text" name="apellido" value="<?php echo $array[2];?>">
		DNI:
		<input type="text" name="dni" value="<?php echo $array[3];?>">
		Fecha Nacimiento:
		<input type="date" name="fechaNac" value="<?php echo $array[4];?>">		

		
	Promociones:
	<select name="promocion">
			<?php
			include 'conexion.php';
	        $consulta="SELECT id_promociones,nombre from promociones";
	        $r=mysqli_query($link,$consulta);
	       
	        while ($arr = mysqli_fetch_array($r)) {   ?>
	        	<option value="<?php echo $arr[0]?>">
	        		<?php echo $arr[1]?>
	        	</option>

	        <?php  }   ?>
     </select> 
	
	 Nacionalidad:
	<select name="nacionalidad">
			<?php
			include 'conexion.php';
	        $consulta="SELECT id_pais, nacionalidad FROM pais";
	        $r=mysqli_query($link,$consulta);
	       
	        while ($arr = mysqli_fetch_array($r)) {   ?>
	        	<option value="<?php echo $arr[0]?>">
	        		<?php echo $arr[1]?>
	        	</option>
		<?php  }   ?>
     </select>
	

	<input type="submit" name="">
</form>
<?php
if (isset($_POST ['nombre'])) {
	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];
	$dni = $_POST['dni'];
	$fechNac = $_POST['fechaNac'];
	$promo = $_POST['promocion'];
	$nacion = $_POST['nacionalidad'];


	$update = "UPDATE coders 
		SET nombre = '$nom', apellido= '$ape', dni='$dni', 
			fecha_nacimiento='$fechNac', fk_promociones = '$promo', fk_pais='$nacion'
		where id_coders = '$coders'";
	mysqli_query($link, $update);
	echo mysqli_error($link);

 	if (mysqli_error($link)) { ?>
 		<script> 
 			document.location.href="modificarCoder.php?msj=1";
 		</script>
		<?php
	}
	else{ ?>
		<script> 
 			document.location.href="modificarCoder.php?msj=0";
 		</script>
		<?php	
	}
 }

?>