<?php
	//Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["consultar"])){
    	//Validamos lo datos ingresados en el formulario
        if (strlen($_POST['nit']) >= 1){
        	//Asignamos los datos del formulario a variables locales
        	$nit = $_POST['nit'];
        	//Definimos la consulta sql y la ejecutamos
            $sql = "select nit_cliente, nombre, apellido, direccion, telefono, correo from almacen.cliente where nit_cliente = '$nit'";
            $resultado = mysqli_query($conexion, $sql);
            //Validamos el resultado de la consulta
            if(!$resultado){
            	echo'<script type="text/javascript">
					alert("El nit ingresado no existe");
	                window.location.href="consultaCliente.php";
	                </script>';
            } else {
            	?>
            	<!DOCTYPE html>
            	<html>
            	<head>
            		<meta charset="utf-8">
            		<title>CONSULTA DE CLIENTES</title>
            	</head>
            	<body style="background-color: lightgreen">
            		<center>
            			<img src="./Imagenes/banner.jpg" width="600px" height="150px">
						<h1>CONSULTA DE CLIENTE</h1>
            			<table cellspacing="10px" style="margin-top: 20px" border="1">
							<tr>
								<td>
									<label>Nit</label>
								</td>
								<td>
									<label>Nombre</label>
								</td>
								<td>
									<label>Apellido</label>
								</td>
								<td>
									<label>Direccion</label>
								</td>
								<td>
									<label>Telefono</label>
								</td>
								<td>
									<label>Correo</label>
								</td>
							</tr>
							<?php
								while($resultSet = mysqli_fetch_array($resultado)){
							?>
							<tr>
								<td><?php echo $resultSet['nit_cliente'] ?></td>
								<td><?php echo $resultSet['nombre'] ?></td>
								<td><?php echo $resultSet['apellido'] ?></td>
								<td><?php echo $resultSet['direccion'] ?></td>
								<td><?php echo $resultSet['telefono'] ?></td>
								<td><?php echo $resultSet['correo'] ?></td>
							</tr>
							<?php
								}
							?>
						</table>
            		</center>
            	</body>
            	</html>
            	<?php
            }
        }
    }
?>