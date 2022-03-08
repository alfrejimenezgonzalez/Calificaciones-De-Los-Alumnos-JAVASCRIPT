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
<script type="text/javascript">
	function validar()
	{
		var errores = 0;
		var msjError ="";
		var nota1 = document.getElementById("nota1").value;
		var nota2 = document.getElementById("nota2").value;
		var nota3 = document.getElementById("nota3").value;
		var nota4 = document.getElementById("nota4").value;
		var nombre1 = document.getElementById("nombre1").value;
		var nombre2 = document.getElementById("nombre2").value;
		var nombre3 = document.getElementById("nombre3").value;
		var nombre4 = document.getElementById("nombre4").value;
		document.getElementById("error").innerHTML="";
		var notaCorte = document.getElementById("notaCorte").value;
		if (nombre1 == "" || nombre1.length > 10) 
			{
				errores++;
				msjError += "Debe escribir un nombre1 el cual no puede tener  más de 10 caracteres <br/>\n";
			}
		if (nombre2 == "" || nombre2.length > 10) 
			{
				errores++;
				msjError += "Debe escribir un nombre2 el cual no puede tener  más de 10 caracteres<br/>\n";
			}
		if (nombre3 == "" || nombre3.length > 10) 
			{
				errores++;
				msjError += "Debe escribir un nombre3 el cual no puede tener  más de 10 caracteres<br/>\n";
			}
		if (nombre4 == "" || nombre4.length > 10) 
			{
				errores++;
				msjError += "Debe escribir un nombre4 el cual no puede tener  más de 10 caracteres<br/>\n";
			}
		if (nota1 == "" || isNaN(nota1) || nota1 < 0 || nota1 > 10) 
			{
				errores ++;
				msjError += "La nota1 debe ser un número entero, positivo y debe estar entre el 0 y el 10<br/>\n";
			}
		if (nota2 == "" || isNaN(nota2) || nota2 < 0 || nota2 > 10) 
			{
				errores ++;
				msjError += "La nota2 debe ser un número entero, positivo y debe estar entre el 0 y el 10<br/>\n";
			}
		if (nota3 == "" || isNaN(nota3) || nota3 < 0 || nota3 > 10) 
			{
				errores ++;
				msjError += "La nota3 debe ser un número entero, positivo y debe estar entre el 0 y el 10<br/>\n";
			}
		if (nota4 == "" || isNaN(nota4) || nota4 < 0 || nota4 > 10) 
			{
				errores ++;
				msjError += "La nota4 debe ser un número entero, positivo y debe estar entre el 0 y el 10<br/>\n";
			}
		if (notaCorte == "") 
			{
				errores++;
				msjError += "Debe elegir una Nota de corte <br>\n"
			}
		if (errores > 0) 
			{
				document.getElementById("error").innerHTML = msjError;
				return false;
			}
		else
			{
				return true;
			}


	}

</script>

</head>
<body>
	<div id="logo">
		<h1><a href="#">alfredo</a></h1>
		<p><em>alfredo</em></p>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
				<li><a href="index.php" class="first">Inicio</a></li>
				<li  class="current_page_item"><a href="ejercicio1.php">Ejercicio 1</a></li>
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
		  	<div id="error" style="color:red"></div>
				<h2 class="title"><a href="#">Ejercicio 1 - Calificaciones de los alumnos</a></h2>
				
				<div class="entry">
					<p><center>Introduzca los nombres y calificaciones de algunos alumnos del m&oacute;dulo IMW:</center><br>
					<form method="post" action="calcularNotas.php">
					<table align="center">
						<tr><td align=right>Nombre1 :</td><td><input type="text" id="nombre1" name="nombre1"></td>
							<td align=right>Nota1 :</td><td><input type="text" id="nota1" name="nota1"></td>
						</tr>
						<tr><td align=right>Nombre2 :</td><td><input type="text" id="nombre2" name="nombre2"></td>
							<td align=right>Nota2 :</td><td><input type="text" id="nota2" name="nota2"></td>
						</tr>
						<tr><td align=right>Nombre3 :</td><td><input type="text" id="nombre3" name="nombre3"></td>
							<td align=right>Nota3 :</td><td><input type="text" id="nota3" name="nota3"></td>
						</tr>
						<tr><td align=right>Nombre4 :</td><td><input type="text" id="nombre4" name="nombre4"></td>
							<td align=right>Nota4 :</td><td><input type="text" id="nota4" name="nota4"></td>
						</tr>
						<tr><td></td><td></td><td align=right>Nota de corte :</td>
							<td><select id="notaCorte" name="notaCorte">
								<option value="">Seleccione una nota de corte:</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
							</select>
							</td>
						</tr>
						<tr><td></td><td><input type="submit" value="    Calcular    " id="search-submit" onclick="return validar ()" ></td></tr>
					</table>
					</form>
					</p><p class=azul>Pulse sobre el bot&oacute;n calcular sus notas</p>
			</div>
		  </div>
			<div class="post">
				<strong>Instrucciones</strong>
				<p>
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
				</li>
				<li>
					<h2>Men&uacute; principal</h2>
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="ejercicio1.php">Ejercicio 1</a></li>
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