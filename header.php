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
	<title><?php bloginfo( 'name' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--
<link rel="stylesheet" href="royalslider/royalslider.css">
	<link rel="stylesheet" href="royalslider/skins/default/rs-default.css">
	<script src="royalslider/jquery.royalslider.min.js"></script>
-->
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/1409-ASUUQS.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/ps.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ps-styles.min.css"> -->
	
	
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

<nav class="navbar navbar-fixed-top navbar-light">
  <a class="navbar-brand" href="/poursteady">Poursteady</a>
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
    &#9776;
  </button>
  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
	  <ul class="nav navbar-nav" style="float: right;">
	    <li class="nav-item">
	      <a class="nav-link" href="the-machine">Machine</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="support">Support</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="news">News</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="about">About</a>
	    </li>
	  </ul>
  </div>
</nav>
    
<!--
<div id="mobile-header">
	
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/poursteady_mobile_header.jpg" id="header-img" class="img-responsive" />
	
</div>
-->

<div id="page-wrap">
<div id="content" class="container-fluid">
