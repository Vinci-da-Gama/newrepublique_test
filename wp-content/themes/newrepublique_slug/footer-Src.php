
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wptestslug' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wptestslug' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wptestslug' ), 'wptestslug', '<a href="http://underscores.me/" rel="designer">Collin</a>' ); ?> -->

			<p>&copy; Copyright <?php bloginfo( $show = 'name' ); ?> <?php echo date('Y'); ?>&nbsp;&nbsp;&#124;&nbsp;&nbsp;Powered by Collin</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php bloginfo( 'template_directory' ) ?>/asserts/_lib/bs3.3.6/js/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ) ?>/asserts/_js/cust.js"></script>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/css/style.css" />
</body>
</html>