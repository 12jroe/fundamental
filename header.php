<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
		<div id = "main_area_and_top">
			<header id="header" role="banner">
				<section id="branding">
					<div id="site-title">
						<h1>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'fundamental' ); ?>" rel="home">
								<?php 
									$site_title = esc_html(get_bloginfo('name'));
									if (is_image(get_option('uploaded_logo_image')) && $logo_image = get_option('uploaded_logo_image')) {
										//logo exists and is an actual image. Lets display it. 
										echo "<img src = $logo_image alt = '$site_title' /> ";
									} else {
										echo $site_title;
									}
									 
								?>
							</a>
						</h1>
					</div>
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
			<div id="container" class="container-fluid row">
