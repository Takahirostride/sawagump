<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bizbuzz
 */

$args    = array(
	'hide_post_date',
	'hide_post_author',
	'hide_post_category',
	'hide_post_tags',
	'hide_post_featured_image',
	'archive_content_type',
);
$options = bizbuzz_get_option( $args );

$thumbnail_url = get_the_post_thumbnail_url();

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="featured-post-image">
		<div class="rt-featured-image">
			<?php
			if ( ! $options['hide_post_featured_image'] ) {
				bizbuzz_post_thumbnail( 'bizbuzz-featured' );
			}
			?>
		</div>
	</div><!-- .featured-post-image -->

	<div class="entry-container ">
		<header class="entry-header">
			<?php if ( ! is_single() ) : ?>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php else : ?>
				<h2 class="entry-title"><?php the_title(); ?></h2>
			<?php endif; ?>
		</header>
		<div class="entry-meta ">
			<?php bizbuzz_posted_on(); ?>
			<?php bizbuzz_post_category(); ?>
			<?php bizbuzz_post_tag( $options ); ?>
		</div><!-- .entry-meta -->

		<div class="entry-content">
			<?php
			if ( 'full_content' === $options['archive_content_type'] || is_single() ) {

				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bizbuzz' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bizbuzz' ),
						'after'  => '</div>',
					)
				);
			} else {
				the_excerpt();
			}
			?>
		</div><!-- .entry-content -->
		<?php if ( ! $options['hide_post_author'] ) : ?>
			<div class="author-meta">
				<?php bizbuzz_posted_by( 18 ); ?>
			</div><!-- .author-meta -->
		<?php endif; ?>

	</div><!-- .entry-container -->
</article><!-- #post-<?php the_ID(); ?> -->

