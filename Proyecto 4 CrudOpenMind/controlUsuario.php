<?php
    session_start();
    include 'conexion.php';
    include 'funcionUsuario.php';
    $oculto = $_POST['oculto'];

    switch($oculto){
    

        case 1:
            loginUsuario($link);
        break;

    }

?>