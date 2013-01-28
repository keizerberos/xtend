
//$("#clock_123123").draggable({containment: $("#clock_123123").parent()});
var w231 = 	$("#clock_label123").width();
var of12= $("#clock_label123").offset();
var t321 = of12.top;
//$("#clock_123123").offset({top:t321,left:w/2-w231/2});
$("#clock_123123").button(
);

var points432= ":";
function myClock(){
	var d = new Date();

	var curr_hour = d.getHours();
	var curr_min = d.getMinutes();
	points432 = points432==":"?" ":":";
	
	$("#clock_123123").find("label").text(curr_hour + points432 + pad(curr_min,2));
}

function pad(number, length) {
	   
    var str = '' + number;
    while (str.length < length) {
        str = '0' + str;
    }
   
    return str;

}

setInterval(myClock,1000);