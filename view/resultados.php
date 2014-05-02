<?php require_once "../admin/includes/seguridad.php";

 ?>
<!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Resultados</title>
	    <!-- Bootstrap core CSS -->
  	</head>

  	<body>
  		<?php require_once "encuesta.php"; ?>
<div class="container-fluid">
  <div class="row">
  	<!-- menu lateral-->
      <div class="col-sm-3 col-md-2 sidebar">
            <div class="btn-group-vertical">
              	<button type="button" class="btn btn-info" data-id="Supervisor SCADA">Supervisor SCADA</button>
              	<button type="button" class="btn btn-info" data-id="Supervisor de Soporte Tecnico">Supervisor de Soporte Tecnico</button>
 			  	<button type="button" class="btn btn-info" data-id="Ejecutivo de Contabilidad">Ejecutivo de Contabilidad</button>
 			  	<button type="button" class="btn btn-info" data-id="Supervisor de Control de Calidad">Supervisor de Control de Calidad</button>
 			  	<button type="button" class="btn btn-info" data-id="Operador SCADA">Operador SCADA</button>
 			  	<button type="button" class="btn btn-info" data-id="Supervisor de Contrato">Supervisor de Contrato</button>
 			  	<button type="button" class="btn btn-info" data-id="Ejecutivo de Ventas y Desarrollo de Negocios">Ejecutivo de Ventas y Desarrollo de Negocios</button>
 			  	<button type="button" class="btn btn-info" data-id="Ejecutivo de Recursos Humanos">Ejecutivo de Recursos Humanos</button>
 			  	<button type="button" class="btn btn-info" data-id="Adquisiciones y servicios">Adquisiciones y servicios</button>
 			  	<button type="button" class="btn btn-info" data-id="Diseñador Grafico">Diseñador Grafico</button>
 			  	<button type="button" class="btn btn-info" data-id="Supervisor de SSPA">Supervisor de SSPA</button>
 			  	<button type="button" class="btn btn-info" data-id="Programador Junior">Programador Junior</button>
 			  	<button type="button" class="btn btn-info" data-id="Programador Senior">Programador Senior</button>
 			  	<button type="button" class="btn btn-info" data-id="Ingeniero de Campo">Ingeniero de Campo</button>
  			 
   			</div>
      </div>
        <!-- lado derecho -->
          						<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         							<h1 class="page-header">Resultados</h1>        								
                                            <!--tabla de datos-->
												<div id="Tabla">

													<br>
														<table id="TbPrincipal" class="table table-hover">
															<thead>
																<tr>
																	<th>Nombre del Usuario</th>
																	<th>Email</th>
																	<th>Acierto de Puesto</th>
																	<th>Total de Preguntas</th>
																	<th>Acierto de offices</th>
																	<th>Total de preguntas</th>
																	
																</tr>
															</thead>
															<tbody id="TbData">
															</tbody>
														</table>
												</div>
      							</div>
  </div>
  
  	</body>
</html>