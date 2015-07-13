<?php
/**
 * Template Name: About Page
 */
get_header();
?>


<div id="primary" class="content-area inner-page about-page">
    <div id="content" class="site-content" role="main">
        <div class="container">
            <div class="row">
                <div class="col col-4 left-col">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div><!-- #content -->
</div><!-- #primary -->

<?php //get_sidebar();  ?>
<?php get_footer(); ?>
