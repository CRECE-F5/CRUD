<!DOCTYPE html>
<html>
<head>
	<title>FABRICA</title>
</head>
<body>
	<?php 
	include "index.php";


	?>
	<form method="post" action="insertarFab.php" >
		<div>
            <label for="nombre">Fabrica</label>
            <input id="nombre" name="nombre" type="text">
            <span id="nombreInfo"></span>
        </div><br>
		
		
		<label for="ciudad">Ciudad</label>    
        <select name="ciudad">
	        <?php
	        include "conexion.php";
	        $consulta="SELECT id_ciudad, nombre FROM ciudad";
	        $r=mysqli_query($link,$consulta);
	       
	        while ($arr = mysqli_fetch_array($r)) {   ?>
	        	<option value="<?php echo $arr[0]?>">
	        		<?php echo $arr[1]?>
	        	</option>

	      <?php  }   ?>
        </select> <br>
            <input type="submit" name="enviar">
	</form>
	<script src="js/jsFabrica.js"></script>
</body>
</html>