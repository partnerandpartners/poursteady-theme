<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article>

<div class="row"  id="about" style="background: #fff; /*background: rgb(250,250,210);*/ padding: 8.5% 0 5% 0;">

	<div class="col-sm-8 col-sm-offset-2 center">
	
	<?php if ( has_post_thumbnail() ) : ?>
	<?php the_post_thumbnail( 'large', array( 'class' => 'img-responsive' ) ); ?>

	<?php endif; ?>
	<h2><?php the_title(); ?></h2>
	<div class="below-text"><?php the_content(); ?></div>
	
	</div>

</div>		
	
</article>
<?php endwhile; ?>

<?php get_footer(); ?>