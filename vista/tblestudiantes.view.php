<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
		<title>Tarea PHP</title>
	</head>
	<body>

		<h1>Nuevo estudiante</h1>

		<form name="formestudiante" method="post" action="index.php?accionEstudiante=guardarEstudiante">
			<p>Numero: <input type="text" name="txtnumero"></p>

			<p>Tipo Documento: 
				<select name="txttipodoc">
					<option value="1">Registro Cívil</option>
					<option value="2">Tarjeta de Identidad</option>
					<option value="3">Cédula</option>
				</select>
			</p>

			<p>Nombre: <input type="text" name="txtnombre"></p>

			<p>Fecha de Nacimiento: <input type="text" name="txtf_nacimiento"></p>

			<p><input type="submit" name="btnguardarestudiante" value="Guardar"></p>
		</form>

		<br>

		<table>
			<thead>
				<tr>
					<th>Tipo Documento</th>
					<th>Número</th>
					<th>Nombre</th>
					<th>Fecha Nacimiento</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($consulta as $datos): ?>
					<tr>
						<td><?php echo $datos['tipodoc']; ?></td>
						<td><?php echo $datos['numero']; ?></td>
						<td><?php echo $datos['nombre']; ?></td>
						<td><?php echo $datos['f_nacimiento']; ?></td>
						<td><a href="index.php?accionEstudiante=modificar&numero=<?php echo $datos['numero']; ?>">Modificar</a></td>
						<td><a href="index.php?accionEstudiante=eliminar&numero=<?php echo $datos['numero']; ?>">Eliminar</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>