<?php
if (!isset($_GET['set'])){
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-tr.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">?
<head>
<meta charset="utf-8">
<title>Strings Manager</title>
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
<div class='ui-widget ui-corner-all' id='divStringsAA1' >
	<div class='ui-widget-header'>
		Strings
	</div> 
	<div class='ui-widget-content divStringsCC1' >
		
		
		<div id="users-contain" class="ui-widget">
			<ul class="ui-widget icon-collection stmul">
				<li class="stmli ui-state-default ui-corner-all" title="Adicionar"><span class="stmspan ui-icon ui-icon-circle-plus" id="btnAA1Add"></span></li>
				<li class="stmli ui-state-default ui-corner-all" title="Eliminar"><span class="stmspan ui-icon ui-icon-circle-minus"></span></li>
			</ul>
		</div>
		<div><input type="text" class="text324 ui-widget ui-state-active ui-corner-all"/><ul class=stmul><li class="stmli ui-state-default ui-corner-all"><span class="stmspan ui-icon ui-icon-search"></span></li></ul></div>
		<div class=divHeaders>
			<table id="tabHeadA1" class="ui-widget ui-widget-content">
					<thead>
						<tr class="ui-widget-header ">
							<th>Id</th>
							<th>Name</th>
						</tr>
					</thead>
			</table>
		</div>
		
			<div id="divStrings" >				
				<table id="tabBodyA1" class="ui-widget ui-widget-content">
					<tbody>
						<tr><td>1</td><td>strMain</td></tr>
						<tr><td>2</td><td>strMain</td></tr>
						<tr><td>3</td><td>strMain</td></tr>
						<tr><td>4</td><td>strMain</td></tr>
						<tr><td>5</td><td>strMain</td></tr>
						<tr><td>6</td><td>strMain</td></tr>
						<tr><td>7</td><td>strMain</td></tr>
						<tr><td>8</td><td>strMain</td></tr>
						<tr><td>9</td><td>strMain</td></tr>
						<tr><td>10</td><td>strMain</td></tr>
						<tr><td>11</td><td>strMain</td></tr>
						<tr><td>12</td><td>strMain</td></tr>
						<tr><td>13</td><td>strMain</td></tr>
						<tr><td>14</td><td>strMain</td></tr>
						<tr><td>15</td><td>strMain</td></tr>
						<tr><td>16</td><td>strMain</td></tr>
						<tr><td>17</td><td>strMain</td></tr>
						<tr><td>18</td><td>strMain</td></tr>
						<tr><td>19</td><td>strMain</td></tr>
					</tbody>
				</table>
			</div>
		
	</div>
	
</div>
<div id="dialog-form1" title="Create new string">
		<p class="validateTips">All form fields are required.</p>
		<form>
			<fieldset>
				<label for="name2">String</label> <input type="text" name="name2" id="name2" class="text ui-widget-content ui-corner-all" /> 
			</fieldset>
		</form>
	</div>
<link type="text/css"	href="css/stringsman.css" rel="Stylesheet" />
<script type="text/javascript" src="js/stringsman.js"></script>

<?php 
if (!isset($_GET['set'])){
	?>
</body>
</html>
	<?php
}
?>