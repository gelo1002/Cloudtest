<?php require_once "../admin/includes/seguridad.php";

 ?><!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Cleaver</title>  
	    <!-- Bootstrap core CSS -->
	    
  	</head>

  	<body>
  		<?php require_once "encuesta.php"; ?>
	    <table class="table table-condensed">
	    	<form id="FrmCleaver" method="post">
			  	<tr>
			  		<td>
				  		<label>
				  			Las siguientes palabras descriptivas se encuentran agrupadas en series de cuatro, examina las palabras de cada serie y selecciona  bajo las columnas de la M a la palabra que en cada serie mejor te describe y selecciona bajo la columna de las L a la palabra que menos te describe. 
				  		</label>
				  			<table class="table table-bordered">
 								<tr class="active">
 									<td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Persuasivo
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM1"  value="L" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL1"  value="z" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Fuerza de Voluntad
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM2"  value="z" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL2"  value="D" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Obediente
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM3"  value="S" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL3"  value="z" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Aventurero
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM4"  value="D" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL4"  value="D" checked>
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Gentil
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM1"  value="S">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL1"  value="S">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Mente Abierta
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM2"  value="C">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL2"  value="z">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Quisquilloso
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM3"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL3"  value="C">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Receptivo
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM4"  value="C">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL4"  value="z">
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Humilde
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM1"  value="C">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL1"  value="C">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Complaciente
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM2"  value="S">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL2"  value="S">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Inconquistable
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM3"  value="D">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL3"  value="D">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Cordial
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM4"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL4"  value="I">
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Original
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM1"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL1"  value="D">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Animoso
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM2"  value="I">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL2"  value="I">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Jugueton
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM3"  value="I">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL3"  value="I">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Moderado
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM4"  value="S">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL4"  value="S">
											</label>
										</div>
									</td>
 								</tr>
 								<tr class="active">
 									<td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Agresivo
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM5"  value="D" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL5"  value="z" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Confiado
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM6"  value="I" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL6"  value="z" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Respetuoso
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM7"  value="C" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL7"  value="z" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Indulgente
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM8"  value="S" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL8"  value="S" checked>
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Alma de la Fiesta
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM5"  value="I">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL5"  value="I">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Simpatizante
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM6"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL6"  value="S">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Emprendedor
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM7"  value="D">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL7"  value="D">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Capaz de ver Belleza
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM8"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL8"  value="C">
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Comodino
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM5"  value="S">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL5"  value="S">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Tolerante
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM6"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL6"  value="C">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Optimista
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM7"  value="I">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL7"  value="I">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Vigorozo
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM8"  value="D">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL8"  value="D">
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Temeroso
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM5"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL5"  value="C">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Afirmativo
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM6"  value="D">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL6"  value="D">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Servicial
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM7"  value="S">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL7"  value="S">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Sociable
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM8"  value="I">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL8"  value="I">
											</label>
										</div>
									</td>
 								</tr>
 								<tr class="active">
 									<td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Agradable
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM9"  value="z" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL9"  value="S" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Ecuanime
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM10"  value="S" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL10"  value="S" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Valiente
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM11"  value="D" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL11"  value="z" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Parlanchin
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM12"  value="I" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL12"  value="I" checked>
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Temeroso de Dios
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM9"  value="C">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL9"  value="C">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Preciso
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM10"  value="C">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL10"  value="C">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Inspirador
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM11"  value="I">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL11"  value="z">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Controlado
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM12"  value="S">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL12"  value="S">
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Tenaz
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM9"  value="D">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL9"  value="D">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Nervioso
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM10"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL10"  value="D">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Sumiso
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM11"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL11"  value="S">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Convencional
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM12"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL12"  value="C">
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Atractivo
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM9"  value="I">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL9"  value="I">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Jovial
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM10"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL10"  value="I">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Timido
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM11"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL11"  value="C">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Decisivo
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM12"  value="D">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL12"  value="D">
											</label>
										</div>
									</td>
 								</tr>
 								<tr class="active">
 									<td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Cauteloso
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM13"  value="C" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL13"  value="C" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Diciplinada
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM14"  value="C" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL14"  value="z" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Adaptable
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM15"  value="C" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL15"  value="z" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Cohibido
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM16"  value="z" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL16"  value="S" checked>
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Determinado
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM13"  value="D">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL13"  value="z">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Generoso
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM14"  value="S">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL14"  value="S">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Contrariador
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM15"  value="D">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL15"  value="D">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Exacto
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM16"  value="C">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL16"  value="z">
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Convincente
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM13"  value="I">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL13"  value="I">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Animoso
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM14"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL14"  value="I">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Indiferente
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM15"  value="zz">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL15"  value="S">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Franco
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM16"  value="D">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL16"  value="D">
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Bonachon
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM13"  value="S">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL13"  value="z">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Persistente
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM14"  value="D">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL14"  value="D">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Caer Bien
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM15"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL15"  value="C">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Buen Compañero
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM16"  value="I">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL16"  value="I">
											</label>
										</div>
									</td>
 								</tr>
 								<tr class="active">
 									<td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Docil
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM17"  value="z" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL17"  value="C" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Competitivo
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM18"  value="D" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL18"  value="D" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Amiguero
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM19"  value="I" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL19"  value="I" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Diplomatico
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM20"  value="C" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL20"  value="z" checked>
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Atrevido
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM17"  value="D">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL17"  value="D">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Alegre
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM18"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL18"  value="I">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Paciente
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM19"  value="S">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL19"  value="S">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Audaz
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM20"  value="D">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL20"  value="D">
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Leal
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM17"  value="S">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL17"  value="z">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Considerado
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM18"  value="S">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL18"  value="S">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Confianza en si Mismo
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM19"  value="D">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL19"  value="D">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Refinado
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM20"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL20"  value="I">
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Encantador
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM17"  value="I">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL17"  value="I">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Armonioso
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM18"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL18"  value="C">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Prudente al Hablar
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM19"  value="C">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL19"  value="z">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Satisfecho
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM20"  value="S">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL20"  value="S">
											</label>
										</div>
									</td>
 								</tr>
 								<tr class="active">
 									<td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td><td><b></b></td><td><b>M</b></td><td><b>L</b></td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Dispuesto
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM21"  value="S" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL21"  value="z" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Admirable
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM22"  value="I" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL22"  value="z" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Conforme
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM23"  value="z" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL23"  value="S" checked>
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Inquieto
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM24"  value="D" checked>
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL24"  value="D" checked>
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Deseoso
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM21"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL21"  value="z">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Bondadoso
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM22"  value="S">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL22"  value="z">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Confiable
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM23"  value="S">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL23"  value="I">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Popular
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM24"  value="I">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL24"  value="I">
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Congruente
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM21"  value="C">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL21"  value="C">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Resignado
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM22"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL22"  value="C">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Pacifico
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM23"  value="C">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL23"  value="C">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Buen Vecino
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM24"  value="S">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL24"  value="S">
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											Entusiasta
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM21"  value="z">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL21"  value="D">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Caracter Firme
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM22"  value="D">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL22"  value="D">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Positivo
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM23"  value="D">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL23"  value="D">
											</label>
										</div>
									</td>
									<td>
 										<b>
 											Devoto
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PM24"  value="C">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="PL24"  value="C">
											</label>
										</div>
									</td>
 								</tr>
							</table>
			  		</td>
			  	</tr>
	
			  	<tr>
			  	<td><input id="BtnCle" type="submit" value="Guardar" /></td>
			  	</tr>
			</form>
		</table>

  	</body>
</html>