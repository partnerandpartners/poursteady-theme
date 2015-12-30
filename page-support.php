<?php /* Template Name: The Machine */ ?>

<?php get_header(); ?>

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<div class="container" style="background: #fff; padding: 8% 0 5% 0;">
		    <div class="row">
		    	<div class="col-sm-12">
				<h4 class="section-header text-uppercase">Frequently Asked Questions</h4>
			    <?php
					$rowCounter = 0; //We need a new row every 4 posts.
					if( get_field('faqs') ): ?>
				<?php while( has_sub_field('faqs') ): ?>
				<strong><?php the_sub_field('question'); ?></strong></br>
				<?php the_sub_field('answer'); ?></br>
					<?php 
						$rowCounter++;
						if($rowCounter==1){
							echo('</div><div class="col-sm-12">');//new row at 3rd post.
							$rowCounter = 0;
						}
					?>
				<?php endwhile; ?>
				</div>
				</div>
			<?php endif; ?>
		</div>
		
		<div class="container">
			<div class="row"  id="press" style="background: white; padding: 6% 0 12% 0;">
				<div class="col-sm-8 center">
				<h4 class="section-header text-uppercase">Troubleshooting</h4>
				<?php the_field('troubleshooting'); ?>
				</div> <!-- col-sm-8 -->
				<div class="col-sm-4 center">
				<h4 class="section-header text-uppercase">Get in Touch</h4>
				<?php the_field('get_in_touch'); ?>
				</div> <!-- col-sm-4 -->
			</div> <!-- row -->
		</div> <!-- container -->
		
		<?php endwhile; ?>

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

<?php get_footer(); ?>