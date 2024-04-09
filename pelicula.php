<?php include_once("cabeza.php") ?>
<?php include_once("./extra/base.php") ?>

<?php

$peliculas = "SELECT * FROM `pelicula` ";
$resultado=mysqli_query($conn,$peliculas);

/*
$genero = "SELECT * FROM `genero` ";
$resultado=mysqli_query($conn,$peliculas);
*/
?>
		<div class="contenido">
			<div class="publicidad">
				<a href="http://www.cinestar.com.pe/starcard/"><img src="img/varios/starcard.jpg"/></a>
				<a href="http://www.cinestar.com.pe/cinefilo_star/"><img src="img/varios/cinefilo-star.jpg"/></a>
			</div>
			<div class="contenido-interno" id="contenido-interno">

				<br/><h1>Cartelera</h1><br/>
				<?php
					while($row = mysqli_fetch_array($resultado)){ ?>
					<div class="contenido-pelicula">
						<div class="datos-pelicula">
							<h2><?php echo $row['Titulo']?></h2>
							<p><?php echo $row['Sinopsis']?></p>
							<br/>
							<div class="tabla">
								<div class="fila">
									<div class="celda-titulo">Título Original :</div>
									<div class="celda"><?php echo $row['Titulo']?></div>
								</div>
								<div class="fila">
									<div class="celda-titulo">Estreno :</div>
									<div class="celda"><?php echo $row['FechaEstreno']?></div>
								</div>
								<div class="fila">
									<div class="celda-titulo">Género :</div>
									<div class="celda"><?php echo $row['Generos']?></div>
								</div>
								<div class="fila">
									<div class="celda-titulo">Director :</div>
									<div class="celda"><?php echo $row['Director']?></div>
								</div>
								<div class="fila">
									<div class="celda-titulo">Reparto :</div>
									<div class="celda"><?php echo $row['Reparto']?></div>
								</div>
							</div>
						</div>
						<img src="img/pelicula/<?php echo $row['id']?>.jpg" width="160" height="226"><br/><br/>
					</div>
					<div class="pelicula-video">
						<embed src="https://www.youtube.com/v/<?php echo $row['Link']?>" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="580" height="400">
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="clearbox"><br/></div>

<?php include_once("extra/pie.php") ?>