<?php require_once "../admin/includes/seguridad.php";

 ?>
<!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Ejecutivo de ventas</title>  
	    <!-- Bootstrap core CSS -->
	    
  	</head>

  	<body>
  		<?php require_once "encuesta.php"; ?>
	    <table class="table table-condensed">
	    	<form id="FrmEjeVen" method="post">
				<tr>
			  		<td>
				  		<label>1.- ¿Cuál es la función del Ejecutivo de Ventas y Desarrollo de Negocios?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="a" checked>
								a)	Es una persona dedicada a elaborar estudios de mercado.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1"  value="b">
								b)	La persona dedicada a la ejecución de los proyectos dentro de una empresa.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="c">
								c)	Es la persona encargada dentro de una empresa de la parte comercial, así como de promover la distribución de los equipos y/o servicios que se manejan dentro de ella.
							</label>
						</div>		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>2.- ¿Principales tareas de Ejecutivo de Ventas y Desarrollo de Negocios? </label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="a" checked>
								a)	Captación de Clientes, Elaborar cotizaciones y/ propuestas (licitaciones), Seguimiento a cotizaciones, Cierre de negociaciones.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2"  value="b">
								b)	Conseguir proveedores, elaborar órdenes de compra, seguimiento a las compras realizadas, reportes de compras mensuales.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="c">
								c)	Realizar evaluaciones a los trabajadores, dar cursos de inducción al personal, llevar la documentación de los empleados dentro de la empresa.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>3.- Habilidades de un Ejecutivo de Ventas y Desarrollo de Negocios:</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3"  value="a" checked>
								a)	Saber guiar a los empleados, ser un buen líder, toma de decisiones, imparcialidad.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="b">
								b)	Elaboración de estrategias de ventas, Planificar ventas en los mercados nuevos y existentes, Facilidad de palabra, Conocimiento amplio de los Equipos  y/o servicios que se comercializan, Destrezas interpersonales, diplomacia y capacidad de persuasión  al negociar con el cliente, Capacidad  para entender las necesidades del cliente.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="c">
								c)	Saber ejecutar una auditoria, realizar reportes de actividades, establecer los procedimientos a seguir dentro de una empresa, ser un buen compañero laboral.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>4.- ¿Cómo abordarías a un Nuevo Cliente?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4"  value="a" checked>
								a)	Preguntándole sobre sus ingresos mensuales, invitándolo a tomar un café, haciendo platica sobre su vida personal.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="b">
								b)	Presentación Formal (nombre, empresa, tarjeta de presentación), Reseña breve de la empresa, Explicación Breve de los servicios y/o Equipos que se manejan, Cuestionamiento sutil sobre las necesidades del cliente, Ofrecer posibles soluciones. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="c">
								c)	Solicitándole sus documentos de identificación personal, así como el puesto en el que actualmente se encuentra, hablándole sobre procesos industriales y mercadotecnia.
							</label>
						</div>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>5.- Menciona a tu criterio cuales serían las personas estratégicas con quien se tiene que tratar y/o conocer dentro de la estructura de una empresa (Cliente): </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5"  value="a" checked>
								a)	Usuario final (persona que tiene la necesidad en campo, regularmente personal operativo), Comprador, Jefe del departamento de Compras, Gerente, Director General.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="b">
								b)	Velador, jefe de seguridad, jefe del área de recursos humanos, obreros generales. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="c">
								c)	Médico, enfermera, recepcionista, auxiliar de seguridad, encargado de farmacia.
							</label>
						</div>	
			  		</td>
			  	</tr>
			   	<tr>
			  		<td>
				  		<label>6.- ¿Si tuvieras que realizar una visita a campo con tu cliente para una nueva oportunidad de negocio que cosas básicas tendrías que solicitarle como información? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6"  value="a" checked>
								a)	Área donde existe la necesidad, Cuál es la necesidad que se tiene, Características y/o especificaciones técnicas de lo que necesita, Tomar fotografías de lo visto en campo, Información Técnica si se tiene, Entre otras.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="b">
								b)	Su número telefónico, correo personal, funciones que desempeña en su ámbito laboral, horario de trabajo, y antigüedad en el puesto.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="c">
								c)	Datos generales del proceso industrial que se está llevando a cabo, con qué materia prima elaboran el producto final, a quien se le vende la producción, anomalías en los procesos.
							</label>
						</div>	
			  		</td>
			  	</tr>
			 	<tr>
			  		<td>
			  			<label>7.- ¿Que entiendes por Licitación? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7"  value="a" checked>
								a)	Concurso que se lleva a cabo para obtener un puesto público.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="b">
								b)	Procedimiento  Administrativo para la adquisición de suministros, realización de servicios  o ejecución de obras que celebren los entes, organismos y entidades que forman parte del sector Público.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="c">
								c)	Proceso que se lleva a cabo dentro del gobierno para elegir a un gobernador.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>8.- ¿Cuál es el portal que utiliza el Gobierno Federal para licitar sus compras a los proveedores y contratistas)?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8"  value="a" checked>
								a)	COMPRANET
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="b">
								b)	INFONAVIT
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="c">
								c)	FACEBOOK
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>9.- ¿Cuáles son las 4 subsidiarias de Petróleos Mexicanos (PEMEX)? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9"  value="a" checked>
								a)	Pemex Refinación, Pemex Petroquímica, Pemex Exploración y Producción (PEP), Pemex Gas y Petroquímica Básica (PGPB).
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="b">
								b)	Superintendencia de planeación, Superintendencia de Contratos, Superintendencia de Mantenimiento, Superintendencia de Seguridad Física.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="c">
								c)	Diario Oficial de la Federación, Secretaria de Hacienda y crédito Publica, Instituto Mexicano del Seguro Social, INFONAVIT.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>10.- ¿Menciona el Equipo de seguridad que se tiene que llevar al momento de hacer una visita a un área y/o complejo industrial?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10"  value="a" checked>
								a)	Traje sastre, zapatos casuales, lentes de sol
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="b">
								b)	Bata blanca de laboratorio, zapatos blancos, ropa de algodón blanca, cubrebocas.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="c">
								c)	Overol, Botas industriales, Barbiquejo, Lentes de seguridad, Tapones auditivos, Mascarilla de seguridad.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>11.- ¿Si te pidieran Realizar un Directorio de clientes, que datos consideras tendría que llevar?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11"  value="a" checked>
								a)	R.F.C. del cliente, número de empleados con que cuentan, número de obras que tienen desarrollando, capital contable.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="b">
								b)	Nombre de la Empresa, Nombre del usuario o contacto, Teléfono (oficina, móvil), Correo electrónico, Departamento o área al que pertenece (operativo, compras, licitaciones etc.)
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="c">
								c)	Nivel de estudios del personal de la empresa, numero de seguridad social de cada empleado, sueldo de cada empleado.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>12.- ¿Cuándo elaboras una cotización en dólares (USD) y el cliente decide pagar en pesos (M.N), de donde le indicas tiene que tomar el Tipo de cambio?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12"  value="a" checked>
								a)	Tipo de cambio del Banco de México
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12" value="b">
								b)	Tipo de cambio del Nacional Monte de Piedad
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12" value="c">
								c)	Diario Oficial de la Federación (fecha en la que se realice el pago)
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  	<td><input id="BtnEjeVen" type="submit" value="Guardar" /></td>
			  	</tr>
			</form>
		</table>



  	</body>
</html>