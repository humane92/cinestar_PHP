﻿<?php include_once("cabeza.php") ?>
<?php include_once("./extra/base.php") ?>

<?php

$peliculas = "SELECT * FROM `pelicula` ";

$resultado=mysqli_query($conn,$peliculas);

?>
	
		<div class="contenido">
			<div class="publicidad">
				<a href="http://www.cinestar.com.pe/starcard/"><img src="img/varios/starcard.jpg"/></a>
				<a href="http://www.cinestar.com.pe/cinefilo_star/"><img src="img/varios/cinefilo-star.jpg"/></a>
			</div>
			<div class="contenido-interno" id="contenido-interno">
				
				<br/><h1>Cartelera</h1><br/>
				<div class="contenido-pelicula">
					<div class="datos-pelicula">
						<h2>Locos de Amor 2 (+14) (HD - Doblada)</h2><br/>
						<p>¡Vuelve la comedia musical del año! Un hombre descorazonado que empieza a salir con una conductora que da consejos de amor en la radio. Una mujer desesperada por ser mamá ...</p>
						<br/>
                       	<div class="boton-pelicula"> 
                       		<a href="http://www.cinestar.com.pe/cartelera/pelicula/Locos-de-Amor-2" >
                       			<img src="img/varios/btn-mas-info.jpg" width="120" height="30" alt="Ver info"/>
                       		</a>
               			</div>
               			<div class="boton-pelicula"> 
               				<a href="https://www.youtube.com/v/v3fspveODBI" target=_blank  onclick="return hs.htmlExpand(this, { objectType: 'iframe' } )" >
               					<img src="img/varios/btn-trailer.jpg" width="120" height="30" alt="Ver trailer"/>
               				</a>
                        </div> 
					</div>
					<img src="img/pelicula/10.jpg" width="160" height="226"/><br/><br/>
				</div>

			</div>
		</div>
		<div class="clearbox"><br></div>

<?php include_once("extra/pie.php") ?>