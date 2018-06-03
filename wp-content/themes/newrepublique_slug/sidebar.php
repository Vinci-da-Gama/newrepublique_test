<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newrepublique_test
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<div class="text-center mb6em">
		<img class="sidebar-logo" src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/06/logo.png" alt="cmp_logo" />
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
