<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newrepublique_test
 */

?>

	</div><!-- #content -->
	<footer class="newrepublique-footer">
		<div class="row">
			<p class="text-center foooter_social_link">
				<a href="https://www.facebook.com/newrepublique/?fref=ts" target="_blank">
					<i class="fa fa-facebook"></i>
				</a>
				<a target="_blank" href="https://www.linkedin.com/company/new-republique">
					<i class="fa fa-linkedin"></i>
				</a>
				<a href="https://www.youtube.com/channel/UCHb09lOf2KIdpmCXSsQoEvA" target="_blank">
					<i class="fa fa-youtube"></i>
				</a>
				<a target="_blank" href="http://www.slideshare.net/nyassini">
					<i class="fa fa-slideshare"></i>
				</a>
				<a target="_blank" href="https://www.instagram.com/newrepublique/">
					<i class="fa fa-instagram"></i>
				</a>
			</p>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-offset-3 col-sm-6">
				<div class="row footer-brand">
					<div class="col-xs-12 col-sm-4">
						<img src="<?php bloginfo('stylesheet_directory') ?>/asserts/img/fbrand1.png" class="img-responsive margin-auto mb2em" alt="fbrand1" />
					</div>
					<div class="col-xs-12 col-sm-4">
						<img src="<?php bloginfo('stylesheet_directory') ?>/asserts/img/fbrand2.jpg" class="img-responsive margin-auto mb2em" alt="fbrand2" />
					</div>
					<div class="col-xs-12 col-sm-4">
						<img src="<?php bloginfo('stylesheet_directory') ?>/asserts/img/fbrand3.jpg" class="img-responsive margin-auto mb2em" alt="fbrand3" />
					</div>
				</div>
			</div>
		</div>
		<hr />
		<div class="row">
			<p class="copyright text-center">
				&#64; copyright New Republique <?php echo date('Y'); ?>
			</p>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php bloginfo( 'template_directory' ) ?>/asserts/_lib/bs3.3.6/js/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ) ?>/asserts/_js/cust.js"></script>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/style.css" />

</body>
</html>
