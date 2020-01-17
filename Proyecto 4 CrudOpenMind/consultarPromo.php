<!DOCTYPE html>
<html>
<head>
	<title>CONSULTAR PROMOCION</title>
	<meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
	<style>
		th {color: white; background-color: #3981DF; }

	</style>
</head>
<body>
	<?php 
	include "index.php";

	?>
	<div class="container">
		<div class="table-responsive">

	<table id="example" data-order='[[0, "asc"]]' data-page-length='25' class="table table-sm table-striped table-hover table-bordered">
    <thead>
      <tr>
          <th scope="col">Promoción</th>
          <th scope="col">Fecha Inicio</th>
          <th scope="col">Fecha Fin</th>
          <th scope="col">Fábrica</th>
          
      </tr>
    </thead>

    <tbody>

			<?php
			include 'conexion.php';
			$consultar = "SELECT promociones.nombre, promociones.fecha_inicio, promociones.fecha_fin, fabrica.nombre FROM promociones INNER JOIN fabrica ON id_fabrica = fk_fabrica
			   where promociones.estatus = 1";
			$resultado = mysqli_query($link,$consultar);
			echo mysqli_error($link);
			while($array = mysqli_fetch_array($resultado)){?>

				<tr>
					<td><?php echo $array[0];?></td>
					<td><?php echo $array[1];?></td>
					<td><?php echo $array[2];?></td>
					<td><?php echo $array[3];?></td>

				</tr>			

			 <?php

			}

		?>
		</tbody>
	</table>
		</div>
			</div>	


  	</body>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <script type="text/javascript"  src="js/datatable.js"></script>
  
  <!--datatables-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
  <!--datatables-->

</html>
