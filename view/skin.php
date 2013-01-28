<?php //sleep(rand(1,5));
if (!isset($_GET['set'])){
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-tr.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">﻿
<head>
<meta charset="utf-8">
<title>Lenguage</title>
<script type="text/javascript" src="../js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.9.2.custom.min.js"></script>
<link type="text/css"	href="../css/ui-darkness/jquery-ui-1.9.2.custom.css" rel="Stylesheet" />

<link rel="stylesheet" href="jqtransformplugin/jqtransform.css" type="text/css" media="all" />
<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js" ></script>

<script type="text/javascript">
	
var xVars = null;
var xStrings = [];
var xLang = 3;
loadVars();
	
function loadVars() {
	
	$dir = '../controller/vars.php?task=load';
	$.getJSON($dir, function(dat) {
		xVars = dat;	
		console.log(dat);
		setLang();
	});
}

function addString(obj,t,n){
	var o = [];
	o.obj = obj;
	o.t = t;
	o.n = n;
	xStrings.push(o);
}

function setLang(){
	if(xVars!=null)
	for(i=0;i<xStrings.length;i++){
		if (xStrings[i].t == 'html')	$(xStrings[i].obj).html(xVars[xStrings[i].n][xLang]);
		if (xStrings[i].t == 'text')	$(xStrings[i].obj).text(xVars[xStrings[i].n][xLang]);
		if (xStrings[i].t == 'val')	$(xStrings[i].obj).val(xVars[xStrings[i].n][xLang]);
	}
}
</script>
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
<div class='ui-widget ui-corner-all' id='divSkin21' >
	<!-- <div class='ui-widget-content'> -->
		<form id="form1154" action="post.php" method="POST">
				<label id="strSkin">Skin</label>
				<select id="select654" class="text ui-widget-content ui-corner-all">
					<option id="opt1" value="1">Cupertino</option>
					<option id="opt1" value="2">Excite-bike</option>
					<option id="opt1" value="3">Redmond</option>
					<option id="opt1" value="4">Blitzer</option>
					<option id="opt1" value="5">Sunny</option>
					<option id="opt1" value="6">Dark-hive</option>
					<option id="opt1" value="7">Black-tie</option>
					<option id="opt1" value="8">Trontastic</option>
					<option id="opt1" value="9">Smoothness</option>
					<option id="opt1" value="10">Ui-lightness</option>
					<option id="opt1" value="11">Ui-darkness</option>
				</select>
			
		</form>
	<!-- </div> -->
</div>

<link type="text/css"	href="css/skin.css" rel="Stylesheet" />
<script type="text/javascript" src="js/skin.js"></script>

<?php 
if (!isset($_GET['set'])){
	?>
</body>
</html>
	<?php
}
?>