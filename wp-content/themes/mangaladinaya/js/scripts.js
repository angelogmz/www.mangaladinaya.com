$(document).ready(function(){

	var windowH = $( window ).height();
	var windowW = $( window ).width();
	var headerH = $( 'header' ).outerHeight();
	
	$('.cat-single-item,.page-content').css({'margin-top': headerH});

			
	$('.owl-carousel').owlCarousel({
	autoplay:true,
	center: true,
	loop:true,
	autoplayTimeout:5000,
	paginationSpeed : 400,
	items:5,
	margin:-1,
	nav:true,
	smartSpeed:450,
	dots: false,
	autoplayHoverPause:true,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true
        }
    }
	}); 	
	
	$('.owl-carousel-2').owlCarousel({
	
	paginationSpeed : 400,
	items:4,
	margin: 20,
	nav:false,
	smartSpeed:450,
	dots: true,
	autoplay:true,
	loop:true,
	autoplayTimeout:4000,
	autoplayHoverPause:true,
	responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
	}); 
	

	/* $('#main-banner').height(windowH); */
	
	if(windowW > 760){
		
		
		
	
		
	$('#top-main-nav > nav > ul > li').hover(function () {
	if ($('> ul.sub-menu',this).length > 0) {
	$('> ul.sub-menu',this).stop().slideDown('medium');
	}
	},function () {
	if ($('> ul.sub-menu',this).length > 0) {
		$('> ul.sub-menu',this).stop().slideUp('medium');
	}
	});
	
	
	$('.home .parallax-window').height(windowH);

	}	
	
	//if(windowW < 760){
		$('#top-main-nav > nav > ul > li.menu-item-has-children').prepend('<span class="arrow-ex"><i class="fas fa-chevron-down"></i></span>');
	//}
	
	$( ".arrow-ex" ).click(function () {
	$('.sub-menu').slideToggle('medium');
	});
	
	
	
/* 		$("#taskOption").prepend("<option selected='selected'>Select your need</option>"); 
	

	function fetch(){
		
		$.post('/mangaladinaya/wp-admin/admin-ajax.php', {'action' : 'my_posts'}, function (response){
		$('#result-block').prepend(response);
			
			
		});
	}

	$( "#taskOption" ).change(function() {
	var cc = $('select[name=taskOption]').val();
	var name = $('select#taskOption:selected').text();
	document.cookie = "var1="+cc;
	lid = $('.item-parent:first-child').attr("data-cat");
	$(".ft-all-link").attr("href", "/category/"+lid);
	});
	
	
	
	
	$('#taskOption option').each(function () {
	var $this = $(this);
	$this.on("click", function () {
	console.log($(this).data('name'));
	$(".ft-all-link").attr("href", "/category/"+ $(this).data('name'));
	});
	}); 
	

	
	$(function () {
	$( "#fetchbtn" ).click(function () {
	$(".ft-all-link").removeClass('hidden');	
	$('.results').remove();
	fetch();
	});
	});
	

	$("select[name=taskOption] option:last").remove();
*/	
	
	$( '#menu-btn' ).click(function() {
	$(this).toggleClass('menu-open');
	$( '#main-menu' ).fadeToggle();
	});

	
	
	$('#cat-search-loc').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              //window.location = url; // redirect
			  console.log(url);
          }
          return false;
	});
	  

	$( "#cat-filter-submit" ).click(function( event ) {
	event.preventDefault();
	var curUrl = window.location.href;
	curUrl = curUrl.split('?')[0];
	curUrl = curUrl.split('/page')[0];
	
	var catLoc = $('#cat-search-loc').find(":selected").val();
	//var newURLString = curUrl + "/?tag=" + catLoc;

	window.location.href = catLoc;    // The page will redirect instantly 
	// after this assignment

	
	});


	
});

$(document).scroll(function () {
	var windowH = $( window ).height();
	var windowW = $( window ).width();
	var headerH = $( 'header' ).outerHeight();
	
	var scrpc = $(this).scrollTop();
	$('.parallax-window').css({'transform': 'translateY('+scrpc/4+'px)'});
	
	
	
	if( $(this).scrollTop() > 10 ) {
		$('header').addClass('minimized');
		} else {
		$('header').removeClass('minimized');
	}
	if(windowW > 1024){	
		$('.parallax-min').css({'top': scrpc/30+'px'});
	}
	
});

