
$(document).ready(function(){
	$.ajax({
		url: '../modelos/mascota_consulta.php',
		success:function(resp){
			resp = $.parseJSON(resp);
			for (var i = 0; i < resp.length; i++) {
				$('#mascota').append("<option value="+resp[i].id+">"+resp[i].nombre+"</option>");
			}
		}
	});
});
