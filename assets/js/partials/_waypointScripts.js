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
		$('.main--title').waypoint(function() {
			$('.main--title').addClass('animated fadeInLeft');
		}, {
			offset: '100%'
		});
		$('.main--text').waypoint(function() {
			$('.main--text').addClass('animated fadeInUp');
		}, {
			offset: '100%'
		});
		$('.home--services').waypoint(function() {
			$('.home--services').addClass('animated fadeInDown');
		}, {
			offset: '100%'
		});
		$('.service--4').waypoint(function() {
			$('.service--4').addClass('animated fadeInLeft');
		}, {
			offset: '100%'
		});
		$('.service--3').waypoint(function() {
			$('.service--3').addClass('animated fadeInLeft');
		}, {
			offset: '100%'
		});
		$('.service--2').waypoint(function() {
			$('.service--2').addClass('animated fadeInLeft');
		}, {
			offset: '100%'
		});
		$('.service--1').waypoint(function() {
			$('.service--1').addClass('animated fadeInLeft');
		}, {
			offset: '100%'
		});
		$('.info--title1').waypoint(function() {
			$('.info--title1').addClass('animated fadeInDown');
		}, {
			offset: '100%'
		});
		$('.info--title2').waypoint(function() {
			$('.info--title2').addClass('animated fadeInDown');
		}, {
			offset: '100%'
		});
		$('.info--area1').waypoint(function() {
			$('.info--area1').addClass('animated fadeInUp');
		}, {
			offset: '100%'
		});
		$('.info--area2').waypoint(function() {
			$('.info--area2').addClass('animated fadeInUp');
		}, {
			offset: '100%'
		});
	});

})( jQuery );