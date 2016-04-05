<?php
/**
 * @package WordPress
 * @subpackage bright
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-details">
		<p><?php echo get_the_date(); ?><br/>
		<?php _e( 'by', 'bright' ); ?> <?php the_author() ?><br/>
		<?php comments_popup_link( __( '0 comments', 'bright' ), __( '1 Comment', 'bright' ), __( '% Comments', 'bright' ) ); ?></p>
	</div><!-- end entry-details -->
	<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bright' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'bright' ), 'after' => '</div>' ) ); ?>
	<footer class="entry-meta">
			<p><?php if ( count( get_the_category() ) ) : ?>
			<?php printf( __( 'Categories: %2$s', 'bright' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?> | 
			<?php endif; ?>
			<?php $tags_list = get_the_tag_list( '', ', ' ); 
			if ( $tags_list ): ?>
			<?php printf( __( 'Tags: %2$s', 'bright' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?> | 
			<?php endif; ?>
			<a href="<?php echo get_permalink(); ?>"><?php _e( 'Permalink ', 'bright' ); ?></a>
			<?php edit_post_link( __( 'Edit &rarr;', 'bright' ), '| <span class="edit-link">', '</span>' ); ?></p>
	</footer><!-- end entry-meta -->
	</div><!-- end entry-content -->
</article><!-- end post-<?php the_ID(); ?> -->
