Cargar();
//$(".divLang1113").draggable({containment: $(".divLang1113").parent()});
//$(".divLang1113").draggable({containment: $(".divLang1113").parent()});
//$(".divLang1113").draggable({containment: $(".divLang1113").parent()});
//var w2 = $(".divLang1113").width();
//var h2 = $(".divLang1113").height();
//$(".divLang1113").offset({top:h/2-h2/2,left:10});
//alert("sd");
$(function () {
addBString('#divNews543','html','bstrRev1');
addBString('#divNews544','html','bstrRev2');
addBString('#divNews545','html','bstrRev3');

addString('.divNewsOp1','html','strOp1');
addString('.divNewsOp2','html','strOp2');
addString('.divNewsOp3','html','strOp3');

$('#divNews221').click(function () {
	
	$('#divNews543').show();
	$('#divNews544').hide();
	$('#divNews545').hide();
});

$('#divNews222').click(function () {
	$('#divNews543').hide();
	$('#divNews544').show();
	$('#divNews545').hide();
});

$('#divNews223').click(function () {
	$('#divNews543').hide();
	$('#divNews544').hide();
	$('#divNews545').show();
});

$('#divNews543').hide();
$('#divNews544').show();
$('#divNews545').hide();
Descargar();
setLang();

});