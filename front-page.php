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
  				<div class="container-fluid" style="padding-left:0px;">
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
				        <div class="col-sm-6" style="padding-left:0px;">
				        <?php the_post_thumbnail( 'original', array( 'class' => 'img-fluid' ) ); ?>
				        </div>
		                <div class="col-sm-5">
		                		<h3>
		                			<?php the_title(); ?>
		                		</h3>
		         
								<p>
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
				</div> <!-- container -->
  		</div><!-- row -->


		<?php
			//special settings to speed up the querying of a single post
			$appQuery = new WP_Query(array(
			    'name' => 'the-app',
			    'posts_per_page' => 1,
			    'no_found_rows' => true, 
			    'update_post_term_cache' => false,
			    'update_post_meta_cache' => false,
			));
		?>		   
		<?php while($appQuery->have_posts()): $appQuery->the_post();?>
		<?php
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'original' );
		$url = $thumb['0'];
		?>
		<div class="row"  id="about" style="background-image:url(<?=$url?>); background-size: cover; background-repeat: no-repeat; padding: 15% 0 15% 0;">
		  <div class="container">
				                <div class="col-sm-4">
				                		<h3 class="text-uppercase">
				                			<?php the_title(); ?>
				                		</h3>
				         
										<p>
											<?php 
												$postContent = get_the_content();
												$stripped = strip_tags($postContent, '<p> '); 
												//<p> is the stripped tag, then anything following will replace it
												echo $stripped;
											?>
										</p>
										<a href="about"><button type="button" class="btn btn-default btn-lg">Learn More About the App</button></a>
								</div><!-- col-sm-8 -->
								<?php wp_reset_postdata(); ?>
						<?php endwhile;?>
		  </div> <!-- container -->
		</div><!-- row -->
		
		<?php
			//special settings to speed up the querying of a single post
			$newsQuery = new WP_Query(array(
			    'cat' => '4',
			    'order' => 'DESC',
			    'orderby' => 'date', 
			    'posts_per_page' => 3,
			));
		?>
		
       
		<div class="row" id="news"  style="background: #fff; padding: 6% 0 5% 0;">
		 <div class="container">

			<div class="section-separator"><h4 class="section-header text-uppercase">News & Updates</h4></div>

		<?php while($newsQuery->have_posts()): $newsQuery->the_post();?>
	             <div class="col-sm-4 newspost">
							<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'large', array( 'class' => 'img-responsive' ) ); ?></a>
										
									<?php endif; ?>
								<a href="<?php the_permalink();?>"><h3 class="sub-headers"><?php the_title(); ?></h3></a>
								<div class="below-text"><?php the_excerpt() ?></div>
								</div><!-- col-sm-4 -->
					<?php wp_reset_postdata(); ?>
		<?php endwhile;?>
		</div><!-- container -->
		</div><!-- row -->
		
		<div class="row"  id="press" style="background: #fff; padding: 6% 0 12% 0;">
			<div class="container">
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
							 
								 <div class="col-sm-10 col-sm-offset-1" style="text-align:center;">
								 	 <?php the_content() ?>
								 </div>
					             
									<?php wp_reset_postdata(); ?>
								<?php endwhile;?>
			
				</div> <!-- col-sm-12 -->
			</div> <!-- container -->
		</div><!-- row -->
		
		<div class="row"  id="contact" style="background: rgba(255,255,255,0.8); padding: 7% 0 10% 0;">
			<div class="container">
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
			</div> <!-- container -->
		</div><!-- row -->

<?php get_footer();