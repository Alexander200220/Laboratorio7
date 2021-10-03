<?php 
include_once 'crud.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Biblioteca Virtual</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<header>
	<div id="navegacion">
		<a href="index.php"><h1><span>Biblioteca </span>Virtual</h1></a>
		<img src="img/logo.png" width="15%" height="15%">
	</div>
</header>

<body>
	<div id="contenedor">
		<br>
		<h2>Todos los libros</h2>
		<br>
		<div>
			<div class="agregar">
				<a href="agregar.php"><strong>Añadir libro</strong></a>
			</div>
			<div>
				<br><br>

				<table width="100%" border="1" cellpadding="15" align="center">
					<tr>
						<td>
							<strong><?php 
							echo "ID"
							?></strong>
						</td>
						<td>
							<strong><?php 
							echo "Titulo"
							?></strong>
						</td>
						<td>
							<strong><?php 
							echo "Autor"
							?></strong>
						</td>
						<td>
							<strong><?php 
							echo "Año"
							?></strong>
						</td>
						<td>
							<strong><?php 
							echo "Especialidad"
							?></strong>
						</td>
						<td>
							<strong><?php 
							echo "Editorial"
							?></strong>
						</td>
						<td>
							<strong><?php 
							echo "URL"
							?></strong>
						</td>
						<td colspan="2"><strong><?php 
								echo "Acciones"
								?></strong>
						</td>
					<tr>
					<?php 
					$res = $MySQLiconn->query("SELECT * FROM data");
					while ($row=$res->fetch_array()) {
					?>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['ti']; ?></td>
						<td><?php echo $row['au']; ?></td>
						<td><?php echo $row['an']; ?></td>
						<td><?php echo $row['es']; ?></td>
						<td><?php echo $row['ed']; ?></td>
						<td class="url"><a href="<?php echo $row['url'];?>"><?php echo $row['url'];?></td></a>
						<td><a href="editar.php?edit=<?php echo $row['id'];?>">Editar</a></td>
						<td><a href="?del=<?php echo $row['id'];?>">Eliminar</a>
						</td>
					</tr>
					<?php
					}
					?>
				</table>
			</div>
		</div>
	
	</div>
</body>
</html>