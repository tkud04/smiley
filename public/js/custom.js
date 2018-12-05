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
	var abtImages = ["orig/img-14.jpg","slider/xmas-1.jpg","slider/xmas-2.jpg"];
	var abtCounter = 0;
	
	var abtImgInterval = setInterval(function(){
	   ++abtCounter; if(abtCounter >= abtImages.length) abtCounter = 0;
	   var uu = "url('images/" + abtImages[abtCounter] +"')";
	   $('#about-imgg').css("background-image",uu);
	},2000)
});

function hideBurgerMenu(){
if( $('body').hasClass('menu-show') ) {
				$('body').removeClass('menu-show');
				$('#colorlib-main-nav > .js-colorlib-nav-toggle').removeClass('show');
			} 
}