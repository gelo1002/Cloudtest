<?php require_once "../admin/includes/seguridad.php";

 ?>
<!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Diseñador Grafico</title>  
	    <!-- Bootstrap core CSS -->
	    
  	</head>

  	<body>
  		<?php require_once "encuesta.php"; ?>
	    <table class="table table-condensed">
	    	<form id="FrmDesign" method="post">
				<tr>
			  		<td>
				  		<label>1.	El diseño gráfico es:</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="a" checked>
								a)	Una actividad que posibilita comunicar gráficamente ideas, hechos y valores
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1"  value="b">
								b)	Un software para editar imágenes
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="c">
								c)	Un hardware para imprimir gráficos
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="d">
								d)	Ninguna de las anteriores
							</label>
						</div>		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>2.	Muestras de diseño gráfico la encontramos en:</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="a" checked>
								a)	Hardware, software y firmware
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2"  value="b">
								b)	Programas de aplicación y de base
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="c">
								c)	Carteles, tv, internet, revistas y periódicos
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="d">
								d)	Todas las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>3.	José María observa que una imagen que acaba de imprimir está compuesta de minúsculos puntos de colores que forman la imagen; esto es una muestra de:</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3"  value="a" checked>
								a)	Bits
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="b">
								b)	Byte
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="c">
								c)	Pixel
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="d">
								d)	Todas las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>4.	Ampliando lo suficiente una imagen digital (zoom), por ejemplo en la pantalla de un rdenador, pueden observarse los píxeles que componen la:</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4"  value="a" checked>
								a)	Pantalla
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="b">
								b)	Imagen
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="c">
								c)	Cpu
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="d">
								d)	Todas las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>5.	El photoshop es un programa que sirve para: </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5"  value="a" checked>
								a)	Crear imágenes digitales
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="b">
								b)	Editar imágenes digitales
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="c">
								c)	Creación, edición de imágenes digitales y retoque fotográfico
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="d">
								d)	Ninguna de las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			   	<tr>
			  		<td>
				  		<label>6.	El photoshop trabaja con:  </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6"  value="a" checked>
								a)	mp3, mp4 y wav 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="b">
								b)	Mapas de bits e imágenes vectoriales
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="c">
								c)	Videos y animaciones
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="d">
								d)	Todas las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			 	<tr>
			  		<td>
			  		<label>7.	Photoshop es una herramienta únicamente usada por:  </label>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7"  value="a" checked>
							a)	Diseñadores
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7" value="b">
							b)	Estudiantes
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7" value="c">
							c)	Fotógrafos
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7" value="d">
							d)	Todas las anteriores
						</label>
					</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>8.	La descripción RGB está compuesta de los colores:</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8"  value="a" checked>
								a)	Amarillo, azul y rojo
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="b">
								b)	Rojo, verde y azul
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="c">
								c)	Negros, grises y blancos
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="d">
								d)	Todas las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>9.	La descripción CMYK está compuesta por los colores:</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9"  value="a" checked>
								a)	Amarillo, azul y rojo
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="b">
								b)	Rojo, verde y azul
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="c">
								c)	Negros y grises
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="d">
								d)	Ninguna de las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>10.	Al hablar de mapa de bits estamos tratando con:</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10"  value="a" checked>
								a)	Una línea
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="b">
								b)	Un sonido
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="c">
								c)	Una imagen
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="d">
								d)	Todas las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>11.	Si trazo una línea, un rectángulo y una elipse, he realizado una: </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11"  value="a" checked>
								a)	Imagen matricial 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="b">
								b)	Mapa de bits 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="c">
								c)	Imagen vectorial
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="d">
								d)	Ninguna de las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>12.	Josefina se fue de vacaciones, se tomó fotografías pero le salieron oscuras, ¿Qué programa le recomiendas para solucionar su problema? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12"  value="a" checked>
								a)	Un editor de texto
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12" value="b">
								b)	Un editor de audio
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12" value="c">
								c)	Un editor de imágenes
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12" value="d">
								d)	Ninguna de las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>13.	¿Qué entiende por HTML?   </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta13"  value="a" checked>
								a)	Hyper Text Mask Language
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta13" value="b">
								b)	Hard Text Markup Language
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta13" value="c">
								c)	Hyper Text Markup Language
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta13" value="d">
								d)	Hide Text Markup Language
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>14.	¿Qué etiqueta utilizamos para definir el cuerpo del documento? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta14"  value="a" checked>
								a)	< background >
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta14" value="b">
								b)	 < body >
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta14" value="c">
								c)	< b >
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta14" value="d">
								d)	Todas las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>15.	¿Cuál es la sintaxis para pasar parámetros en la url? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta15"  value="a" checked>
								a)	= “valor sugerido”; 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta15" value="b">
								b)	#variable = “url”;
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta15" value="c">
								c)	.variable = “url”;
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta15" value="d">
								d)	Ninguna de las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>16.	¿Cuál es la forma correcta de crear un vínculo?  </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta16"  value="a" checked>
								a)	< a target="http://www.unsitio.com" >...< /a >
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta16" value="b">
								b)	< a href="http://www.unsitio.com" >...< /a >
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta16" value="c">
								c)	< a url="http://www.unsitio.com" >...< /a >
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta16" value="d">
								d)	Todas las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>17.	¿Cómo definimos un color en sistema hexadecimal?   </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta17"  value="a" checked>
								a)	< beige >
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta17" value="b">
								b)	< 245,245,220 >
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta17" value="c">
								c)	< #F5F5DC >
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta17" value="d">
								d)	Todas las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>18.	¿Cómo diferencias entre html5 y html4?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta18"  value="a" checked>
								a)	< head >
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta18" value="b">
								b)	< meta >
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta18" value="c">
								c)	 < !doctype >
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta18" value="d">
								d)	Todas las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>19.	¿Qué entiendes por CSS? </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta19"  value="a" checked>
								a)	Creative Style System
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta19" value="b">
								b)	Class Style Sheets
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta19" value="c">
								c)	Cascading Style Sheets
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta19" value="d">
								d)	Cascading Style System
							</label>
						</div>	
			  		</td>
			  	</tr>
			  

			  	<tr>
			  	<td><input id="BtnDesign" type="submit" value="Guardar" /></td>
			  	</tr>
			</form>
		</table>



  	</body>
</html>