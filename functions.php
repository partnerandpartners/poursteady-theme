<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	register_nav_menus(array('main-menu' => 'Main Menu'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */

	function custom_excerpt_length( $length ) {
		return 25;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
	function new_excerpt_more( $more ) {
		return '...<br/><a href="'. get_permalink( get_the_ID() ) . '"><button type="button" class="btn btn-default btn-lg" style="margin-top:20px;">' . __('Read More', 'your-text-domain') . '</button></a>';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );


	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		
		wp_enqueue_script( 'site' );
		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}
	
	/* add_filter('show_admin_bar', '__return_false');	 */

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}
	
	/**
	 * 
	 * Get images for slideshow with Image IDs
	 * 
	 */
	function poursteady_print_banner_images_from_image_ids( $array_of_banner_image_ids ) {
	// Number of banner images
	$num_banner_images = sizeof( $array_of_banner_image_ids );

	// The variable that will hold all the indicators markup (if more than one banner image exists)
	$indicators = '';

	// The variable that will hold all the slide markup.
	$slides = '';
	$slide_index = 0;

	foreach( $array_of_banner_image_ids as $banner_image_key => $image_id ) {

		// Getting the original size now, will change when we define the image sizes
		$img = wp_get_attachment_image_src( $image_id, 'slideshow_image' );
		$img_src = $img[0];
		$img_width = $img[1];
		$img_height = $img[2];

		if( $num_banner_images > 1 ) {
			$indicator_class = '';
			if( $slide_index == 0 ) {
				$indicator_class = ' class="active"';
			}
			$indicators .= '<li data-target="#carousel-slideshow" data-slide-to="'.$slide_index.'" '.$indicator_class.'></li>';
		}

		// Figure out the slide class
		$slide_class = 'carousel-item';
		if( $slide_index == 0 ) {
			$slide_class .= ' active';
		}

		$style = 'background-image:url('.$img_src.');';

		$slides .= '<div class="'.$slide_class.'" style="'.$style.'">';
		$slides .= '<img src="'.$img_src.'" class="img-fluid">';
		//$slides .= '<div class="carousel-caption">'. $img_caption . '</div>';
		$slides .= '</div>';

		$slide_index++;

	}
	?>

	<div id="carousel-slideshow" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
		

		<?php if( !empty( $slides ) ): ?>

		<div class="carousel-inner" role="listbox">
			<?php echo $slides; ?>
		</div>

		<?php endif; ?>
		
		
		
	  <a class="left carousel-control" href="#carousel-slideshow" role="button" data-slide="prev">
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-slideshow" role="button" data-slide="next">
	    <span class="sr-only">Next</span>
	  </a>
	  
	  	<?php if( !empty( $indicators ) && $num_banner_images > 1 ): ?>

		<div> 
			<ol class="carousel-indicators">
				<?php echo $indicators; ?>
			</ol>
		</div>

		<?php endif; ?>
	</div>
	


	<?php
	}
	
	/**
	 * 
	 * Print the banner images. There are two parameters:
	 * 
	 */
	
	function poursteady_print_banner_images( $post_id_or_author, $is_author = false ) {
	if( $is_author ) {
		$author = $post_id_or_author;
		$banner_images = get_field( 'slideshow', 'user_' . $author->ID );
	}
	else {
		$post_id = $post_id_or_author;
		$banner_images = get_field( 'slideshow', $post_id );
	}
	
	if( !$banner_images || !is_array( $banner_images ) ) {
		// There are no banner images selected, so we'll show the
		// placeholder image
		get_template_part('templates/banner-images-placeholder');
		return;
	}

	$banner_image_ids = array();

	foreach( $banner_images as $banner_image_array ) {
		$banner_image_ids[] = $banner_image_array['slideshow_image'];
	}

	if( !empty( $banner_image_ids ) ) {
		poursteady_print_banner_images_from_image_ids( $banner_image_ids );
	}
	}
