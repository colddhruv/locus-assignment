<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Locus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'locus'); ?></a> -->

		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">
					<?php if (has_custom_logo()) :  ?>
						<?php
						$custom_logo_id = get_theme_mod('custom_logo');
						$custom_logo_data = wp_get_attachment_image_src($custom_logo_id, 'full');
						$custom_logo_url = $custom_logo_data[0];
						?>

						<a class="navbar-brand" href="<?php echo esc_url(home_url('/', 'http')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>" rel="home">
							<img src="<?php echo esc_url($custom_logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
						</a>
					<?php else : ?>
						<div class="site-name"><?php bloginfo('name'); ?></div>
					<?php endif; ?>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php
						wp_nav_menu(
							array(
								'theme_location'    => 'menu-1',
								'depth'             => 2,
								'container'         => 'ul',
								'menu_class'        => 'navbar-nav me-auto mb-2 mb-lg-0 small',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
							)
						);
						?>
						<ul class="nav nav-pills">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
									<img src="<?php echo get_template_directory_uri(); ?>/images/english.png" alt="English">
								</a>
								<ul class="locus-lang dropdown-menu">
									<li><a class="dropdown-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/french.png" alt="French"></a></li>
									<li><a class="dropdown-item" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/german.png" alt="German"></a></li>
								</ul>
							</li>
						</ul>
						<button type="button" class="btn btn-primary">Schedule a Demo</button>
					</div>
				</div>
			</nav>
		</header>