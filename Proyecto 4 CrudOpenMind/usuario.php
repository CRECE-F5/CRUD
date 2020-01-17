<!DOCTYPE html>
<html>
<head>
	<title>USUARIO</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php 
	include "index.php";

	?>
	<form  class="cuadro" method="post" action="insertarUsuario.php">

              
            <fieldset class="cuadro"> 
                <legend> Usuario </legend>      
                <div>
                    <label for="name">Nombre</label>
                    <input id="name" name="nombre" type="text">
                    <span id="nameInfo"></span>
                </div><br>
                <div>
                    <label for="mail">Email</label>
                    <input id="mail" name="mail" type="email">
                    <span id="mailInfo"></span>
                </div><br>

            
                <div>
                    <label for="password">Password</label>
                    <input id="pass" name="pass" type="password">
                    <span id="passInfo"></span>
                </div><br>

                  <div>
                        <select name="tipo">
                            <option selected value="0"> Elige una opción </option>
                           <option value="1">Administradora</option> 
                           <option value="2">Responsable</option> 
                           <option value="3">Formadora</option>    
                        </select>
                     </div><br>
            	
                <?php
                if ($_SESSION['tipo']== 2) {
                    $condicion= "AND id_promociones = '$_SESSION[idPromo]'";
                }
                else{
                    $condicion="";
                }

                ?>
		Promocion<select name="promocion">
            <?php
            include "conexion.php";
            $consulta="SELECT id_promociones, nombre FROM promociones WHERE ESTATUS = 1 $condicion";
            $r=mysqli_query($link,$consulta);
           
            while ($arr= mysqli_fetch_array($r)) {   ?>
                <option value="<?php echo $arr[0]?>">
                    <?php echo $arr[1]?>
                </option>

          <?php  }   ?>
        </select> <br>
			
		


        <div id="form">
                <table border="0" width="100%">
                    <tr>
                        <td colspan="2">
                            <label>Ingrese el contenido de la imagen</label>
                            <label class="mandat"> *</label>
                        </td>
                    </tr>
                    <tr>
                        <td width="60px">                           
                            <input type="text" name="captcha" id="captcha" maxlength="6" size="6"/>
                        </td>
                        <td><img src="captcha.php"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Submit" id="submit"/></td>
                       
                    </tr>
                </table>
                 <p class="error">
                    <?php 
                    if (isset($_GET['msj']) && $_GET['msj']==1) {
                    echo "error";
                 }
                  ?></p>
            </div>
        </fieldset> 
	</form>

	<script src="js/jsUsuario.js"></script>
</body>
</html>