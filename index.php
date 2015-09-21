<?php
/**
 *
 * @package Wordpress
 * @subpackage
 * @since
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if( have_posts() ) : ?>

			<?php
			echo '<div class="row masonry-container">';

				while( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile;

			echo '</div>';
			otb_paging_nav();

		else :
			get_template_part( 'content','none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>