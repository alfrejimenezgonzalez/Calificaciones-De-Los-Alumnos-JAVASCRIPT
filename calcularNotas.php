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
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
				<li><a href="index.php" class="first">Inicio</a></li>
				<li><a href="ejercicio1.php">Ejercicio 1</a></li>
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
				<h2 class="title"><a href="#">Pintar</a></h2>
				
				<div class="entry">
					<p>Resultado del ejercicio 1:
					<!-- *********************************Crea el c—digo aqu’ **************************************-->
					<?php
						$errores = 0;
						$msjError = "";
						if(!isset($_POST["nombre1"]) || $_POST["nombre1"] == "" || strlen($_POST["nombre1"]) > 10) 
							{
								$errores++;
								$msjError .= "El nombre1 no puede estar vacio y debe tener menos de 10 caracteres<br/>";
							}
						if(!isset($_POST["nombre2"]) || $_POST["nombre2"] == "" || strlen($_POST["nombre2"]) > 10) 
							{
								$errores++;
								$msjError .= "El nombre2 no puede estar vacio y debe tener menos de 10 caracteres<br/>";
							}
						if(!isset($_POST["nombre3"]) || $_POST["nombre3"] == "" || strlen($_POST["nombre3"]) > 10) 
							{
								$errores++;
								$msjError .= "El nombre3 no puede estar vacio y debe tener menos de 10 caracteres<br/>";
							}
						if(!isset($_POST["nombre4"]) || $_POST["nombre4"] == "" || strlen($_POST["nombre4"]) > 10) 
							{
								$errores++;
								$msjError .= "El nombre4 no puede estar vacio y debe tener menos de 10 caracteres<br/>";
							}
						if (!isset($_POST["nota1"]) || $_POST["nota1"] == "" || is_numeric($_POST["nota1"]) == false || $_POST["nota1"] < 0) 
							{
								$errores++;
								$msjError .= "La nota1 no puede estar vacia y debe ser un numero positivo<br/>";
							}
						if (!isset($_POST["nota2"]) || $_POST["nota2"] == "" || is_numeric($_POST["nota2"]) == false || $_POST["nota2"] < 0) 
							{
								$errores++;
								$msjError .= "La nota2 no puede estar vacia y debe ser un numero positivo<br/>";
							}
						if (!isset($_POST["nota3"]) || $_POST["nota3"] == "" || is_numeric($_POST["nota3"]) == false || $_POST["nota3"] < 0) 
							{
								$errores++;
								$msjError .= "La nota3 no puede estar vacia y debe ser un numero positivo<br/>";
							}		
						if (!isset($_POST["nota4"]) || $_POST["nota4"] == "" || is_numeric($_POST["nota4"]) == false || $_POST["nota4"] < 0) 
							{
								$errores++;
								$msjError .= "La nota4 no puede estar vacia y debe ser un numero positivo<br/>";
							}
						if (!isset($_POST["notaCorte"]) || $_POST["notaCorte"] == "") 
							{
								$errores++;
								$msjError .= "Hay que seleccionar una nota de corte<br/>";
							}

						if ($errores > 0) 
							{
								echo $msjError;
							}
						else 
							{
								$nombre1 = $_POST["nombre1"];
								$nombre2 = $_POST["nombre2"];
								$nombre3 = $_POST["nombre3"];
								$nombre4 = $_POST["nombre4"];
								$nota1 = $_POST["nota1"];
								$nota2 = $_POST["nota2"];
								$nota3 = $_POST["nota3"];
								$nota4 = $_POST["nota4"];
								$notaCorte = $_POST["notaCorte"];
					
							$datos= array($nombre1 => $nota1,  $nombre2 => $nota2, $nombre3 => $nota3, $nombre4 => $nota4);
							$n= 0;
							$suma=0;
							$notaMenor=10;
							echo "Las notas de los alumnos son: <br/>\n";
							echo "<table border='2'>\n";
							foreach ($datos as $nombre => $nota) 
							{
								echo "<tr><td>" . $nombre . "</td><td>" . $nota . "</td></tr>\n";
								$n++;
								$suma = $suma +$nota;
								if ($nota < $notaMenor) 
								{					
									$notaMenor = $nota;
									$estudiante = $nombre;
								}
							}
				
								echo "</table></br>\n";
								//Calculo la media
								echo "La media es: " . $suma/$n . "<br/>\n";
								//La nota aprobada mas baja y quien la ha sacado
								echo "La nota aprobada mas baja es: " . $notaMenor . " y la ha sacado " . $estudiante . "<br/>\n";
								//La nota de corte y las que son menores que ella así como el total de cuántas son
								echo "La nota de corte es: " . $notaCorte . " y estas son menores que ella: ";
								$todasNotas = array($nota1, $nota2, $nota3, $nota4);
								$ContarNotas = 0;
								for ($b=0; $b < count($todasNotas) ; $b++) 
								{ 
									if ($todasNotas[$b] < $notaCorte) 
									{
										echo $todasNotas[$b].  ", ";
										$ContarNotas++;
									}
								}
							}

					?>
					</p><p><a href="ejercicio1.php">Volver al enunciado del ejercicio 1</a></p>
			</div>
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