<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="<?php $id = is_front_page()? "home" :"page"; echo $id;?>" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php //esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a> -->
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top" role="banner">
        <div class="container">
			<div class="row justify-content-center">
				<div class="enroll-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

				</div>
			</div>
			<?php include('navigation.php'); ?>

        </div>
	</header><!-- #masthead -->
    <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
        <div id="page-sub-header " class="sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="container-fluid p-0">
				<!-- <img  class="img-fluid" src="http://via.placeholder.com/1920x600" alt="placeholder"/> -->
                <?php
                    echo do_shortcode('[smartslider3 slider=2]');
                ?>
            </div>
        </div>
    <?php endif; ?>
	<div id="content" class="site-content">
		<div class="container-fluid no-pad">
			<?php $class = is_front_page()?"w-100":"row justify-content-center w-100"; ?>
			<div class="<?php echo $class; ?>">
	<?php endif; //!is_page_template(  ) && !is_page_template(  ) ?>
