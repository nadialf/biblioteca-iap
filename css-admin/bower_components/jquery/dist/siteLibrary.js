$(document).ready(function(){
	console.log("Iniciando Sitio");

	$("#formL").validate({		//id en jQuery se especifica anteponiendo #
		rules: {
			library: {
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

	$("#saveL").prop('disabled', 'disabled');

	$("#formL").on('keyup blur', function(){ //Evento cada que se presione una tecla o posición
		if ($("#formL").valid()){
			//Habilitamos
			$("#saveL").prop('disabled', false);
		}else{
			//Deshabilitado
			$("#saveL").prop('disabled', 'disabled');
		}
	});


});