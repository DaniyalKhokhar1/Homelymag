(function(api, $) {
	
	// DOCUMENT READY
	$(function() {
		
		// Disable input.
		$('#_customize-input-theblogger_control_font_char_sets_latin').attr('checked', 'checked');
		$('#_customize-input-theblogger_control_font_char_sets_latin').attr('disabled', 'disabled');
		// end.
	});
	// DOCUMENT READY

})(wp.customize, jQuery);