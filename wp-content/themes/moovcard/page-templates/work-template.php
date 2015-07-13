<?php
/**
 * Template Name: How it works Page
 */
get_header();
?>


<div id="primary" class="content-area inner-page">
    <div id="content" class="site-content" role="main">
        <div class="container">
            <div class="row">
                <div class="col col-6 left-col">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="col col-4 left-col">
                    <?php the_content(); ?>
                </div>
                <div class="col col-2 mobile-comment">
                    <?php $image = get_field('right_image'); ?>
                    <img src="<?php echo $image['url']; ?>" alt="Comment &Ccedil;a marche ?" />
                </div>
            </div>
            <div class="row comment-below">
                <div class="col col-4 left-col">
                    <?php echo get_field('left_bottom_section'); ?>
                </div>
                <div class="col col-2 comment-box">
                    <?php echo get_field('right_bottom_section'); ?>                    
                </div>
            </div>
        </div>
    </div><!-- #content -->
</div><!-- #primary -->

<?php //get_sidebar();  ?>
<?php get_footer(); ?>
