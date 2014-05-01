
<?php require_once "../admin/includes/seguridad.php";

 ?>
 <!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Supervisor de Control de Calidad</title>  
	    <!-- Bootstrap core CSS -->
	    
  	</head>

  	<body>
  		<?php require_once "encuesta.php"; ?>
	    <table class="table table-condensed">
	    	<form id="FrmSupConCal" method="post">
				<tr>
			  		<td>
				  		<label>1.- ¿Un sistema de Gestión de Calidad en que norma ISO está basado?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="a" checked>
								a)	ISO 9001:2008
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1"  value="b">
								b)	ISO 14001:2004 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="c">
								c)	ISO 18001:2007
							</label>
						</div>		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>2.- ¿Define la metodología PHVA?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="a" checked>
								a)	Planificar-Hacer-Verificar-Actuar
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2"  value="b">
								b)	Plantear-Actuar-Instalar-Hacer
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="c">
								c)	Proponer-Hacer-Validar-Actuar
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>3.- ¿Cuáles son los principios de la gestión de calidad?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3"  value="a" checked>
								a)	Enfoque al cliente y Liderazgo     
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="b">
								b)	Participación del personal y Enfoque basado en procesos
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="c">
								c)	Enfoque de sistema para la gestión y Mejora continúa       
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="d">
								d)	Enfoque basado en hechos para la toma de decisión       
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="e">
								e)	Relaciones mutuamente beneficiosas con el proveedor           
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="f">
								f)	Todos los anteriores    
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>4.- ¿Es el grado en el que un conjunto de características inherentes cumple con los requisitos?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4"  value="a" checked>
								a)	Interés
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="b">
								b)	Calidad
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="c">
								c)	Empeño
							</label>
						</div>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>5.- ¿Es el documento que especifica el sistema de gestión de la calidad de una organización? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5"  value="a" checked>
								a)	Manual de Calidad
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="b">
								b)	Procedimientos
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="c">
								c)	Instrucciones de Trabajo
							</label>
						</div>	
			  		</td>
			  	</tr>
			   	<tr>
			  		<td>
				  		<label>6.- ¿Es el Proceso sistemático, independiente y documentado para obtener evidencias de la auditoría y evaluarlas de manera objetiva con el fin de determinar el grado en que se cumplen los criterios de auditoría? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6"  value="a" checked>
								a)	Revisión
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="b">
								b)	Auditoria
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="c">
								c)	Sistematización 
							</label>
						</div>	
			  		</td>
			  	</tr>
			 	<tr>
			  		<td>
			  			<label>7.- ¿Es el conjunto de una o más auditorías planificadas para un periodo de tiempo determinado y dirigidas hacia un propósito específico? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7"  value="a" checked>
								a)	Programa de auditorías
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="b">
								b)	Plan de Auditorias
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="c">
								c)	Planeación programada
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>8.- ¿Es la Persona con atributos personales demostrados y competencia para llevar a cabo una auditoría?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8"  value="a" checked>
								a)	Auditor
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="b">
								b)	Director
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="c">
								c)	Representante de la dirección
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>9.- ¿Es uno o más auditores que llevan a cabo una auditoría con el apoyo, si es necesario, de expertos técnicos? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9"  value="a" checked>
								a)	Equipo Auditor
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="b">
								b)	Auxiliar de calidad
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="c">
								c)	Expertos en sistemas de Gestión 
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>En las siguiente preguntas conteste con una V si el enunciado es verdadero o una F si el enunciado es falso, con respecto a los requerimientos de ISO 9001:2008.</label>
						
				  			<table class="table table-bordered">
 								<tr class="active">
 									<td><b>Pregunta</b></td><td><b>Verdadero</b></td><td><b>Falso</b></td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											10.- ¿ISO 9001:2008 requiere que todas las actividades que se realizan en la organización estén documentadas en procedimientos?
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta10"  value="v">
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta10"  value="f">
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											11.- ¿Se debe determinar la secuencia y la interacción de los procesos que intervienen en el SGC?
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta11"  value="v" >
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta11"  value="f" >
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											12.- ¿La documentación que se genera dentro de la empresa, para el SGC debe de ser revisada y aprobada antes de su emisión?
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta12"  value="v" >
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta12"  value="f" >
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											13.- ¿Todos los procesos del SGC deben de ser medidos y analizados?
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta13"  value="v" >
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta13"  value="f" >
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											14.- ¿Cuándo la organización sub-contrata un proceso externo queda eximida de cumplir con los requisitos del cliente?
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta14"  value="v" >
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta14"  value="f" >
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											15.- ¿El control de documentos de origen externo tal como planos, especificaciones, normas, etc., no debe incluirse en el control de documentos dl SGC?
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta15"  value="v" >
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta15"  value="f" >
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											16.- ¿Un manual de calidad siempre debe de contener todos los procedimientos del SGC?
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta16"  value="v" >
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta16"  value="f" >
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											17.- ¿El control de registros debe incluir la identificación, el almacenamiento, la disponibilidad y el tiempo de retención de los registros del SGC?
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta17"  value="v" >
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta17"  value="f" >
											</label>
										</div>
									</td>
 								</tr>
 								<tr>
 									<td>
 										<b>
 											18.- ¿La política y los objetivos deben ser documentos controlados?
 										</b>
 									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta18"  value="v" >
											</label>
										</div>
									</td>
 									<td>
 										<div class="radio">
											<label>
												<input type="radio" name="pregunta18"  value="f" >
											</label>
										</div>
									</td>
 								</tr>

							</table>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>19.- Con base al siguiente incidente, determinar si el hallazgo descrito es causa para levantar una no conformidad y clasificar si es no conformidad menor o mayor.</label>
							<p>
								Antes  de auditar el Departamento de Diseño, el auditor reviso el manual de Diseño y Desarrollo y Observo que no contenía procedimientos para la validación del diseño. Durante la auditoria, el auditor reviso la documentación correspondiente a diez proyectos concluidos (99/007, 99/010, 99/020, 99/025, 99/031, 99/042, 99/051, 99/054, 99/ 062 y 99/070), no pudiendo encontrar registros de la validación de dichos diseños. El director del departamento explico que como cada diseño era único, la validación del diseño no era aplicable a los productos que ahí se diseñaban.
							</p>							

						<div class="radio">
							<label>
								<input type="radio" name="pregunta19"  value="a" checked>
								a)	No conformidad Menor
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta19" value="b">
									b)	no conformidad mayor
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta19" value="c">
									c)	Observación
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  	<td><input id="BtnSupConCal" type="submit" value="Guardar" /></td>
			  	</tr>
			</form>
		</table>



  	</body>
</html>