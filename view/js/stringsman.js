//$('#strBuscar').button();

Cargar();
$('#btnCreateString').button();


	$('#tabBodyA1 tr').addClass('ui-priority-secondary');
	
	$('#tabBodyA1 tr').hover(
	function () {
		$(this).addClass('ui-state-focus ');
	},
	function () {
		$(this).removeClass('ui-state-focus');
	}
	);
	
	
//	var w21 = $('#tabBodyA1 td:first').width();

//	var w22 = $('#tabBodyA1 td:last').width();
	var a3214675 = $('#tabBodyA1').find('td');
	$(a3214675[0]).width('20%');
	$(a3214675[1]).width('80%');
	var a3214675 = $('#tabHeadA1').find('th');
	$(a3214675[0]).width('20%');
	$(a3214675[1]).width('80%');	
	$('#tabBodyA1').width('162px');
	$('#tabHeadA1').width('162px');
	//$('#tabHeadA1').find('th')[1].width(wA22-3);
	$('#btnAA1Add').click(function (){
		$( "#dialog-form1" ).dialog('open');
		
	});
	
	function updateTips(t) {
		tips.text(t).addClass("ui-state-highlight");
		setTimeout(function() {
			tips.removeClass("ui-state-highlight", 1500);
		}, 500);
	}
	function checkLength(o, n, min, max) {
		if (o.val().length > max || o.val().length < min) {
			o.addClass("ui-state-error");
			updateTips("Length of " + n + " must be between " + min
					+ " and " + max + ".");
			return false;
		} else {
			return true;
		}
	}
	function checkRegexp(o, regexp, n) {
		if (!(regexp.test(o.val()))) {
			o.addClass("ui-state-error");
			updateTips(n);
			return false;
		} else {
			return true;
		}
	}
	var name2 = $("#name2");
	var tips = $(".validateTips");
	var allFields = $([]).add(name2);
	$( "#dialog-form1" ).dialog({
		autoOpen : false,
		height : 'auto',
		width : '200px',
		modal : true,
		resize : false,
		buttons : {
			"Create" : function() {
				var bValid = true;

				allFields.removeClass("ui-state-error");
				
				bValid = bValid
						&& checkLength(name2, "username", 3,
								16);
				
				bValid = bValid
						&& checkRegexp(name2,
								/^[a-z]([0-9a-z_])+$/i,
								"Username may consist of a-z, 0-9, underscores, begin with a letter.");
				// From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
				
				if (bValid) {					
					$(this).dialog("close");
				}
			},
			Cancel : function() {
				$(this).dialog("close");
			}
		},
		close : function() {
			allFields.val("").removeClass("ui-state-error");
		}
	});
	$('#scrollbar1').tinyscrollbar();	
	$('.ui-state-default').hover(
			function(){ $(this).addClass('ui-state-hover'); }, 
			function(){ $(this).removeClass('ui-state-hover');}
		);
		
		$('.ui-state-default').focus(
				function(){ $(this).addClass('ui-state-focus');}
			);
		$('.ui-state-default').blur(			
				function(){ $(this).removeClass('ui-state-focus');}
			);
	Descargar();
var dbStrings = [];
LoadStrings("#tabBodyA1");
function LoadStrings(obj){
	Cargar();
	$dir = '../controller/strings.php?task=load';
	$.getJSON($dir, function(dat) {
			dbStrings = dat;
			
			$.each(dat,function (key,item){
				console.log(item);
				var x6543 = $('<tr><td>'+item['id']+'</td><td>'+item['nam']+'</td></tr>');
				
				x6543.addClass('ui-priority-secondary');
				x6543.hover(
						function () {
							$(this).addClass('ui-state-focus');
							$(this).removeClass('ui-priority-secondary');
						},
						function () {
							$(this).removeClass('ui-state-focus');
							$(this).addClass('ui-priority-secondary');
						}
						);
				x6543.click(function (){
					var a1 = $('#fieldA1 input');
					$(a1[0]).val(item[1]);
					$(a1[1]).val(item[2]);
					$(a1[2]).val(item[3]);
						}
				);
				x6543.appendTo(obj);
			});
			
			Descargar();
		});	
}