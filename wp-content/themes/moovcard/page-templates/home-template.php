<?php
/**
 * Template Name: Home Page
 */
get_header();
?>


<div id="primary" class="content-area home-page">
    <div id="content" class="site-content" role="main">
        <div class="sec-option-wrapper">
            <div class="sec-option">
                <div class="container-sm">
                    <!--<h3>PLUSIEURS OPTIONS</h3>
                    <h2>SELON VOS BESOINS</h2>
                    <p>Vous avez besoin de vous d&eacute;placer imm&eacute;diatement ? Vous avez un RDV professionnel? Vous pr&eacute;voyez un trajet prochainement ?</p>
                    <p>MOOVcard vous propose 3 modes de transport selon vos envies,selon vos besoins.</p>
                    <a href="#" class="btn btn-purple">COMMENT &Ccedil;A MARCHE ?</a>-->
                    <?php echo get_field('about_us'); ?>
                </div>
            </div>
            <div class="sec-service">
                <div class="container">
                    <div class="row">
                        <div class="col col-2">
                            <div class="col-inner">
                                <h2><?php echo get_field('our_services_title'); ?></h2>
                            </div>
                        </div>
                        <?php while (has_sub_field('our_services')): ?>
                            <div class="col col-2">
                                <div class="col-inner">
                                    <h3><?php echo get_sub_field('service_title'); ?></h3>
                                    <?php echo get_sub_field('service_description'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

            <div class="sec-app">
                <div class="container">
                    <div class="row">
                        <div class="col col-4">
                            <div class="app-dtl">
                                <h2><?php echo get_field('download_section_title'); ?></h2>
                                <h3>notre application</h3>
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
                        </div>
                        <div class="col col-2 mobile-app">
                            <img src="<?php echo $mobileimg['url']; ?>" alt="" />
                        </div>
                    </div>

                </div>
            </div>

            <div class="sec-location">
                <div class="container">
                    <?php
                    $i = 0;
                    while (has_sub_field('app_location')):
                        $loc_img = get_sub_field('location_image');
                        if ($i % 2 == 0) {
                            ?>
                            <div class="loc-dtl">
                                <img src="<?php echo $loc_img['url']; ?>" alt="DISPONIBLE&agrave; PARIS" />
                                <h2><?php echo get_sub_field('location_text'); ?></h2>
                            </div>
                        <?php
                        } else {
                            ?>
                            <div class="loc-dtl loc-london">
                                <h2><?php echo get_sub_field('location_text'); ?></h2>
                                <img src="<?php echo $loc_img['url']; ?>" alt="Coming SOON" />
                            </div>
                        <?php }
                        $i++;
                    endwhile;
                    ?>

                </div>
            </div>

        </div>

    </div><!-- #content -->
</div><!-- #primary -->

<?php //get_sidebar();  ?>
<?php get_footer(); ?>
