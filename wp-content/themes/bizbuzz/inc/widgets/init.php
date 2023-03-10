<?php
/**
 * WP Widgets Init.
 *
 * @since 1.0.0
 */

require get_template_directory() . '/inc/widgets/modules/class-base-widget.php'; // phpcs:ignore
require get_template_directory() . '/inc/widgets/modules/author.php'; // phpcs:ignore



/**
 * Register Widgets.
 *
 * @since 1.0.0
 */
function bizbuzz_register_widget() {

	$widgets = array(
		'Bizbuzz_Author_Profile_Widget',
	);

	foreach ( $widgets as $widget ) {
		register_widget( $widget );
	}
}
add_action( 'widgets_init', 'bizbuzz_register_widget' );
