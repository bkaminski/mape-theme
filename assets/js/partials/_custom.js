//jQuery no-conflict mode
(function( $ ) {

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



})( jQuery );