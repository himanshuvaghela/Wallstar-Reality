(function($) {
  "use strict";
var $ = jQuery.noConflict();

//Dropdown Menu
jQuery(document).ready(function($){
	$('#top-menu').superfish();
});

//Responsive Menu 
jQuery(document).ready(function($){
	// add select 
	$('<select />').appendTo('nav#header-menu-cont');

	//add options to select
	$('<option />', {
		'selected': 'selected',
		'value' : '',
		'text': 'Select Page...'
	}).appendTo('nav select');

	$('nav#header-menu-cont ul li a').each(function(){
		var target = $(this);

		$('<option />', {
			'value' : target.attr('href'),
			'text': target.text()
		}).appendTo('nav#header-menu-cont select');

	});

//  onclicking 
	$('nav#header-menu-cont').on('change',function(){
		window.location = $(this).find('option:selected').val();
	});
});

//HomePage Flexslider
jQuery(document).ready(function($){
	$('.home-slider').flexslider({
		animation: "fade",
		controlNav: false,
		directionNav: true,
		prevText: "",
		nextText: "",
	});
});

//Gallery Flexslider
jQuery(document).ready(function($){
	$('.post-gal-slider').flexslider({
		animation: "fade",
		controlNav: false,
		directionNav: true,
		prevText: "",
		nextText: "",
	});
});

//Property Slider
jQuery(document).ready(function($){
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 120,
    itemMargin: 0,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
	directionNav: false,
    slideshow: false,
    sync: "#carousel"
  });
});

//HomePage Flexslider 
jQuery(document).ready(function($){
	if(jQuery().selectbox){
		$(".styled-select").selectbox();
	}
});

//Featured Properties Carousel
jQuery(document).ready(function($){
	var featuredcaro = $(".featured-caro");
	featuredcaro.owlCarousel({
		items : 3,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [980,3],
		itemsTablet: [768,2],
		itemsTabletSmall: false,
		itemsMobile : [479,1]
    })
	$(".feature-next").click(function(){
        featuredcaro.trigger('owl.next');
    })
    $(".feature-prev").click(function(){
		featuredcaro.trigger('owl.prev');
    })
}); 

//Latest News Carousel
jQuery(document).ready(function($){
	var newscaro = $(".news-caro");
	newscaro.owlCarousel({
		items : 3,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [980,3],
		itemsTablet: [768,2],
		itemsTabletSmall: false,
		itemsMobile : [479,1]
    })
	$(".news-next").click(function(){
        newscaro.trigger('owl.next');
    })
    $(".news-prev").click(function(){
		newscaro.trigger('owl.prev');
    })
}); 

//Partners
jQuery(document).ready(function($){
	var partcaro = $(".part-caro");
	partcaro.owlCarousel({
		items : 5,
		itemsDesktop : [1199,5],
		itemsDesktopSmall : [980,4],
		itemsTablet: [768,3],
		itemsTabletSmall: false,
		itemsMobile : [479,1]
    })
	$(".part-next").click(function(){
        partcaro.trigger('owl.next');
    })
    $(".part-prev").click(function(){
		partcaro.trigger('owl.prev');
    })
}); 

//Gallery Filter
jQuery(document).ready(function($){
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#galfourgrid').mixitup({
					targetSelector: '.gal-item-four',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap'
				});		
				$('#galthreegrid').mixitup({
					targetSelector: '.gal-item-three',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap'
				});		
				$('#galtwogrid').mixitup({
					targetSelector: '.gal-item-two',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap'
				});		
			},
		};
		
		// Run the show!
		filterList.init();
		
	});	
});

//Fancybox 
jQuery(document).ready(function($){
	$(".zoom-box").fancybox();
});

//Scroll to top 
jQuery(document).ready(function($){
	// hide #back-top first
	$("#back-top").hide();
			
	// fade in #back-top
	$(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('#back-top').fadeIn();
		} else {
			$('#back-top').fadeOut();
		}
	});

	// scroll body to 0px on click
	$('#back-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
			}, 600);
			return false;
		});
	});
});


})(jQuery);