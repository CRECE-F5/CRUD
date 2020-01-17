<?php
session_start();
include 'conexion.php';
$nombre = $_POST ['nombre'];
			$email= $_POST['mail'];
			$password= $_POST['pass'];
			$tipo= $_POST['tipo'];
			$fk_promociones= $_POST['promocion'];


$cap = 'notEq';
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Verificamos si el captcha es correcto
    if ($_POST['captcha'] == $_SESSION['cap_code']) {
$cap = 'Eq';
	$consulta = "SELECT * FROM usuario WHERE email='$email'";
  	$reg= mysqli_query($link, $consulta);
    $num = mysqli_num_rows($reg);
    
        if($num == 0){

			$hashin = password_hash($_POST['pass'], PASSWORD_DEFAULT); //guarda clave incriptada

			$sql = "INSERT INTO usuario (nombre,  email, password, tipo, estatus) 
			        VALUES ('$nombre','$email','$hashin','$tipo', 1)";
			
			mysqli_query($link,$sql);
			echo mysqli_error($link);

			$consulta="SELECT id_usuario FROM usuario WHERE email='$email'";
			$r=mysqli_query($link,$consulta);
			$arr=mysqli_fetch_array($r);

			$sqll = "INSERT INTO promo_usuario (fk_usuario, fk_promociones) 
			        VALUES ('$arr[0]', '$fk_promociones')";
		
			mysqli_query($link,$sqll);
			echo mysqli_error($link);     

            
        }else{
            echo "Ya estás registrado";
        }

        $cap = 'Eq';
    } else {
       
        $cap = '';
       header('location:usuario.php?msj=1');
    }
  }
  header('location:index.php');

?>