<?php 
session_destroy();
$_SESSION['logado'] = false;
$_SESSION['logado'] = '';
header("location:index.php");
exit;
?>