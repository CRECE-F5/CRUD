<!DOCTYPE html>
<html>
    <head>
            <title>BBDD OpenMind</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
  
    <div class="container">        
        <p class="texto">Seleccionar una acción:</p>

      <!--ACCIONES DE CODERS-->

        <div class="dropdown dropright">
            <button  type="button" class="p-3 mb-2 bg-primary text-white  dropdown-toggle" data-toggle="dropdown">
            Usuario </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="coders.php">Agregar</a>
            <a class="dropdown-item" href="eliminarCoder.php">Eliminar</a>
            <a class="dropdown-item" href="modificarCoder.php">Modificar</a>
            <a class="dropdown-item" href="consultarCoder.php">Consultar</a>
          </div>
        </div>

        <div class="dropdown dropright">
        <button  type="button" class="p-3 mb-2 bg-primary text-white  dropdown-toggle" data-toggle="dropdown">
        Fábrica </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="fabrica.php">Agregar</a>
            <a class="dropdown-item" href="eliminarFab.php">Eliminar</a>
            <a class="dropdown-item" href="modificarFab.php">Modificar</a>
            <a class="dropdown-item" href="consultarFab.php">Consultar</a>
        </div>
        </div>

       <div class="dropdown dropright">
        <button  type="button" class="p-3 mb-2 bg-primary text-white  dropdown-toggle" data-toggle="dropdown">
        Promoción </button>
         <div class="dropdown-menu">
           <a class="dropdown-item" href="promocion.php">Agregar</a>
           <a class="dropdown-item" href="eliminarPromo.php">Eliminar</a>
           <a class="dropdown-item" href="modificarPromo.php">Modificar</a>
           <a class="dropdown-item" href="consultarPromo.php">Consultar</a>
         </div>
       </div>      

     <div class="dropdown dropright">
        <button  type="button" class="p-3 mb-2 bg-primary text-white  dropdown-toggle" data-toggle="dropdown">
        Coder</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="coders.php">Agregar</a>
            <a class="dropdown-item" href="eliminarCoder.php">Eliminar</a>
            <a class="dropdown-item" href="modificarCoder.php">Modificar</a>
            <a class="dropdown-item" href="consultarCoder.php">Consultar</a>
          </div>
        </div>
    </div>
<a href="cerrarSesion.php">Cerrar sesión</a><BR>
</body>
</html>
