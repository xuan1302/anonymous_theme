<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anonymous
 */

if ( ! is_active_sidebar( 'cat_sidebar' ) ) {
	return;
}
?>

<aside id="aside-archive" class="widget-area">
	<?php dynamic_sidebar( 'cat_sidebar' ); ?>
</aside><!-- #secondary -->
