<?php
/**
 * Template Name: Welcome Page
 */
get_header();
?>


<div id="primary" class="content-area inner-page welcome-page">
    <div id="content" class="site-content" role="main">
        <div class="container">
            <div class="row">
                <div class="col col-6 left-col">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="col col-4 left-col brief">
                    <div class="intro">
                        <p><?php echo get_field('intro_text');?></p>
                    </div>
                    <div class="descr">
                        <p><?php echo get_field('intro_description');?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-6 left-col">
                    <form action="#" class="content-form">
                        <div class="row input-profile">
                            <div class="col col-3">
                                <input type="file" placeholder="Photo de profil" tabindex="1" />
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-profile.png" alt="" />
                                <a href="#" target="_blank" class="btn-down" tabindex="2">T&eacute;l&eacute;charger une image</a>
                            </div>
                        </div>
                        <div class="row input-name">
                            <div class="col col-1">
                                <select tabindex="3">
                                    <option>Civilit&eacute;</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-user.png" alt="" />
                            </div>
                            <div class="col col-2">
                                <input type="text" placeholder="Pr&eacute;nom" tabindex="4" />
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-user.png" alt="" />
                            </div>
                            <div class="col col-2">
                                <input type="text" placeholder="Nom" tabindex="5" />
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-user.png" alt="" />
                            </div>
                        </div>
                        <div class="row input-dtl">
                            <div class="col col-3">
                                <input type="text" placeholder="T&eacute;l&eacute;phone (portable uniquement)" tabindex="6" />
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-tel.png" alt="" />
                            </div>
                        </div>
                        <div class="row input-dtl">
                            <div class="col col-3">
                                <input type="email" placeholder="E-mail" tabindex="7" />
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-mail.png" alt="" />
                            </div>
                        </div>
                        <div class="row input-dtl">
                            <div class="col col-3">
                                <input type="password" placeholder="Mot de passe" tabindex="8" />
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-lock.png" alt="" />
                            </div>
                        </div>
                        <div class="row input-dtl">
                            <div class="col col-3">
                                <input type="password" placeholder="Confirmer le mot de passe" tabindex="9" />
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-unlock.png" alt="" />
                            </div>
                        </div>
                        <div class="row input-dtl">
                            <div class="col col-3">
                                <input type="text" placeholder="Code parrainage" tabindex="10" />
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-group.png" alt="" />
                            </div>
                        </div>
                        <div class="row input-chk">
                            <div class="col col-3">
                                <div class="custom-chk">
                                    <input type="checkbox" id="tnc" tabindex="11" />
                                    <label for="tnc">J'ai pris connaissance et accepete les conditions g&eacute;n&eacute;rales de vente</label>
                                </div>
                            </div>
                            <div class="col col-2">
                                <button type="submit" class="" tabindex="12">Valider</button>
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
