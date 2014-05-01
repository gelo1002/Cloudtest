<?php require_once "../admin/includes/seguridad.php";

 ?>
 <!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Supervisor de Contrato</title>  
	    <!-- Bootstrap core CSS -->
	    
  	</head>

  	<body>
  		<?php require_once "encuesta.php"; ?>
	    <table class="table table-condensed">
	    	<form id="FrmSupCont" method="post">
				<tr>
			  		<td>
				  		<label>1.- ¿Cuál es el significado de UTR?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="a" checked>
								 a)	Unidad terminal Remota. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1"  value="b">
								b)	Unidad de transmisión rutinaria.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="c">
								c)	Unidad terminal de resguardo. 
							</label>
						</div>		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>2.- Fórmula ideal para el cálculo de la potencia que se deberá utilizar para la instalación de un panel solar sobre las fuentes de alimentación que se ocupan: </label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="a" checked>
								a)	P= I/V
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2"  value="b">
								b)	P=V/I
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="c">
								c)	P= I *V
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>3.- ¿De qué forma es necesario realizar la conexión de baterías de 12 volts cada una para obtener un voltaje promedio de 24 Volts?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3"  value="a" checked>
								a)	Conexión en paralelo
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="b">
								b)	Conexión en serie
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="c">
								c)	Conexión mixta 
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>4.- Menciona un protocolo basado en arquitectura Maestro/Esclabo:</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4"  value="a" checked>
								a)	Protocolo Modbus. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="b">
								b)	Protocolo Hart
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="c">
								c)	TCP/IP
							</label>
						</div>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>5.- ¿Cuáles son las características de un protocolo modbus? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5"  value="a" checked>
								a)	Permite el control de una red de dispositivos, por ejemplo un sistema de medida de temperatura y humedad, y comunicar los resultados a un ordenador. Modbus también se usa para la conexión de un ordenador de supervisión con una unidad remota (RTU) en sistemas de supervisión adquisición de datos (SCADA).
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="b">
								b)	Permite comunicar con un instrumento de campo sobre un lazo de corriente 4-20 mA, tanto los datos de configuración y parámetros como las medidas de proceso como temperatura, caudal, presión o cualquier otra. La información de control del instrumento se modula digitalmente sobre el lazo de corriente y por tanto no hay interferencias entre ellas. Su velocidad es de 1200 bps, de forma que el equipo maestro puede actualizar la información varias veces por segundo.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="c">
								c)	Proporciona un mecanismo de detección y corrección de errores de propósito general a los enlaces digitales, entendiendo como enlace un único cable que conecta dos máquinas (enlace punto a punto), o varias máquinas (enlace multipunto); este protocolo es muy extenso, por lo que rara vez se utiliza la implementación completa; lo normal es que se utilicen subconjuntos.
							</label>
						</div>	
			  		</td>
			  	</tr>
			   	<tr>
			  		<td>
				  		<label>6.- ¿Cuál es el significado de las siglas TCP/IP?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6"  value="a" checked>
								a)	IP: Protocolo de internet 
									TCP: Protocolo de control de transmisión

							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="b">
								b)	IP: Parámetros de internet.
                   					TCP: Protocolo de comunicación y transmisión. 

							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="c">
								c)	IP: Porta de internet
									TCP: Comunicación para la transmisión

							</label>
						</div>	
			  		</td>
			  	</tr>
			 	<tr>
			  		<td>
			  			<label>7.- ¿Para qué sirven los protocolos TCP/IP? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7"  value="a" checked>
								a)	Sirve para generar códigos independientes para la comunicación entre instrumentos en campo. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="b">
								b)	Sirve para enlazar computadoras que utilizan diferentes sistemas operativos, incluyendo PC, minicomputadoras y computadoras centrales sobre redes de área local (LAN) y área extensa (WAN).
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="c">
								c)	Sirve para enlazar ordenadores hacia instrumentos de campo y poder generar las variables a monitorear. 
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>8.- ¿Qué es un sistema SCADA?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8"  value="a" checked>
								a)	SCADA acrónimo de Supervisor y Comunication and Data Acquisition es un sistema implementado para la comunicación de instrumentos en campo. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="b">
								b)	SCADA acrónimo de Supervisory Control and Dinamyc, en un protocolo implementado para el control de datos sobre un sistema. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="c">
								c)	SCADA, acrónimo de Supervisory Control And Data Acquisition es un software para ordenadores que permite controlar y supervisar procesos industriales a distancia.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>9.- ¿Qué Son los DBM?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9"  value="a" checked>
								a)	El  dbm representa la medida de frecuencia relativa con respecto al espectro de radiofrecuencia existente. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="b">
								b)	El dBm es una unidad de medida de potencia expresada en decibelios (dB) relativa a un milivatio (mW). 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="c">
								c)	El dbm es una unidad de medida del ancho de banda existente en un enlace punto a punto. 
							</label>
						</div>	
			  		</td>
			  	</tr>
			 
			  	<tr>
			  	<td><input id="BtnSupCont" type="submit" value="Guardar" /></td>
			  	</tr>
			</form>
		</table>



  	</body>
</html>