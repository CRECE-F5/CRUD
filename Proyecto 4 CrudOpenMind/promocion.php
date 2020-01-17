<!DOCTYPE html>
<html>

	<title> PROMOCIONES</title>
</head>
<body>
	<?php 
	include "index.php";

	?>
	<form method="post" action="insertarPromo.php">
		<div>
            <label for="nombre">Promocion</label>
            <input id="nombre" name="nombre" type="text">
            <span id="nombreInfo"></span>
		</div><br>
		<div>
            <label for="fechIn">Fecha Inicio</label>
            <input id="fechIn" name="fechInicio" type="date" >			
			<input type="button" value="validar" onclick="javascript:validar();" />
            <div id="result1"></div>
		</div><br>
		<div>
            <label for="fechFin">Fecha Fin</label>
            <input id="fechFin" name="fechFin" type="date" >		
			<input type="button" value="validar" onclick="javascript:validar1();" />
            <div id="result2"></div>
        </div><br>
		
        Fabrica
		<select name="fabrica">
	        <?php
	        include "conexion.php";
	        $consulta="select id_fabrica,nombre from fabrica";
	        $r=mysqli_query($link,$consulta);
	    
	        while ($arr = mysqli_fetch_array($r)) {   ?>
	        	<option value="<?php echo $arr[0]?>">
	        		<?php echo $arr[1]?>
	        	</option>

	      <?php  }   ?>
        </select> <br>
            <input type="submit" name="enviar">

	</body>
	</form>
	<script src="js/jsPromo.js"></script>

	</html>
		