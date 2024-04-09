<?php include_once("cabeza.php") ?>
<?php include_once("./extra/base.php") ?>

<?php

$cines = "SELECT * FROM `cine` ";
$resultado=mysqli_query($conn,$cines);

?>
		<div class="contenido">
			<div class="publicidad">
				<a href="http://www.cinestar.com.pe/starcard/"><img src="img/varios/starcard.jpg"/></a>
				<a href="http://www.cinestar.com.pe/cinefilo_star/"><img src="img/varios/cinefilo-star.jpg"/></a>
			</div>
			<div class="contenido-interno" id="contenido-interno">

				<br/><h1>Nuestros Cines</h1><br/>
				<?php
					while($row = mysqli_fetch_array($resultado)){ ?>
					<div class="contenido-cine">
						<img src="img/cine/1.1.jpg" width="227" height="170"/>
						<div class="datos-cine">
							<h4><?php echo $row['RazonSocial']?></h4><br/>
							<span><?php echo $row['Direccion']?><br/><br/>Teléfono: <?php echo $row['Telefonos']?></span>
						</div>
						<br/>
						<!--<a href="http://www.cinestar.com.pe/multicines/cine/Cinestar-Excelsior"> -->
						<a href="cine.php?id=<?php echo $row['id']?>">
							<img src="img/varios/ico-info2.png" width="150" height="40"/>
						</a>
					</div>
				<?php } ?>


			</div>
		</div>
		<div class="clearbox"><br/></div>

<?php include_once("extra/pie.php") ?>