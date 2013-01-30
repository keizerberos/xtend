
//$("#divLang1112").draggable({containment: $("#divLang1112").parent()});

//$("#divLang1112").dialog();
//$("#divLang1112").attr('position','relative');
addString('#strLogin','html','strLogin');
addString('#strUser','html','strUser');
addString('#strPass','html','strPass');
addString('#strButIng','val','strButIng');
addString('#strButIng2','val','strButIng');
addString('#strButIng3','val','strButOut');
addString('#divLang1112','diag-title','strLogin');
addString('#strRemPas','html','strRemPas');

var rem = Tools.readCookie("rem");
$("#strButIng3").hide();
$("#strButIng4").hide();
$("#strButIng2").show();

//console.log(rem);

	var a331 = Tools.readCookie("us");
	var a332 = Tools.readCookie("pa");
	var nam = Tools.readCookie("nam");
	Cargar();
	$.post("../controller/login.php?task=log",{a21:a331, a12:a332},  function(responseText) {
		Descargar();
		if (responseText != "error"){
			$("#strButIng2").hide();
			$("#strButIng3").show();
			$("#strButIng4").show();
			$("#strButIng4").val(nam);
	//		clearDiv("#divMid");
	//		loadPage("menu.php?set=0",$("#divMid"));
		}
		else{
	//		clearDiv("#divMid");
	//		loadPage("news.php?set=0",$("#divMid"));
		}
	});	

var gn456 = function(){
	var a331 = $("#inpUser").val();
	var a332 = $("#inpPass").val();
	Cargar();
	$.post("../controller/login.php?task=log",{a21:a331, a12:a332},  function(responseText) {
		Descargar();
		if (responseText != "error"){
			//console.log("login Correcto");
			$("#divLang1112").dialog('close');
			
			if($("#radio1:checked").val()=='on'){
				Tools.createCookie("rem","1",356);
				Tools.createCookie("us",a331,356);
				Tools.createCookie("pa",a332,356);
				Tools.createCookie("nam",responseText,356);
				var nam= Tools.readCookie("nam");
				console.log(nam);
				$("#strButIng4").val(nam);
			}
			else{
				Tools.createCookie("rem","-1",2);
				Tools.createCookie("us",a331);
				Tools.createCookie("pa",a332);
				Tools.createCookie("nam",responseText);
				var nam= Tools.readCookie("nam");
				$("#strButIng4").val(nam);
			}
			clearDiv("#divMid");
			loadPage("menu.php?set=0",$("#divMid"));
			$("#inpUser").val("");
			$("#inpPass").val("");
			$("#strButIng2").hide();
			$("#strButIng3").show();
			$("#strButIng4").show();
		}
		else{
			
			$("#inpUser").val("");
			$("#inpPass").val("");
			$("#inpUser").focus();
			$("#strError").show();
		}
	});
};

$("#strError").hide();
$("#strButIng2").button();
$("#strButIng3").button();
$("#strButIng4").button();
//$("#radio").buttonset();
//console.log($("#strButIng2").width());
//$("#strButIng2").offset({top:h/2-$("#strButIng2").height()/2,left:w/2-$("#strButIng2").width()/2});

 $(function() {

 $('#strButIng2').click(function(event) {
	 $("#divLang1112").dialog('open');
       
     }); //close click
 });
 
 $('#strButIng3').click(function(event) {
	Tools.createCookie("rem","-1",-1);
	Tools.createCookie("us","",-1);
	Tools.createCookie("nam","",-1);
	Tools.createCookie("pa","",-1);
	 $("#strButIng3").hide();
	 $("#strButIng4").hide();
	 $("#strButIng2").show();
		clearDiv("#divMid");
		loadPage("news.php?set=0",$("#divMid"));
 });
 
$("#strButIng").button().click(function( event ) {
		gn456();
});

$("#inpUser").keydown(function( event ) {
	$("#strError").hide();
	if (event.which == 13){ 
		gn456();
	}
});

$("#inpPass").keydown(function( event ) {
	$("#strError").hide();
	if (event.which == 13){ 
		gn456();
	}
});	
$("#radio1").keydown(function( event ) {
	$("#strError").hide();
	if (event.which == 13){ 
		gn456();
	}
});	
	 
$("#divLang1112").dialog({
  autoOpen : false,
  width: 'auto',
  modal: true,
  draggable: false,
  resizable: false,
  close: function(event, ui) {
      $(this).hide(); 
      }
  
  });


//$('#form112').jqTransform({imgPath:'jqtransformplugin/img/'});
