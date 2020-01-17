<?php
	$promociones = $_GET['promociones'];	
	$sql = "SELECT nombre, fecha_inicio, fecha_fin, fk_fabrica FROM promociones WHERE id_promociones = '$promociones'";
	include 'conexion.php';
	$resultado = mysqli_query($link,$sql);
	$array = mysqli_fetch_array($resultado);
?>
<form method="post">
	Nombre
	<input type="text" name="nombre" value="<?php echo $array[0];?>">
	<br>
	Fecha inicio
	<input type="date" name="fechIn" value="<?php echo $array[1];?>">
	<br>
	Fecha fin
	<input type="date" name="fechFin" value="<?php echo $array[2];?>">
	<br>
	Fabrica
	<select name="fabrica">
	        <?php
	        $consulta="select id_fabrica,nombre from fabrica";
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
	$fechIn = $_POST['fechIn'];
	$fechFin = $_POST['fechFin'];
	$fabrica = $_POST['fabrica'];

	$update = "UPDATE promociones SET nombre='$nom', fecha_inicio='$fechIn', fecha_fin='$fechFin', fk_fabrica = '$fabrica' WHERE id_promociones = '$promociones'";
	mysqli_query($link, $update);
	echo mysqli_error($link);
	
	if (mysqli_error($link)) {
		header("location:modificarPromo.php?msj=1");		
	}
	else{
		header("location:modificarPromo.php?msj=0");
	}

}
?>