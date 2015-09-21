<?php
/**
 *
 * @package Wordpress
 * @subpackage
 * @since
 */
?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'Only the Brave' ) ); ?>">
				<?php printf( __( 'Proudly powered by %s', 'otb' ), 'Only the Brave' ); ?>
			</a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>