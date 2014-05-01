
<?php require_once "../admin/includes/seguridad.php";

 ?>
 <!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Programador Senior</title>  
	    <!-- Bootstrap core CSS -->
	    
  	</head>

  	<body>
  		<?php require_once "encuesta.php"; ?>
	    <table class="table table-condensed">
	    	<form id="FrmPS" method="post">
				<tr>
			  		<td>
				  		<label>1.	¿Qué significa el término “compilar”?</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="a" checked>
								a.)	Proceso de traducción de un código fuente a lenguaje máquina para que pueda ser ejecutado por la computadora.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1"  value="b">
								b.)	Proceso de traducción de inglés a español.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="c">
								c.)	Proceso de Cambio de caracteres a números.
							</label>
						</div>		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>2.	¿Qué es un objeto? </label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="a" checked>
								a.)	Un objeto es una pieza de cualquier tipo de material.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2"  value="b">
								b.)	Un objeto es una unidad dentro de un programa de computadora que consta de un estado y de un comportamiento, que a su vez constan respectivamente de datos almacenados y de tareas realizables durante el tiempo de ejecución.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="c">
								c.)	Un objeto es una unidad de medida para las computadoras.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>3.	¿Qué es una clase?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3"  value="a" checked>
								a.)	Es un grupo de personas atendiendo una solicitud.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="b">
								b.)	Es una clasificación de algo.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="c">
								c.)	Es una construcción que se utiliza como un modelo (o plantilla) para crear objetos de ese tipo.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>4.	¿Qué es un Método?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4"  value="a" checked>
								a.)	Un método es un proceso para realizar una tarea.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="b">
								b.)	Un método es una seria de pasos para realizar una actividad.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="c">
								c.)	Un método es una subrutina cuyo código es definido en una clase y puede pertenecer tanto a una clase como a un objeto.
							</label>
						</div>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>5.	¿Qué es una propiedad? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5"  value="a" checked>
								a.)	Es un bien mueble o inmueble que pertenece a alguien.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="b">
								b.)	Es una persona.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="c">
								c.)	Es un contenedor de un tipo de datos asociados a un objeto, que hace los datos visibles desde fuera del objeto y esto se define como sus características predeterminadas.
							</label>
						</div>	
			  		</td>
			  	</tr>
			   	<tr>
			  		<td>
				  		<label>6.	¿Qué es un archivo de texto plano? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6"  value="a" checked>
								a.)	Los archivos de teXto plano (plain text) son aquellos que solo se les puede escribir números.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="b">
								b.)	Los archivos de texto plano (plain text), son aquellos formados exclusivamente por texto (sólo caracteres), sin ningún formato.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="c">
								c.)	Los archivos de texto plano son aquellos que solo aceptan letras.
							</label>
						</div>	
			  		</td>
			  	</tr>
			 	<tr>
			  		<td>
			  			<label>7.	¿Cuál es la diferencia entre Software y Hardware? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7"  value="a" checked>
								a.)	Software son los programas que usa la computadora para realizar sus tareas. Hardware son las partes físicas que componen la computadora, tales como teclado, mouse, monitor, procesador, disco rígido.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="b">
								b.)	Uno se ejecuta en la computadora y otro no.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta7" value="c">
								c.)	El software es tangible y el hardware no.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>8.	Desde tu punto de vista, cual es el mejor S.O. para el uso de servidores WEB:</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8"  value="a" checked>
								a.)	Linux. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="b">
								b.)	Windows.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="c">
								c.)	Solaris.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>9.	Cuáles son las ventajas del uso de Discos Duros de Estado Sólido</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9"  value="a" checked>
								a.)	Arranque más lento, gran velocidad, menor rapidez.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="b">
								b.)	Arranque más rápido, menor velocidad, menor rapidez. 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="c">
								c.)	Arranque más rápido, gran velocidad de escritura, mayor rapidez.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>10.	¿Cuál es el nombre simplificado de una medida de 1,024 MB?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10"  value="a" checked>
								a.)	1 Gigabyte.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="b">
								b.)	1 Terabyte.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="c">
								c.)	1 Zetabyte.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>11.	¿Cuántos KB hay en 1 GB?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11"  value="a" checked>
								a.)	1,024 KB.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="b">
								b.)	128 KB.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="c">
								c.)	1,048,576 KB.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>12.	¿Cuáles de estos lenguajes de programación es un lenguaje interpretado?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12"  value="a" checked>
								a.)	Java.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12" value="b">
								b.)	Javascript.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12" value="c">
								c.)	C#.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>13.	¿Cuál de estas base de datos no es relacional?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta13"  value="a" checked>
								a.)	MongoDB.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta13" value="b">
								b.)	MySQL.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta13" value="c">
								c.)	MariaDB.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>14.	¿Qué es XML?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta14"  value="a" checked>
								a.)	Es un formato de intercambio de datos usando principalmente para su almacenamiento y transferencia en las base de datos.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta14" value="b">
								b.)	Es un sistema estándar de codificación de información organizada en forma de árbol en donde cada rama puede tener atributos propios.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta14" value="c">
								c.)	Es un formato ligero de intercambio de datos basados en subconjuntos con estructuras universales basadas en Javascript.
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>15.	¿Qué es JSON?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta15"  value="a" checked>
								a.)	Es un formato de intercambio de datos usando principalmente para su almacenamiento y transferencia en las base de datos.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta15" value="b">
								b.)	Es un sistema estándar de codificación de información organizada en forma de árbol en donde cada rama puede tener atributos propios.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta15" value="c">
								c.)	Es un formato ligero de intercambio de datos basados en subconjuntos con estructuras universales basadas en javascript.
							</label>
						</div>	
			  		</td>
			  	</tr>

			  	<tr>
			  	<td><input id="BtnPS" type="submit" value="Guardar" /></td>
			  	</tr>
			</form>
		</table>



  	</body>
</html>