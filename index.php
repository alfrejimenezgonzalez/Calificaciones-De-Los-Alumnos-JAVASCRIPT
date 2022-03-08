<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Familiar 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20091206

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Examen de PHP</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="logo">
		<h1><a href="#">IMW - inform&aacute;tica</a></h1>
		<p><em>examen de PHP</em></p>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="index.php" class="first">Inicio</a></li>
				<li><a href="ejercicio1.php">Ejercicio 1</a></li>
				<li><a href="ejercicio2.php">Ejercicio 2</a></li>
			</ul>
		</div>
		<!-- end #menu -->
		<div id="search">
			<form method="get" action="">
				<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
				<input type="submit" id="search-submit" value="Buscar" />
				</fieldset>
			</form>
		</div>
		<!-- end #search -->
	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="page">
		<div id="content">
		  <div class="post">
			<p>
			Instrucciones
En este proyecto se realizo:

Cuando se puñsa el botón calcular la página se redirigirá a calcularNotas.php con la información introducida en el formulario
En la página calcularNotas.php se comprobará que los valores recibidos cumplen lo siguiente:


Las notas son valores enteros positivos
Los nombres no pueden tener más de 10 caracteres.
La nota de corte debe ser una lista desplegable y un número del 4 al 8.
En el caso de que los valores obtenidos no sean correctos, se mostrará un mensaje específico indicando detalladamente TODOS los valores incorrectos del formulario. Tanto en Javascript como en el PHP. 
Si los valores son correctos se introducirán en un array asociativo.


A continuación el script debe mostrar lo siguiente en pantalla:
Las notas de los alumnos en una tabla (array asociativo), indicando la nota y el nombre del alumno
La media de las notas de los alumnos 
La nota aprobada más baja del aula, y el alumno que la ha obtenido 
La cantidad de notas menores que la nota de corte y el listado de estas notas 


Por utltimo tiene comprobaciones javascrit que  validan correctamente no con funciones para arrays, solo tiene estructuras repetitivas.
				</p>
			</div>
		</div><!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>Examen PHP</h2>
					<p>Examen de PHP realizado para los alumnos del CFGS - <strong>Administraci&oacute;n de Sistemas Inform&aacute;ticos y Redes</strong>. M&oacute;dulo: <strong>Implantaci&oacute;n de aplicaciones inform&aacute;ticas</strong>.</p>
				</li>
				<li>
					<h2>Men&uacute; principal</h2>
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="ejercicio1.php">Ejercicio 1</a></li>
						<li><a href="ejercicio1.php">Ejercicio 2</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
	<div id="footer">
		<p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
	<!-- end #footer -->
</body>
</html>

				<div class="entry">