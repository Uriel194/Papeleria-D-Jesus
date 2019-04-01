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
						<p class="form-text text-light" style="width: 400px;">
							Introduce nombre en el siguiente campo de texto  para
							buscar informacion de la Bibliografia. 
						</p>
					</div>
					<form action="laminas.php" method="get">
					<div class="col">
						<br>
					  <input type="text" class="form-control" placeholder="Nombre Bibliografia" name="nbib" style="width:700px;">
					</div>
					<div class="col">
						<br>
						<button type="submit" class="btn btn-primary mb-2">Buscar</button>
						<br>
					</div>
					</form>
			  </div>
		</form>
		<table class="table table-hover bg-light">
			<thead>
				<tr>
					<th scope="col">Nombre Bibliografia</th>
					<th scope="col">Vista previa</th>
					<th scope="col">Existencias</th>
					<th scope="col">Precio</th>
				</tr>
			</thead>
			<tbody>
			<?php
			include "conexion.php";
			$sname = "0";
			$sname = $_GET['nbib'];
			if ($sname == '') {
				$sqli="SELECT * from bibliografias  ORDER BY nombre_bib ASC";
			}else{
				$sqli="SELECT * from bibliografias WHERE nombre_bib LIKE '%".$sname."%'";
			}
			$result=mysqli_query($conectar,$sqli);
			while($mostrar=mysqli_fetch_array($result)){
			?>
				<tr>
					<th scope="row"><?php echo $mostrar['nombre_bib'] ?></th>
					<th scope="row">
						<?php  
							echo "<img style='width: 150px;' src='data:image/jpg;base64,".base64_encode($mostrar['img_bib'])."'
							 data-holder-rendered='true'>"; 
              ?>
					</th>
					<td><?php echo $mostrar['existencias_bib'] ?></td>
					<td>$ <?php echo $mostrar['precio_bib'] ?> pesos</td>
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
		<p>Papeleria D'Jesus  © 2019 desarrollado por Uriel Mondragon Jared y Gonzalez</p>
		<p>Contacto del desarrollador <a href="" class="text-light"> ◉ </a>.</p>
	</div>
</center>
</footer>
</body>
</html>