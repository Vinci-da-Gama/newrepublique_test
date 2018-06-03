<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="<?php bloginfo( $show = 'stylesheet_directory' ) ?>/asserts/_lib/jquery-2.2.4.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/asserts/_lib/bs3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/asserts/_lib/fontAwesome4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/asserts/_lib/jquery-ui-1.12.0/jquery-ui.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ) ?>/asserts/_lib/jquery-ui-1.12.0/jquery-ui.theme.min.css">
	<script src="<?php bloginfo( $show = 'stylesheet_directory' ) ?>/asserts/_lib/jquery-ui-1.12.0/jquery-ui.min.js"></script>

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
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'wptestslug' ); ?></a>

	<!-- HEADER
	================================================== -->
	<header class="site-header" role="banner">
		
		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper">
			
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php bloginfo('stylesheet_directory') ?>/asserts/img/logo.png" alt="logo_graphic" />
						</a>
					</div>

					<!-- key is pre-defined by wordpress -- you can add value. -->
					<!-- you also have to create menu in wordpress >> themes >> menus, and you can create more than one menu -->
					<?php 
						$navCustArr = array(
							'theme_location' => 'primary',
							'container' => 'div',
							// 'container' => 'nav',
							'container_class' => 'navbar-collapse collapse',
							'menu_class' => 'nav navbar-nav navbar-right'
						);
						wp_nav_menu( $navCustArr );
					?>

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

		<div>stylesheet_directory is: <?php echo get_stylesheet_directory_uri(); ?></div>
		<div>stylesheet_directory is: <?php echo get_template_directory_uri(); ?></div>
		<div>bloginfo('stylesheet_directory') is: <?php echo bloginfo('stylesheet_directory'); ?></div>
		
	</header>

	<!-- <div id="content" class="site-content"> -->
