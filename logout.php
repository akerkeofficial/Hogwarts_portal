<?php 
$_SESSION['login']=null;
$_SESSION['password']=null;
session_destroy();
header("Location:index.php"); 
?>