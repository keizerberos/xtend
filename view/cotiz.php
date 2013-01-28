<?php //sleep(rand(1,5));
if (!isset($_GET['set'])){
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-tr.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="utf-8">﻿
<head>
<title>Cotiz</title>
<script type="text/javascript" src="../js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.9.2.custom.min.js"></script>
<link type="text/css"	href="../css/ui-darkness/jquery-ui-1.9.2.custom.css" rel="Stylesheet" />
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
<div class='ui-widget ui-widget-overlay ui-corner-all' id='divcotiz123'>
	<!-- <div class='ui-widget-header ui-dialog-titlebar' id="strCotiz" >Cotizaci&oacuten
	</div> -->
	<div class='ui-widget-content '>
		<div class=' lab123' id="strUfv"> UFV </div><div class='ui-state-default ui-corner-all lab123'>1.74724</div>
		<div  class=' lab123' id="strCompra"> Compra</div><div class='ui-state-default ui-corner-all lab123'>6.96</div>
		<div class=' lab123' id="strVenta"> Venta </div><div class='ui-state-default ui-corner-all lab123'>6.86</div>
		 
	</div>
</div>

<link type="text/css"	href="css/cotiz.css" rel="Stylesheet" />
<script type="text/javascript" src="js/cotiz.js"></script>

<?php 
if (!isset($_GET['set'])){
	?>
</body>
</html>
	<?php
}
?>