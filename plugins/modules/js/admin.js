
jQuery(document).ready(function($) {
	var container = $('<div class="rain-modules screenshot-container"><img /></div>');
	var screenshotsUrls = RainModules.screenshots;

	$(document).on('mouseenter', 'a[data-layout]', function() {
		var a = this;

		$('img', container).attr('src', '');
		var layout = $(this).attr('data-layout');

		$(this).closest('.acf-fc-popup').append(container);
		$('img', container).attr('src', screenshotsUrls[layout]);

		$(container).show();

		var pos = jQuery(this).position();
	    var width = jQuery(a).outerWidth();

	    jQuery(container).css({
	        position: "absolute",
	        bottom: '0px',
	        right: (pos.left + width) + "px"
	    }).show();
	});

	$(document).on('mouseleave', 'a[data-layout]', function() {
		$('.rain-modules.screenshot-container').remove();
	});
});
