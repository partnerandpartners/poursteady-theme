<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 */
?><!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<!--
<link rel="stylesheet" href="royalslider/royalslider.css">
		<link rel="stylesheet" href="royalslider/skins/default/rs-default.css">
		<script src="royalslider/jquery.royalslider.min.js"></script>
-->
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ps-styles.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/1409-ASUUQS.css">
		<link rel="stylesheet" href="//f.fontdeck.com/s/css/ztizLcpXY96pMPqC/s/lM7UN2Ro/poursteady.com/44235.css" type="text/css" />
		
		
		<!--
<link rel="stylesheet/less" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/less/bootstrap.less" />
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/less-1.7.5.min.js" type="text/javascript"></script>
-->
		
		 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		
		

	<!--
	../../bootstrap/dist/css/bootstrap-theme.min.css
../../bootstrap/dist/css/bootstrap.min.css
-->

		<link rel="shortcut icon" href="http://poursteady.com/images/favicon.ico"/>
		
		<script>
			 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			
			 ga('create', 'UA-55536621-1', 'auto');
			 ga('send', 'pageview');
		</script>
		
		
	</head>
	<body <?php body_class(); ?>>
	<!-- <p id="preloader" style="display: block;">Loading...</p> -->
	<!-- Preloader -->

<div id="preloader">
	<div id="preloader-opacity" style="position: static;">
	    <div id="status">&nbsp;</div>
	</div>
</div>

<?php if ( is_front_page() && is_home() ) { ?>
		
		<div id="trailer">
		
			<div class="row" style="margin-left:0; margin-right:0;">
					<div class="embed-container">
						<iframe id="ps-video" src="//player.vimeo.com/video/107293815?api=1&player_id=trailerplayer&title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="1170" height="641" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
			</div><!-- ROW -->
		</div>


	<a href="#" id="stop" class="trailer-toggle-close">Close</a>
	
	<?php } ?>


<?php if ( is_single() ) { ?>

<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      
      <div class="container-fluid" style="padding: 0 30px;">
          
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          
          <a href="http://poursteady.com" class="navbar-brand">Poursteady</a>
          
        </div>
        
        
        
        
        <div class="navbar-collapse collapse">
        
       
          <ul class="nav navbar-nav navbar-right">
          
          <a href="https://docs.google.com/a/poursteady.com/forms/d/1LNchhKTZhO9g1RBdJG_P1OZpXtj6pqscEeQ_CtK2L_s/viewform"><button type="button" class="btn btn-default btn-sm kick-btn-sm">Buy</button></a>
          
		  <li id="menu-item-66" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-66"><a href="http://poursteady.com">&laquo; Back Home</a></li>          
          </ul>
         
        </div><!--/.nav-collapse -->
        
      </div>
    </nav>


<?php } else { ?>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      
      <div class="container-fluid" style="padding: 0 30px;">
          
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          
          <a href="/" class="navbar-brand">Poursteady</a>
          
        </div>
        
        
        
        
        <div class="navbar-collapse collapse">
        
       
          <ul class="nav navbar-nav navbar-right">
          
          <a href="http://goo.gl/forms/VppIAgvubG"><button type="button" class="btn btn-default btn-sm kick-btn-sm">Buy</button></a>
          
          <?php

			$defaults = array(
				'theme_location'  => 'main-menu',
				'menu'            => '',
				'container'       => false,
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => '',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => false,
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '%3$s',
				'depth'           => 0,
				'walker'          => ''
			);
			
			wp_nav_menu( $defaults );
			
			?>
          
          </ul>
         
        </div><!--/.nav-collapse -->
        
      </div>
    </nav>
    
    <?php } ?>

<div id="mobile-header">
	
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/poursteady_mobile_header.jpg" id="header-img" class="img-responsive" />
	
</div>

<div id="page-wrap">
<div id="content" class="container-fluid">
