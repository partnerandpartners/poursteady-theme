<?php get_header(); ?>

<section class="window window0" id="header">

	<video id="video_background" preload="auto" autoplay="" loop="" muted="muted">
			<source src="videos/20140926_poursteady_header.mp4" type="video/mp4">
			<source src="videos/20140926_poursteady_header.webm" type="video/webm">
			<source src="videos/20140926_poursteady_header.ogv" type="video/ogg">
			
		</video>
		
        
        <!-- Main Title -->

		<div class="header-content">
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<h1><?php echo $description; /* WPCS: xss ok. */ ?></h1>
			<?php
			endif; ?>
		</div>
		
		<center><a href="#" id="play" target="_blank"><button type="button" class="btn btn-default btn-lg top-video-btn">Play</button></a>
		
		<br/>
		
		<li class="menu-item" style="text-align: center; position: absolute; bottom: 10%; left: 47%; color: #fff;"><a href="#about" class="scroll-arrow"></a></li>
		
</section>

<div class="row"  id="about" style="background: #fff; /*background: rgb(250,250,210);*/ padding: 6% 0 5% 0;">
  <div class="container">
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
  </div> <!-- container -->
</div><!-- Row -->

<?php get_footer();