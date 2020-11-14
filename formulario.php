<!DOCTYPE html>
<html>
<head>
	<title>MI FORMULARIO</title>
</head>
<body>
	<?php
    	include ("registro.php");
    ?>
	<center>
		<form method="post">
			<table>
				<tr>
					<td>
						<label>NIT</label>
					</td>
					<td>
						<input type="text" name="nit" size="20"/>
					</td>
				</tr>
				<tr>
					<td>
						<label>NOMBRE</label>
					</td>
					<td>
						<input type="text" name="nombre" size="50"/>
					</td>
				</tr>
				<tr>
					<td>
						<label>APELLIDO</label>
					</td>
					<td>
						<input type="text" name="apellido" size="50"/>
					</td>
				</tr>
				<tr>
					<td>
						<label>DIRECCION</label>
					</td>
					<td>
						<input type="text" name="direccion" size="80"/>
					</td>
				</tr>
				<tr>
					<td>
						<label>TELEFONO</label>
					</td>
					<td>
						<input type="number" name="telefono" size="20"/>
					</td>
				</tr>
				<tr>
					<td>
						<label>CORREO</label>
					</td>
					<td>
						<input type="email" name="correo" size="50"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="registro" value="Registrar Cliente"/>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>