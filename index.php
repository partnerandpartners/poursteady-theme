<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_header(); ?>

<section class="window window0" id="header">

	<video id="video_background" preload="auto" autoplay="" loop="" muted="muted">
			<source src="videos/20140926_poursteady_header.mp4" type="video/mp4">
			<source src="videos/20140926_poursteady_header.webm" type="video/webm">
			<source src="videos/20140926_poursteady_header.ogv" type="video/ogg">
			
		</video>
		
        
        <!-- Main Title -->

		<div class="header-content">
			<h1>Poursteady</h1>
		</div>
		
		<center><a href="#" id="play" target="_blank"><button type="button" class="btn btn-default btn-lg top-video-btn">Play Video</button></a>
		
		<br/>
		
		<!-- <a href="https://www.kickstarter.com/projects/poursteady/poursteady-pour-over-perfected" id="" target="_blank"><button type="button" class="btn btn-default btn-lg kick-btn">Support us on Kickstarter</button></a></center> -->
		
		<li class="menu-item" style="text-align: center; position: absolute; bottom: 10%; left: 47%; color: #fff;"><a href="#about" class="scroll-arrow"></a></li>
		
</section>



<div class="row"  id="about" style="background: #fff; /*background: rgb(250,250,210);*/ padding: 6% 0 5% 0;">

	<div class="col-sm-12 center">

		<?php
					//special settings to speed up the querying of a single post
					$introQuery = new WP_Query(array(
					    'name' => 'introduction',
					    'posts_per_page' => 1,
					    'no_found_rows' => true, 
					    'update_post_term_cache' => false,
					    'update_post_meta_cache' => false,
					));
					
					?>		   
				 <?php while($introQuery->have_posts()): $introQuery->the_post();?>
		                <div class="col-sm-6 col-sm-offset-3" style="text-align:center;">
		                		<h3 class="introduction-header text-uppercase">
		                			<?php the_title(); ?>
		                		</h3>
		         
								<p class="introduction">
									<?php 
										$postContent = get_the_content();
										$stripped = strip_tags($postContent, '<p> '); 
										//<p> is the stripped tag, then anything following will replace it
										echo $stripped;
									?>
								</p>
								<a href="about"><button type="button" class="btn btn-default btn-lg">Learn More</button></a>
						</div><!-- col-sm-8 -->
						<?php wp_reset_postdata(); ?>
					<?php endwhile;?>

	</div> <!-- col-sm-12 -->
</div><!-- Row -->


<div class="row"  id="beta" style="background: rgb(250,250,210); padding: 8% 0 12% 0;">

	<div class="col-sm-12 center">

		<?php
					//special settings to speed up the querying of a single post
					$betaQuery = new WP_Query(array(
					    'name' => 'betarelease',
					    'posts_per_page' => 1,
					    'no_found_rows' => true, 
					    'update_post_term_cache' => false,
					    'update_post_meta_cache' => false,
					));
					
					?>		   
				 <?php while($betaQuery->have_posts()): $betaQuery->the_post();?>
				 
					 <h3 class="introduction-header text-uppercase" style="text-align:center;">
			             <?php the_title(); ?>
			         </h3>
				 
					 <div class="col-sm-6 col-sm-offset-3" style="margin-top: 30px; text-align:center;">
					 	 
						<?php the_content() ?>
					 </div>
					 
					 <div class="col-sm-6 col-sm-offset-3" style="margin-top: 30px; text-align:center;">
					 	 <a href="https://docs.google.com/a/poursteady.com/forms/d/1LNchhKTZhO9g1RBdJG_P1OZpXtj6pqscEeQ_CtK2L_s/viewform" style="margin-top: 30px;"><button type="button" class="btn btn-default btn-lg">Buy a machine</button></a>
					 </div>
					 
					 
						<?php wp_reset_postdata(); ?>
					<?php endwhile;?>

	</div> <!-- col-sm-12 -->
</div><!-- Row -->

<?php $newsQuery = new WP_Query('cat=3&order=DESC&orderby=date&posts_per_page=3');
$numPosts = $newsQuery -> found_posts;
if($numPosts >= 3):
?>
		

<div class="row" id="news" style="background: #fff; padding: 8% 10%;">

<div class="section-separator"><h4 class="section-header text-uppercase">News & Updates</h4></div>

	<?php while($newsQuery->have_posts()): $newsQuery->the_post();?>
	                <div class="col-sm-4 newspost">
							<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'large', array( 'class' => 'img-responsive' ) ); ?></a>
										
									<?php endif; ?>
								<a href="<?php the_permalink();?>"><h3 class="sub-headers"><?php the_title(); ?></h3></a>
								<div class="below-text"><?php the_content() ?></div>
								</div><!-- col-sm-4 -->
					<?php wp_reset_postdata(); ?>
	<?php endwhile;?>
	<?php endif; ?>

	
</div><!-- Row -->
    
<!--
<?php $eventsQuery = new WP_Query('cat=5&order=ASC'); ?>
		
<div class="row" style="background: #fff; padding: 8% 0;" id="events">

<div class="section-separator"><h4 class="section-header text-uppercase">At Your Event</h4></div>
	<?php while($eventsQuery->have_posts()): $eventsQuery->the_post();?>
	
	<?php if ( has_post_thumbnail() ) : ?>
										
		<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
										
	<?php endif; ?>
									
	                <div class="col-sm-6 col-sm-offset-3" style="text-align:center;">
							
						<h3 class="introduction-header text-uppercase"><?php the_title(); ?></h3>
						<div class="below-text" style="padding: 0 35px 30px 35px;"><?php the_content() ?></div>
						<a href="mailto:info@poursteady.com?subject=I%20am%20interested%20in%20having%20Poursteady%20at%20my%20event!"><button type="button" class="btn btn-default btn-lg">Ask About Events</button></a>
					
					</div>
					
					
					<?php wp_reset_postdata(); ?>
	<?php endwhile;?>
</div>
-->


<div class="row"  id="press" style="background: #fff; padding: 6% 0 12% 0;">
	
	<div class="section-separator"><h4 class="section-header text-uppercase">As featured on</h4></div>

	<div class="col-sm-12 center">

		<?php
					//special settings to speed up the querying of a single post
					$logoQuery = new WP_Query(array(
					    'name' => 'logos',
					    'posts_per_page' => 1,
					    'no_found_rows' => true, 
					    'update_post_term_cache' => false,
					    'update_post_meta_cache' => false,
					));
					
					?>		   
				 <?php while($logoQuery->have_posts()): $logoQuery->the_post();?>
				 
					 <div class="col-sm-8 col-sm-offset-2" style="text-align:center;">
					 	 <?php the_content() ?>
					 </div>
		             
						<?php wp_reset_postdata(); ?>
					<?php endwhile;?>

	</div> <!-- col-sm-12 -->
</div><!-- Row -->


<div class="row"  id="contact" style="background: rgba(255,255,255,0.8); padding: 8% 0 12% 0;">

	<div class="col-sm-12 center">

		<?php
					//special settings to speed up the querying of a single post
					$contactQuery = new WP_Query(array(
					    'name' => 'contact-us',
					    'posts_per_page' => 1,
					    'no_found_rows' => true, 
					    'update_post_term_cache' => false,
					    'update_post_meta_cache' => false,
					));
					
					?>		   
				 <?php while($contactQuery->have_posts()): $contactQuery->the_post();?>
				 
					 <div class="col-sm-6 col-sm-offset-3" style="margin-top: 30px; text-align:center;">
					 	 
						<?php the_content() ?>
					 </div>
					 
					 <div class="col-sm-6 col-sm-offset-3" style="margin-top: 30px; text-align:center;">
					 	 <a href="mailto:info@poursteady.com?subject=Hello!" style="margin-top: 30px;"><button type="button" class="btn btn-default btn-lg">Contact Us</button></a>
					 </div>
					 
					 
						<?php wp_reset_postdata(); ?>
					<?php endwhile;?>

	</div> <!-- col-sm-12 -->
</div><!-- Row -->



<?php get_footer(); ?>