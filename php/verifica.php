<?php 
if(!isset($_SESSION))
	session_start();

if(!isset($_SESSION["id_cliente"]))
	header("Location:../index.php");
?>