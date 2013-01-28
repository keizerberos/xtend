
$("#divSkin21").button();
addString('#strSkin','html','strSkin');
var  skn = Tools.readCookie("skn");
xSkn = skn ;
changeSkin(); 
$('#select654').change(function(){
	$("#select654 option:selected").each(function () {
		xSkn = $(this).val();changeSkin(); 
		Tools.createCookie("skn",$(this).val(),360);
		 
		});
});