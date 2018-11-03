$(document).ready(function($) {

	"use strict";
	
	$('#abt-nav').click(function(e){
	   e.preventDefault();
	   hideBurgerMenu();
	   window.location = "#s-abt";
	})
	$('#works-nav').click(function(e){
	   e.preventDefault();
	   hideBurgerMenu();
	   window.location = "#s-works";
	})	
	$('#services-nav').click(function(e){
	   e.preventDefault();
	   hideBurgerMenu();
	   window.location = "#s-services";
	})	
	$('#contact-nav').click(function(e){
	   e.preventDefault();
	   hideBurgerMenu();
	   window.location = "#s-contact";
	})
});

function hideBurgerMenu(){
if( $('body').hasClass('menu-show') ) {
				$('body').removeClass('menu-show');
				$('#colorlib-main-nav > .js-colorlib-nav-toggle').removeClass('show');
			} 
}