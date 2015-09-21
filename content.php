<?php
/**
 *
 * @package Wordpress
 * @subpackage
 * @since
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'wow fadeInUp' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>

		<div class="post-thumbnail">

			<?php if ( is_single() ) : ?>

				<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-responsive' ) ); ?>

			<?php else : ?>

				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-responsive' ) ); ?>
				</a>

			<?php endif; ?>

		</div><!-- .post-thumbnail -->

	<?php endif; ?>

	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		

		<?php the_content(); ?>

	</div><!-- .entry-content -->
</div><!-- .post -->