<?php require_once "../admin/includes/seguridad.php";

 ?>
 <!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Supervisor SCADA</title>  
	    <!-- Bootstrap core CSS -->
	    
  	</head>

  	<body>
  		<?php require_once "encuesta.php"; ?>
	    <table class="table table-condensed">
	    	<form id="FrmSupScada" method="post">
				<tr>
			  		<td>
				  		<label>1.- ¿Que es SCADA?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="a" checked>
								Un sistema que está basado en computadores que permiten supervisar y controlar a distancia una instalación, proceso o sistema de características variadas.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1"  value="b">
								Un sistema que está basado en computadores que permiten supervisar, pero no contralar una instalación o proceso.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="c">
								Un sistema basado en computadores con el fin de almacenar información de manera automática.
							</label>
						</div>		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>2.- ¿Que significan las siglas SCADA?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="a" checked>
								Supervisión control y recolección de datos 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2"  value="b">
								Supervisory Control And Data Acquisition
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="c">
								Supervisión control y almacenamiento de datos
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>3.- ¿Cuáles son las partes de un Sistema SCADA?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3"  value="a" checked>
								La estación maestra, Las unidades remotas o RTU, Red de telemetría, La estación de supervisión
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="b">
								Unidades Remota, Red de Telemetría, Codificadores, Repetidores
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="c">
								La estación Maestra, Red de Telemetría, Repetidores Convertidores
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>4.- ¿Que es un protocolo de comunicación?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4"  value="a" checked>
								Es un conjunto de reglas que permiten la visualización de datos en dispositivos locales.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="b">
								Es un conjunto de normas que no impiden la transferencia e intercambio de datos. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="c">
								Es un conjunto de reglas que permiten la transferencia e intercambio de datos entre los distintos dispositivos que conforman una red.
							</label>
						</div>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>5.- ¿Cuál de los Siguientes es un protocolo de comunicación? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5"  value="a" checked>
								SCADA
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="b">
								Modbus 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="c">
								Bluetooth 
							</label>
						</div>	
			  		</td>
			  	</tr>
			   	<tr>
			  		<td>
				  		<label>6.- ¿Que es Modbus? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6"  value="a" checked>
								Es un protocolo de comunicación para servidores con el fin de supervisar procesos.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="b">
								Es un protocolo de transmisión para sistemas de control y supervisión de procesos con control centralizado.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="c">
								Es un protocolo de transmisión de datos para controlar procesos.
							</label>
						</div>	
			  		</td>
			  	</tr>
			 	<tr>
			  		<td>
			  			<label>7.- ¿Qué es RS-232? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7"  value="a" checked>
								Es una interfaz que designa una norma para el intercambio de una serie de datos binarios entre un DTE  y un DCE.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="b">
								Está definido como un sistema en bus de transmisión multipunto diferencial, es ideal para transmitir a altas velocidades sobre largas distancias. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="c">
								El uso de tensiones elevadas de hasta 15V en RS-232 y de circuitos no balanceados hace que sea más susceptible al ruido.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>8.- ¿Qué es RS-485?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8"  value="a" checked>
								Es una interfaz que designa una norma para el intercambio de una serie de datos binarios entre un DTE  y un DCE.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="b">
								Está definido como un sistema en bus de transmisión multipunto diferencial, es ideal para transmitir a altas velocidades sobre largas distancias.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="c">
								El uso de tensiones elevadas de hasta 15V en RS-232 y de circuitos no balanceados hace que sea más susceptible al ruido.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>9.- Selecciona una diferencia de entre el RS-232 y RS- 485?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9"  value="a" checked>
								El uso de tensiones elevadas de hasta 15V en RS-232 y de circuitos no balanceados hace que sea más susceptible al ruido y en RS-485 se utilizan voltajes de cómo máximo 6V y circuitos balanceados por lo que se reduce el factor de ruido.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="b">
								El uso de tensiones elevadas de hasta 15V en RS-485 y de circuitos no balanceados hace que sea más susceptible al ruido y en RS-232 se utilizan voltajes de cómo máximo 6V y circuitos balanceados por lo que se reduce el factor de ruido.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="c">
								No hay diferencias se rigen bajo el mismo funcionamiento.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>10.- ¿Selecciona una Ventaja de  las Redes Industriales?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10"  value="a" checked>
								Menor comunicación hombre – máquina
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="b">
								Posibilidad de intercambio de información entre equipos que controlan fases sucesivas de un mismo proceso y uso de una sola base de datos en común.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="c">
								Uso de múltiples bases de datos 
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>11.- ¿Que es la instrumentación industrial?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11"  value="a" checked>
								Se le llama instrumentación al protocolo de comunicación basado en herramientas que permiten el enlace entre uno o más dispositivos.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="b">
								Se le llama instrumentación al conjunto de herramientas que permiten realizar la medición de herramientas que permitan la optimización de los recursos.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="c">
								Se le llama instrumentación al conjunto de herramientas que permiten realizar la medición, la conversión, el control o la transmisión de las variables de un cierto proceso. Esto permite lograr la optimización de los recursos que se emplean. 
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>12.- ¿Menciona las 3 principales variables con las que se puede trabajar mediante la instrumentación industrial?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12"  value="a" checked>
								Presión, Temperatura, Flujo.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12" value="b">
								Caudal, Masa, Peso
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12" value="c">
								Nivel, Luminosidad, distancia
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  	<td><input id="BtnSuperScada" type="submit" value="Guardar" /></td>
			  	</tr>
			</form>
		</table>



  	</body>
</html>