<?php require_once "../admin/includes/seguridad.php";

 ?>
<!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Bienvenido</title>
	    <!-- Bootstrap core CSS -->
	    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="../bootstrap/css/default.css" rel="stylesheet">
	    <link href="../bootstrap/css/dashboard.css" rel="stylesheet">
  	</head>

  	<body>
  		<!--Menu-->
	    <div class="navbar navbar-inverse navbar-fixed-top" id="header">
	      <div class="container">
	        <div class="navbar-brand">
	          <a  href="encuesta.html">
	          	CloudTest
	          </a>
	        </div>
	      </div>
	    </div>
	    <!--SubMenu-->
	    <div class="breadposi">
		 		<ol class="breadcrumb">
		 			<?php 
							if ($_SESSION["puesto"]=="Supervisor SCADA") {
					?>
						<li id="encuesta2"><a href="sup_scada.php">Supervisor SCADA</a></li>
					<?php
						 	}	
		 			?>
		  			<?php 
							if ($_SESSION["puesto"]=="Supervisor de Soporte Tecnico") {
					?>
						<li id="encuesta3"><a href="sup_sop_tec.php">Supervisor de Soporte Tecnico</a></li>
					<?php
						 	}	
		 			?>
		 			<?php 
							if ($_SESSION["puesto"]=="Ejecutivo de Contabilidad") {
					?>
						<li id="encuesta4"><a href="ejecutivo_con.php">Ejecutivo de Contabilidad</a></li>
					<?php
						 	}	
		 			?>
		 			<?php 
							if ($_SESSION["puesto"]=="Supervisor de Control de Calidad") {
					?>
						<li id="encuesta5"><a href="sup_con_cal.php">Supervisor de Control de Calidad</a></li>
					<?php
						 	}	
		 			?>
		 			<?php 
							if ($_SESSION["puesto"]=="Operador SCADA") {
					?>
						<li id="encuesta6"><a href="op_scada.php">Operador SCADA</a></li>
					<?php
						 	}	
		 			?>
		 			<?php 
							if ($_SESSION["puesto"]=="Supervisor de Contrato") {
					?>
						<li id="encuesta7"><a href="sup_cont.php">Supervisor de Contrato</a></li>
					<?php
						 	}	
		 			?>
		 			<?php 
							if ($_SESSION["puesto"]=="Ejecutivo de Ventas y Desarrollo de Negocios") {
					?>
						<li id="encuesta8"><a href="eje_ven.php">Ejecutivo de Ventas y Desarrollo de Negocios</a></li>
					<?php
						 	}	
		 			?>
		 			<?php 
							if ($_SESSION["puesto"]=="Ejecutivo de Recursos Humanos") {
					?>
						<li id="encuesta9"><a href="eje_rh.php">Ejecutivo de Recursos Humanos</a></li>
					<?php
						 	}	
		 			?>
		 			<?php 
							if ($_SESSION["puesto"]=="Adquisiciones y servicios") {
					?>
						<li id="encuesta10"><a href="adquisiciones.php">Adquisiciones y servicios</a></li>
					<?php
						 	}	
		 			?>
		 			<?php 
							if ($_SESSION["puesto"]=="Diseñador Grafico") {
					?>
						<li id="encuesta11"><a href="design.php">Diseñador Grafico</a></li>
					<?php
						 	}	
		 			?>
		 			<?php 
							if ($_SESSION["puesto"]=="Supervisor de SSPA") {
					?>
						<li id="encuesta12"><a href="sspa.php">Supervisor de SSPA</a></li>
					<?php
						 	}	
		 			?>
		 			<?php 
							if ($_SESSION["puesto"]=="Programador Junior") {
					?>
						<li id="encuesta13"><a href="pj.php">Programador Junior</a></li>
					<?php
						 	}	
		 			?>
		 			<?php 
							if ($_SESSION["puesto"]=="Programador Senior") {
					?>
						<li id="encuesta14"><a href="ps.php">Programador Senior</a></li>
					<?php
						 	}	
		 			?>


		  			<li id="office"><a href="office.php">office</a></li>
				  	<li id="ingles"><a>ingles</a></li>
				  	<li id="cleaver"><a href="cleaver.php">Cleaver</a></li>
				  	<li id="resultado"><a href="resultados.php">resultado</a></li>
				  	<li id="salida"><a href="../logout.php">Salir</a></li>
				</ol>
	    </div>



	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	    <script src="../bootstrap/js/bootstrap.min.js"></script>
	    <script src="../js/init.js"></script>
  	</body>
</html>
