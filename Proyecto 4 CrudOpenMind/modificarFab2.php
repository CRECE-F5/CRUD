<?php
	$fabrica = $_GET['fabrica'];
	$sql = "select nombre, fk_ciudad from fabrica where id_fabrica = '$fabrica' ";
	include 'conexion.php';
	$resultado = mysqli_query($link,$sql);
	$array = mysqli_fetch_array($resultado);
?>
<form method="post">
	nombre
	<input type="text" name="nombre" value="<?php echo $array[0];?>">
	<br>
	ciudad
	<select name="ciudad">
	        <?php
	        $consulta="select id_ciudad,nombre from ciudad";
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
	$ciudad = $_POST['ciudad'];

	$update = "UPDATE fabrica SET nombre= '$nom',fk_ciudad = '$ciudad' WHERE id_fabrica = '$fabrica'";
	mysqli_query($link, $update);
	echo mysqli_error($link);
	if (mysqli_error($link)) {
		header("location:modificarFab.php?msj=1");	
	}
	else{
		header("location:modificarFab.php?msj=0");
	}
}
?>