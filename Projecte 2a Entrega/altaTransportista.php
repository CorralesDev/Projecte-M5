<?php
	session_start();
        
	include "includeBD.php";
	include "includes.php";
	include "functions.inc.php";
	
?>
<html>
	<head>
		<title>Alta Transportista</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="index.css" media="screen" />
	</head>
	<body>
		<?php include "header.inc.php"; ?>
		<table class="tablas" align="center">
			<form name="AltaTransportista" action="altaTransportista2.php" method="post">
				<tr>
					<td>Codi del transportista:</td> <td><input name="codi" class="boto" type="text"></td>
				</tr>
				<tr>
					<td>DNI:</td> <td><input name="dni" class="boto" readonly="" type="text"></td>
				</tr>
				<tr>
					<td>Nom:</td> <td><input name="nom" class="boto" type="text"></td>
				</tr>
				<tr>
					<td>Cognoms:</td> <td><input name="cognoms" class="boto" type="text"></td>
				</tr>
				<tr>
					<td>Telefon:</td> <td><input name="telefon" class="boto" type="text"></td>
				</tr>
				<tr>
					<td>Adreça:</td> <td><input name="adreca" class="boto" type="text"></td>
					</tr>
				<tr>
					<td>Població:</td> <td><input name="poblacio" class="boto" type="text"></td>
				</tr>
				<tr>
					<td>Provincia:</td> <td><input name="provincia" class="boto" type="text"></td>
				</tr>
				<tr>
					<td>Codi Postal:</td> <td><input name="codiPostal" class="boto" type="text"></td>
				</tr>
				<tr>
					<td><td><input class="boto" type="submit" name="NouTransportista" value="Donar d'alta"></td></td>
				</tr>
			</form>
		</table>
	</body>
</html>