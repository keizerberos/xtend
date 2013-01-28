
$("#divcotiz123").draggable({containment: $("#divcotiz123").parent()});
//$("#divcotiz123").draggable({containment: $("#divcotiz123").parent(),axis:'x'});

$("#divcotiz123").hover(function () {
	$(this).removeClass('ui-widget-overlay');
	},
	function () {	
	$(this).addClass('ui-widget-overlay');
}
);
addString('#strCotiz','html','strCotiz');
addString('#strUfv','html','strUfv');
addString('#strCompra','html','strCompra');
addString('#strVenta','html','strVenta');


setLang();