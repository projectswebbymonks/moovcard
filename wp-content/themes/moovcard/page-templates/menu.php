<?php
/**
 * Template Name: Menu Page
 */

get_header('menu');
$lang_data = icl_get_languages();
foreach($lang_data as $lang)
{ //print_r($lang);
	echo '<a href="'.$lang['url'].'">'.strtoupper($lang['language_code']).'</a>';
} ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
