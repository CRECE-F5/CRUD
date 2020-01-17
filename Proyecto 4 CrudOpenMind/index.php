<?php 
  session_start();

 ?>
<html>
    <head>
            <title>BBDD OpenMind</title>
            <meta charset="utf-8">

            
            <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <fieldset>
            <legend> las MAGas con H </legend>
                <div>
                    <?php
                        if(isset($_SESSION['nombre'])){
                            
                            if($_SESSION['tipo']== 1){
                                include 'menu_A.html';
        
                           }else if($_SESSION['tipo']== 2){
                              include 'menu_R.html';

                           }else{
                              include 'menu_F.html';
                            }
                            echo "Bienvenido ". $_SESSION['nombre'];


                        }
                        else{ ?>
        


                    <a href="loginUsuario.html">Login</a><BR>
                        <?php
                        }
                    ?>
                    
                </div>
                <img class="bd" src="img/bd.png">
            </fieldset>
    </body>
</html>