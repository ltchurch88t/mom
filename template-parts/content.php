<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mom
 */

?>

<article class="card w-100 text-center shadow p-3 mb-5 bg-white rounded" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="card-title">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="text-secondary">', '</h1>' );
		else :
			the_title( '<h1 class="text-secondary">', '</h1>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="card-subtitle mb-2 text-muted">
				<?php
				mom_posted_on();
				mom_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php mom_post_thumbnail(); ?>

	<div class="card-body">
		<div class="card-text">
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mom' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mom' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
		<a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Go to post</a> <!-- button to link to post page -->
	</div> <!--- .card-body --->
</article><!-- #post-<?php the_ID(); ?> -->
