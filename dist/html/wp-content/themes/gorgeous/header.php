<!doctype html>

<!--[if lt IE 7 ]>

	<html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 7 ]>

	<html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8 ]>

	<html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 9 ]>

	<html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>>

<![endif]-->

<!--[if gt IE 9]><!-->

	<html class="no-js" <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<!--[if IE ]>

		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />

	<![endif]-->

	<?php

		if (is_search())

			echo '<meta name="robots" content="noindex, nofollow" />';

	?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>" />

	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<meta name="author" content="" />

	<meta name="apple-mobile-web-app-title" content="" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<?php if( the_field( 'google_site_verification', 'option' ) ): ?>

		<meta name="google-site-verification" content="<?php the_field( 'google_site_verification', 'option' ); ?>" />

	<?php endif; ?>

	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/a/img/favicon.png" />

	<link rel="apple-touch-icon" href="<?php bloginfo( 'template_directory' ); ?>/a/img/touch-icon.png" />

	<link type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/a/css/screen.css" rel="stylesheet" media="screen, projection" />

	<link type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/a/css/print.css" rel="stylesheet" media="print" />

	<link type="text/css" href="http://fonts.googleapis.com/css?family=Average+Sans|Open+Sans:400italic,700italic,400,700|Prata" rel="stylesheet" />

	<script src="<?php bloginfo( 'template_directory' ); ?>/a/js/modernizr.js"></script>

	<meta name="twitter:card" content="" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="<?php bloginfo( 'template_directory' ); ?>/a/img/twitter-icon.png" />
	<meta name="twitter:url" content="" />

	<meta name="og:title" content="" />
	<meta name="og:description" content="" />
	<meta name="og:url" content="" />
	<meta name="og:image" content="<?php bloginfo( 'template_directory' ); ?>/a/img/og-icon.png" />

	<meta name="application-name" content="" />
	<meta name="msapplication-TileColor" content="" />
	<meta name="msapplication-TileImage" content="" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<?php wp_head(); ?>

</head>

<body <?php body_id(); ?> <?php body_class(); ?>>

	<div id="pre-header">

		<div class="wrap">

			<?php if( get_field('contact_phone', 'option') ): ?>

				<div class="call">Call Us Now <?php the_field('contact_phone', 'option'); ?></div>

			<?php endif; ?>

			<?php if( get_field('social_facebook', 'option') || get_field('social_linkedin', 'option') || get_field('social_yelp', 'option') ): ?>

				<div class="connect">

					<ul>

						<?php if( get_field('social_facebook', 'option') ): ?>

							<li class="facebook">

								<a href="<?php the_field('social_facebook', 'option'); ?>">Facebook</a>

							</li>

						<?php endif; ?>

						<?php if( get_field('social_linkedin', 'option') ): ?>

							<li class="linkedin">

								<a href="<?php the_field('social_linkedin', 'option'); ?>">Linkedin</a>

							</li>

						<?php endif; ?>

						<?php if( get_field('social_yelp', 'option') ): ?>

							<li class="yelp">

								<a href="<?php the_field('social_yelp', 'option'); ?>">Yelp</a>

							</li>

						<?php endif; ?>

					</ul>

				</div>

			<?php endif; ?>

		</div>

	</div>

	<div id="page">

		<div class="wrap">

			<header id="header" role="banner">

				<div id="logo">

					<a href="<?php echo esc_url( home_url( '/') ); ?>">

						<?php bloginfo( 'name' ); ?>

					</a>

				</div>

				<nav id="nav" role="navigation">

					<div class="toggle">

						<span>Menu</span>

					</div>

					<?php $defaults = array(

						'theme_location'	=> 'primary',
						'menu'				=> '',
						'container'			=> '',
						'container_class'	=> '',
						'container_id'		=> '',
						'menu_class'		=> 'menu',
						'menu_id'			=> '',
						'echo'				=> true,
						'fallback_cb'		=> 'wp_page_menu',
						'before'			=> '',
						'after'				=> '',
						'link_before'		=> '',
						'link_after'		=> '',
						'items_wrap'		=> '<ul>%3$s</ul>',
						'depth'				=> 1,
						'walker'			=> ''

					); ?>

					<?php wp_nav_menu( $defaults ); ?>

				</nav>

			</header>