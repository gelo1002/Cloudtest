<?php
require ("config.php");
require ("../admin/core/Login.class.php");
$opcion =$_POST['p'];
switch ($opcion) {
	case 'office':
		$r = comOffice();
		break;
	case 'cleaver':
		$r = cleaver();
		break;
	case 'design':
	 	$r = design();
	break;
	case 'sspa':
	 	$r = sspa();
	break;
	case 'junior':
	 	$r = junior();
	break;
	case 'senior':
	 	$r = senior();
	break;
	case 'supscada':
	 	$r = supscada();
	break;
	case 'sst':
	 	$r = sst();
	break;
	case 'supcont':
	 	$r = supcont();
	break;
	case 'calidad':
	 	$r = calidad();
	break;
	case 'opscada':
	 	$r = opscada();
	break;
	case 'econta':
	 	$r = econta();
	break;
	case 'ventas':
	 	$r = ventas();
	break;
	case 'erh':
	 	$r = erh();
	break;
	case 'adquisicion':
	 	$r = adquisicion();
	break;
	case 'get':
	 	$r = getpuesto();
	break;
	case 'addusers':
	 	$r = addusers();
	break;
	case 'getusers':
	 	$r = getusers();
	break;
	
}
function getusers(){
	$datos = json_decode($_POST['datos'],true);
	$f = array();  
	$q = "SELECT users.idusers,users.nombre,users.user,resultados.id_user,resultados.np_office,resultados.acierto_office,resultados.np_puesto,resultados.acierto_puesto FROM users , resultados WHERE users.idusers= resultados.id_user && users.puesto='".$datos[0]['id']."'";	
	//$q="SELECT * FROM users, resultados WHERE users.idusers=resultados.id_user";
	$r = consulta($q);
	//var_dump($r);
	while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}
	echo json_encode($f);
}

function addusers(){
	$datos = json_decode($_POST['datos'],true);
	$pass=$datos[0]['passwd'];
	$passwd = sha1(md5($pass));
	$q ="INSERT INTO `users`(`nombre`,`puesto`,`user`,`passwd`)VALUES('".$datos[0]['nombre']."','".$datos[0]['puesto']."','".$datos[0]['user']."','".$passwd."')";
	$r = consulta($q);
	echo json_encode($r);
}
function getpuesto(){
	$f = array();  
	$q = "SELECT `id`,`puesto` FROM `puestos` WHERE `puesto`<> 'todos' ";	
	$r = consulta($q);
		while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}
		//$tempo=array("key"=>$f);

		//echo utf8_encode($tempo);
		echo json_encode($f);
		
}
function comOffice(){
	$datos = json_decode($_POST['datos'],true);
	$contador=0;
	$f = array();
	$q= "SELECT `pregunta`,`respuesta` FROM `relacion` WHERE `id_puesto`= '1' ";
	$r = consulta($q);
		while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}

	$row=count($f);	
	for ($i=0; $i <$row ; $i++) { 
		if ("p1" == $f[$i]["pregunta"]) {
			if ($datos[0]['p1']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p2" == $f[$i]["pregunta"]) {
			if ($datos[0]['p2']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p3" == $f[$i]["pregunta"]) {
			if ($datos[0]['p3']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p4" == $f[$i]["pregunta"]) {
			if ($datos[0]['p4']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p5" == $f[$i]["pregunta"]) {
			if ($datos[0]['p5']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p6" == $f[$i]["pregunta"]) {
			if ($datos[0]['p6']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p7" == $f[$i]["pregunta"]) {
			if ($datos[0]['p7']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p8" == $f[$i]["pregunta"]) {
			if ($datos[0]['p8']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p9" == $f[$i]["pregunta"]) {
			if ($datos[0]['p9']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p10" == $f[$i]["pregunta"]) {
			if ($datos[0]['p10']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p11" == $f[$i]["pregunta"]) {
			if ($datos[0]['p11']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p12" == $f[$i]["pregunta"]) {
			if ($datos[0]['p12']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p13" == $f[$i]["pregunta"]) {
			if ($datos[0]['p13']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p14" == $f[$i]["pregunta"]) {
			if ($datos[0]['p14']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p15" == $f[$i]["pregunta"]) {
			if ($datos[0]['p15']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p16" == $f[$i]["pregunta"]) {
			if ($datos[0]['p16']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p17" == $f[$i]["pregunta"]) {
			if ($datos[0]['p17']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p18" == $f[$i]["pregunta"]) {
			if ($datos[0]['p18']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p19" == $f[$i]["pregunta"]) {
			if ($datos[0]['p19']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p20" == $f[$i]["pregunta"]) {
			if ($datos[0]['p20']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p21" == $f[$i]["pregunta"]) {
			if ($datos[0]['p21']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p22" == $f[$i]["pregunta"]) {
			if ($datos[0]['p22']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p23" == $f[$i]["pregunta"]) {
			if ($datos[0]['p23']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p24" == $f[$i]["pregunta"]) {
			if ($datos[0]['p24']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		
	}
	
	$q ="INSERT INTO `tempo`(`acierto`)VALUES('".$contador."')";
	$r = consulta($q);
	echo json_encode($r);
}
function design(){
	$datos = json_decode($_POST['datos'],true);
	$contador=0;
	$f = array();
	$q= "SELECT `pregunta`,`respuesta` FROM `relacion` WHERE `id_puesto`= '11' ";
	$r = consulta($q);
		while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}

	$row=count($f);	
	for ($i=0; $i <$row ; $i++) { 
		if ("p1" == $f[$i]["pregunta"]) {
			if ($datos[0]['p1']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p2" == $f[$i]["pregunta"]) {
			if ($datos[0]['p2']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p3" == $f[$i]["pregunta"]) {
			if ($datos[0]['p3']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p4" == $f[$i]["pregunta"]) {
			if ($datos[0]['p4']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p5" == $f[$i]["pregunta"]) {
			if ($datos[0]['p5']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p6" == $f[$i]["pregunta"]) {
			if ($datos[0]['p6']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p7" == $f[$i]["pregunta"]) {
			if ($datos[0]['p7']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p8" == $f[$i]["pregunta"]) {
			if ($datos[0]['p8']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p9" == $f[$i]["pregunta"]) {
			if ($datos[0]['p9']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p10" == $f[$i]["pregunta"]) {
			if ($datos[0]['p10']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p11" == $f[$i]["pregunta"]) {
			if ($datos[0]['p11']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p12" == $f[$i]["pregunta"]) {
			if ($datos[0]['p12']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p13" == $f[$i]["pregunta"]) {
			if ($datos[0]['p13']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p14" == $f[$i]["pregunta"]) {
			if ($datos[0]['p14']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p15" == $f[$i]["pregunta"]) {
			if ($datos[0]['p15']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p16" == $f[$i]["pregunta"]) {
			if ($datos[0]['p16']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p17" == $f[$i]["pregunta"]) {
			if ($datos[0]['p17']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p18" == $f[$i]["pregunta"]) {
			if ($datos[0]['p18']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p19" == $f[$i]["pregunta"]) {
			if ($datos[0]['p19']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}		
	}

	$q ="INSERT INTO `tempo`(`acierto`)VALUES('".$contador."')";
	$r = consulta($q);
	echo json_encode($r);
}
function sspa(){
	$datos = json_decode($_POST['datos'],true);
	$contador=0;
	$f = array();
	$q= "SELECT `pregunta`,`respuesta` FROM `relacion` WHERE `id_puesto`= '12' ";
	$r = consulta($q);
		while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}

	$row=count($f);	
	for ($i=0; $i <$row ; $i++) { 
		if ("p1" == $f[$i]["pregunta"]) {
			if ($datos[0]['p1']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p2" == $f[$i]["pregunta"]) {
			if ($datos[0]['p2']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p3" == $f[$i]["pregunta"]) {
			if ($datos[0]['p3']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p4" == $f[$i]["pregunta"]) {
			if ($datos[0]['p4']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p5" == $f[$i]["pregunta"]) {
			if ($datos[0]['p5']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p6" == $f[$i]["pregunta"]) {
			if ($datos[0]['p6']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p7" == $f[$i]["pregunta"]) {
			if ($datos[0]['p7']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p8" == $f[$i]["pregunta"]) {
			if ($datos[0]['p8']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p9" == $f[$i]["pregunta"]) {
			if ($datos[0]['p9']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p10" == $f[$i]["pregunta"]) {
			if ($datos[0]['p10']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p11" == $f[$i]["pregunta"]) {
			if ($datos[0]['p11']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}		
	}

	$q ="INSERT INTO `tempo`(`acierto`)VALUES('".$contador."')";
	$r = consulta($q);
	echo json_encode($r);
}
function junior(){
	$datos = json_decode($_POST['datos'],true);
	$contador=0;
	$f = array();
	$q= "SELECT `pregunta`,`respuesta` FROM `relacion` WHERE `id_puesto`= '13' ";
	$r = consulta($q);
		while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}

	$row=count($f);	
	for ($i=0; $i <$row ; $i++) { 
		if ("p1" == $f[$i]["pregunta"]) {
			if ($datos[0]['p1']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p2" == $f[$i]["pregunta"]) {
			if ($datos[0]['p2']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p3" == $f[$i]["pregunta"]) {
			if ($datos[0]['p3']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p4" == $f[$i]["pregunta"]) {
			if ($datos[0]['p4']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p5" == $f[$i]["pregunta"]) {
			if ($datos[0]['p5']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p6" == $f[$i]["pregunta"]) {
			if ($datos[0]['p6']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p7" == $f[$i]["pregunta"]) {
			if ($datos[0]['p7']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p8" == $f[$i]["pregunta"]) {
			if ($datos[0]['p8']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p9" == $f[$i]["pregunta"]) {
			if ($datos[0]['p9']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p10" == $f[$i]["pregunta"]) {
			if ($datos[0]['p10']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p11" == $f[$i]["pregunta"]) {
			if ($datos[0]['p11']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}		
	}

	$q ="INSERT INTO `tempo`(`acierto`)VALUES('".$contador."')";
	$r = consulta($q);
	echo json_encode($r);
}
function senior(){
	$datos = json_decode($_POST['datos'],true);
	$contador=0;
	$f = array();
	$q= "SELECT `pregunta`,`respuesta` FROM `relacion` WHERE `id_puesto`= '14' ";
	$r = consulta($q);
		while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}

	$row=count($f);	
	for ($i=0; $i <$row ; $i++) { 
		if ("p1" == $f[$i]["pregunta"]) {
			if ($datos[0]['p1']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p2" == $f[$i]["pregunta"]) {
			if ($datos[0]['p2']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p3" == $f[$i]["pregunta"]) {
			if ($datos[0]['p3']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p4" == $f[$i]["pregunta"]) {
			if ($datos[0]['p4']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p5" == $f[$i]["pregunta"]) {
			if ($datos[0]['p5']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p6" == $f[$i]["pregunta"]) {
			if ($datos[0]['p6']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p7" == $f[$i]["pregunta"]) {
			if ($datos[0]['p7']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p8" == $f[$i]["pregunta"]) {
			if ($datos[0]['p8']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p9" == $f[$i]["pregunta"]) {
			if ($datos[0]['p9']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p10" == $f[$i]["pregunta"]) {
			if ($datos[0]['p10']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p11" == $f[$i]["pregunta"]) {
			if ($datos[0]['p11']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p12" == $f[$i]["pregunta"]) {
			if ($datos[0]['p12']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p13" == $f[$i]["pregunta"]) {
			if ($datos[0]['p13']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p14" == $f[$i]["pregunta"]) {
			if ($datos[0]['p14']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p15" == $f[$i]["pregunta"]) {
			if ($datos[0]['p15']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}		
	}

	$q ="INSERT INTO `tempo`(`acierto`)VALUES('".$contador."')";
	$r = consulta($q);
	echo json_encode($r);
}
function supscada(){
	$datos = json_decode($_POST['datos'],true);
	$contador=0;
	$f = array();
	$q= "SELECT `pregunta`,`respuesta` FROM `relacion` WHERE `id_puesto`= '2' ";
	$r = consulta($q);
		while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}

	$row=count($f);	
	for ($i=0; $i <$row ; $i++) { 
		if ("p1" == $f[$i]["pregunta"]) {
			if ($datos[0]['p1']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p2" == $f[$i]["pregunta"]) {
			if ($datos[0]['p2']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p3" == $f[$i]["pregunta"]) {
			if ($datos[0]['p3']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p4" == $f[$i]["pregunta"]) {
			if ($datos[0]['p4']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p5" == $f[$i]["pregunta"]) {
			if ($datos[0]['p5']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p6" == $f[$i]["pregunta"]) {
			if ($datos[0]['p6']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p7" == $f[$i]["pregunta"]) {
			if ($datos[0]['p7']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p8" == $f[$i]["pregunta"]) {
			if ($datos[0]['p8']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p9" == $f[$i]["pregunta"]) {
			if ($datos[0]['p9']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p10" == $f[$i]["pregunta"]) {
			if ($datos[0]['p10']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p11" == $f[$i]["pregunta"]) {
			if ($datos[0]['p11']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p12" == $f[$i]["pregunta"]) {
			if ($datos[0]['p12']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}		
	}

	$q ="INSERT INTO `tempo`(`acierto`)VALUES('".$contador."')";
	$r = consulta($q);
	echo json_encode($r);

}
function sst(){
	$datos = json_decode($_POST['datos'],true);
	$contador=0;
	$f = array();
	$q= "SELECT `pregunta`,`respuesta` FROM `relacion` WHERE `id_puesto`= '3' ";
	$r = consulta($q);
		while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}

	$row=count($f);	
	for ($i=0; $i <$row ; $i++) { 
		if ("p1" == $f[$i]["pregunta"]) {
			if ($datos[0]['p1']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p2" == $f[$i]["pregunta"]) {
			if ($datos[0]['p2']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p3" == $f[$i]["pregunta"]) {
			if ($datos[0]['p3']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p4" == $f[$i]["pregunta"]) {
			if ($datos[0]['p4']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p5" == $f[$i]["pregunta"]) {
			if ($datos[0]['p5']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p6" == $f[$i]["pregunta"]) {
			if ($datos[0]['p6']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p7" == $f[$i]["pregunta"]) {
			if ($datos[0]['p7']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p8" == $f[$i]["pregunta"]) {
			if ($datos[0]['p8']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p9" == $f[$i]["pregunta"]) {
			if ($datos[0]['p9']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p10" == $f[$i]["pregunta"]) {
			if ($datos[0]['p10']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p11" == $f[$i]["pregunta"]) {
			if ($datos[0]['p11']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p12" == $f[$i]["pregunta"]) {
			if ($datos[0]['p12']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p13" == $f[$i]["pregunta"]) {
			if ($datos[0]['p13']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p14" == $f[$i]["pregunta"]) {
			if ($datos[0]['p14']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}		
	}

	$q ="INSERT INTO `tempo`(`acierto`)VALUES('".$contador."')";
	$r = consulta($q);
	echo json_encode($r);
}
function supcont(){
	$datos = json_decode($_POST['datos'],true);
	$contador=0;
	$f = array();
	$q= "SELECT `pregunta`,`respuesta` FROM `relacion` WHERE `id_puesto`= '7' ";
	$r = consulta($q);
		while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}

	$row=count($f);	
	for ($i=0; $i <$row ; $i++) { 
		if ("p1" == $f[$i]["pregunta"]) {
			if ($datos[0]['p1']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p2" == $f[$i]["pregunta"]) {
			if ($datos[0]['p2']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p3" == $f[$i]["pregunta"]) {
			if ($datos[0]['p3']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p4" == $f[$i]["pregunta"]) {
			if ($datos[0]['p4']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p5" == $f[$i]["pregunta"]) {
			if ($datos[0]['p5']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p6" == $f[$i]["pregunta"]) {
			if ($datos[0]['p6']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p7" == $f[$i]["pregunta"]) {
			if ($datos[0]['p7']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p8" == $f[$i]["pregunta"]) {
			if ($datos[0]['p8']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p9" == $f[$i]["pregunta"]) {
			if ($datos[0]['p9']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}		
	}

	$q ="INSERT INTO `tempo`(`acierto`)VALUES('".$contador."')";
	$r = consulta($q);
	echo json_encode($r);
}

function calidad(){
	$datos = json_decode($_POST['datos'],true);
	$contador=0;
	$f = array();
	$q= "SELECT `pregunta`,`respuesta` FROM `relacion` WHERE `id_puesto`= '5' ";
	$r = consulta($q);
		while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}

	$row=count($f);	
	for ($i=0; $i <$row ; $i++) { 
		if ("p1" == $f[$i]["pregunta"]) {
			if ($datos[0]['p1']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p2" == $f[$i]["pregunta"]) {
			if ($datos[0]['p2']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p3" == $f[$i]["pregunta"]) {
			if ($datos[0]['p3']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p4" == $f[$i]["pregunta"]) {
			if ($datos[0]['p4']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p5" == $f[$i]["pregunta"]) {
			if ($datos[0]['p5']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p6" == $f[$i]["pregunta"]) {
			if ($datos[0]['p6']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p7" == $f[$i]["pregunta"]) {
			if ($datos[0]['p7']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p8" == $f[$i]["pregunta"]) {
			if ($datos[0]['p8']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p9" == $f[$i]["pregunta"]) {
			if ($datos[0]['p9']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p10" == $f[$i]["pregunta"]) {
			if ($datos[0]['p10']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p11" == $f[$i]["pregunta"]) {
			if ($datos[0]['p11']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p12" == $f[$i]["pregunta"]) {
			if ($datos[0]['p12']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p13" == $f[$i]["pregunta"]) {
			if ($datos[0]['p13']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p14" == $f[$i]["pregunta"]) {
			if ($datos[0]['p14']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p15" == $f[$i]["pregunta"]) {
			if ($datos[0]['p15']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p16" == $f[$i]["pregunta"]) {
			if ($datos[0]['p16']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p17" == $f[$i]["pregunta"]) {
			if ($datos[0]['p17']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p18" == $f[$i]["pregunta"]) {
			if ($datos[0]['p18']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p19" == $f[$i]["pregunta"]) {
			if ($datos[0]['p19']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}		
	}

	$q ="INSERT INTO `tempo`(`acierto`)VALUES('".$contador."')";
	$r = consulta($q);
	echo json_encode($r);
}
function opscada(){
	$datos = json_decode($_POST['datos'],true);
	$contador=0;
	$f = array();
	$q= "SELECT `pregunta`,`respuesta` FROM `relacion` WHERE `id_puesto`= '6' ";
	$r = consulta($q);
		while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}

	$row=count($f);	
	for ($i=0; $i <$row ; $i++) { 
		if ("p1" == $f[$i]["pregunta"]) {
			if ($datos[0]['p1']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p2" == $f[$i]["pregunta"]) {
			if ($datos[0]['p2']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p3" == $f[$i]["pregunta"]) {
			if ($datos[0]['p3']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p4" == $f[$i]["pregunta"]) {
			if ($datos[0]['p4']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p5" == $f[$i]["pregunta"]) {
			if ($datos[0]['p5']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p6" == $f[$i]["pregunta"]) {
			if ($datos[0]['p6']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p7" == $f[$i]["pregunta"]) {
			if ($datos[0]['p7']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p8" == $f[$i]["pregunta"]) {
			if ($datos[0]['p8']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p9" == $f[$i]["pregunta"]) {
			if ($datos[0]['p9']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p10" == $f[$i]["pregunta"]) {
			if ($datos[0]['p10']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}		
	}

	$q ="INSERT INTO `tempo`(`acierto`)VALUES('".$contador."')";
	$r = consulta($q);
	echo json_encode($r);
}
function econta(){
	$datos = json_decode($_POST['datos'],true);
	$contador=0;
	$f = array();
	$q= "SELECT `pregunta`,`respuesta` FROM `relacion` WHERE `id_puesto`= '4' ";
	$r = consulta($q);
		while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}

	$row=count($f);	
	for ($i=0; $i <$row ; $i++) { 
		if ("p1" == $f[$i]["pregunta"]) {
			if ($datos[0]['p1']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p2" == $f[$i]["pregunta"]) {
			if ($datos[0]['p2']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p3" == $f[$i]["pregunta"]) {
			if ($datos[0]['p3']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p4" == $f[$i]["pregunta"]) {
			if ($datos[0]['p4']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p5" == $f[$i]["pregunta"]) {
			if ($datos[0]['p5']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p6" == $f[$i]["pregunta"]) {
			if ($datos[0]['p6']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p7" == $f[$i]["pregunta"]) {
			if ($datos[0]['p7']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p8" == $f[$i]["pregunta"]) {
			if ($datos[0]['p8']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}		
	}

	$q ="INSERT INTO `tempo`(`acierto`)VALUES('".$contador."')";
	$r = consulta($q);
	echo json_encode($r);
}
function ventas(){
	$datos = json_decode($_POST['datos'],true);
	$contador=0;
	$f = array();
	$q= "SELECT `pregunta`,`respuesta` FROM `relacion` WHERE `id_puesto`= '8' ";
	$r = consulta($q);
		while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}

	$row=count($f);	
	for ($i=0; $i <$row ; $i++) { 
		if ("p1" == $f[$i]["pregunta"]) {
			if ($datos[0]['p1']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p2" == $f[$i]["pregunta"]) {
			if ($datos[0]['p2']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p3" == $f[$i]["pregunta"]) {
			if ($datos[0]['p3']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p4" == $f[$i]["pregunta"]) {
			if ($datos[0]['p4']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p5" == $f[$i]["pregunta"]) {
			if ($datos[0]['p5']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p6" == $f[$i]["pregunta"]) {
			if ($datos[0]['p6']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p7" == $f[$i]["pregunta"]) {
			if ($datos[0]['p7']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p8" == $f[$i]["pregunta"]) {
			if ($datos[0]['p8']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p9" == $f[$i]["pregunta"]) {
			if ($datos[0]['p9']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p10" == $f[$i]["pregunta"]) {
			if ($datos[0]['p10']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p11" == $f[$i]["pregunta"]) {
			if ($datos[0]['p11']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p12" == $f[$i]["pregunta"]) {
			if ($datos[0]['p12']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}		
	}

	$q ="INSERT INTO `tempo`(`acierto`)VALUES('".$contador."')";
	$r = consulta($q);
	echo json_encode($r);
}
function erh(){
	$datos = json_decode($_POST['datos'],true);
	$contador=0;
	$f = array();
	$q= "SELECT `pregunta`,`respuesta` FROM `relacion` WHERE `id_puesto`= '9' ";
	$r = consulta($q);
		while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}

	$row=count($f);	
	for ($i=0; $i <$row ; $i++) { 
		if ("p1" == $f[$i]["pregunta"]) {
			if ($datos[0]['p1']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p2" == $f[$i]["pregunta"]) {
			if ($datos[0]['p2']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p3" == $f[$i]["pregunta"]) {
			if ($datos[0]['p3']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p4" == $f[$i]["pregunta"]) {
			if ($datos[0]['p4']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p5" == $f[$i]["pregunta"]) {
			if ($datos[0]['p5']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p6" == $f[$i]["pregunta"]) {
			if ($datos[0]['p6']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p7" == $f[$i]["pregunta"]) {
			if ($datos[0]['p7']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p8" == $f[$i]["pregunta"]) {
			if ($datos[0]['p8']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p9" == $f[$i]["pregunta"]) {
			if ($datos[0]['p9']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p10" == $f[$i]["pregunta"]) {
			if ($datos[0]['p10']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}		
	}

	$q ="INSERT INTO `tempo`(`acierto`)VALUES('".$contador."')";
	$r = consulta($q);
	echo json_encode($r);
}

function adquisicion(){
	$datos = json_decode($_POST['datos'],true);
	$contador=0;
	$f = array();
	$q= "SELECT `pregunta`,`respuesta` FROM `relacion` WHERE `id_puesto`= '10' ";
	$r = consulta($q);
		while ( $i = $r['q']->fetch_array(MYSQLI_ASSOC)) {
			array_push($f, $i);
		}

	$row=count($f);	
	for ($i=0; $i <$row ; $i++) { 
		if ("p1" == $f[$i]["pregunta"]) {
			if ($datos[0]['p1']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p2" == $f[$i]["pregunta"]) {
			if ($datos[0]['p2']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p3" == $f[$i]["pregunta"]) {
			if ($datos[0]['p3']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p4" == $f[$i]["pregunta"]) {
			if ($datos[0]['p4']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p5" == $f[$i]["pregunta"]) {
			if ($datos[0]['p5']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p6" == $f[$i]["pregunta"]) {
			if ($datos[0]['p6']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p7" == $f[$i]["pregunta"]) {
			if ($datos[0]['p7']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p8" == $f[$i]["pregunta"]) {
			if ($datos[0]['p8']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p9" == $f[$i]["pregunta"]) {
			if ($datos[0]['p9']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}
		if ("p10" == $f[$i]["pregunta"]) {
			if ($datos[0]['p10']==$f[$i]["respuesta"]) {
				$contador++;
			}
		}		
	}

	$q ="INSERT INTO `tempo`(`acierto`)VALUES('".$contador."')";
	$r = consulta($q);
	echo json_encode($r);
}
function cleaver(){
	//$datos = json_decode($_POST['cleaver'],true);
	//$user=array();
	$Login = new Login();
	$user = $Login->GetStatus();
	var_dump($user["id"]);
	$MD=0; $MI=0; $MS=0; $MC=0;
	$LD=0; $LI=0; $LS=0; $LC=$user["id"];


	$q ="INSERT INTO `cleaver`(`md`,`mi`,`ms`,`mc`,`ld`,`li`,`ls`,`lc`)VALUES('".$MD."','".$MI."','".$MS."','".$MC."','".$LD."','".$LI."','".$LS."','".$LC."')";
	$r = consulta($q);

	echo json_encode($r);
}

function consulta($q){

	$r = array();
	try{
		$c =new  mysqli(HOST, USUARIO, PASSBD, DB);
		$r['q'] = $c->query($q);			
		$c->close();
	}
	catch (Exception $e){
		$r['q'] = null;
		$r['msg'] = "Error de conexión, contacte al administrador";
	}		
	
	return $r;
}


