$(document).on('ready',init);

function init () {
	$.post("include/tempo.php",{p:"get"},setPuesto);
}
function setPuesto(request){
	console.log("entro");
	var r = JSON.parse(request);
	var item = "";
	$("#Mpuesto").empty();
	r.forEach(function(i){
		item = "<option value='"+ i['puesto'] +"'>"+i['puesto']+"</option>";
		$("#Mpuesto").append(item);
    });
}

