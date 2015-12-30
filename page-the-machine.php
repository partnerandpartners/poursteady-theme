<?php /* Template Name: The Machine */ ?>

<?php get_header(); ?>

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<div class="row">
			<div class="container" style="background: #fff; /*background: rgb(250,250,210);*/ padding: 8% 0 5% 0;">
				<div class="col-sm-8">
				<?php poursteady_print_banner_images( get_the_ID() ); ?>
				</div>
				<div class="col-sm-4">
					<h2><?php the_title(); ?></h2>
					<h5><?php the_field('subtitle'); ?></h5>
					    <?php the_content(); ?>
					<h5>Price</h5>
					<h2><?php the_field('price'); ?></h2>
					    <?php the_field('include'); ?>
					<a href="<?php the_field('buy_link'); ?>" id="play" target="_blank"><button type="button" class="btn btn-primary btn-lg">Buy Now</button></a>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row"  id="press" style="background: white; padding: 6% 0 12% 0;">
				<div class="col-sm-8 center">
				<h4 class="section-header text-uppercase">Tech Specs</h4>
				<?php the_field('techical_specifications'); ?>
				</div> <!-- col-sm-8 -->
				<div class="col-sm-4 center">
				<h4 class="section-header text-uppercase">Dimensions & Sizes</h4>
				<?php the_field('dimensions'); ?>
				</div> <!-- col-sm-4 -->
			</div> <!-- row -->
		</div> <!-- container -->
		
		<div class="container">
			<div class="row"  id="press" style="background: white; padding: 6% 0 12% 0;">
				<div class="col-sm-12 center">
				<h4 class="section-header text-uppercase">How It Works</h4>
				<?php the_field('how_it_works'); ?>
				</div> <!-- col-sm-12 -->
			</div> <!-- row -->
		</div> <!-- container -->
		
		<div class="container">
			<div class="row"  id="press" style="background: white; padding: 6% 0 12% 0;">
				<div class="col-sm-12 center">
				<h4 class="section-header text-uppercase">How It's Built</h4>
				<?php the_field('how_its_built'); ?>
				</div> <!-- col-sm-12 -->
			</div> <!-- row -->
		</div> <!-- container -->
		
		<div class="container">
			<div class="row"  id="press" style="background: white; padding: 6% 0 12% 0;">
				<div class="col-sm-12 center">
				<h4 class="section-header text-uppercase">Setup</h4>
				<?php the_field('setup'); ?>
				</div> <!-- col-sm-12 -->
			</div> <!-- row -->
		</div> <!-- container -->
		
		<div class="row"  id="press" style="background: #18E09A; padding: 6% 0 12% 0;">
			<div class="container">
					<div class="section-separator"><h4 class="section-header text-uppercase">Methods of Testing</h4></div>
					<?php the_field('methods_of_testing'); ?>
			</div> <!-- container -->
		</div><!-- row -->
		
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