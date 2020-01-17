<!DOCTYPE html>
<html>
<head>
	<title>CODERS</title>
</head>
<body>
	<?php 
	include "index.php";

	?>
	<form method="post" action="insertarCoder.php">

        <!--formulario de CODERS-->
            
            <fieldset class="cajita"> 
                <legend> Coders </legend>
                <div>
                    <label for="name">DNI</label>
                    <input id="dni" name="dni" type="text">
                    <span id="dniInfo"></span>
                </div><br>
                <div>
                    <label for="name">Nombre</label>
                    <input id="name" name="nombre" type="text">
                    <span id="nameInfo"></span>
                </div><br>
                <div>
                    <label for="ape">Apellido</label>
                    <input id="ape" name="apellido" type="text">
                    <span id="apeInfo"></span>
                </div><br>

            
                <div>
                    <label for="f_Nac">Fecha Nacimiento</label>
                    <span id="fechaInfo"></span>
                    <input type="date" name="fechaNac" id="user_date" />
                     <input type="button" value="validar" onclick="javascript:validar();" />
                     <div id="result"></div>
                </div><br>
            	
		PROMOCION
        <select name="promocion">
	        <?php
	        include "conexion.php";
	        $consulta="SELECT id_promociones, nombre FROM promociones";
	        $r=mysqli_query($link,$consulta);
	       
	        while ($arr= mysqli_fetch_array($r)) {   ?>
	        	<option value="<?php echo $arr[0]?>">
	        		<?php echo $arr[1]?>
	        	</option>

	      <?php  }   ?>
        </select> <br>


        <select name="nacionalidad">
	        <?php

	        $consulta="SELECT id_pais, nacionalidad FROM pais";
	        $r=mysqli_query($link,$consulta);
	       
	        while ($arreglop = mysqli_fetch_array($r)) {   ?>
	        	<option value="<?php echo $arreglop[0]?>">
	        		<?php echo $arreglop[1]?>
	        	</option>

	      <?php  }   ?>
        </select> <br> <br>
            <input type="submit" name="enviar">
			
		</fieldset> 
	</form>
	<script src="js/jsCoder.js"></script>
</body>
</html>

