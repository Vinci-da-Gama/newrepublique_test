<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newrepublique_test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" type="image/png" href="<?php bloginfo( 'stylesheet_directory' ) ?>/asserts/img/logo.png" />
    <!-- traceur -->
	<script src="https://google.github.io/traceur-compiler/bin/traceur.js"></script>
	<!-- jq2.2.4 -->
	<script src="<?php bloginfo( $show = 'stylesheet_directory' ) ?>/asserts/_lib/jquery-2.2.4.min.js"></script>
	<!-- bs3.3.6 -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/asserts/_lib/bs3.3.6/css/bootstrap.min.css" />
	<!-- fa4.6.3 -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/asserts/_lib/fontAwesome4.6.3/css/font-awesome.min.css" />
	<!-- border-animation -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/asserts/_lib/border-animation/animated-border/animated-border.min.css" />
	<!-- slick css 1.6.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
    <!-- slick theme css 1.6.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <!-- jq-waypoint -->
    <script src="<?php bloginfo( 'stylesheet_directory' ) ?>/asserts/_js/jquery.waypoints.min.js" type="text/javascript"></script>
    <!-- slick js 1.6.0 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js" type="text/javascript"></script>

	<?php wp_head(); ?>
	<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper visible-xs-block">
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".newrepublique-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<!-- template_directory and stylesheet_directory are same path -->
							<img src="<?php bloginfo('stylesheet_directory') ?>/asserts/img/LOGO_TextOnly.png" alt="logo_graphic" />
						</a>
					</div>

					<!-- key is pre-defined by wordpress -- you can add value. -->
					<!-- you also have to create menu in wordpress >> themes >> menus, and you can create more than one menu -->
					<div class="navbar-collapse collapse newrepublique-navbar-collapse">
						<?php 
							$navCustArr = array(
								'menu' => 'top_menu',
								'theme_location' => 'primary',
								'container' => 'ul',
								'container_class' => 'navbar-collapse collapse',
								'menu_class' => 'nav navbar-nav navbar-right'
							);
							wp_nav_menu( $navCustArr );
						?>
					</div>

					<!-- <div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="/">Home</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="resources.html">Resources</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div> -->

				</div>
			</div>
		
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
