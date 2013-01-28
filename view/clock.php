<?php //sleep(rand(1,5));
if (!isset($_GET['set'])){
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-tr.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="utf-8">﻿
<head>
<title>Clock</title>
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
<div class='ui-widget ui-widget-overlay ui-corner-all ' id='clock_123123'>
		<label id="clock_label123" class="">00:00</label>
</div>

<link type="text/css"	href="css/clock.css" rel="Stylesheet" />
<script type="text/javascript" src="js/clock.js"></script>

<?php 
if (!isset($_GET['set'])){
	?>
</body>
</html>
	<?php
}
?>