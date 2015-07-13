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
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php $fav_icon = get_field('favicon_icon', 'option'); ?>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $fav_icon['url']; ?>">
        <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
        <?php wp_head(); ?>
        <link href="<?php echo get_template_directory_uri(); ?>/responsive.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" rel="stylesheet">
    </head>

    <body <?php body_class(); ?>>
        <!--<div id="mp-pusher" class="mp-pusher">-->
        <!-- 
        <nav id="mp-menu" class="mp-menu" role="navigation">
            
            <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e('Skip to content', 'twentythirteen'); ?>"><?php _e('Skip to content', 'twentythirteen'); ?></a>

        <?php wp_nav_menu(array('menu_class' => '', 'menu_id' => 'primary-menu', 'menu' => '11', 'theme_location' => 'your-theme-location-EDIT-THIS', 'walker' => new WPSE_78121_Sublevel_Walker, 'container' => 'div', 'container_class' => 'mp-level',)); ?>
        
        </nav>
        -->

        <div id="page" class="hfeed site">
            <header id="masthead" class="site-header" role="banner">
                <div class="container">
                    <div class="nav-left">
                        <a href="#" id="trigger" class="menu-btn menu-trigger"><span>Menu</span></a>

                        <a class="home-link" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
                        </a>
                        <div id="navbar" class="navbar">
                            <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                                <button class="menu-toggle">Menu</button>
                                <?php wp_nav_menu(array('menu_class' => 'nav-menu', 'menu_id' => 'primary-menu', 'menu' => '8', 'container' => 'div', 'container_class' => '',)); ?>
                                <div class="lang-links">
                                    <?php
                                    $translations = icl_get_languages();
                                    foreach ($translations as $translation) {
                                        if ($translation['active'] == 1)
                                            $class = "active";
                                        else
                                            $class = '';
                                        echo '<a href="' . $translation['url'] . '" class="' . $class . '" title="' . $translation['translated_name'] . '">' . strtoupper($translation['language_code']) . '</a>';
                                    }
                                    ?>
                                </div>
                                <div class="col-inner">
                                    <p>T&eacutel&eacutechargez l'application</p>
                                    <div class="app-store">
                                        <?php $mobileimg = get_field('mobile_app_image', 'option'); ?>
                                        <a href="<?php echo get_field('app_store_link', 'option'); ?>" title="Available on the iPhone App Store" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/store-iphone.png" alt="Available on the iPhone App Store" />
                                        </a>
                                        <a href="<?php echo get_field('google_play_link', 'option'); ?>" title="Get it on Google Play" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/store-google.png" alt="Get it on Google Play" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-inner">
                                    <p>Suivez-nous !</p>
                                    <ul class="social">
                                        <li><a href="<?php echo get_field('facebook_link', 'option'); ?>" class="fb" title="Facebook" target="_blank"></a></li>
                                        <li><a href="<?php echo get_field('twitter_link', 'option'); ?>" class="tw" title="Twitter" target="_blank"></a></li>
                                        <li><a href="<?php echo get_field('linkedin_link', 'option'); ?>" class="ln" title="LinkedIn" target="_blank"></a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="close-btn"></div>
                        </div>
                    </div>
                    <div class="nav-right">

                        <?php wp_nav_menu(array('menu_class' => 'full-links', 'menu' => '15', 'container' => '', 'container_class' => '',)); ?>
                        <!--<a href="#" title="CONNEXION">CONNEXION</a>
                        <a href="<?php echo home_url(); ?>/welcome-moovcard/" title="INSCRIPTION">INSCRIPTION</a>-->
                        <div class="lang-links">
                            <?php
                            $translations = icl_get_languages();
                            $i = 0;
                            foreach ($translations as $translation) {
                                if ($translation['active'] == 1)
                                    $class = "active";
                                else
                                    $class = '';
                                echo '<a href="' . $translation['url'] . '" class="' . $class . '" title="' . $translation['translated_name'] . '">' . strtoupper($translation['language_code']) . '</a>';
                                if ($i == 0) {
                                    echo ' | ';
                                }
                                $i++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </header><!-- #masthead -->

            <?php if (is_front_page()) { ?>
                <div class="banner-wrapper">
                    <div class="owl-slider">
                        <?php
                        $banner_logo = get_field('banner_logo', 'option');
                        while (has_sub_field('home_page_banner', 'option')):
                            $banner_img = get_sub_field('banner_image', 'option');
                            ?>
                            <div style="background-image: url('<?php echo $banner_img['url']; ?>')">
                                <div class="owl-caption">
                                    <div class="owl-caption-inner">
                                        <div class="container-sm">
                                            <img src="<?php echo $banner_logo['url']; ?>" alt="" />
                                            <?php echo get_sub_field('banner_text', 'option'); ?>
                                            <p class="banner-btn">
                                                <a href="<?php echo get_sub_field('read_more_link', 'option'); ?>" class="btn">EN SAVOIR +</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php } ?>
            <div id="main" class="site-main">
