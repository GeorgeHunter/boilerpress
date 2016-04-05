<?php
/**
 * @package WordPress
 * @subpackage bright
 */

get_header(); ?>

<div class="container">
	<div class="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'components/content', 'info' ); ?>
			<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
			<nav class="nav-below">
				<div class="nav-previous"><?php previous_post_link( '%link', '' . _x( '&larr;  Previous Post', 'Previous post link', 'bright' ) . '' ); ?></div>
				<div class="nav-next"><?php next_post_link( '%link', __('') . _x( 'Next Post &rarr;', 'Next post link', 'bright' ) . '' ); ?></div>
			</nav><!-- end nav-below -->
	</div><!-- end content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>