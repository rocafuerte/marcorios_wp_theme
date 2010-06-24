<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div id="primary" class="widget-area" role="complementary">
		<ul class="xoxo">

<?php
/* The Menu */
wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) );
/* When we call the dynamic_sidebar() function, it'll spit out
 * the widgets for that widget area. 
 */
dynamic_sidebar( 'primary-widget-area'); 

?>
		</ul>
		</div> 
<!-- #primary .widget-area -->

<?php


	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
