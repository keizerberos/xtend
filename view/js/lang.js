Cargar();
//$("#divLang1111").draggable({containment: $("#divLang1111").parent()});
$("#divLang1111").button();
/*
$("#divLang1111").hover(function () {
	$(this).removeClass('ui-widget-overlay');
	},
	function () {	
	$(this).addClass('ui-widget-overlay');
}
);
*/
//$( "selector" ).draggable( "option", "axis", "y" );
addString('#strIdioma','html','strIdioma');
addString('#strSelec','html','strSelec');

//document.getElementById('select1').addEventListener('change', a, true);
//$('#form111').jqTransform({imgPath:'jqtransformplugin/img/'});

var  lan = Tools.readCookie("lan");

xLang = lan==null?1:lan;

$('#select1').change(function(){
//$('#select1').parent('div').find('ul li a').click(function(){
		//alert("fd");
	$("#select1 option:selected").each(function () {
		xLang = $(this).val(); setLang();  
		Tools.createCookie("lan",$(this).val(),356);
		});
});

$dir = '../controller/lang.php?task=load';
$.getJSON($dir, function(dat) {
	//console.log(dat);
	$('#select1').html('');
	$.each(dat,function (key,val){
		if (lan == val.id) $('#select1').append('<option value="'+val.id+'" selected>'+val.name+'</option>'); 
		else $('#select1').append('<option value="'+val.id+'">'+val.name+'</option>');
	});
	setLang();  
});

Descargar();
setLang();