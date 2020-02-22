<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
		<title>Tarea PHP</title>
	</head>
	<body>
		<?php foreach($consulta as $datos): ?>
		<h1>Modificar estudiante</h1>
		<br>

		<form name="form1" method="post" action="index.php?accionEstudiante=guardarCambiosEstudiantes">
			<p>Numero: <input type="text" name="txtnumero" readonly value="<?php echo $_REQUEST['numero']; ?>"></p>

			<p>Tipo Documento: 
				<select name="txttipodoc">
					<option value="1">Registro Cívil</option>
					<option value="2">Tarjeta de Identidad</option>
					<option value="3">Cédula</option>
				</select>
			</p>

			<p>Nombre: <input type="text" name="txtnombre" value="<?php echo $datos['nombre'] ?>"></p>

			<p>Fecha de Nacimiento: <input type="text" name="txtf_nacimiento" value="<?php echo $datos['f_nacimiento'] ?>"></p>

			<p><input type="submit" name="btnguardarcambios" value="Guardar"></p>
		</form>
	<?php endforeach; ?>
	</body>
</html>