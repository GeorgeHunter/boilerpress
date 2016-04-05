<?php
/**
 * @package WordPress
 * @subpackage bright
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="page">
	<header class="header">
		<div class="container">
			<div class="site-branding">
				<a id="logo" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<span id="site-description"><?php bloginfo( 'description' ); ?></span>
			</div>
			<!-- end site-title -->
			<nav class="main-nav" class="clearfix">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
			<!-- end mainnav -->
		</div>
	</header>
	<!-- end header -->


	<?php //echo get_theme_mod( 'site_logo') ; ?>



	<?php
		global $template;
		//print_r($template);
?>