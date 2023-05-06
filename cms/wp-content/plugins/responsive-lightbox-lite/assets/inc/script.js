jQuery(function( $ ) {


	if(rllArgs.script === 'venobox') {

	$.each($('a[rel*="'+rllArgs.selector+'"]'), function() {
		var match = $(this).attr('rel').match(new RegExp(rllArgs.selector+'\\[(gallery\\-(?:[\\da-z]{1,4}))\\]', 'ig'));

		if(match !== null) {
			$(this).attr('data-gall', match[0]);
		}
	});
	$('a[rel*="'+rllArgs.selector+'"]').venobox();
		}  else if(rllArgs.script === 'nivo_lightbox') {
			$.each($('a[rel*="'+rllArgs.selector+'"]'), function() {
				var match = $(this).attr('rel').match(new RegExp(rllArgs.selector+'\\[(gallery\\-(?:[\\da-z]{1,4}))\\]', 'ig'));

				if(match !== null) {
					$(this).attr('data-lightbox-gallery', match[0]);
				}
			});

			$('a[rel*="'+rllArgs.selector+'"]').nivoLightbox();
		} 

});