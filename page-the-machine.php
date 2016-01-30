<?php /* Template Name: The Machine */ ?>

<?php get_header(); ?>

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		

		<div class="row no-padding-row" style="margin-top:74px;">
			<div class="container-fluid full-width-container">
					<div id='carousel-custom' class='carousel slide carousel-fade col-lg-7 no-padding-left' data-ride='carousel' data-interval='false'>
					    <div class='carousel-outer'>
					        <!-- Wrapper for slides -->
					        <div class='carousel-inner'>
					            <div class='carousel-item active'>
					                <img src='http://localhost/poursteady/wp-content/uploads/machine_image1.jpg' class="img-fluid" alt='' />
					            </div>
					            <div class='carousel-item'>
					                <img src='http://localhost/poursteady/wp-content/uploads/machine_image2.jpg' class="img-fluid" alt='' />
					            </div>
					        </div>
					    </div>
					    
					    <!-- Indicators -->
					    <div class="carousel-thumbs">
							<ol class='carousel-indicators'>

								        <li data-target='#carousel-custom' data-slide-to='0' class='active'><img src='http://localhost/poursteady/wp-content/uploads/machine_thumb1.jpg' alt='' /></li>
								        <li data-target='#carousel-custom' data-slide-to='1'><img src='http://localhost/poursteady/wp-content/uploads/machine_thumb2.jpg' alt='' /></li>								       
							</ol>
						</div>
				</div>
				
				<div class="col-lg-5 machine-info">
					<div class="buy-section">
						<h2><?php the_title(); ?></h2>
						<h4 class="subtitle"><?php the_field('subtitle'); ?></h4>
						    <?php the_content(); ?>
						<!-- <h1 class="price"><?php the_field('price'); ?></h1> -->
						    <?php the_field('include'); ?><br><br>
						<a href="<?php the_field('buy_link'); ?>" id="play" target="_blank"><button type="button" class="btn btn-primary btn-lg">Order Now</button></a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row grey-row" style="margin-top:54px;">
			<div class="container-fluid">
				<div class="col-sm-6 col-sm-offset-3">
			    	<h1 class="text-center"><?php the_field('large_statement'); ?></h1>
			    	<p class="text-center"><?php the_field('lead_in_paragraph'); ?></p>
				</div>
			</div>
		</div>
				
		<div class="row no-padding-row">
		<div class="container-fluid full-width-container">
				<?php 
					$image = get_field('coffee_shop_image');
		
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
		
		<div class="container">
		    <div class="row">
		    <?php
				$rowCounter = 0; //We need a new row every 4 posts.
				if( get_field('list_of_features') ): ?>
			<?php while( has_sub_field('list_of_features') ): ?>
				<div class="col-sm-4">
					<?php
						
							echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', false, array( 'class' => 'attachment-full img-fluid' ) );
						
						?>
				<h5 class="text-center text-uppercase"><?php the_sub_field('title'); ?></h5></br>
				<p class="text-center"><?php the_sub_field('description'); ?></p>
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
		
		<div class="row">
		<div class="container-fluid full-width-container">
				<div class="col-sm-6 col-sm-offset-3 large-margin-bottom">
			    <h2 class="text-center"><?php the_field('design_lead_in'); ?></h2>
				</div>
				<div class="col-sm-6">
				<?php
						
							echo wp_get_attachment_image( get_field( 'top_design_image' ), 'full', false, array( 'class' => 'attachment-full img-fluid' ) );
						
				?>
				</div> <!-- col-sm-6 -->
				<div class="col-sm-6">
				<h4><?php the_field('top_design_title'); ?></h4>
				<div><?php the_field('top_design_description'); ?></div>
				</div> <!-- col-sm-6 -->
				
				</div> <!-- container -->
		</div> <!-- row -->
		
		<div class="row">
			<div class="container-fluid full-width-container">
				
				<div class="col-sm-6">
				<h4><?php the_field('middle_design_title'); ?></h4>
				<div><?php the_field('middle_design_description'); ?></div>
				</div> <!-- col-sm-6 -->
				<div class="col-sm-6">
				<?php
						
							echo wp_get_attachment_image( get_field( 'middle_design_image' ), 'full', false, array( 'class' => 'attachment-full img-fluid' ) );
						
				?>
				</div> <!-- col-sm-6 -->
				
			</div> <!-- container -->
		</div> <!-- row -->
		
		<div class="row">
			<div class="container-fluid full-width-container">
				
				<div class="col-sm-6">
				<?php
						
							echo wp_get_attachment_image( get_field( 'bottom_design_image' ), 'full', false, array( 'class' => 'attachment-full img-fluid' ) );
						
				?>
				</div> <!-- col-sm-6 -->
				<div class="col-sm-6">
				<h4><?php the_field('bottom_design_title'); ?></h4>
				<div><?php the_field('bottom_design_description'); ?></div>
				</div> <!-- col-sm-6 -->
				
			</div> <!-- container -->
		</div> <!-- row -->
  		
  		<div class="container full-width-container">
			<div class="row">
				<div class="col-sm-4">
				<hr>
				</div> <!-- col-sm-3 -->
				<div class="col-sm-4 text-center">
				<button type="button" class="btn btn-lg"><a href="">See The Specifications</a></button>
				</div> <!-- col-sm-3 -->
				<div class="col-sm-4">
				<hr>
				</div> <!-- col-sm-3 -->
			</div> <!-- row -->
		</div> <!-- container -->
		
		<div class="row no-padding-row">
		<div class="container-fluid full-width-container">
				<?php 
					$image = get_field('knolling_image');
		
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
		
		<div class="row grey-row">
			<div class="container">
		    <?php
				$rowCounter = 0; //We need a new row every 4 posts.
				if( get_field('list_of_key_components') ): ?>
			<?php while( has_sub_field('list_of_key_components') ): ?>
				<div class="col-sm-3">
				<div class="circle"><?php the_sub_field('number'); ?></div><h5 class=""><?php the_sub_field('title'); ?></h5></br>
				<p class=""><?php the_sub_field('description'); ?></p>
				</div>
					<?php 
						$rowCounter++;
						if($rowCounter==4){
							echo('</div><div class="row">');//new row at 3rd post.
							$rowCounter = 0;
						}
					?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div> <!-- row -->
		</div> <!-- container -->
		
		<div class="row"  id="testing" style="background: #18E09A;">
			<div class="container">
					<div class="col-sm-12"><h2 class="text-center text-white">See Poursteady in a Coffee Shop</h2></div>
					<div class="col-sm-12 text-center margin-top"><button type="button" class="btn btn-lg"><a href="">Poursteady Locations</a></button></div>
			</div> <!-- container -->
		</div><!-- row -->
		
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
			<div class="container">
				<h2 class="text-center"><?php the_field('machine_shop_statement'); ?></h2>
			</div> <!-- row -->
		</div> <!-- container -->
		
		<div class="row grey-row">
			<div class="container full-width-container">
				<div class="col-sm-8 center">
				<h4 class="section-header text-uppercase">Tech Specs</h4>
				<?php the_field('technical_specifications'); ?>
				</div> <!-- col-sm-8 -->
				<div class="col-sm-4 center">
				<h4 class="section-header text-uppercase">Dimensions & Sizes</h4>
				<?php the_field('dimension_size'); ?>
				</div> <!-- col-sm-4 -->
				<div class="col-sm-8 center">
				<h4 class="section-header text-uppercase">Packaging Contents</h4>
				<?php the_field('packaging_contents'); ?>
				</div> <!-- col-sm-8 -->
			</div> <!-- row -->
		</div> <!-- container -->
		
		<?php endwhile; ?>

<?php get_footer(); ?>