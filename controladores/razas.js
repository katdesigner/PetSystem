
$(document).ready(function(){
	$.ajax({
		url: '../modelos/razas.php',
		success:function(resp){
			resp = $.parseJSON(resp);
			for (var i = 0; i < resp.length; i++) {
				$('#raza').append("<option value="+resp[i].id+">"+resp[i].nombre+"</option>");
			}
		}
	});
});
