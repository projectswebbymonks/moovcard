<?php
/**
 * Template Name: My Account Page
 */
get_header();
?>


<div id="primary" class="content-area inner-page acc-page">
    <div id="content" class="site-content" role="main">
        <div class="container">
            <div class="row">
                <div class="col col-3 left-col">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="col col-2 user-dtl">
                    <?php $image = get_field('user_image'); ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo get_field('username'); ?>" />
                    <h3><?php echo get_field('username'); ?></h3>
                    <p class="user-email">
                        <a href="mailto:<?php echo get_field('user_email'); ?>" title="Mail Us"><?php echo get_field('user_email'); ?></a>
                    </p>
                    <p>
                        <a href="<?php echo get_field('profile_link'); ?>" title="modifier le profil"><?php echo get_field('profile_text'); ?></a>
                    </p>
                </div>
                <div class="col col-3 left-col">
                    <div class="user-bal">
                        <?php echo get_field('left_upper_text'); ?>
                    </div>
                    <p>
                        <a href="<?php echo get_field('recharge_link'); ?>" class="btn btn-green"><?php echo get_field('recharge_text'); ?></a>
                    </p>
                    <div class="profile-descr">
                        <?php echo get_field('profile_description'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #content -->
</div><!-- #primary -->

<?php //get_sidebar();  ?>
<?php get_footer(); ?>
