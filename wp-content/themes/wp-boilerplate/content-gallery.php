<?php
/**
 * @package WordPress
 * @subpackage bright
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-post-format">
		<header class="entry-header">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'bright' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<p><?php echo get_the_date(); ?> <?php _e( 'by', 'bright' ); ?> <?php the_author() ?>
		<?php if ( comments_open() ) : ?> | <?php comments_popup_link( __( '0 comments', 'bright' ), __( '1 Comment', 'bright' ), __( '% Comments', 'bright' ) ); ?><?php endif; ?></p>
		</header><!-- end entry-header -->
	<?php if ( is_search() ) : // Only display Excerpts for search pages ?>
	<div class="entry-summary">
		<?php the_excerpt( __( 'View the pictures &rarr;', 'bright' ) ); ?>
	</div><!-- end entry-summary -->
	<?php else : ?>
		<?php if ( post_password_required() ) : ?>
			<?php the_content( __( 'View the pictures &rarr;', 'bright' ) ); ?>
			<?php else : ?>
				<?php
					$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
					if ( $images ) :
						$total_images = count( $images );
						$image = array_shift( $images );
						$image_img_tag = wp_get_attachment_image( $image->ID, 'medium' );
				?>
				<figure class="gallery-thumb">
					<a href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
				</figure><!-- end gallery-thumb -->
			<?php endif; ?>
		<div class="entry-post-format">
			<?php the_content( __( 'View the pictures &rarr;', 'bright' ) ); ?>
		<?php endif; ?>
		<p class="pics-count"><?php printf( _n( 'This gallery contains <a %1$s>%2$s photo</a>.', 'This gallery contains <a %1$s>%2$s photos</a>', $total_images, 'bright' ),
						'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'bright' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"',
						number_format_i18n( $total_images )
					); ?></p>
	</div><!-- end entry-content-gallery -->
	<?php endif; ?>
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
		</footer><!-- end entry-meta-->
	</div><!-- end entry-gallery -->
</article><!-- end post-<?php the_ID(); ?> -->
