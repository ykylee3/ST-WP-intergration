<?php
		if ( ! is_active_sidebar( 'sidebar-1' ) ) {
			return;
		}
?>

<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 sidebar-module">
	<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar', 'idm' ); ?>">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- #secondary -->

</div>
