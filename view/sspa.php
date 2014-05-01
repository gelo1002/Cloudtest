
<?php require_once "../admin/includes/seguridad.php";

 ?>
 <!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Supervisor de SSPA</title>  
	    <!-- Bootstrap core CSS -->
	    
  	</head>

  	<body>
  		<?php require_once "encuesta.php"; ?>
	    <table class="table table-condensed">
	    	<form id="FrmSSPA" method="post">
				<tr>
			  		<td>
				  		<label>1.- ¿En que se basa el trabajo de supervisor de SSPA?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="a" checked>
								a)	Supervisión de todas las actividades públicas y gubernamentales, verificando el cumplimiento de los artículos.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1"  value="b">
								b)	Supervisión de todas las obras o servicios y verificar que se cumplan las normas, procedimientos y disposiciones en materia de sspa.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="c">
								c)	Supervisión  de la correcta y eficiente ejecución de las tareas cotidianas de vigilancia y también de proteger a quienes contratan los servicios.
							</label>
						</div>		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>2.- ¿Cómo desarrolla el trabajo como supervisor de SSPA?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="a" checked>
								a)	Preocuparse por los resultados del trabajo, y según los conceptos de calidad vigentes, debe esmerarse para que esos resultados sean cada vez mejores.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2"  value="b">
								b)	Con el cumplimiento del Programa de SSPA, en sus áreas de responsabilidad, verificando su estricto cumplimiento por parte de los trabajadores.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="c">
								c)	Cumplir con la misión y visión de la empresa.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>3.- ¿Cuál son las metas o expectativas a alcanzar como supervisor de SSPA? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3"  value="a" checked>
								a)	Prevenir y contrarrestar las amenazas identificas que ponen en peligro la salud y seguridad en el trabajo, así como eliminar factores que causen impacto en el medio ambiente.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="b">
								b)	Convertiré en un verdadero ejemplo de aquello que espera de los trabajadores.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="c">
								c)	Inspirar el profesionalismo y el espíritu de equipo en su gente. Asumir total responsabilidad por sus actos
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>4.- ¿Cuáles son los pasos básicos para la realización de un análisis de seguridad en el trabajo (AST)? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4"  value="a" checked>
								a)	Seleccionar un trabajo para analizar.</br>
									Identificar y hacer una lista de todos los peligros.</br>
									Separar el trabajo en pasos básicos.</br>
									Identificar los incidentes  potenciales  o las condiciones peligrosas. </br>
									Idear procedimientos y controles para un trabajo seguro.  </br>

							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="b">
								b)	Seleccionar una actividad.</br>
									Identificar los riesgos posibles.</br>
									Idear soluciones para los riesgos detectados.</br>
									Control de la ejecución de trabajos.</br>

							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="c">
								c)	Determinar la actividad a analizar.</br>
									Examinar las condiciones de amenaza y vulnerabilidad.</br>
									Seleccionar los riesgos potenciales a los cuales se está expuesto.</br>
									Establecer controles y  alarmas para los riesgos priorizados.</br>

							</label>
						</div>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>5.- ¿Cuál es el equipo de protección personal básico que el trabajador debe portar dentro de una instalación de trabajo y para que nos sirve?  </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5"  value="a" checked>
								a)	Ropa de algodón (overol), botas, casco, guantes, lentes, tapones auditivos. Y sirve para minimizar los accidentes.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="b">
								b)	Careta, mandil de carnaza, mangas de carnaza, arnés y cable de vida. Sirve para minimizar quemaduras.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="c">
								c)	Overol, Polainas de carnaza, guantes, botas, casco. Para minimizar machucones.
							</label>
						</div>	
			  		</td>
			  	</tr>
			   	<tr>
			  		<td>
				  		<label>6.- ¿Cuándo se recomienda el uso de protección auditiva y mencione ejemplos en áreas en donde es obligatorio el uso de protección auditivo? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6"  value="a" checked>
								a)	En lugares con poco ruido, área de cómputo, sala de espera.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="b">
								b)	En áreas de trabajo ruidosas, en el área de compresores, máquinas de soldar y generadores.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="c">
								c)	En áreas donde está prohibido el ruido, la biblioteca.
							</label>
						</div>	
			  		</td>
			  	</tr>
			 	<tr>
			  		<td>
			  			<label>7.- ¿Cómo se elabora un atlas de riesgo? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7"  value="a" checked>
								a)	Es de acorde a los propios riesgos de las actividades y del área del área de trabajo o servicio.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="b">
								b)	Con respecto a los accidentes sucedidos en el área de trabajo.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="c">
								c)	Con la identificación de los desastres naturales.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>8.- ¿Qué es un plan de respuesta a emergencia y que debe incluir?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8"  value="a" checked>
								a)	Es un plan de respuestas de emergencias que dan solución a accidentes. Debe contener reportes de antecedentes, para prever futuras emergencias.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="b">
								b)	Un plan de respuesta a emergencias es una actividad poco común, que solo es necesario para casos de desastres naturales. Debe contener históricos meteorológicos.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="c">
								c)	Un plan de respuesta de emergencia es un plan de acción en caso de emergencia. Es una lista de los protocolos, las respuestas y las soluciones a las situaciones de emergencia hipotéticas que puedan ocurrir. También es un plan para situaciones de emergencia que no se pueden prever.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>9.- ¿Cómo se puede aumentar la defensa contra lo que constituye una mayor amenaza de lesión o daño que existe hoy en el trabajo?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9"  value="a" checked>
								a)	Mediante campañas de seguridad en el aspecto de carácter general y conducta de los trabajadores.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="b">
								b)	Analizando los problemas de la sociedad  y la inseguridad. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="c">
								c)	Mediante charlas de compañerismo y psicología con los trabajadores.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>10.- ¿Qué temas se pueden abordar en las campañas de seguridad con respecto a las necesidades de la realidad misma de la empresa?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10"  value="a" checked>
								a)	El manejo de cargas.</br>
									Caídas de las personas.</br>
									Herramienta manual.</br>
									Maquinaria</br>
									Incendios.</br>
									Vehículos.</br>
									Manejo defensivo.</br>
									Bloqueo y señalización.</br>

							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="b">
								b)	Manejo de vehículos pesados.</br>
									Alcoholismo y tabaquismo.</br>
									Drogadicción.</br>
									Enfermedades de trasmisión sexual.</br>

							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="c">
								c)	Manejo de materiales y químicos.</br>
									Instalaciones eléctricas.</br>
									Seguridad física en las empresas.</br>
									Estacionamientos.</br>

							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>11.- ¿Mencione otras funciones del supervisor de SSPA?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11"  value="a" checked>
								a)	Platicas de seguridad al personal.</br>
									Participar en auditorías internas y externas dando seguimiento y corrección a las recomendaciones derivadas de las mismas. </br>
									Participación en auditorias efectivas. </br>
									Participar en análisis e investigación de incidentes y accidentes.</br>
									Instruir y supervisar al personal que labore en las áreas de trabajo, para que “antes” de iniciar sus actividades, siempre observe el entorno.</br>
									Realizar continuamente Inspecciones Preventivas de Riesgo, en las áreas de su responsabilidad.</br>

							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="b">
								b)	Cumplir con la cantidad programa en tiempo, cantidad, calidad y bajo costo.</br>
									Verificar que los materiales que se vallan a utilizar sean los correctos.</br>
									Supervisar las funciones de los subordinados.	</br>
									Total disponibilidad de horario.</br>
									Asistencia a los trabajadores y que cumplan con las normas especificadas.</br>

							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="c">
								c)	Verificar el cronograma de ejecución de los trabajos.</br>
									Aprobar progresivamente el inicio de los trabajos a ser desarrollados, controlando en todo momento la calidad de la misma.</br>
									Verificar el cumplimiento de la normativa vigente en el tema de seguridad.</br>
									Verificar el cumplimiento de la norma laboral vigente.</br>
									Verificar el cumplimiento de la normativa ambiental.</br>

							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  	<td><input id="BtnSSPA" type="submit" value="Guardar" /></td>
			  	</tr>
			</form>
		</table>



  	</body>
</html>