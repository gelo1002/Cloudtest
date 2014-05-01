<?php require_once "../admin/includes/seguridad.php";

 ?>
<!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Ejecutivo de Adquisiciones y servicios</title>  
	    <!-- Bootstrap core CSS -->
	    
  	</head>

  	<body>
  		<?php require_once "encuesta.php"; ?>
	    <table class="table table-condensed">
	    	<form id="FrmAS" method="post">
				<tr>
			  		<td>
				  		<label>1.- ¿Cuál es la actividad del departamento de adquisiciones y servicios?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="a" checked>
								a)	Compra de materiales e insumos. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1"  value="b">
								b)	venta de materiales e insumos.  
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="c">
								c)	Interpretación  de estados de cuenta. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="d">
								d)	Instalación de equipo especializado.
							</label>
						</div>		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>2.- ¿Qué son las compras dentro de una organización?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="a" checked>
								a)	Comprar lo que nos guste o luzca mejor. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2"  value="b">
								b)	Comprar bienes y/o servicios para satisfacer una necesidad.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="c">
								c)	Comprar material para tener en almacén.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="d">
								d)	Comprar solo por comprar.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>3.- ¿Cuáles son los requisitos para realizar una compra?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3"  value="a" checked>
								a)	Calidad, tiempo de entrega, apariencia. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="b">
								b)	Precio, calidad, tiempo de entrega.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="c">
								c)	Tiempo de entrega, proveedor, traslado. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="d">
								d)	Proveedor, traslado, precio. 
							</label>
						</div>		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>4.- ¿Qué es necesario realizar antes de una compra?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4"  value="a" checked>
								a)	Analizar las cotizaciones y seleccionar la mejor oferta.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="b">
								b)	Verificar si se cuenta con el capital para realizar la compra.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="c">
								c)	Simplemente realizar la compra.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="d">
								d)	Todas las anteriores.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>5.- ¿Qué departamento debe de autorizar la compra de los materiales?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5"  value="a" checked>
								a)	Gerencia general.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="b">
								b)	Calidad.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="c">
								c)	Contabilidad.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="d">
								d)	Gerencia administrativa. 
							</label>
						</div>	
			  		</td>
			  	</tr>
			   	<tr>
			  		<td>
				  		<label>6.- ¿Qué es lo que procede después de realizada la compra? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6"  value="a" checked>
								a)	Registrar en almacén.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="b">
								b)	Seguimiento a fechas de entrega, recepción y entrega a almacén.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="c">
								c)	Esperar a que llegue la mercancía.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="d">
								d)	La compra ya está finalizada.
							</label>
						</div>	
			  		</td>
			  	</tr>
			 	<tr>
			  		<td>
			  		<label>7.- ¿Cuáles son los departamentos con los que el departamento de adquisiciones y servicios tiene mayor relación?  </label>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7"  value="a" checked>
							a)	Almacén, programación, recursos humanos.
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7" value="b">
							b)	Recursos humanos, ventas, contabilidad.
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7" value="c">
							c)	Contabilidad, almacén, ventas.
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7" value="d">
							d)	Programación, ventas, contabilidad.
						</label>
					</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>8.- ¿Cuáles son los tipos de compras que se pueden realizar territorialmente?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8"  value="a" checked>
								a)	Locales. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="b">
								b)	Nacionales. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="c">
								c)	Internacionales. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="d">
								d)	Todas las opciones.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>9.- ¿Cuáles son los tipos de compras que se pueden realizar financieramente?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9"  value="a" checked>
								a)	Crédito.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="b">
								b)	Contado.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="c">
								c)	Pago anticipado.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="d">
								d)	Todas las opciones.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>10.- ¿Cuándo se considera terminado el proceso de compra?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10"  value="a" checked>
								a)	Al momento de hacer el pago.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="b">
								b)	Cuando el producto es entregado al almacén.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="c">
								c)	Cuando se envía la orden de compra al proveedor.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="d">
								d)	Cuando el proveedor informa el envío.
							</label>
						</div>	
			  		</td>
			  	</tr>

			  	<tr>
			  	<td><input id="BtnAS" type="submit" value="Guardar" /></td>
			  	</tr>
			</form>
		</table>

  	</body>
</html>