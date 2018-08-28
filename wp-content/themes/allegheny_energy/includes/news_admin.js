jQuery(document).ready(function($) {
	// Hides both sections initially
	//$('div#news_post, div#news_link').hide();
	
	// Checks if post or link is checked, slides down according section
	function check_post_or_link() {
		if($('input#_cmb2_post_or_link1').is(':checked')) {
			// post
			$('div#news_post').slideDown();
			$('div#news_link').slideUp();

		} else if ($('input#_cmb2_post_or_link2').is(':checked')) {
			// link
			$('div#news_post').slideUp();
			$('div#news_link').slideDown();
		}
	}

	// Checks on input change
	$('input#_cmb2_post_or_link1, input#_cmb2_post_or_link2').on('change', function() {
		check_post_or_link();
	});

	// Checks initally
	check_post_or_link();
});