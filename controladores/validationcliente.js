;
$(document).ready(function(){
	$('#formulario').validate({
		rules:{
			nombre:{
				required:true,
				digits:false,
				minlength:2
			},
			apellido:{
				required:true,
				digits:false,
				minlength:3
			},
			telefono:{
				required:true,
				digits:true,
				minlength:8
			},
			cedula:{
				required:true,
				digits:true,
				minlength:7
			},
			email:{
				required:true,
				digits:false,
				minlength:7
			}
		},
		messages:{
			nombre:{
				minlength: 'Introduzca mas de {0} caracteres'
			},
			apellido:{
				minlength: 'Introduzca mas de {0} caracteres'
			},
			telefono:{
				minlength: 'Introduzca mas de {0} caracteres'
			},
			cedula:{
				minlength: 'Introduzca {0} números'
			},
			email:{
				minlength: 'Introduzca un mínimo {0} caracteres'
			}												
		}
	});
});

