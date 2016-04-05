<?php
/**
 * @package WordPress
 * @subpackage bright
 */
?>

<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
				<aside id="categories" class="widget widget_categories">
					<ul>
						<?php wp_list_categories('title_li=<h3 class="widget-title">' . __('Categories', 'bright') . '</h3>' ); ?>
					</ul>
				</aside>
				<aside id="archives" class="widget widget_archive">
					<h3 class="widget-title"><?php _e( 'Archives', 'bright' ); ?></h3>
					<ul>
						<?php wp_get_archives( 'type=monthly' ); ?>
					</ul>
				</aside>
			<?php endif; // end sidebar 1 widget area ?>
		</div><!-- #secondary .widget-area -->
</div><!-- end main -->
		