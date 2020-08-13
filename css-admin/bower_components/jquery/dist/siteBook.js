$(document).ready(function(){
	console.log("Iniciando Sitio");

	$("#formB").validate({		//id en jQuery se especifica anteponiendo #
		rules: {
			folio: {
				required: true,
				alphasDigits: true
			},
			title: {
				required: true,
				all: true
			},
			author: {
				required: true
			},
			number: {
				digits: true
			},
			editorial: {
				required: true
			},
			year: {
				digits: true
			},
			place: {
				alphas: true
			},
			genre: {
				required: true
			},
			language: {
				required: true,
				alphas: true
			},
			pages: {
				required: true,
				digits: true
			},
			description: {
				all: true
			},
			classification: {
				required: true,
				alphasDigitsSpace: true
			},
			notes: {
				all: true
			},
			copy: {
				required: true,
				digits: true
			},
			library: {
				required: true
			},
			collection: {
				required: true
			},
			institute: {
				required: true
			},
			userfile: {
				required: false
			}
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
  return this.optional( element ) || /^[a-zA-Z áéíóúàèìòùñäëïöü ÁÉÍÓÚÀÈÌÒÙÑÄËÏÖÜ\s]+$/.test( value );
}, 'Sólo caracteres.');

	jQuery.validator.addMethod("digits", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^[0-9]+$/.test( value );
}, 'Sólo dígitos.');

	jQuery.validator.addMethod("alphasDigits", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^[0-9A-Z]+$/.test( value );
}, 'Mayúsculas y dígitos sin espacios.');

	jQuery.validator.addMethod("alphasDigitsSpace", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^[0-9A-Z\.\s]+$/.test( value );
}, 'Mayúsculas, dígitos y espacios.');

	jQuery.validator.addMethod("all", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^[0-9 a-z A-Z áéíóúàèìòùñäëïöü ÁÉÍÓÚÀÈÌÒÙÑÄËÏÖÜ\-\_\)\(\.\,\;\:\s]+$/.test( value );
}, 'Caracteres, dígitos y espacios.');

	$("#saveB").prop('disabled', 'disabled');

	$("#formB").on('keyup blur', function(){ //Evento cada que se presione una tecla o posición
		if ($("#formB").valid()){
			//Habilitamos
			$("#saveB").prop('disabled', false);
		}else{
			//Deshabilitado
			$("#saveB").prop('disabled', 'disabled');
		}
	});


});