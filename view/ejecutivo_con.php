<?php require_once "../admin/includes/seguridad.php";

 ?>
<!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Ejecutivo de Contabilidad/title>  
	    <!-- Bootstrap core CSS -->
	    
  	</head>

  	<body>
  		<?php require_once "encuesta.php"; ?>
	    <table class="table table-condensed">
	    	<form id="FrmEjeCon" method="post">
				<tr>
			  		<td>
				  		<label>1.- Principales Declaraciones mensuales a prestar una persona moral a hacienda:</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="a" checked>
								a)	IVA, P.P IETU, P.P ISR
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1"  value="b">
								b)	DIOT, IVA, P.P. ISR
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="c">
								c)	IVA, retenciones de IVA e ISR , P.P ISR
							</label>
						</div>		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>2.- ¿Contra qué se puede acreditar el ISR retenido del mes?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="a" checked>
								a)	Contra subsidio al empleo entregado a los trabajadores
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2"  value="b">
								b)	Contra el Pago provisional de ISR pagado en el mes
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="c">
								c)	Ninguna de las mencionadas
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>3.- ¿Contra qué se puede acreditar el IVA que le retenemos a los proveedores en el mes?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3"  value="a" checked>
								a)	No se puede acreditar con algún otro concepto
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="b">
								b)	Contra el IVA pagado del Mes
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="c">
								c)	Contra el IVA que nos retuvieron los clientes
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>4.- Requisitos del consumo local</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4"  value="a" checked>
								a)	Solo deducir 12.5 % y estar pagado por medio de tarjeta de crédito.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="b">
								b)	Estar pagado con tarjeta y solo deducir el 87.5%
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="c">
								c)	No existen requisitos
							</label>
						</div>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>5.- Cuál de las siguientes opciones es un requisito para deducir viáticos de consumo: </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5"  value="a" checked>
								a)	Debe ser pagado exclusivamente con tarjeta.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="b">
								b)	Debe realizarse en una franja que exceda los 25 km de establecimiento permanente 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="c">
								c)	El Límite de consumo es de 750.00 diarios por persona.
							</label>
						</div>	
			  		</td>
			  	</tr>
			   	<tr>
			  		<td>
				  		<label>6.- Monto de deducción de las inversiones en automóviles</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6"  value="a" checked>
								a)	165,000 para aquellos Adquiridos antes del año 2014, 140,000 para aquellos adquiridos a partir del año 2014. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="b">
								b)	175,000 para aquellos Adquiridos antes del año 2014, 130,000 para aquellos adquiridos a partir del año 2014, No aplica a vehículos de carga “Pick up”.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="c">
								c)	No hay límite de deducción.
							</label>
						</div>	
			  		</td>
			  	</tr>
			 	<tr>
			  		<td>
			  			<label>7.- Calcular el monto neto a pagar de un saldo a pagar de IVA de febrero 2013 por $5,000 (se paga el 01/04/2013) (incluir recargos y actualizaciones)</label>
							<table class="table table-bordered">
 								<tr class="active">
 									<td><b>Año</b></td><td><b>Enero</b></td><td><b>Febrero</b></td><td><b>Marzo</b></td><td><b>Abril</b></td><td><b>Mayo</b></td><td><b>Junio</b></td>
 								</tr>
 								<tr>
 									<td class="active"><b>2013</b></td><td>107.6780</td><td>108.2080</td><td>109.0020</td><td>109.0740</td><td>108.7110</td><td>108.64.50</td>
 								</tr>
							</table>

						<div class="radio">
							<label>
								<input type="radio" name="pregunta7"  value="a" checked>
								a)	NETO de 5,093
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="b">
								b)	NETO de 5,100
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="c">
								c)	NETO de 5,090
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>8.- Es un requisito de deducibilidad del sueldo de un trabajador:</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8"  value="a" checked>
								a)	Solicitar a los trabajadores la constancia de inscripción en el RFC, o bien los datos necesarios para inscribirlos.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="b">
								b)	Efectuar el pago únicamente  mediante transferencia electrónica a la tarjeta del trabajador.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="c">
								c)	Ninguna de las anteriores.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  	<td><input id="BtnEjeCon" type="submit" value="Guardar" /></td>
			  	</tr>
			</form>
		</table>



  	</body>
</html>