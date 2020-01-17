<?php

    function loginUsuario($link){
            $sql = "SELECT * FROM usuario INNER JOIN promo_usuario ON usuario.id_usuario = promo_usuario.fk_usuario WHERE email = '$_POST[email]'";
            
            $reg= mysqli_query($link, $sql);
            $numero = mysqli_num_rows($reg);        //devuelve el número de filas que contiene la BBDD

        if($numero==1){

            $arr = mysqli_fetch_array($reg);

            if(password_verify($_POST['password'], $arr['password'])){
                $_SESSION['tipo']= $arr['tipo'];
                $_SESSION['nombre']= $arr['nombre'];
                $_SESSION['id']= $arr[0];
                $_SESSION['idPromo']= $arr['fk_promociones'];

            header ("location:index.php");
                           
            }else{
                echo "Clave inválida";
            }


        }else{
            echo "El email no existe";
        }
    }
?>