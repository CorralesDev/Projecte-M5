<?php
	session_start();
	include "includeBD.php";
	include "includes.php";
	include "functions.inc.php";
	if(isset($_REQUEST['NouEncarrec'])){
		
	}
?>
<html>
	<head>
		<title>Empresa de Transports</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="index.css" media="screen" />
	</head>
	<body>
		<?php include "header.inc.php"; ?>
		<table class="tablas" align="center">
				<form name="crearEncarrec" action="menuEncarrec.php" method="post">
					<tr>
						<td>Codi: </td> <td><input class="boto" type="text"></td>
					</tr>
					<tr>
						<td>Codi del client: </td> <td><input class="boto" type="text"></td>
					</tr>
					<tr>
						<td>Codi del vehicle: </td> <td><input class="boto" type="text"></td>
					</tr>
					<tr>
						<td>Codi del transportista: </td> <td><input class="boto" type="text"></td>
					</tr>
					<tr>
						<td>Data: </td> <td><input class="boto" type="text"></td>
					</tr>
					<tr>
						<td>Destí:</td> <td><input class="boto" type="text"></td>
					</tr>
					<tr>
						<td>Distancia:</td> <td><input class="boto" type="text"></td>
					</tr>
					<tr>
						<td>Data:</td> <td><input class="boto" type="text"></td>
					</tr>
					<tr>
						<td>Despesa:</td> <td><input class="boto" type="text"></td>
					</tr>
					<tr>
						<td>Volum: </td> 
						<td>
							<select class="boto">
								<option>Sense especificar</option>
								<option value="<?php echo $capacitat_Camio ?>" >Camio - 24m3</option>
								<option value="<?php echo $capacitat_Furgoneta ?>" >Furgoneta - 15m3</option>
								<option value="<?php echo $capacitat_Moto ?>">Moto - 0.5m3</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Descripció:</td> <td><textarea id="descripcio" type="textArea"></textarea></td>
					</tr>
					<tr>
						<td><td><input class="boto" type="submit" name="NouEncarrec" value="Crear encarrec"></td></td>
					</tr>
				</form>
		</table>
	</body>
</html>
