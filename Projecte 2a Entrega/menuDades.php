<?php
	session_start();
	include "includeBD.php";
	include "includes.php";
	include "functions.inc.php";
	if($_REQUEST['dTransportista']){
		header("location: dTransportista.php");
	}
	if($_REQUEST['dVehicles']){
		header("location: dVehicles.php");
	}
	if($_REQUEST['dEncarrecs']){
		header("location: dEncarrecs.php");
	}
?> 
<html>
	<head>
		<title>Dades</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="index.css" media="screen" />
	</head>
	<body>
		<?php include "header.inc.php"; ?>
		<table id="tablas" align="center">
			<form name="mostrarDades" action="menuDades.php" method="post">
				<tr>
					<td>
						<input class="boto" type='submit' name="dTransportista" value="Transportista">
					</td>
				</tr>
				<tr>
					<td>
						<input class="boto" type='submit' name="dVehicles" value="Vehicles">
					</td>
				</tr>
				<tr>
					<td>
						<input class="boto" type='submit' name="dEncarrecs" value="Encarrecs">
					</td>
				</tr>
			</form>
		</table>
	</body>
</html>
