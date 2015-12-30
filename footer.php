<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

</div><!-- END CONTENT -->
</div><!-- END PAGE WRAP -->

<div id="footer" style="background: #fff; padding-top: 6%;">
		<div id="footer-content" class="container-fluid">
		<div class="row">
		  <div class="col-sm-6">
			<!--
<div class="col-sm-12"><a class="social-link" href="poursteady.com/about">About</a>
			</div></br></br>
			
			<div class="col-sm-12"><a class="social-link" href="poursteady.com/news">News</a>
			</div></br></br>
			
			<div class="col-sm-12"><a class="social-link" href="poursteady.com/events">At Your Event</a>
			</div>-->
			
            <div class="row">
			<div class="col-sm-12">Contact Us: <a class="social-link" href="mailto:info@poursteady.com">info@poursteady.com</a>
			</div></br></br>
			
			<div class="col-sm-12">Follow Us: <a class="social-link" href="http://facebook.com/poursteady" target="_blank">Facebook</a>  | <a class="social-link" href="http://twitter.com/poursteadynyc" target="_blank">Twitter</a>
			</div>
			</div>
		  </div>
		  
		   <div class="col-sm-6 footer-form">
		   		<!-- Begin MailChimp Signup Form -->
		   <div id="mc_embed_signup">
			<form action="http://poursteady.us8.list-manage.com/subscribe/post?u=4f8f14bd9d1ea1237182e9269&amp;id=cac7516d97" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<!-- <label for="mce-EMAIL">For Updates:</label> -->
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter e-mail address" required>
			    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;"><input type="text" name="b_4f8f14bd9d1ea1237182e9269_cac7516d97" value=""></div>
				<div class="clear"><input type="submit" value="Join Mailing List" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			</form>
			</div>
			<!--End mc_embed_signup-->
		   
		  </div>
				
		</div><!-- END ROW -->
		
		<div class="row" style="padding: 25px 0;">
			<div class="col-sm-8">
				<p class="footer-bottom-text">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved. &nbsp;&nbsp;&nbsp;&nbsp;<a href="/privacy">Privacy</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/terms">Terms & Conditions</a> </p>
			</div>
			<div class="col-sm-4">
				<p class="footer-credit">Site design and development by <a href="http://partnerandpartners.com" target="_blank">Partner & Partners</a></p>
			</div>
		</div>
		
	</div><!-- END FOOTER CONTAINER -->
	
	<script type="text/javascript">
		$( window ).resize(function() {
			$("#header").css("height", $(window).height() );
		});
	</script>
	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scrollto.js"></script>
	
	
	<script type="text/javascript">
	
	 /*
   $('.menu-item').click(function(e){
	       $('html,body').scrollTo(this.hash, this.hash);
	          
	    });
	    
*/
	     
	  
	  
	  $(document).ready(function() {
	      $('a[href^="#"]').click(function() {
	          var target = $(this.hash);
	          if (target.length == 0) target = $('a[name="' + this.hash.substr(1) + '"]');
	          if (target.length == 0) target = $('html');
	         console.log(target);
		      $('html, body').animate({ scrollTop: ((target.offset().top) - 5) }, 400);
	          return false;
	      });
	      $("li#gotoTop").click(function() {
	      	$('html, body').animate({ scrollTop:0 }, 200);
	      });	      
	  });
	
	         
	    
    
    </script>

	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/site.js"></script>
	
	<?php if ( is_front_page() && is_home() ) { ?>
		<script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
		<script type="text/javascript">
		 
	    var trailerVid = $('#trailer');
	    
	    var trailerVidUrl = $("iframe#ps-video").attr('src');
	   var iframe = $('#ps-video')[0];
	   var player = $f(iframe);
	   
	   $('.trailer-toggle-close').hide();
	   
		
		$('.top-video-btn').click(function () {
		
			$('#trailer').show();
			$('#trailer').delay(3000).css('opacity', 1);
			player.api('play');
			$('.trailer-toggle-close').show();
			$('#video_background').hide();
			
		
		
		});
		
		$('.trailer-toggle-close').click(function () {
			
			player.api('pause');
			$('#trailer').hide();
			$('#video_background').show();
			$('.trailer-toggle-close').hide();
			$('#trailer').css('opacity', 0);
			
		});
		
		
</script>
<?php } ?>

	
	<!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
       /*
 $(window).load(function() { // makes sure the whole site is loaded
            $('#status').delay(1200).fadeOut(600); // will first fade out the loading animation
            $('#preloader').delay(2000).fadeOut(); // will fade out the white DIV that covers the website.
            $('body').delay(2000).css({'overflow':'visible'});
        })
*/
    //]]>
    
    
</script>

	
	
	
	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/dev/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   	
	
	</body>
</html>

