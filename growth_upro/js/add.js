jQuery(document).ready(function($) { 
	$(document).on('click', '.wpcf7-form-control.wpcf7-submit', function(){
		$( "input[type='radio']:checked" ).each(function(index, element) {
			$('#current_' + element.getAttribute('name')).val(element.getAttribute('value'));
		});
	});
});