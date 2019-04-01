<!DOCTYPE html>
<html lang="es">
<head>
	<title>Papeleria D'Jesus</title>

	<link type="text/css" href="../css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="../js/a.js"></script>
</head>

<body class="bg-dark"> 
    <center>
        <form class="form-inline bg-dark">
				<div class="form-row">
					<div class="col">
					</div> 
					<div class="col bg">
						<br>
						<center>
						<a href="../index.php" style="text-decoration: none;">
						<img src="../img/atras.png" alt="" width="40px" height="40px">
						</a>
						<br>
						<p class="form-text text-light">
							Regresar
						</p>
						</center>
					</div>
					<div class="col">
                    <br>
                    <br>
						<p class="form-text text-light" style="width: 800px;">
                            Aqui se muestra una lista de cada producto 
                            registrado en la base de datos con su respectiva informacion
						</p>
					</div>
			  </div>
		</form>
		<table class="table table-hover bg-light">
			<thead>
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Vista previa</th>
					<th scope="col">Existencias</th>
					<th scope="col">Precio</th>
				</tr>
			</thead>
			<tbody>
			<?php
			include "conexion.php";
				
			$sqli="SELECT * from productos ORDER BY nombre_producto ASC";
			$result=mysqli_query($conectar,$sqli);

			while($mostrar=mysqli_fetch_array($result)){
			?>
				<tr>
					<th scope="row"><?php echo $mostrar['nombre_producto'] ?></th>
					<th scope="row">
						<?php  
							echo "<img style='width: 150px;' src='data:image/jpg;base64,".base64_encode($mostrar['img_producto'])."'
							 data-holder-rendered='true'>"; 
            ?>
					</th>
					<td><?php echo $mostrar['existencias_producto'] ?></td>
					<td>$<?php echo $mostrar['precio_producto'] ?> pesos</td>
				</tr>
			<?php
			}
			?>
			</tbody>
		</table>
    </center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="text-muted">
<center>
	<div class="container"> 
		<p>Papeleria D'Jesus  © 2019 desarrollado por Uriel Mondragon y Jared Gonzalez</p>
		<p>Contacto del desarrollador <a href="" class="text-light"> ◉ </a>.</p>
	</div>
</center>
</footer>
</body>
</html>