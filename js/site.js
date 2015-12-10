
	jQuery(document).ready(function($) {
	
		 $('#status').delay(1200).fadeOut(600); // will first fade out the loading animation
            $('#preloader').delay(2000).fadeOut(); // will fade out the white DIV that covers the website.
            $('body').delay(2000).css({'overflow':'visible'});
		
		var windowHeight = $(window).height();
		
		$("#header").css("height", windowHeight);
	
		/*
$('#video_background').css("opacity", 1);
		
*/


		
		
		
/*
		var cbpAnimatedHeader = (function() {

		var docElem = document.documentElement,
			header = document.querySelector( '.cbp-af-header' ),
			didScroll = false,
			changeHeaderOn = 300;
	
		function init() {
			window.addEventListener( 'scroll', function( event ) {
				if( !didScroll ) {
					didScroll = true;
					setTimeout( scrollPage, 250 );
				}
			}, false );
		}
	
		function scrollPage() {
			var sy = scrollY();
			if ( sy >= changeHeaderOn ) {
				classie.add( header, 'cbp-af-header-shrink' );
			}
			else {
				classie.remove( header, 'cbp-af-header-shrink' );
			}
			didScroll = false;
		}
	
		function scrollY() {
			return window.pageYOffset || docElem.scrollTop;
		}
	
		init();
	
	})();
*/
		
		
		
		
		

	});

		