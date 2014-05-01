<?php require_once "../admin/includes/seguridad.php";

 ?>
<!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Ejecutivo de RH</title>  
	    <!-- Bootstrap core CSS -->
	    
  	</head>

  	<body>
  		<?php require_once "encuesta.php"; ?>
	    <table class="table table-condensed">
	    	<form id="FrmERH" method="post">
				<tr>
			  		<td>
				  		<label>1.- ¿Cuáles son las funciones del Responsable de Recursos Humanos?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="a" checked>
								A)	Reclutamiento y selección, contratación, capacitación, etc.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1"  value="b">
								B)	Requisiciones, compras, ventas.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="c">
								C)	Contabilizar, conciliaciones bancarias
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="d">
								D)	Participar en licitaciones, realización de cotizaciones
							</label>
						</div>		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>2.-¿Qué tipos de Reclutamientos existen?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="a" checked>
								A)	Volanteo
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2"  value="b">
								B)	Por medio de la Radio
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="c">
								C)	Interno y externo.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="d">
								D)	Por teléfono
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>3.- ¿Qué información debe de contener el anuncio en el proceso de Reclutamiento y Selección externa?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3"  value="a" checked>
								A)	RFC de la empresa
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="b">
								B)	Número de Registro Patronal
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="c">
								C)	Nombre el Representante Legal
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="d">
								D)	Nombre de la empresa, puesto que solicita, requisitos mínimos para el puesto etc.
							</label>
						</div>		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>4.- ¿Las preguntas que se deben de realizar en una entrevista?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4"  value="a" checked>
								A)	¿Qué experiencia tienes en este campo en particular?, ¿Por qué dejaste tu último trabajo?
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="b">
								B)	¿Qué programas te gusta ver en la tv?
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="c">
								C)	¿En qué fecha se realiza la declaración anual?
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="d">
								D)	¿Cuándo fueron tus últimas vacaciones?
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>5.- ¿La información que nos proporcionen de las preguntas anteriores para que nos pueden ayudar?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5"  value="a" checked>
								A)	Al entrevistador le interesa saber si la persona que está enfrente es apta para el puesto, si es estable en sus trabajos y ver sus ambiciones y metas, de esta manera evitaríamos la rotación de personal.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="b">
								B)	Para saber en qué fechas se programaran sus vacaciones. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="c">
								C)	Realizar todo el trámite para presentar la declaración anual.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="d">
								D)	Para darle un horario de trabajo que no obstruya con su programa preferido.
							</label>
						</div>	
			  		</td>
			  	</tr>
			   	<tr>
			  		<td>
				  		<label>6.-¿Qué función tiene el Perfil de Puestos? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6"  value="a" checked>
								A)	De organizar de acuerdo a un plan, para lograr que un individuo adquiera destrezas, valores y conocimientos teóricos.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="b">
								B)	De detallar cada puesto de trabajo en la organización. Describe la misión, las tareas relacionadas con el puesto, la función general del puesto y las responsabilidades.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="c">
								C)	De ser un conjunto procedimientos utilizados con el fin de atraer a un número suficiente de candidatos idóneos para un puesto específico en una determinada organización.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="d">
								D)	Es un instrumento que se utiliza para comprobar el grado de cumplimiento de los objetivos propuestos a nivel individual.
							</label>
						</div>	
			  		</td>
			  	</tr>
			 	<tr>
			  		<td>
			  		<label>7.- ¿Qué partes debe de contener un contrato?  </label>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7"  value="a" checked>
							A)	Cuenta bancaria de la empresa.
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7" value="b">
							B)	Folios de facturas de pagos.
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7" value="c">
							C)	Tipo de contrato, quienes lo celebran, clausulas.
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7" value="d">
							D)	Fechas de cumpleaños de los trabajadores.
						</label>
					</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>8.- ¿Por qué es importante la capacitación en una empresa?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8"  value="a" checked>
								A)	Por qué auxilia a los miembros de las organizaciones a desempeñar satisfactoriamente su trabajo.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="b">
								B)	Que sean mejores jugadores de futbol
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="c">
								C)	Aprendan a vestirse de manera correcta
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="d">
								D)	Sepan leer y escribir
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>9.- Menciona cuales son los tipos de necesidades de la capacitación:</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9"  value="a" checked>
								A)	Alimentarse, dormir
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="b">
								B)	Económicas
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="c">
								C)	Nivel organizacional, ocupacional e individual o humano
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="d">
								D)	Emocionales
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>10.- ¿Para qué nos sirve la Entrevista de Salida?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10"  value="a" checked>
								A)	Para poder obtener información que nos va a permitir realizar un estudio de las razones principales por las que nos dejan nuestros profesionales.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="b">
								B)	Son una herramienta que permite a las empresas hacer una aproximación a las habilidades cognitivas y comportamiento de un empleado potencial, y así, valorar si es afín a la cultura de la empresa.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="c">
								C)	Para dejar evidencia y poder sancionar los hechos que ocurren con algún trabajador y van en contra de alguna norma de la empresa sustentada en el código de conducta o reglamento interno de trabajo.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="d">
								D)	Para proporcionarles a los empleados información básica sobre los antecedentes de la empresa, la información que necesitan para realizar sus actividades de manera satisfactoria.
							</label>
						</div>	
			  		</td>
			  	</tr>

			  	<tr>
			  	<td><input id="BtnERH" type="submit" value="Guardar" /></td>
			  	</tr>
			</form>
		</table>

  	</body>
</html>