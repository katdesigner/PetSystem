
$(document).ready(function(){
	$.ajax({
		url: '../modelos/veterinarios.php',
		success:function(resp){
			resp = $.parseJSON(resp);
			for (var i = 0; i < resp.length; i++) {
				$('#veterinario').append("<option value="+resp[i].id+">"+resp[i].nombre+"</option>");
			}
		}
	});
});
