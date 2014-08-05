<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

	<!-- Bootstrap -->
	<link href="<?php echo get_template_directory_uri() . '/includes/bootstrap-3.2.0-dist/css/bootstrap.min.css'; ?>" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo get_template_directory_uri() . '/includes/bootstrap-3.2.0-dist/js/bootstrap.min.js'; ?>"></script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
		<header id="header" role="banner">
			<section id="branding">
				<div id="site-title"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'fundamental' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></h1></div>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>
			</section>
			<nav id="menu" role="navigation" class="navbar navbar-default">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_menu_list">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="main_menu_list">
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				</div>
			</nav>
		</header>
		<div id="container" class="container-fluid">