<?php //sleep(rand(1,5));
if (!isset($_GET['set'])){
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-tr.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="utf-8">﻿
<head>
<title>News</title>
<script type="text/javascript" src="../js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.9.2.custom.min.js"></script>
<link type="text/css"	href="../css/ui-darkness/jquery-ui-1.9.2.custom.css" rel="Stylesheet" />

<link rel="stylesheet" href="jqtransformplugin/jqtransform.css" type="text/css" media="all" />
<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js" ></script>

<style>
body,html{
padding:0px;
margin:0px;	
background:#fff;
height:100%;
}
</style>
</head>
<body>
<?php
}
?>
<div class='ui-widget ui-corner-all divNewsGreat' >
	<div class=''>
	</div>
	<div class='ui-widget ui-widget-content' id="divNews543">
		<h2>Revisi&oacuten 0.0.2</h2>
		<ul>
			<li>Interfaces</li>
			<ul>
				<li>Pantalla principal</li>
				<li>Programado control de reloj </li>
				<li>Programado control de Idiomas</li>
				<li>Programado control de cotizaciones</li>
				<li>Programado Logueo</li>
				<li>Programado "News"</li>
			</ul>
			<li>Base de Datos</li>
			<ul>
				<li>Carga de variables </li>
				<li>Carga de idiomas</li>
				<li>Carga de lenguajes</li>
			</ul>
		</ul>
	</div>
	<div class='ui-widget ui-widget-content' id="divNews544">
	</div>
	<div class='ui-widget ui-widget-content' id="divNews545">
	</div>
</div>
<div class='divNews321'>
	<div class='ui-widget ui-corner-all divLang1113' id="divNews221">
		<div class=''>
			<img src="res/announ.png" width=75px height=75px></img>
		</div>
		<div class='ui-widget ui-widget-header divNewsOp1'>
			Noticias
		</div>
	</div>	
	<div class='ui-widget ui-corner-all divLang1113' id="divNews222">
		<div class=''>
			<img src="res/tips.png" width=75px height=75px></img>
		</div>
		<div class='ui-widget ui-widget-header divNewsOp2'>
			Tips
		</div>
	</div>	
	<div class='ui-widget ui-corner-all divLang1113' id="divNews223">
		<div class=''>
			<img src="res/start.png" width=75px height=75px></img>
		</div>
		<div class='ui-widget ui-widget-header divNewsOp3'>
			¿Como empezar?
		</div>
	</div>	
</div>



<link type="text/css"	href="css/news.css" rel="Stylesheet" />
<script type="text/javascript" src="js/news.js"></script>

<?php 
if (!isset($_GET['set'])){
	?>
</body>
</html>
	<?php
}
?>