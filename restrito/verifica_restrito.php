<?php 
if(!isset($_SESSION))
	session_start();

if(!isset($_SESSION["id_super"]))
	header("Location:admin.php");
?>