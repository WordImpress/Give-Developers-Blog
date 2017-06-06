<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Casper
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info inner">
		<a class="footer-logo-link" href='<?php echo esc_url( home_url( '/' ) ); ?>' rel='home'> <img
					src="<?php echo get_stylesheet_directory_uri(); ?>/img/give-logo.svg" class="give-footer-logo"/></a>
		<section class="copyright">
			<?php if ( false == get_theme_mod( 'casper_custom_footer' ) ) { ?>
				<?php printf( __( '<a href="%1$s" rel="home">Casper WP</a> by Lacy Morrow', 'casper' ), esc_url( 'https://github.com/lacymorrow/casper' ) ); ?>
			<?php } else {
				echo get_theme_mod( 'casper_custom_footer' );
			} ?>
		</section>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</main><!-- /#content -->

<?php wp_footer(); ?>
</body>
</html>
