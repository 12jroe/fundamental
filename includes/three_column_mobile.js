//this code makes 3 main div order different depending upon mobile vs desktop.
(function($) { //using this outer function since built-in wordpress jquery does not allow $ sign otherwise. See http://codex.wordpress.org/Function_Reference/wp_enqueue_script for details. 
	$( document ).ready(function() {
		if ($(window).width() <= 991) {
			$('#content').insertBefore($('#content').prev('#left-primary-sidebar'));
		}
		$(window).on('resize', function(){
		    if ($(window).width() <= 991) {
				$('#content').insertBefore($('#content').prev('#left-primary-sidebar'));
			}
			if ($(window).width() > 991) {
				$('#left-primary-sidebar').insertBefore($('#left-primary-sidebar').prev('#content'));
			}
		});
	});
})(jQuery);