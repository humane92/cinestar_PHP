<?php include_once("cabeza.php") ?>
<?php include_once("./extra/base.php") ?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
	$cine = "SELECT * FROM `cine` WHERE `id` = '$id'";
    $result = mysqli_query($conn,$cine);

    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $cineNombre = $row['RazonSocial'];
        $dirrecion = $row['Direccion'];
        $telefono = $row['Telefonos'];
    }
}

$id = $_GET['id'];
$tarifa = "SELECT * FROM `cinetarifa` WHERE `idCine` = '$id'";
$resultadoTarifa=mysqli_query($conn,$tarifa);

$cinepeliculas = "SELECT * FROM pelicula JOIN cinepelicula ON cinepelicula.idPelicula = pelicula.id WHERE cinepelicula.idCine = $id";
$resultadopeliculas=mysqli_query($conn,$cinepeliculas);

?>
	
		<div class="contenido">
			<div class="publicidad">
				<a href="http://www.cinestar.com.pe/starcard/"><img src="img/varios/starcard.jpg"/></a>
				<a href="http://www.cinestar.com.pe/cinefilo_star/"><img src="img/varios/cinefilo-star.jpg"/></a>
			</div>
			<form class="contenido-interno" id="contenido-interno" >

				<h2><?php echo $cineNombre;?></h2>
				<div class="cine-info">
					<div class="cine-info datos">
						<p><?php echo $dirrecion; ?></p>
						<p>Telefono: <?php echo $telefono; ?></p>
						<br/>
						<div class="tabla">
						<?php
							while($row = mysqli_fetch_array($resultadoTarifa)){ ?>
							<div class="fila">
								<div class="celda-titulo"><?php echo $row['DiasSemana']?></div>
								<div class="celda"><?php echo $row['Precio']?></div>
							</div>
							<?php } ?>
						</div>
						<div class="aviso">
							<p>A partir del 1ro de julio de 2016, Cinestar Multicines realizará el cobro de la comisión de S/. 1.00 adicional al tarifario vigente, a los usuarios que compren sus entradas por el aplicativo de Cine Papaya para Cine Star Comas, Excelsior, Las Américas, Benavides, Breña, San Juan, UNI, Aviación, Sur, Porteño, Tumbes y Tacna.</p>
						</div>
					</div>
					<img src="img/cine/1.2.jpg"/>
					<br/><br/><h4>Los horarios de cada función están sujetos a cambios sin previo aviso.</h4><br/>
					<div class="cine-info peliculas">
						<div class="tabla">

							<div class="fila">
								<div class="celda-cabecera">Películas</div>
								<div class="celda-cabecera">Horarios</div>
							</div>
							<?php

							while($row = mysqli_fetch_array($resultadopeliculas)){ ?>
							<?php
							?>
							<div class="fila impar">
								<div class="celda-titulo"><?php echo $row['Titulo']?></div>
								<div class="celda"><?php echo $row['Horarios']?></div>
							</div>
							<?php } ?>

						</div>
					</div>
				</div>
				<div>
					<img style="float:left;" src="img/cine/1.3.jpg" alt="Imagen del cine"/>
					<span class="tx_gris">Precios de los juegos: desde S/1.00 en todos los Cine Star.<br/>
						Horario de atención de juegos es de 12:00 m hasta las 10:30 pm. 
						<br/><br/>
						Visitános y diviértete con nosotros. 
						<br/><br/>
						<b>CINESTAR</b>, siempre pensando en tí. 
					</span>		
				</div>

			</div>
		</div>
		<div class="clearbox"><br/></div>

<?php include_once("extra/pie.php") ?>