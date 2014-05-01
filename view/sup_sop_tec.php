<?php require_once "../admin/includes/seguridad.php";

 ?>
 <!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Supervisor de Soporte Técnico</title>  
	    <!-- Bootstrap core CSS -->
	    
  	</head>

  	<body>
  		<?php require_once "encuesta.php"; ?>
	    <table class="table table-condensed">
	    	<form id="FrmSST" method="post">
				<tr>
			  		<td>
				  		<label>1.- ¿Menciona cuál es la disciplina  que se encarga  de medir variables en campo y trasladarlas a un Servidor Remoto?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="a" checked>
								a)	Automatización
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1"  value="b">
								b)	Telemetría	
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="c">
								c)	Control
							</label>
						</div>		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>2.- ¿Cómo se llama la señal generada por algún tipo de fenómeno electromagnético, que puede estar representada por una función matemática en forma continua, en la que es variable su amplitud y periodo con respecto al tiempo?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="a" checked>
								a)	Señal Analógica
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2"  value="b">
								b)	Señal digital
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="c">
								c)	Señal Síncrona
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>3.- ¿Cómo se llama la señal generada por algún tipo de fenómeno electromagnético, que puede estar representada por una función matemática en forma discontinua, en la que sus variables se representan en forma discreta?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3"  value="a" checked>
								a)	Señal Analógica
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="b">
								b)	Señal Asíncrona
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="c">
								c)	Señal Digital
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>4.- ¿Cuáles Bandas de Radio Frecuencia se encuentran licenciadas según las leyes vigentes de Telecomunicaciones para el desarrollo científico, medico e industrial?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4"  value="a" checked>
								a)	900 Mhz & 2,4 GHz	
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="b">
								b)	800 & 900 Mhz
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="c">
								c)	2.4 & 5 Ghz
							</label>
						</div>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>5.- ¿Menciona por lo menos tres tipos de comunicación serial de acuerdo al Estándar EIA? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5"  value="a" checked>
								a)	EIA 232, 422 & 485
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="b">
								b)	USART, USBA & USBB	
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="c">
								c)	UARTA, UARTB & UARTC 
							</label>
						</div>	
			  		</td>
			  	</tr>
			   	<tr>
			  		<td>
				  		<label>6.- ¿Su función es manejar las interrupciones de los dispositivos conectados a los puertos seriales, convierte la información transmitida en forma secuencial y paralela en cada terminal de enlace? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6"  value="a" checked>
								a)	Banda Base
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="b">
								b)	Manchester
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="c">
								c)	UART
							</label>
						</div>	
			  		</td>
			  	</tr>
			 	<tr>
			  		<td>
			  			<label>7.- ¿Explica de manera breve cuales son las ventajas que ofrece un bus de datos compuesto desde la capa física utilizando el EIA- 485? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7"  value="a" checked>
								a)	Distancias de Transmisión de alcance alrededor de 1000 mts., mayores velocidades de Transmisión  de 19200 bits/s  y la conexión multipunto sobre un mismo bus.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="b">
								b)	Inmunidad a interferencias y diafonía.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="c">
								c)	Velocidades superiores a 50000 Bits/ s con distancias de 10 Km.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>8.- ¿Desarrolla las funciones matemáticas que permiten conocer las variaciones de onda en un intervalo de tiempo?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8"  value="a" checked>
								a)	V= I*R	
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="b">
								b)	F= D*T
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="c">
								c)	F= 1/ T
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>9.- ¿Menciona ventajas que ofrece el Espectro disperso por Salta de Frecuencia (FHSS)? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9"  value="a" checked>
								a)	Las señales son casi  inmunes al ruido e interferencias, son difíciles de detectar debido al salto aleatorio que utilizan.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="b">
								b)	Alto Ancho de Banda sobre la Transmisión de los Datos.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="c">
								c)	Menores perdidas de Ganancia en las Transmisiones de Datos.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>10.- ¿Menciona uno de los protocolos de comunicación más utilizados en la industria del Oil& Gas, que su arquitectura en Maestro/ Esclavo y fue desarrollado por Modicon?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10"  value="a" checked>
								a)	ModBus.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="b">
								b)	DNP 3.0 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="c">
								c)	Field Bus
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>11.- ¿Cuál es la Definición completa del Acrónimo conocido como SCADA?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11"  value="a" checked>
								a)	Supervisión, Calidad y Adquisición.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="b">
								b)	Supervisión, Control y Adquisición de Datos.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="c">
								c)	Supervisión, Centralización y Demostración Administrativa.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>12.- ¿Menciona básicamente de acuerdo a tu visión, cual serían las partes que constituyen un Sistema SCADA?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12"  value="a" checked>
								a)	Dispositivos de Campo, Unidad de Control y Procesamiento, Interface de Usuario.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12" value="b">
								b)	Manejo del Control de los medidores.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12" value="c">
								c)	Centralización de la información de Control.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>13.- ¿Define que es un Sensor y proporciona un ejemplo de una variable medida?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta13"  value="a" checked>
								a)	Dispositivo que proporciona una respuesta inductiva.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta13" value="b">
								b)	Dispositivo que es inversamente proporcional una respuesta eléctrica.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta13" value="c">
								c)	Dispositivo capaz de transformar una variable con magnitud física o química (Presión, Temperatura,  Fuerza), transformándola en una Señal Eléctrica.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>14.- ¿Menciona en palabras sencillas pero precisas, cuál es la diferencia entre UTR y un PLC?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta14"  value="a" checked>
								a)	Las Unidades  terminales remotas están diseñadas para ejercer la adquisición de variables el control y transmisión de las mimas, de acuerdo a las necesidades específicas de una  aplicación (traje a la medida) y un controlador lógico programable de acuerdo a sus capacidades puede tener la flexibilidad y versatilidad de desarrollar diversas aplicaciones.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta14" value="b">
								b)	El costo de adquisición y tiempo de entrega.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta14" value="c">
								c)	Los módulos de entradas y salidas.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  	<td><input id="BtnSST" type="submit" value="Guardar" /></td>
			  	</tr>
			</form>
		</table>



  	</body>
</html>