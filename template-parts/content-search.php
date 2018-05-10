<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mom
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="container">
		<?php the_title( sprintf( '<h2 class="text-secondary"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="text-muted">
			<?php
			mom_posted_on();
			mom_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php mom_post_thumbnail(); ?>

	<div class="container">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="container">
		<?php mom_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
