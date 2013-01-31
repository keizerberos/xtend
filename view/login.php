<?php	//sleep(rand(1,5));
if (!isset($_GET['set'])){
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-tr.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="utf-8">﻿
<head>
<title>login</title>
<script type="text/javascript" src="../js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.9.2.custom.min.js"></script>
<link type="text/css"	href="../css/ui-darkness/jquery-ui-1.9.2.custom.css" rel="Stylesheet" />

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
		if (xStrings[i].t == 'val')		$(xStrings[i].obj).val(xVars[xStrings[i].n][xLang]);
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
<div class='ui-widget ' id='divLang1112' title="Login">
		<form id="form112" action="post.php" method="POST">
		
			<fieldset>
			<div class="grpsepar ">
				<label id="strUser">User</label><input type="text" name="inputtext" id="inpUser" class="text ui-widget-content ui-state-default ui-corner-all"/>
				<label id="strPass">Password</label><input type="password" id="inpPass" class="text ui-widget-content  ui-state-default ui-corner-all"/>
				<label class="ui-state-error ui-state-error-text" id="strError">Usuario o clave incorrecta</label>
			</div>
			<div id="radio">
				<input type="checkbox" id="radio1" name="radio" /><label for="radio1" id="strRemPas">Recordar contraseña</label>
				
			</div>
			<input type="button" value="Sign In" id="strButIng"/>
			</fieldset>
		</form>
</div>
<input type="button" value="Sign In" id="strButIng2"/>
<input type="button" value="Sign out" id="strButIng3"/>

<input type="button" value="Jorge Tordoya" id="strButIng4"/>
<link type="text/css"	href="css/login.css" rel="Stylesheet" />
<script type="text/javascript" src="js/login.js"></script>

<?php 
if (!isset($_GET['set'])){
	?>
</body>
</html>
	<?php
}
?>