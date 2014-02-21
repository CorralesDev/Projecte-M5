<?php
	session_start();
	include "includeBD.php";
	include "includes.php";
	include "functions.inc.php";
	if($_REQUEST['menuDades']){
		header("location: menuDades.php");
	}
	if($_REQUEST['menuAlta']){
		header("location: menuAlta.php");
	}
	if($_REQUEST['menuTransportista']){
		header("location: menuTransportista.php");
	}
	if($_REQUEST['menuEncarrec']){
		header("location: crearEncarrec.php");
	}
	if($_REQUEST['home']){
		header("location: index.php");
	}
?>

<html>
	<head>
		<title>Empresa de Transports</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="index.css" media="screen" />
	</head>
	<body>
		<?php include 'header.inc.php'; ?>
		<div class="footBanner"></div>
	</body>
</html>