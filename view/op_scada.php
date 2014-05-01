<?php require_once "../admin/includes/seguridad.php";

 ?>
 <!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Operador SCADA</title>  
	    <!-- Bootstrap core CSS -->
	    
  	</head>

  	<body>
  		<?php require_once "encuesta.php"; ?>
	    <table class="table table-condensed">
	    	<form id="FrmOpScada" method="post">
				<tr>
			  		<td>
				  		<label>1.- Define que es SCADA:</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="a" checked>
								a)	Software para ordenadores que permite controlar y supervisar procesos industriales a distancia.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1"  value="b">
								b)	sistema de control aplicado a procesos industriales complejos en las grandes industrias
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="c">
								c)	Ninguna de las anteriores.
							</label>
						</div>		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>2.- Menciona algunos buses de campo utilizados de mejor rendimiento:</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="a" checked>
								a)	MODBUS, HART
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2"  value="b">
								b)	PROFIBUS DP, PROFIBUS FMS.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="c">
								c)	DATA HIGHWAY.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>3.- Elige que definición menciona a un PLC:</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3"  value="a" checked>
								a)	Es una computadora utilizada en la ingeniería automática o automatización industrial, para automatizar procesos electromecánicos.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="b">
								b)	Circuito integrado programable, capaz de ejecutar las órdenes grabadas en su memoria. Está compuesto de varios bloques funcionales, los cuales cumplen una tarea específica.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="c">
								c)	Es el circuito integrado central y más complejo de un sistema informático; a modo de ilustración, se le suele llamar por analogía el «cerebro» de un computador.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>4.- Cuáles son los lenguajes de programación más comunes para PLC´s:</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4"  value="a" checked>
								a)	Lenguaje de contactos o Ladder
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="b">
								b)	Java
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="c">
								c)	HTML
							</label>
						</div>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>5.- Dentro del lenguaje de programación para PLC´s, seleccione la opción correcta de lo que son las siguientes imágenes: </label>
						
				  		<p>imagen!!!!!!!!!!!!!!!!!!!!!!!!!</p>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5"  value="a" checked>
								a)	Contactos y bobinas
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="b">
								b)	Timer y contadores
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="c">
								c)	Comparadores 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="d">
								d)	Botones de paro e inicio 
							</label>
						</div>		
			  		</td>
			  	</tr>
			   	<tr>
			  		<td>
				  		<label>6.- ¿Qué es un transductor?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6"  value="a" checked>
								a)	Es un dispositivo capaz de transformas o convertir un determinado tipo de energía de entrada, en otra de diferente salida, en este caso permitirá la conversión de una señal física en una señal eléctrica (y viceversa).
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="b">
								b)	dispositivo capaz de detectar magnitudes físicas o químicas, llamadas variables de instrumentación, y transformarlas en variables eléctricas.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="c">
								c)	Ninguna de las dos anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			 	<tr>
			  		<td>
			  			<label>7.- ¿Qué es un transmisor? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7"  value="a" checked>
								a)	dispositivo encargado de recoger o captar un tipo de información en el sistema para realimentarla.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="b">
								b)	Son instrumentos que captan la variable de proceso y la transmiten a distancia a un instrumento receptor indicador, registrador, controlador o combinación de estos.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="c">
								c)	se define normalmente como el elemento que se encuentra en contacto directo con la magnitud que se va a evaluar. El sensor recibe la magnitud física y se la proporciona al transductor.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>8.- ¿Qué es la Telemetría?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8"  value="a" checked>
								a)	Es una tecnología que permite la medición remota de magnitudes físicas y el posterior envío de la información hacia el operador del sistema.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="b">
								b)	Es un protocolo de comunicación basado en la visualización de transmisores y otras tecnologías. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="c">
								c)	Es un dispositivo capaz de transformar un determinado tipo de energía.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>9.- ¿Qué es un Sensor?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9"  value="a" checked>
								a)	Es un dispositivo capaz de detectar magnitudes físicas o químicas, llamadas variables de instrumentación, y transformarlas en variables eléctricas.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="b">
								b)	Es una tecnología basada en comunicación multipunto en base a protocolos de comunicación.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="c">
								c)	Es un dispositivo utilizado para enlazar un servidor a otros dispositivos
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>10.- ¿Qué es RS- 232?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10"  value="a" checked>
								a)	Es una interfaz que designa una norma para el intercambio de una serie de datos binarios entre un DTE  y un DCE.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="b">
								b)	Está definido como un sistema en bus de transmisión multipunto diferencial, es ideal para transmitir a altas velocidades sobre largas distancias.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="c">
								c)	El uso de tensiones elevadas de hasta 15V en RS-232 y de circuitos no balanceados hace que sea más susceptible al ruido.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	
			  	<tr>
			  	<td><input id="BtnOpScada" type="submit" value="Guardar" /></td>
			  	</tr>
			</form>
		</table>



  	</body>
</html>