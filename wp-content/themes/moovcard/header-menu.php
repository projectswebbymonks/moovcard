<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
        <link href="<?php echo get_template_directory_uri(); ?>/css/mlp-menu.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" rel="stylesheet">

    </head>

    <body <?php body_class(); ?>>
        <div id="mp-pusher" class="mp-pusher">
            <nav id="mp-menu" class="mp-menu" role="navigation">
                <!--<button class="menu-toggle"><?php _e('Menu', 'twentythirteen'); ?></button>-->
                <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e('Skip to content', 'twentythirteen'); ?>"><?php _e('Skip to content', 'twentythirteen'); ?></a>

                <?php wp_nav_menu(array('menu_class' => '', 'menu_id' => 'primary-menu', 'menu' => '11', 'theme_location' => 'your-theme-location-EDIT-THIS', 'walker' => new WPSE_78121_Sublevel_Walker, 'container' => 'div', 'container_class' => 'mp-level',)); ?>

            </nav><!-- #site-navigation -->
            <div id="page" class="hfeed site">
                <header id="masthead" class="site-header" role="banner">
                    <div class="container">
                        <div class="nav-left">
                            <a href="#" id="trigger" class="menu-btn menu-trigger">Menu</a>

                            <a class="home-link" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
                            </a>
                        </div>
                    </div>
                </header><!-- #masthead -->

                <div id="main" class="site-main">
