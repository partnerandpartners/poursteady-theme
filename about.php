<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ): ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="row" style="padding: 8.5% 0 5% 0;">

	<div class="col-sm-8 col-sm-offset-2 center">
	
		<?php the_content() ?>
		
	</div>

</div>

<?php endwhile; ?>

<?php else: ?>
<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
<?php endif; ?>


		<?php $aboutQuery = new WP_Query('cat=4&order=ASC'); 
		$numPosts = $aboutQuery -> found_posts;
		if($numPosts >= 4):
		?>
		
		<div class="row" id="about">
		
		<div class="section-separator"><h4 class="section-header text-uppercase">Who we are</h4></div>
		
		<div class="col-sm-10 col-sm-offset-1 center">
		
		<?php while($aboutQuery->have_posts()): $aboutQuery->the_post();?>
			       <div class="col-sm-3">
						<?php if ( has_post_thumbnail() ) : ?>
												
							<?php the_post_thumbnail( 'large', array( 'class' => 'img-responsive' ) ); ?>
												
						<?php endif; ?>
						<h3 class="sub-headers"><?php the_title(); ?></h3>
						<div class="below-text"><?php the_content() ?></div>
					</div><!-- col-sm-3 -->
							<?php wp_reset_postdata(); ?>
			<?php endwhile;?>
			<?php endif; ?>

		</div>
</div><!-- Row -->




<?php get_footer(); ?>