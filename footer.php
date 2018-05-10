<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mom
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="fluid-container text-light bg-dark">
		<div id="site-info" class="row justify-content-center">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s | Created by %2$s.', 'starter' ), 'mom', '<a href="https://nakdesignstudio.io/">&nbsp;NAK Design Studio</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
