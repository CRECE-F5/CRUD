<?php
	$usuario = $_GET['usuario'];
	$sql = "SELECT usuario.nombre, usuario.email, usuario.tipo, promociones.nombre 
					FROM usuario INNER JOIN promo_usuario ON usuario.id_usuario = promo_usuario.fk_usuario
					INNER JOIN promociones ON promociones.id_promociones = promo_usuario.fk_promociones
					WHERE usuario.nombre LIKE '%$usuario%'";

	include 'conexion.php';
	$resultado = mysqli_query($link,$sql);
	$array = mysqli_fetch_array($resultado);
	
?>
<form method="post">
		Nombre:
		<input type="text" name="nombre" value="<?php echo $array[1];?>">
		Email:
		<input type="email" name="email" value="<?php echo $array[2];?>">
		<div>
                  <select name="tipo">
                            <option selected value="0"> Elige una opción </option>
                           <option value="1">Administradora</option> 
                           <option value="2">Responsable</option> 
                           <option value="3">Formadora</option>    
                        </select>
                     </div><br>

		
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
	

	<input type="submit" name="">
</form>
<?php
if (isset($_POST ['nombre'])) {
	$nom = $_POST['nombre'];
	$email = $_POST['email'];
	$tipo = $_POST['tipo'];
	$promo = $_POST['promocion'];
	

	$update = "UPDATE usuario
		SET nombre = '$nom', email= '$email', tipo='$tipo'
			
		where id_usuario = '$usuario'";
	mysqli_query($link, $update);
	echo mysqli_error($link);
	if (mysqli_error($link)) {
		header("location:modificarUsuario.php?msj=1");	
	}
	else{
		header("location:modificarUsuario.php?msj=0");
	}
}
?>