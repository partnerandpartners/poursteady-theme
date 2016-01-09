<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ): ?>

<?php while ( have_posts() ) : the_post(); ?>

		<div class="row no-padding-row">
			<div class="container-fluid full-width-container">
				<?php 
					$image = get_field('machine_shop_image');
		
					if( !empty($image) ): 
		
					// vars
					$url = $image['url'];
					$title = $image['title'];
					$alt = $image['alt'];
					$caption = $image['caption'];
				
					// print image
					$size = 'medium_large';
					$thumb = $image['sizes'][ $size ];
					$width = $image['sizes'][ $size . '-width' ];
					$height = $image['sizes'][ $size . '-height' ];
				
					if( $caption ): ?>
				
						<div>
				
					    <?php endif; ?>
				
						<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="100%" height="" />
				
				
					    <?php if( $caption ): ?>
				
					       <p class="full-width-image-caption"><em><?php echo $caption; ?></em></p>
				
					    </div>
					    <?php endif; ?>
				<?php endif; ?>
			</div> <!-- container -->
		</div> <!-- row -->
		
		<div class="row">
			<div class="container-fluid full-width-container">
				<div class="col-sm-6 col-sm-offset-3">
				<h3><?php the_field('machine_shop_statement'); ?></h3>
				</div>
			</div> <!-- container -->
		</div> <!-- row -->

<?php endwhile; ?>
<?php endif; ?>

		<div class="container">
		    <div class="row">
		    <div class="section-separator"><h4 class="section-header text-center text-uppercase">Who We Are</h4></div>
		    <?php
				$rowCounter = 0; //We need a new row every 4 posts.
				if( get_field('poursteady_personnel') ): ?>
			<?php while( has_sub_field('poursteady_personnel') ): ?>
				<div class="col-sm-4">
					<?php
						
							echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', false, array( 'class' => 'attachment-full img-fluid' ) );
						
						?>
				<h5 class="text-center text-uppercase"><?php the_sub_field('name'); ?></h5></br>
				<p class="text-center"><?php the_sub_field('role'); ?></p>
				</div>
					<?php 
						$rowCounter++;
						if($rowCounter==3){
							echo('</div>');//new row at 3rd post.
							$rowCounter = 0;
						}
					?>
					<?php endwhile; ?>
					</div> <!-- row -->
				<?php endif; ?>
		</div> <!-- container -->

		<div class="row"  id="press">
				<div class="container">
					<div class="section-separator"><h4 class="section-header text-center text-uppercase">As featured on</h4></div>
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