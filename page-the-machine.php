<?php /* Template Name: The Machine */ ?>

<?php get_header(); ?>

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		

		<div class="row grey-row" style="padding:6rem 1.5rem 8rem 1.5rem;">
			<div class="container-fluid full-width-container">
					<div id='carousel-custom' class='carousel slide carousel-fade col-lg-7' data-ride='carousel' data-interval='false'>
					    <div class='carousel-outer'>
					        <!-- Wrapper for slides -->
					        <div class='carousel-inner'>
					            <div class='carousel-item active'>
					                <img src='http://localhost/poursteady/wp-content/uploads/big-placeholder-01.jpg' class="img-fluid" alt='' />
					            </div>
					            <div class='carousel-item'>
					                <img src='http://localhost/poursteady/wp-content/uploads/big-placeholder-02.jpg' class="img-fluid" alt='' />
					            </div>
					            <div class='carousel-item'>
					                <img src='http://localhost/poursteady/wp-content/uploads/big-placeholder-03.jpg' class="img-fluid" alt='' />
					            </div>
					            <div class='carousel-item'>
					                <img src='http://localhost/poursteady/wp-content/uploads/big-placeholder-04.jpg' class="img-fluid" alt='' />
					            </div>
					        </div>
					    </div>
					    
					    <!-- Indicators -->
					    <div class="carousel-thumbs">
							<ol class='carousel-indicators'>
									<li data-target='#carousel-custom' data-slide-to='0' class='active'><img src='http://localhost/poursteady/wp-content/uploads/big-placeholder-thumb-01.jpg' alt='' /></li>
									<li data-target='#carousel-custom' data-slide-to='1'><img src='http://localhost/poursteady/wp-content/uploads/big-placeholder-thumb-02.jpg' alt='' /></li>
									<li data-target='#carousel-custom' data-slide-to='2'><img src='http://localhost/poursteady/wp-content/uploads/big-placeholder-thumb-03.jpg' alt='' /></li>
									<li data-target='#carousel-custom' data-slide-to='3'><img src='http://localhost/poursteady/wp-content/uploads/big-placeholder-thumb-04.jpg' alt='' /></li>								       
							</ol>
						</div>
				</div>
				
				<div class="col-lg-4 machine-info">
					<div class="buy-section">
						<h2><?php the_field('machine_title'); ?></h2>
<!-- 						<h4 class="subtitle"><?php the_field('subtitle'); ?></h4> -->
						    <p class="small-text"><?php the_field('short_machine_description'); ?></p>
						<a href="<?php the_field('buy_link'); ?>" id="play" target="_blank"><button type="button" class="btn btn-primary btn-lg">Order Now</button></a>
					</div>
				</div>
			</div>
		</div>
				
		<div class="row no-padding-row">
			<div class="container-fluid full-width-container">
				<img src="<?php the_field('coffee_shop_image'); ?>" alt="" width="100%" height="" />
			</div> <!-- container -->
		</div> <!-- row -->
		
		<div class="container">
			<div class="row" style="margin-top:54px;">
				<div class="col-sm-6 col-sm-offset-3">
			    	<h1 class="text-center" style="padding-bottom: .75rem;"><?php the_field('headline'); ?></h1>
			    	<p class="text-center"><?php the_field('key_text'); ?></p>
				</div>
			</div>
		</div>
		
		<div class="container">
		    <div class="row no-padding-row">
			    <div class="col-sm-4 text-center">
				    <img class="img-padding" src="<?php the_field('feature_left_image'); ?>" alt="" width="60%" height="" />
				    <h4><?php the_field('feature_left_title'); ?></h4>
				    <p class="small-text with-side-padding"><?php the_field('feature_left_text'); ?></p>
			    </div>
			    
			    <div class="col-sm-4 text-center">
				    <img class="img-padding" src="<?php the_field('feature_center_image'); ?>" alt="" width="60%" height="" />
				    <h4><?php the_field('feature_center_title'); ?></h4>
				    <p class="small-text with-side-padding"><?php the_field('feature_center_text'); ?></p>
			    </div>
			    
			    <div class="col-sm-4 text-center">
				    <img class="img-padding" src="<?php the_field('feature_right_image'); ?>" alt="" width="60%" height="" />
				    <h4><?php the_field('feature_right_title'); ?></h4>
				    <p class="small-text with-side-padding"><?php the_field('feature_right_text'); ?></p>
			    </div>
		    
			</div> <!-- row -->
		</div> <!-- container -->
		
		<div class="container full-width-container">
			<div class="row">
				<div class="col-sm-4">
				<hr>
				</div> <!-- col-sm-3 -->
				<div class="col-sm-4 text-center">
				<a href="#specifications"><button type="button" class="btn btn-md outlined-btn">See The Specifications</button></a>
				</div> <!-- col-sm-3 -->
				<div class="col-sm-4">
				<hr>
				</div> <!-- col-sm-3 -->
			</div> <!-- row -->
		</div> <!-- container -->
		
		<div class="container">
			<div class="row with-margin-top">
				<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 large-margin-bottom">
			    	<h1 class="text-center"><?php the_field('design_lead_in'); ?></h1>
				</div>
			</div>
		</div>
		
		<div class="container-fluid full-width-container">
			<div class="row no-padding-top">
				<div class="col-lg-6 no-padding-left">
					<?php echo wp_get_attachment_image( get_field( 'top_design_image' ), 'full', false, array( 'class' => 'attachment-full img-fluid' ) ); 	?>
				</div> <!-- col-sm-6 -->
				<div class="col-lg-4 col-sm-offset-1 with-side-padding">
					<h2><?php the_field('top_design_title'); ?></h2>
					<div><?php the_field('top_design_description'); ?></div>
				</div> <!-- col-sm-6 -->
				
				</div> <!-- container -->
		</div> <!-- row -->
		
		<div class="container">
			<div class="row">
				<div class="col-sm-4 with-medium-padding">
					<h2><?php the_field('middle_design_title'); ?></h2>
					<div><?php the_field('middle_design_description'); ?></div>
				</div> <!-- col-sm-6 -->
				<div class="col-sm-7 col-sm-offset-1">
					<?php echo wp_get_attachment_image( get_field( 'middle_design_image' ), 'full', false, array( 'class' => 'attachment-full img-fluid' ) );	?>
				</div> <!-- col-sm-6 -->
			</div> <!-- container -->
		</div> <!-- row -->
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<?php echo wp_get_attachment_image( get_field( 'bottom_design_image' ), 'full', false, array( 'class' => 'attachment-full img-fluid' ) ); 	?>
				</div> <!-- col-sm-6 -->
				<div class="col-md-4 col-md-offset-1">
					<h2><?php the_field('bottom_design_title'); ?></h2>
					<div><?php the_field('bottom_design_description'); ?></div>
				</div> <!-- col-sm-6 -->
				
			</div> <!-- container -->
		</div> <!-- row -->
		
		<div class="row">
			<div class="container-fluid full-width-container">
				<img src="<?php the_field('machine_shop_image'); ?>" alt="" width="100%" height="" />
			</div> <!-- container -->
		</div> <!-- row -->
		
		
		<div class="container">
			<div class="row no-padding-row with-margin-bottom">
				<div class="col-sm-10 col-sm-offset-1">
					<h2 class="text-center"><?php the_field('machine_shop_statement'); ?></h2>
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
		
		<div class="row grey-row with-large-margin-top" id="specifications">
			<div class="container full-width-container">
				<div class="col-sm-8 center">
				<h6 class="small-header text-uppercase">Tech Specs</h6>
				<div><?php the_field('technical_specifications'); ?></div>
				<a href="<?php the_field('technical_specifications_pdf'); ?>"><button type="button" class="btn btn-md btn-secondary" style="margin-top: 2rem;">Download</button></a>
				</div> <!-- col-sm-8 -->
				<div class="col-sm-4 center">
				<h6 class="small-header text-uppercase">Dimensions & Sizes</h6>
					<img class="img-fluid" src="<?php the_field('dimensions_image'); ?>" />
				</div> <!-- col-sm-4 -->
				
			</div> <!-- row -->
		</div> <!-- container -->
		<div class="container">
			<div class="row">
					<h2 class="text-center">Where We're Installed</h2>
					<div class="col-sm-12 text-center margin-top"><?php the_field('machine_locations'); ?></div>
			</div> <!-- container -->
		</div><!-- row -->
		
		<?php endwhile; ?>

<?php get_footer(); ?>