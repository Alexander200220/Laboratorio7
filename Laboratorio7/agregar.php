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
		<h2>Añadir Libro</h2>
		<br>
		<div class="agregar">
			<a href="index.php"><strong>Regresar al inicio</strong></a>
		</div>
			<div>
				<div id="form">
					<form method="post">
						<table width="100%" border="1px" cellpadding="15">
						<tr>
						<td>
							<input type="text" name="ti" placeholder="Titulo" value="<?php if(isset($_GET['edit'])) echo $getROW['ti'];?>">
						</td>
						</tr>

						<tr>
						<td>
							<input type="text" name="au" placeholder="Autor" value="<?php if(isset($_GET['edit'])) echo $getROW['au'];?>">
						</td>
						</tr>

						<tr>
						<td>
							<input type="text" name="an" placeholder="Año" value="<?php if(isset($_GET['edit'])) echo $getROW['an'];?>">
						</td>
						</tr>

						<tr>
						<td>
							<input type="text" name="es" placeholder="Especialidad" value="<?php if(isset($_GET['edit'])) echo $getROW['es'];?>">
						</td>
						</tr>

						<tr>
						<td>
								<input type="text" name="ed" placeholder="Editorial" value="<?php if(isset($_GET['edit'])) echo $getROW['ed'];?>">
						</td>
						</tr>

						<tr>
						<td>
								<input type="text" name="url" placeholder="URL" value="<?php if(isset($_GET['edit'])) echo $getROW['url'];?>">
						</td>
						</tr>

						<tr>
							<td>
								<?php
								if (isset($_GET['edit'])) {
									?>
									<button type="submit" name="update">Editar</button>
									<?php
								}else{
									?>
									<button type="submit" name="save">Registrar</button>
									<?php
								}
								?>
							</td>
						</tr>
					</form>
				</div>
			</div>
	</div>
</body>
</html>