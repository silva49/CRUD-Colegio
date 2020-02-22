<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
		<title>Tarea PHP</title>
	</head>
	<body>

		<h1>Nuevo documento</h1>

		<form name="formdocumento" method="post" action="index.php?accion=guardarDocumento">
			<p>Nombre: <input type="text" name="txtnombredocumento"></p>

			<p><input type="submit" name="btnguardardocumento" value="Guardar"></p>
		</form>

		<br>

		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre documento</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($consulta as $datos): ?>
					<tr>
						<td><?php echo $datos['idtipo']; ?></td>
						<td><?php echo $datos['nombre']; ?></td>
						<td><a href="index.php?accion=modificar&id=<?php echo $datos['idtipo']; ?>">Modificar</a></td>
						<td><a href="index.php?accion=eliminar&id=<?php echo $datos['idtipo']; ?>">Eliminar</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>