<?php
	session_start();
	
	include "includeBD.php";
	include "includes.php";
	include "functions.inc.php";
	include "validacions.inc.php";
                
?>
<html>
	<head>
		<title>Crear Encarrec</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="index.css" media="screen" />
	</head>
	<body>
		<?php include "header.inc.php"; ?>
		<table class="tablas" align="center">
			<form name="crearEncarrec" action="crearEncarrec2.php" method="post">
				<tr>
					<td>Data:</td> <td><input name="data" class="boto" type="text"></td>
				</tr>
				<tr>
					<td>Distancia:</td> <td><input name="distancia" class="boto" type="text"></td>
				</tr>
				<tr>
					<td>Nom Client:</td> <td><input name="nomClient" class="boto" type="text"></td>
				</tr>
				<tr>
					<td>Volum:</td> <td><input name="volum" class="boto" type="text"></td>
				</tr>
				<tr>
					<td>Descripcio:</td> <td><input name="descripcio" class="boto" type="text"></td>
				</tr>
				<tr>
					<td>Desti:</td> <td><input name="desti" class="boto" type="text"></td>
				</tr>
				<tr>
					<td>Despesa:</td> <td><input name="despesa" class="boto" type="text"></td>
				</tr>
                                <tr>
					<td>Codi Transportista:</td> <td><input name="codiTransportista" class="boto" type="text"></td>
				</tr>
                                <tr>
					<td><td><input class="boto" type="submit" name="nouEncarrec" value="Crear"></td></td>
				</tr>
			</form>
		</table>
	</body>
</html>