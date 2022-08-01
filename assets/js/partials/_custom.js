//jQuery no-conflict mode
(function( $ ) {

// Preloader
$(window).on('load', function() {
    setTimeout(function(){
        $('#preLoader').fadeOut('slow', function () {

        });
    }, 0);
});

//Animate slide up and down nav dropdowns.
$('.dropdown').on('show.bs.dropdown', function(e) {
	$(this).find('.dropdown-menu').first().stop(true, true).slideDown("fast");
});
$('.dropdown').on('hide.bs.dropdown', function(e) {
	$(this).find('.dropdown-menu').first().stop(true, true).slideUp("fast");
});

//REMOVE TITLE TAG FROM LINK HOVER
$('.nav-link').removeAttr('title');

//TRIGGER SEARCH MODAL
$(".mape-search-modal").click(function(){
    $("#searchModal").modal('show');
});

//FOCUS SEARCH INPUT
$('#searchModal').on('shown.bs.modal', function () {
    $('#searchMape').trigger('focus')
});
//SCROLL TO TOP 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 250) {
        $('#back-up').fadeIn(200); // Fade in the arrow
    } else {
        $('#back-up').fadeOut(200); // Else fade out the arrow
    }
});
$('#back-up').click(function() { // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0 // Scroll to top of body
    }, 0);
});



})( jQuery );