<?php session_start();
session_destroy();
header("location:../visitor/login.php");
exit();
 ?>
