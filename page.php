<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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

<div class="row" style="background: #fff; /*background: rgb(250,250,210);*/ padding: 8% 0 50% 0;">

	<div class="col-sm-8 col-sm-offset-2 center">
	
<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>