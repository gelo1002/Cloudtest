<?php
/* Header NECESARIA para que funcione correctamente la aplicación cuando se esta accediendo desde otro dominio o pagina
* por medio de un ifram
*/
header('P3P:CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');

require_once "../admin/core/Login.class.php";

$Login = new Login();

if( !$Login->GetStatus() ){
	header( "Location: ../index.php" );
}
?>