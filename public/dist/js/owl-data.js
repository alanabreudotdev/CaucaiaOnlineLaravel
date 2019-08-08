/*Owl Init*/
jQuery(document).ready(function($) {
	"use strict";
	
	/*owl carousel*/
	
	$('#owl_noticias').owlCarousel({
		margin:20,
		autoplay:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},
			800:{
				items:4
			},
			
		}
	});
	
});

