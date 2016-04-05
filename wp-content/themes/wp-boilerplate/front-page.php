<?php
/**
 * @package WordPress
 * @subpackage bright
 */

get_header(); ?>
<div class="container">
    <div class="content">
        <img src="<?php echo bloginfo( 'stylesheet_directory' ) ?>/images/banner.png" alt="">
        <?php the_post(); ?>
            <?php the_content(); ?>
        <?php comments_template( '', true ); ?>
    </div>

</div>
<!-- end content -->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>

