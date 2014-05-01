<?php
require_once "../core/Login.class.php";

if ( !empty($_POST["submit_login"]) ) {
    $email =  $_POST['email'];
    $pass =  $_POST['pass'];

    $Login = new Login( $email, $pass );

    if($Login->SelectUser()){
        $Login->Create_Session();
        //var_dump($Login->GetStatus());
        //var_dump($_SESSION);
        header("Location: ../../view/encuesta.php");
    } else {
        header( 'Location: ../../index.php?error=true' );
    }
    echo "OK";
} else {
	echo "No Recargar esta Pagina Directamente";
}
?>