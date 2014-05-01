<?php
require_once 'admin/core/Login.class.php';

$Login = new Login();

$Login->Logout();
header("Location: index.php");
?>
