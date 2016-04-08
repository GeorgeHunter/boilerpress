<?php
/**
 * @package WordPress
 * @subpackage bright
 */

get_header(); ?>

<?php
    if (get_theme_mod('boilerplate_sidebar_on') == true ) {
        get_sidebar();
    }
?>
<div class="wrap">
    <div class="content">
        <img src="<?php echo bloginfo( 'stylesheet_directory' ) ?>/images/banner.png" alt="">
        <?php the_post(); ?>
        <?php the_content(); ?>
        <?php comments_template( '', true ); ?>
    </div>

</div>
<!-- end content -->
<?php get_footer(); ?>

