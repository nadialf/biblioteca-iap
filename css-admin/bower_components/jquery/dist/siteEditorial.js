$(document).ready(function(){
	console.log("Iniciando Sitio");

	$("#formE").validate({		//id en jQuery se especifica anteponiendo #
		rules: {
			editorial: {
				required: true,
				alphas: true
			}
			//edad: {
			//	required: true,
			//	numbers: true
			//}
		},

		/*messages: {
			nombre: "Ingrese su nombre.",
			edad: "Ingrese su edad."
		},*/

		submitHandler: function(form){
			form.submit();
		},

		highlight: function(element){
			$(element).parent().removeClass('has-success').addClass('has-error'); 
		},

		success: function(element){
			$(element).parent().removeClass('has-error').addClass('has-success'); 
		}
	});

	jQuery.validator.addMethod("alphas", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^[a-zA-Z áéíóúàèìòùñäëïöü ÁÉÍÓÚÀÈÌÒÙÑÄËÏÖÜ\-\.\s]+$/.test( value );
}, 'Sólo caracteres.');

	jQuery.validator.addMethod("numbers", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^[1-9]+$/.test( value );
}, 'Sólo números.');

	$("#saveE").prop('disabled', 'disabled');

	$("#formE").on('keyup blur', function(){ //Evento cada que se presione una tecla o posición
		if ($("#formE").valid()){
			//Habilitamos
			$("#saveE").prop('disabled', false);
		}else{
			//Deshabilitado
			$("#saveE").prop('disabled', 'disabled');
		}
	});


});