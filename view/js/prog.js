
//$(".divLang1113").draggable({containment: $(".divLang1113").parent()});
//$(".divLang1113").draggable({containment: $(".divLang1113").parent()});
//$(".divLang1113").draggable({containment: $(".divLang1113").parent()});
//var w2 = $(".divLang1113").width();
//var h2 = $(".divLang1113").height();
//$(".divLang1113").offset({top:h/2-h2/2,left:10});

var availableTags = [
{label:"transfer",value:{descripcion:"transfer", add:"from",clase:"service",toTag:"midTags",Tag:"availableTags"}},
{label:"transfer bus",value:{descripcion:"transfer bus", add:"from",clase:"service",toTag:"midTags",Tag:"availableTags"}},
{label:"transfer private",value:{descripcion:"transfer private", add:"from",clase:"service",toTag:"midTags",Tag:"availableTags"}}
];

var midTags = [
{label:"from",value:{descripcion:"from",clase:"step",toTag:"typeSitTags",Tag:"midTags"}}
];

var midSiteTags = [
{label:"to",value:{descripcion:"to",clase:"step",toTag:"typeSitTags",Tag:"midSiteTags"}},
{label:":",value:{descripcion:":",clase:"arrows",toTag:"SitTags"}}
];

var typeSitTags = [
{label:"apto",value:{descripcion:"apto",clase:"typesite",toTag:"midSiteTags",Tag:"typeSitTags"}},
{label:"hotel",value:{descripcion:"hotel",clase:"typesite",toTag:"midSiteTags",Tag:"typeSitTags"}}
];


var SitTags = [
{label:"BOA",value:{descripcion:"BOA",clase:"site",toTag:"midSiteTags",Tag:"SitTags"}},
{label:"LAN",value:{descripcion:"LAN",clase:"site",toTag:"midSiteTags",Tag:"SitTags"}},
{label:"europa",value:{descripcion:"europa",clase:"site",toTag:"midSiteTags",Tag:"SitTags"}},
{label:"pres",value:{descripcion:"pres",clase:"site",toTag:"midSiteTags",Tag:"SitTags"}}
];



$(".divSetIn121").autocomplete({
source: availableTags,
minLength: 0,
select: function( event, ui ) {
	var p = ui.item.value;
	$(this).parent().parent().find(':first').append("<div class='" +p.clase + " divSetIn121' >"+ p.descripcion +"<input type='hidden' value='"+p.Tag+"'/><div/>");
	
	if(p.toTag == "availableTags") $(this).autocomplete("option", "source",availableTags);
	if(p.toTag == "midTags") $(this).autocomplete("option", "source",midTags);
	if(p.toTag == "midSiteTags") $(this).autocomplete("option", "source",midSiteTags);
	if(p.toTag == "typeSitTags") $(this).autocomplete("option", "source",typeSitTags);
	if(p.toTag == "SitTags") $(this).autocomplete("option", "source",SitTags);
	$(this).val('');
    event.preventDefault();  	
},
focus: function( event , ui){
    
	var p = ui.item.value;
	$(this).val(" " + p.descripcion);
    event.preventDefault();  	
}
});

$(".divSetIn121").keydown(function (event) {
	if (event.which == 8 && $(this).val()==""){
		var toTag = $(this).parent().parent().find(':first').children().last().find('input').val();
		console.log(toTag);
		if(toTag == "availableTags") $(this).autocomplete("option", "source",availableTags);
		if(toTag == "midTags") $(this).autocomplete("option", "source",midTags);
		if(toTag == "midSiteTags") $(this).autocomplete("option", "source",midSiteTags);
		if(toTag == "typeSitTags") $(this).autocomplete("option", "source",typeSitTags);
		if(toTag == "SitTags") $(this).autocomplete("option", "source",SitTags);
		$(this).parent().parent().find(':first').children().last().remove();
	}

});
$(".divSetIn121").keyup(function (event) {
	var data = $( this ).autocomplete( "option", "source" );
	//console.log(data);
	var search = $(this).val();
	var objthis = $(this);
	//if (event.which == 32 )
	//if (event.which == 32 )
	if (event.which == 32 ){
		$(data).each(function(index, element){
			console.log(data.length);
		    if(element.label.toUpperCase() + " " == search.toUpperCase() ){
		    	var p = element.value;
		    	objthis.parent().parent().find(':first').append("<div class='" +p.clase + " divSetIn121' >"+ p.descripcion +"<input type='hidden' value='"+p.Tag+"'/><div/>");
		    	
		    	if(p.toTag == "availableTags") objthis.autocomplete("option", "source",availableTags);
		    	if(p.toTag == "midTags") objthis.autocomplete("option", "source",midTags);
		    	if(p.toTag == "midSiteTags") objthis.autocomplete("option", "source",midSiteTags);
		    	if(p.toTag == "typeSitTags") objthis.autocomplete("option", "source",typeSitTags);
		    	if(p.toTag == "SitTags") objthis.autocomplete("option", "source",SitTags);
		    	objthis.val('');
		    	objthis.autocomplete('close');
		        //event.preventDefault();  	
		    }
		});
	} 
});