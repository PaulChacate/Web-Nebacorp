<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>::NEBACORP::</title>
	<meta name="description" content="En esta sección podrán contactarce con nosotros."/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1"/>
	<link rel="shortcut icon"  href="oso.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="css/estilos.css"/>
	<link href='http://fonts.googleapis.com/css?family=Patrick+Hand' rel="stylesheet" type="text/css">
     <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn.trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
	<header>
		<h1>
			<a href="acerca.html"><img src="img/logo.jpg" alt="NEBACORP" width="300" height="160"/></a>
		</h1>
		<nav>
			<ul>
				<li><a href="acerca.html">ACERCA</a></li>
				<li><a href="catalogo.html">CATALOGO</a></li>
				<li><a href="merchandising.html">MERCHANDISING</a></li>
				<li><a href="prensa.html">PRENSA</a></li>
				<li class="sin"><a href="contacto.php">CONTACTO</a></li>
			</ul>
		</nav>
	</header>

		<div class="banner">
			Fábrica de peluches para venta, merchandising, souvenirs al por mayor.
		</div>

	<section class="contenedor">
		<article id="telefonos">
			<div id="c_t"><p class="icon-acercaphone" aria-hidden="true" data-icon="&#xe006;"></p></div>
			<p id="t">
			Teléfono: <span>(511) 632-4298</span> &nbsp| &nbsp
			RPC: <span>(51) 988762434</span>
			</p>
		</article>
		<article id="email">
			<div id="c_c"><p class="icon-acercaenvelop" aria-hidden="true" data-icon="&#xe007;"></p></div>
			<p id="e">
			E-mail : <a href="#">ventas@nebacorp.com</a>
			</p>
		</article>
		<article id="facebook">
			<div id="c_f"><a href="https://es-la.facebook.com/industriasnebacorpsrl" target="_blank"><p class="icon-acercafacebook" aria-hidden="true" data-icon="&#xe005;"></p></a></div>
			<p id="f">
			Facebook : <a href="https://es-la.facebook.com/industriasnebacorpsrl" target="_blank">www.facebook.com/industriasnebacorpsrl</a>
			</p>
		</article>
		<p id="text_form">Para cualquier consulta y solicitud de cotizaciones; complete sus datos y se le responderá a la brevedad.</p><br>
		<fieldset>
<?php
///////Configuración/////
$mail_destinatario = 'ventas@nebacorp.com';
///////Fin configuración// 

if (isset ($_POST['enviar'])) {
$headers .= "From: ".$_POST['email']. "";
if ( mail ($mail_destinatario, $_POST['asunto'], "Nombre : ".$_POST['nombre']. " --- Empresa : ".$_POST['empresa']. " --- Teléfono : ".$_POST['telefono']. " --- Asunto : ".stripcslashes ($_POST['asunto'])." --- Consulta : ".stripcslashes ($_POST['mensaje']), $headers )) echo '

Su mensaje a sido enviado correctamente. Gracias por contactar con nosostros

'; 

else echo '

Error al enviar el formulario. Por favor, inténtelo de nuevo mas tarde.

'; } 

echo '
<form action="?" method="post">
<label class="formu_e" for="nombre">Nombre : </label>&nbsp	<input type="text" name="nombre" size="50" maxlength="80" required ><br>
<label class="formu_e" for="email">Empresa : </label>	<input type="text" name="empresa" size="50" maxlength="80" ><br>
<label class="formu_e" for="email">E-mail : </label>&nbsp &nbsp &nbsp	<input type="text" name="email" size="50" maxlength="60" required ><br>
<label class="formu_e" for="telefono">Teléfono : </label>	<input type="text" name="telefono" size="50" maxlength="60" required ><br>
<label class="formu_e" for="asunto">Asunto : </label>&nbsp &nbsp	<input type="text" name="asunto" size="50" maxlength="60" required ><br>
<label class="formu_e" for="mensaje">Consulta : </label><br><textarea name="mensaje" cols="31" rows="5"></textarea> <br>
<label class="formu_e" for="enviar"> <input class="formu_e" type="submit" name="enviar" value="Enviar"></label>
 </form>

 

';
?>
</fieldset>
<br>
	</section>
		<footer>
			<p id="pie">
			<span>INDUSTRIAS NEBACORP S.R.L.</span> © Copyright 2013 | Derechos Reservados
			</p>
		</footer>
</body>
</html>