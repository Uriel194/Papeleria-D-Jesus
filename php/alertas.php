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
    <div class="bg-dark" style="width: 99.3%;">
		<div class="form-row">
			<div class="col">
                <br>
                <center>
				<a href="../index.php" style="text-decoration: none;">
				<img src="../img/atras.png" alt="" width="40px" height="40px">
				</a>
				<br>
				<p class="form-text text-light">
					Regresar
                </p>
                <div class="bg-light">
                    <br>
                    <?php
			        include "conexion.php";
				
                    $sqli="SELECT * from productos WHERE existencias_producto <= 10";
                    $sqli2="SELECT * from laminas WHERE existencias_lamina <= 10";
                    $sqli3="SELECT * from bibliografias WHERE existencias_bib <= 10";

                    $result=mysqli_query($conectar,$sqli);
                    $result2=mysqli_query($conectar,$sqli2);
                    $result3=mysqli_query($conectar,$sqli3);

			        while($mostrar=mysqli_fetch_array($result)){
			        ?>
                    <div class="alert alert-danger" role="alert" style="width: 75%;">
                        <h4 class="alert-heading">¡A punto de agotarse!</h4>
                        <br>
                        <h5 class="alert-heading"><?php echo $mostrar['nombre_producto'] ?></h5>
                        <?php  
							echo "<img style='width: 150px;' src='data:image/jpg;base64,".base64_encode($mostrar['img_producto'])."'
							 data-holder-rendered='true'>"; 
                        ?>
                        <h6>Cantidad: <?php echo $mostrar['existencias_producto'] ?></h6>
                        <hr>
                        <p class="mb-0">Favor de aquirir mas productos de 
                            este tipo o si hay en almacen favor de registrar 
                            productos en la base de datos
                        </p>
                    </div>
                    <?php
                    }
                    ?>
                    <br>
                    <?php
                    while($mostrar2=mysqli_fetch_array($result2)){
                    ?>
                    <div class="alert alert-danger" role="alert" style="width: 75%;">
                        <h4 class="alert-heading">¡A punto de agotarse!</h4>
                        <br>
                        <h5 class="alert-heading"><?php echo $mostrar2['nombre_lamina'] ?></h5>
                        <?php  
							echo "<img style='width: 150px;' src='data:image/jpg;base64,".base64_encode($mostrar2['img_lamina'])."'
							 data-holder-rendered='true'>"; 
                        ?>
                        <h6>Cantidad: <?php echo $mostrar2['existencias_lamina'] ?></h6>
                        <hr>
                        <p class="mb-0">Favor de aquirir mas productos de 
                            este tipo o si hay en almacen favor de registrar 
                            productos en la base de datos
                        </p>
                    </div>
                    <?php
                    }
                    ?>
                    <br>
                    <?php
                    while($mostrar3=mysqli_fetch_array($result3)){
                    ?>
                    <div class="alert alert-danger" role="alert" style="width: 75%;">
                        <h4 class="alert-heading">¡A punto de agotarse!</h4>
                        <br>
                        <h5 class="alert-heading"><?php echo $mostrar3['nombre_bib'] ?></h5>
                        <?php  
							echo "<img style='width: 150px;' src='data:image/jpg;base64,".base64_encode($mostrar3['img_bib'])."'
							 data-holder-rendered='true'>"; 
                        ?>
                        <h6>Cantidad: <?php echo $mostrar3['existencias_bib'] ?></h6>
                        <hr>
                        <p class="mb-0">Favor de aquirir mas productos de 
                            este tipo o si hay en almacen favor de registrar 
                            productos en la base de datos
                        </p>
                    </div>
                    <?php
                    }
                    ?>
                    <br>
                </div>
                </center>
			</div>
	  </div>
    </div>
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
</center>
</body>
</html>