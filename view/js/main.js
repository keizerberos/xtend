var xVars = null;
var xStrings = [];
var xLoadStr = [];
var isLoadStr = false;
var xLang = 1;
var Loads = 0;
var MaxLoads = 1;
var idLoader;
w = $(window).width();
h = $(window).height();


loadVars();
$(document).ready(function() {
	$('</div> <div class="loading ui-widget-content" ><img src="res/loading.gif" width="35px" height="35px"><div id="progressbar"></div><label id="strLoad" >Cargando</label><label class=labcounter></label></div>').appendTo('body');
	$('.loading').dialog(  {
	  //dialogClass: 'alert', 
	  autoOpen : false,
	  width: 'auto',
	  height: '50',
	  //modal: true,
	  draggable: false,
	 // my: "left bottom", at: "left bottom", of: $(window), 
	  resizable: false, 
	  close: function(event, ui) {
	      $(this).hide();
	      }
	  }).siblings('.ui-dialog-titlebar').remove();
	loadPage("clock.php?set=0",$("#divBot"));
	loadPage("login.php?set=0",$("#divBar"));
	loadPage("lang.php?set=0",$("#divBar"));
	loadPage("cotiz.php?set=0",$("#divRight"));
	loadPage("skin.php?set=0",$("#divBot"));
	//loadPage("news.php?set=0",$("#divMid"));

//	loadPage("prog.php?set=0",$("#divMid"));
	addString('title','html','strMain');
	/*addString('#strLoad','html','strLoad');
	$('.divMov').sortable({
		connectWith : ".divMov",
		items : ".divMov"
	});
	*/
});

function loadVars() {
	
	$dir = '../controller/vars.php?task=load';
	$.getJSON($dir, function(dat) {
			xVars = dat;	
			setLang();
		});
	}

function Cargando(){
	if (MaxLoads < Loads) MaxLoads = Loads;
	
	var prog = Math.round((1- Loads/MaxLoads)*100);
	$(".labcounter").html(prog +"%");
	//$(".labcounter").html((MaxLoads-Loads)+"/"+MaxLoads);
	 $( "#progressbar" ).progressbar({
		 value: prog
		 });
	 
	if (Loads == 0){
		MaxLoads = 1;
		var a65422 = setInterval(function (){$(".loading").dialog('close'); clearInterval(a65422);},500);
		clearInterval(idLoader);
	}
	
	if (xLoadStr.length > 0){
		if (!isLoadStr){
			//console.log(xLoadStr.length);
			var obj = xStrings[xLoadStr[xLoadStr.length-1].num].obj;
			var typ = xStrings[xLoadStr[xLoadStr.length-1].num].t;
			isLoadStr = true;
			$.post("../controller/vars.php?task=bstring&n="+ xStrings[xLoadStr[xLoadStr.length-1].num].n +"&l="+xLang, function(dat) {
				//console.log(dat);
				Descargar();
				isLoadStr = false;
				xLoadStr.pop();
				if (typ == 'html')	$(obj).html(dat);
				if (typ == 'text')	$(obj).text(dat);
				if (typ == 'val')	$(obj).val(dat);
				if (typ == 'diag-title')	$(obj).dialog( "option", "title", dat );
			});
		} 
	}
}

function Cargar(){ 
	Loads++;
	if (Loads == 1) {
		$(".loading").dialog( "option", "position", { my: "center", at: "left bottom", of: $('body')} );
		$(".loading").dialog('open'); 
		idLoader = setInterval(Cargando,100);
	}
}
function Descargar(){ Loads--;}

function loadPage(page,to) {
	//$(to).append('<div class="loading"><img src="res/loading.gif" width="40px" height="40px"></div>');
	
	
	Cargar();
	$.post(page, function(responseText) {
		$(to).append(responseText);
		Descargar();
	});
}

function addString(obj,t,n){
	var o = [];
	o.obj = obj;
	o.t = t;
	o.n = n;
	o.b = 0;
	xStrings.push(o);
}

function addBString(obj,t,n){
	var o = [];
	o.obj = obj;
	o.t = t;
	o.n = n;
	o.b = 1;
	xStrings.push(o);
}

function addLoadStr(num){
	var o = [];
	o.num = num;
	xLoadStr.push(o);
}

function setLang(){
	if(xVars!=null)
	for(i=0;i<xStrings.length;i++){
		if (xStrings[i].b == 0){
			if (xStrings[i].t == 'html')	$(xStrings[i].obj).html(xVars[xStrings[i].n][xLang]);
			if (xStrings[i].t == 'text')	$(xStrings[i].obj).text(xVars[xStrings[i].n][xLang]);
			if (xStrings[i].t == 'val')	$(xStrings[i].obj).val(xVars[xStrings[i].n][xLang]);
			if (xStrings[i].t == 'diag-title')	$(xStrings[i].obj).dialog( "option", "title", xVars[xStrings[i].n][xLang] );		
		}
		else {
			var obj = xStrings[i].obj;
			var typ = xStrings[i].t;
			
			Cargar();
			
			addLoadStr(i);
			/*
			$.post("../controller/vars.php?task=bstring&n="+ xStrings[i].n +"&l="+xLang, function(dat) {
				//console.log(dat);
				Descargar();
				if (typ == 'html')	$(obj).html(dat);
				if (typ == 'text')	$(obj).text(dat);
				if (typ == 'val')	$(obj).val(dat);
				if (typ == 'diag-title')	$(obj).dialog( "option", "title", dat );
			})*/;
		}
	}
}

function changeSkin(){
	
	switch(parseInt(xSkn)){
		case 1: 
			document.getElementById("links1").href = "../css/cupertino/jquery-ui-1.9.2.custom.css"; break;
		case 2: 
			document.getElementById("links1").href = "../css/excite-bike/jquery-ui-1.9.2.custom.css"; break;
		case 3: 
			document.getElementById("links1").href = "../css/redmond/jquery-ui-1.9.2.custom.css"; break;
		case 4:
			document.getElementById("links1").href = "../css/blitzer/jquery-ui-1.9.2.custom.css"; break;
		case 5: 
			document.getElementById("links1").href = "../css/sunny/jquery-ui-1.9.2.custom.css"; break;
		case 6: 
			document.getElementById("links1").href = "../css/dark-hive/jquery-ui-1.9.2.custom.css"; break;
		case 7: 
			document.getElementById("links1").href = "../css/black-tie/jquery-ui-1.9.2.custom.css"; break;
		case 8: 
			document.getElementById("links1").href = "../css/trontastic/jquery-ui-1.9.2.custom.css"; break;
		case 9: 
			document.getElementById("links1").href = "../css/smoothness/jquery-ui-1.9.2.custom.css"; break;
		case 10: 
			document.getElementById("links1").href = "../css/ui-lightness/jquery-ui-1.9.2.custom.css"; break;
		case 11: 
			document.getElementById("links1").href = "../css/ui-darkness/jquery-ui-1.9.2.custom.css"; break;
		default:
			document.getElementById("links1").href = "../css/blitzer/jquery-ui-1.9.2.custom.css"; break;
	}
}

function clearDiv(obj){
	$(obj).empty();
}

function encode_utf8( s )
{
  return unescape( encodeURIComponent( s ) );
}

function decode_utf8( s )
{
  return decodeURIComponent( escape( s ) );
}