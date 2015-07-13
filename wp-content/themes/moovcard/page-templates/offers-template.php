<?php
/**
 * Template Name: Offers Page
 */
get_header();
?>


<div id="primary" class="content-area inner-page offer-page">
    <div id="content" class="site-content" role="main">
        <div class="container">
            <div class="row">
                <div class="col col-6 left-col">
                    <h1><?php the_title(); ?></h1>
                    <h2><?php echo get_field('main_heading'); ?></h2>
                    <h3><?php echo get_field('sub_heading'); ?></h3>
                </div>
            </div>
            <div class="row offer-feature">
                <div class="col col-2 left-col">
                    <h4>
                        <?php echo get_field('left_heading'); ?>
                    </h4>
                </div>
                <div class="col col-4">
                    <?php echo get_field('right_content'); ?>
                </div>
            </div>
            <div class="row offer-descr">
                <div class="col col-3 left-col">
                    <?php echo get_field('middle_content'); ?>
                </div>
            </div>
            <div class="row offer-descr">
                <div class="col col-4 left-col">
                    <?php echo get_field('bottom_content'); ?>
                </div>
            </div>
        </div>

    </div><!-- #content -->
</div><!-- #primary -->

<?php //get_sidebar();  ?>
<?php get_footer(); ?>
