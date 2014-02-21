<?php
	session_start();
	include "includeBD.php";
	include "includes.php";
	include "functions.inc.php";
	if($_REQUEST['aTransportista']){
		header("location: altaTransportista.php");
	}
	if($_REQUEST['aClient']){
		header("location: altaClient.php");
	}
	if($_REQUEST['aVehicle']){
		header("location: altaVehicle.php");
	}
?> 
<html>
	<head>
		<title>Dona d'alta</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="index.css" media="screen" />
	</head>
	<body>
		<?php include "header.inc.php"; ?>
		<table id="tablas" align="center">
			<form name="donaAlta" action="menuAlta.php" method="post">
				<tr>
					<td>
						<input class="boto" type='submit' name="aTransportista" value="Donar d'alta un transportista">
					</td>
				</tr>
				<tr>
					<td>
						<input class="boto" type='submit' name="aClient" value="Donar d'alta un client">
					</td>
				</tr>
				<tr>
					<td>
						<input class="boto" type='submit' name="aVehicle" value="Donar d'alta un vehicle">
					</td>
				</tr>
			</form>
		</table>
	</body>
</html>
 
