
<?php require_once "../admin/includes/seguridad.php";

 ?>
 <!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Office</title>  
	    <!-- Bootstrap core CSS -->
	    
  	</head>

  	<body>
  		<?php require_once "encuesta.php"; ?>
	    <table class="table table-condensed">
	    	<form id="FrmOffice" method="post">
				<tr>
			  		<td>
				  		<label>1.-Qué entiendes por Software:</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="a" checked>
								Elemento lógico del computador
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1"  value="b">
								Red de computadoras
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="c">
								Periférico de salida
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta1" value="d">
								Periférico de entrada
							</label>
						</div>		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>2.-Qué es Hardware:</label>
				  		<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="a" checked>
								Red de computadoras
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2"  value="b">
								Elemento físico del computador
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="c">
								Periférico de salida
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta2" value="d">
								Periférico de entrada
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>3.-Que son los archivos digitales:</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3"  value="a" checked>
								Son un conjunto de bits  almacenado en un dispositivo
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="b">
								Son páginas
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta3" value="c">
								Son archivos
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>4.-Que es el PDF:</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4"  value="a" checked>
								Pertenece a Acrobat
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="b">
								Es un formato de almacenamiento de documentos digitales
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="c">
								Es un texto
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta4" value="d">
								Ninguna es correcta
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td><label>Sección Word:</label></td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>5.- La opción en dejar a varios objetos como si fuera sólo uno, se realiza mediante la opción de: </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5"  value="a" checked>
								Juntar
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="b">
								Agrupar 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="c">
								Ensamblar 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta5" value="d">
								Ninguna de las anteriores
							</label>
						</div>	
			  		</td>
			  	</tr>
			   	<tr>
			  		<td>
				  		<label>6.-Para la opción de la pregunta anterior, ¿cuantos objetos se necesitan al menos tener marcados?  </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6"  value="a" checked>
								Al menos uno 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="b">
								Al menos dos 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="c">
								Al menos la mitad de los presentes en el documento 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta6" value="d">
								Todos los que estén en el documento
							</label>
						</div>	
			  		</td>
			  	</tr>
			 	<tr>
			  		<td>
			  		<label>7.- ¿Cómo insertamos un Encabezado y pie de página?  </label>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7"  value="a" checked>
							Insertar-> Encabezado y pie de página 
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7" value="b">
							Ver-> Encabezado y pie de página  
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7" value="c">
							Formato-> Encabezado y pie de página 
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="pregunta7" value="d">
							Herramientas-> Encabezado y pie de página
						</label>
					</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>8.- ¿Cuándo queremos cambiar una palabra por otra, y sabiendo que el texto es extenso, que herramienta nos facilita el trabajo?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8"  value="a" checked>
								Buscar
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="b">
								Reemplazar
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="c">
								Cortar
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta8" value="d">
								Vista preliminar
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>9.- ¿Cuál es la combinación de las teclas para conseguir un cortado?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9"  value="a" checked>
								CTRL + x
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="b">
								MAYUSC + x
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="c">
								CTRL + c
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta9" value="d">
								MAYUSC + c
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>10.- ¿Cuándo reconoce Word que pasamos a un párrafo nuevo?</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10"  value="a" checked>
								Entre una línea y otra automáticamente, ya hay párrafos diferentes
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="b">
								Cuando le damos intro
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="c">
								Cuando le damos tabulador
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta10" value="d">
								Si no hay sangrías en un texto de todas sus líneas se interpretarán como párrafos independientes
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td><label>Sección Excel:</label></td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>11.- El Excel es una aplicación para: </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11"  value="a" checked>
								Una base de datos 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="b">
								Una hoja de cálculo 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="c">
								Un sistema operativo 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta11" value="d">
								Un programa de contabilidad
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>12.-Es una intersección entre una fila y una columna: </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12"  value="a" checked>
								Rango
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12" value="b">
								Celda
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12" value="c">
								Conjunto
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta12" value="d">
								Selección
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>13.- Para cambiar las características de una celda, debo ir a:  </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta13"  value="a" checked>
								Formato => Celda 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta13" value="b">
								Celda => Formato 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta13" value="c">
								Insertar => Formato
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta13" value="d">
								Archivo => Asistente para celdas
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>14.-Cuando voy realizar operaciones en Excel, lo primero que debo escribir es: </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta14"  value="a" checked>
								Un igual 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta14" value="b">
								La celda donde va el resultado
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta14" value="c">
								La función
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta14" value="d">
								El formato del número a salir
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>15.-Formula que permite sumar los valores desde la celda A1 hasta la celda A33: </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta15"  value="a" checked>
								=(A1:A33)
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta15" value="b">
								=SUMA(A1:A33)
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta15" value="c">
								SUMA(A1:A33)
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta15" value="d">
								=SUMA(A1+A33)
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>16.- La opciones de Filtrado y ordenación de datos, se encuentra en:  </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta16"  value="a" checked>
								Datos 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta16" value="b">
								Herramientas 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta16" value="c">
								Formato 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta16" value="d">
								Edición
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>17.- La opción del formulario, ¿para que sirve en el Excel?  </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta17"  value="a" checked>
								Es una ventana donde salen las fórmulas más comunes 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta17" value="b">
								Es una opción para trabajar con bases de datos 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta17" value="c">
								Es el asistente para fórmulas 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta17" value="d">
								Es una ventana para registrarse como usuario en el Excel  
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>18.- En una hoja de Excel, se puede poner Encabezado y pie de página :</label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta18"  value="a" checked>
								Si 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta18" value="b">
								No
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta18" value="c">
								Si, pero o sólo Encabezado o sólo Pie de página 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta18" value="d">
								Solo si el documento se imprimirá en apaisado (horizontal)  
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>19.-  Si un archivo de Excel, sale en dos páginas y lo queremos imprimir todo en un folio, la opción más óptima para operar es: </label>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta19"  value="a" checked>
								Se hace la letra más pequeña 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta19" value="b">
								Se hacen las columnas más pequeñas 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta19" value="c">
								En Archivo->Configurar página se puede controlar esto 
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="pregunta19" value="d">
								En Formato->Formato Condicional se puede controlar esto 
							</label>
						</div>	
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
				  		<label>20.- Si tenemos una hoja de cálculo de Excel con los siguientes valores en las celdas indicadas: </label>
				  			<table class="table table-bordered">
 								<tr class="active">
 									<td></td><td><b>A</b></td><td><b>B</b></td><td><b>C</b></td><td><b>D</b></td><td><b>E</b></td><td><b>F</b></td><td><b>G</b></td>
 								</tr>
 								<tr>
 									<td class="active"><b>1</b></td><td>3</td><td>5</td><td>2</td><td>7</td><td>4</td><td>3</td><td>6</td>
 								</tr>
							</table>

						<div class="form-inline">
							<label> =SUMA(A1:G1) : </label><input  id="pregunta20" class="form-control" type="text" required/>
						</div><br/> 
						<div class="form-inline">
							<label> =SUMA(A1+G1) : </label><input  id="pregunta21" class="form-control" type="text" required/>
						</div><br/> 
						<div class="form-inline">
							<label> =SUMA(A1+C1+F1) : </label><input  id="pregunta22" class="form-control" type="text" required/>
						</div><br/> 
						<div class="form-inline">
							<label> =SUMA(A1:C1+F1)  : </label><input  id="pregunta23" class="form-control" type="text" required/> 
						</div><br/>
						<div class="form-inline">
							<label> =SUMA(A1:E1+G1) : </label><input  id="pregunta24" class="form-control" type="text" required/>
						</div>
							
						
			  		</td>
			  	</tr>

			  	<tr>
			  	<td><input id="BtnOffice" type="submit" value="Guardar" /></td>
			  	</tr>
			</form>
		</table>



  	</body>
</html>