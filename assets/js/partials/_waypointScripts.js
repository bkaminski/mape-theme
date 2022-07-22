(function( $ ) {
	$( document ).ready(function() {
		$('.beer-header, .cider-header').waypoint(function() {
			$('.beer-header, .cider-header').find('img').addClass('animated fadeInDown');
		}, {
			offset: '100%'
		});
	});

})( jQuery );