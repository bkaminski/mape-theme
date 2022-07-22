(function( $ ) {
	$( document ).ready(function() {
		$('.hero--title').waypoint(function() {
			$('.hero--title').addClass('animated fadeInDown');
		}, {
			offset: '100%'
		});
		$('.hero--sub').waypoint(function() {
			$('.hero--sub').addClass('animated fadeInUp');
		}, {
			offset: '100%'
		});
		$('.hero--cta').waypoint(function() {
			$('.hero--cta').addClass('animated fadeInLeft');
		}, {
			offset: '100%'
		});
	});

})( jQuery );