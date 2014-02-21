<?php
	session_start();
	
	include "includeClasses.inc.php";
		
?>
<html>
	<head>
		<title>Alta Vehicle</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="index.css" media="screen" />
	</head>
	<body>
		<?php include "header.inc.php"; ?>
		<table class="tablas" align="center">
				<form name="altaVehicle" action="altaVehicle2.php" method="post">
					<tr>
						<td>Codi del vehicle:</td> <td><input name="codi" class="boto" type="text"></td>
					</tr>
					<tr>
						<td>Tipus:</td> 
						<td>
							<select id="tipus" class="boto">
								<option>Sense especificar</option>
								<option value=24 >Camio - 24m3</option>
								<option value=15 >Furgoneta - 15m3</option>
								<option value=0.5 >Moto - 0.5m3</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Capacitat:</td> <td><input id="capacitat" name="capacitat" class="boto" type="text"></td>
					</tr>
					<tr>
						<td>Model:</td> <td><input name="model" class="boto" type="text"></td>
					</tr>
					<tr>
						<td>Color:</td> <td><input name="color" class="boto" type="text"></td>
					</tr>
					<tr>
						<td>Matricula:</td> <td><input name="matricula" class="boto" type="text"></td>
					</tr>
					<tr>
						<td><td><input class="boto" type="submit" name="nouVehicle" value="Donar d'alta"></td></td>
					</tr>
				</form>
		</table>
	</body>
</html>
