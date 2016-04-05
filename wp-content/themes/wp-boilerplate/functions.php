<?php
/**
 * @package WordPress
 * @subpackage bright
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 620;

// add ie conditional html5 shim to header
function add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');

/**
 * Tell WordPress to run bright() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'bright' );

if ( ! function_exists( 'bright' ) ):

/**
 * Sets up theme defaults and registers support for WordPress features.
 */
function bright() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'bright' ),
	) );

	// Add support for Post Formats
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'video', 'image', 'quote' ) );

}
endif;

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function bright_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'bright_page_menu_args' );

/**
 * Sets the post excerpt length to 40 characters.
 */
function bright_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'bright_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 */
function bright_continue_reading_link() {
	return ' <a href="'. get_permalink() . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bright' ) . '</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and bright_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 */
function bright_auto_excerpt_more( $more ) {
	return ' &hellip;' . bright_continue_reading_link();
}
add_filter( 'excerpt_more', 'bright_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 */
function bright_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= bright_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'bright_custom_excerpt_more' );

/**
 * Remove inline styles printed when the gallery shortcode is used.
 */
function bright_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'bright_remove_gallery_css' );

if ( ! function_exists( 'bright_comment' ) ) :

/**
 * Template for comments and pingbacks.
 */
function bright_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-gravatar"><?php echo get_avatar( $comment, 65 ); ?></div>

		<div class="comment-body">
		<div class="comment-meta commentmetadata">
		<?php printf( __( '%s', 'bright' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?><br/>
		<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'bright' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( 'Edit &rarr;', 'bright' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<?php comment_text(); ?>

		<?php if ( $comment->comment_approved == '0' ) : ?>
		<p class="moderation"><?php _e( 'Your comment is awaiting moderation.', 'bright' ); ?></p>
		<?php endif; ?>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->

		</div>
		<!--comment Body-->

	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'bright' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'bright'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

/**
 * Register widgetized area and update sidebar with default widgets
 */
function bright_widgets_init() {
	register_sidebar( array (
		'name' => __( 'Sidebar 1', 'bright' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array (
		'name' => __( 'Sidebar 2', 'bright' ),
		'id' => 'sidebar-2',
		'description' => __( 'An second sidebar area', 'bright' ),
		'before_widget' => '<aside class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'init', 'bright_widgets_init' );

/**
 * Removes the default styles that are packaged with the Recent Comments widget.
 */
function bright_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'bright_remove_recent_comments_style' );

/**
 * Search form custom styling
 */
function bright_search_form( $form ) {

    $form = '<form role="search" method="get" class="searchform" action="'.get_bloginfo('url').'" >
    <div><label class="screen-reader-text" for="s">' . __('') . '</label>
    <input type="text" class="search-input" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" class="searchsubmit" value="'. esc_attr__('Search', 'bright') .'" />
    </div>
    </form>';

    return $form;
}
add_filter( 'get_search_form', 'bright_search_form' );

/**
 * Remove the default CSS style from the WP image gallery
 */
add_filter('gallery_style', create_function('$a', 'return "
<div class=\'gallery\'>";'));

function starter_customize_register( $wp_customize )
{
	$wp_customize->add_section( 'starter_new_section_name' , array(
		'title'    => __( 'Global Settings', 'starter' ),
		'priority' => 10
	) );

	$wp_customize->add_setting( 'starter_new_setting_names' , array(
		'default'   => 'blue',
		'transport' => 'refresh',
		'type' => 'theme_mod',

	) );

	$wp_customize->add_setting( 'starter_site_logo' , array(
		//'default'   => 'upload',
		'transport' => 'refresh',
		'type' => 'theme_mod',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_logo', array(
		'label'    => __( 'Site Logo', 'starter' ),
		'section'  => 'starter_new_section_name',
		'settings' => 'starter_site_logo',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
		'label'    => __( 'Primary Colour', 'starter' ),
		'section'  => 'starter_new_section_name',
		'settings' => 'starter_new_setting_names',
	) ) );

}
add_action( 'customize_register', 'starter_customize_register');

