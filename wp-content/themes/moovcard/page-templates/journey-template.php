<?php
/**
 * Template Name: Journey Page
 */
get_header();
?>


<div id="primary" class="content-area inner-page journey-page">
    <div id="content" class="site-content" role="main">
        <div class="container">
            <div class="row">
                <div class="col col-6 left-col">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="col col-4 left-col brief">
                    <div class="intro">
                        <p>
                            <?php the_content();?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-6 left-col">
                    <form action="#" class="content-form">
                        <div class="row">
                            <div class="col col-2">
                                <select>
                                    <option>Mode de transport</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-car.png" alt="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-3">
                                <input type="text" placeholder="Adresse de d&eacute;part" />
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-arrow-right.png" alt="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-2">
                                <input type="text" placeholder="19/06/2015" />
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-cal.png" alt="" />
                            </div>
                            <div class="col col-1">
                                <input type="text" placeholder="13h10" />
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-time.png" alt="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-3">
                                <input type="text" placeholder="Adresse de d'arriv&eacute;e" />
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-arrow-left.png" alt="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-2 col-btn">
                                <button type="submit" class="">Calculer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- #content -->
</div><!-- #primary -->

<?php //get_sidebar();  ?>
<?php get_footer(); ?>
