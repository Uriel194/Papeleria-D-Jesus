<!DOCTYPE html>
<html lang="es">
<head>
	<title>Papeleria D'Jesus</title>

	<link type="text/css" href="css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/a.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/holder.min.js"></script>
	<script src="js/popper.min.js"></script>
</head>

<body class="bg-dark"> 
	<?php
	include "php/conexion.php";
	?>
	<center>
		<h1 class="text-light">Papeleria D'Jesus</h1>
	<a href="" style="text-decoration: none;" class="text-light">
	<div class="green" style="width: 100%;">
		<center>
			<p>
			Realizar Venta
			</p>
		</center>
	</div>
	</a>
	</center>
<div class="menu">
	<table class="table bg-light" id="ta">
		<tr>
			<td>
			</td>
			<td>
				<center>
				<h3 class="text-dark"> Laminas&nbsp;
					<span class="badge badge-warning">
						<?php 
							$l = "SELECT count(id_lamina) FROM laminas";
							$result=mysqli_query($conectar,$l);
							$mostrar=mysqli_num_rows($result);
							echo $mostrar + 1 ;
						?>
					</span>
				</h3>
				<div class="yellow">
					<a href="<?php echo 'php/laminas.php?nlamina="hola"'?>';" class="text-dark">
					<img src="img/laminas.png" id="image">
					</a>
				</div>
				</center>
			</td>
			<td>
				<center>
					<h3 class="text-dark">Lista Productos&nbsp;
						<span class="badge badge-success"> 
							<?php
								$lp = "SELECT count(id_producto) FROM productos";
								$reslp=mysqli_query($conectar,$lp);
								$mostrarlp=mysqli_num_rows($reslp);
								echo $mostrarlp + 1 ;						
							?>
						</span>
					</h3>
				<div class="green">
					<a href="php/lista-productos.php" class="text-dark">
					<img src="img/lista.png" id="image">
					</a>
				</div>
				</a>
				</center>
			</td>
			<td>
				<center>
					<h3 class="text-dark"> Alertas&nbsp;
						<span class="badge badge-danger"> 
						<?php
								$al = "SELECT count(id_producto) FROM productos WHERE existencias_producto <=10";
								$al2 = "SELECT count(id_lamina) FROM laminas WHERE existencias_lamina <=10";
								$al3 = "SELECT count(id_bib) FROM bibliografias WHERE existencias_bib <=10";
								
								$resal=mysqli_query($conectar,$al);
								$resal2=mysqli_query($conectar,$al2);
								$resal3=mysqli_query($conectar,$al3);

								$mostraral=mysqli_num_rows($resal);
								$mostraral2=mysqli_num_rows($resal2);
								$mostraral3=mysqli_num_rows($resal3);

								echo $mostraral + $mostraral2 + $mostraral3;						
						?>	
						</span>
					</h3>
				<div class="pink">
					<a href="php/alertas.php" class="text-dark">
					<img src="img/advertencia.png" id="image">
					</a>
				</div>
				</a>
				</center>
			</td>
			<td>
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
				<center>
					<h3 class="text-dark">Verificar Precio&nbsp;</h3>
				<div class="blue">
					<a class="text-dark" data-toggle="modal" data-target="#exampleModalCenter" href="<?php echo 'index.php?id_p="hola"'?>';">
					<img src="img/precios.png" id="image">
					</a>
				</div>
				</center>
			</td>
			<td>
				<center>
					<h3 class="text-dark">Bibliografias &nbsp;
						<span class="badge" style="background: #f76f21; color: white;">
						<?php
								$bi = "SELECT count(id_bib) FROM bibliografias";
								$resbi=mysqli_query($conectar,$bi);
								$mostrarbi=mysqli_num_rows($resbi);
								echo $mostrarbi + 1 ;						
							?>
						</span>
					</h3>
				<div class="orange">
					<a href="<?php echo 'php/bibliografias.php?nbib="hola"'?>';" class="text-dark">
					<img src="img/bibliografia.png" id="image">
					</a>
				</div>
				</center>
			</td>
			<td>
				<center>
					<h3 class="text-dark">Administrador</h3>
				<div class="purple">
					<img src="img/administrador.png" id="image">
				</div>
				</center>
			</td>
			<td>
				
			</td>
		</tr>
	</table>
</center>
</div>
<footer class="text-muted">
<center>
	<div class="container"> 
		<p>Papeleria D'Jesus  © 2019 desarrollado por Uriel Mondragon y Jared Gonzalez</p>
		<p>Contacto del desarrollador <a href="" class="text-light"> ◉ </a>.</p>
	</div>
</center>
</footer>
<!--Verificar ventana 1-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalCenterTitle">Verificador de precios</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			<div class="form-group">
			<center>
			<form action="index.php" method="get">
			  <label for="">Introduce ID producto</label>
				<input class="form-control" name="id_p" placeholder="ID producto">
				
			</center>
			</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button type="submit" onClick="<?php ?>" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#exampleModalCenter2">Buscar</button>
			</form>
		</div>
	  </div>
	</div>
</div>
<!--Verificar ventana 1-->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalCenterTitle">Resultado: aun no funciona fase beta</h5>
			  <button type="button" class="close" data-dismiss="modal2" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			<div class="form-group">
				<div class="alert alert-success" role="alert">
					<?php
					/*
					$id_pro= $_GET['id_p'];
					include "php/conexion.php";
					$sqlp="SELECT * from productos WHERE id_producto='".$id_pro."'";
					$resultp=mysqli_query($conectar,$sqlp);
					$mostrarpb=mysqli_fetch_array($resultp);
					*/
					?>
					<center>
					<h4 class="alert-heading">pritt</h4>
					<img src="img/pritt.png" width="100px" height="100px">
					<hr>
					<p class="mb-0">$5 pesos</p>
					</center>
				</div>
			</div>
			</div>
			<div class="modal-footer">
			<a href="index.php">
			  <button type="button" class="btn btn-primary">Aceptar</button>
			</a>
		</div>
	  </div>
	</div>
</div>
</body>
</html>