jQuery(document).ready(function() {
	
	$('.menu-btn').click(function() {
		$('.header-inner').toggleClass('show-menu');
	});

	$('header .menu-item-has-children').append('<span class="menu-more"><i class="fas fa-angle-down"></i></span>')

	$("header nav > ul > .menu-item").mouseenter(function() {
        $(this).find('.menu-more').addClass('active');
        $(this).addClass('expanded');
        var subMenuElement = $(this).find('.sub-menu');
        $(subMenuElement).show();

    }).mouseleave(function() {
        $(this).find('.menu-more').removeClass('active');
        $(this).removeClass('expanded');
        var subMenuElement = $(this).find('.sub-menu');
        $(subMenuElement).hide();
	});
	
	$('header .menu-more').click(function(){
		$(this).parent().find('.sub-menu').slideToggle();
	});
	
	$('.header-search .search-switch, .search-close-btn').click(function(){
		$('.search-form-holder').slideToggle();
	});
});















