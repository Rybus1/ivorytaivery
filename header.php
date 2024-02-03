<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top: 0 !important;">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="color-scheme" content="only light">
	<link rel="icon" href="<?= get_site_url() ?>/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?= get_site_url() ?>/favicon.ico" type="image/x-icon" />
	<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>


</head>

<body>
	<main <?php body_class(); ?>>
		<div class="non-footer">

			<header class="header non-transparent">
				<div class="header-container">
					<div class="header__left-side">
						<?php $header_logo = get_field('logo_splitted', 'options');
						if ($header_logo) : ?>
							<div class="header__logo-container">
								<?php if (is_front_page()) : ?>
									<div class="header__logo-icon">
										<img class="header__logo header__logo_0" src="<?= $header_logo['logo_initial_state']['sizes']['medium'] ?>" alt="" width="144" height="28">
										<?php if ($header_logo['logo_first']) : ?>
											<img class="header__logo header__logo_1 not-opaque" src="<?= $header_logo['logo_first']['sizes']['medium'] ?>" alt="" width="144" height="28">
										<?php endif; ?>
										<?php if ($header_logo['logo_second']) : ?>
											<img class="header__logo header__logo_2 not-opaque" src="<?= $header_logo['logo_second']['sizes']['medium'] ?>" alt="" width="144" height="28">
										<?php endif; ?>
										<?php if ($header_logo['logo_third']) : ?>
											<img class="header__logo header__logo_3 not-opaque" src="<?= $header_logo['logo_third']['sizes']['medium'] ?>" alt="" width="144" height="28">
										<?php endif; ?>
									</div>
									<?php if ($header_logo['logo_text']) : ?>
										<img src="<?= $header_logo['logo_text']['sizes']['medium'] ?>" alt="" class="header__logo-text">
									<?php endif; ?>
								<?php else : ?>
									<a href="<?= get_home_url() ?>" class="header__logo-wrap">
										<div class="header__logo-icon">
											<img class="header__logo header__logo_0" src="<?= $header_logo['logo_initial_state']['sizes']['medium'] ?>" alt="" width="144" height="28">
											<?php if ($header_logo['logo_first']) : ?>
												<img class="header__logo header__logo_1 not-opaque" src="<?= $header_logo['logo_first']['sizes']['medium'] ?>" alt="" width="144" height="28">
											<?php endif; ?>
											<?php if ($header_logo['logo_second']) : ?>
												<img class="header__logo header__logo_2 not-opaque" src="<?= $header_logo['logo_second']['sizes']['medium'] ?>" alt="" width="144" height="28">
											<?php endif; ?>
											<?php if ($header_logo['logo_third']) : ?>
												<img class="header__logo header__logo_3 not-opaque" src="<?= $header_logo['logo_third']['sizes']['medium'] ?>" alt="" width="144" height="28">
											<?php endif; ?>
										</div>
										<?php if ($header_logo['logo_text']) : ?>
											<img src="<?= $header_logo['logo_text']['sizes']['medium'] ?>" alt="" class="header__logo-text">
										<?php endif; ?>
									</a>
								<?php endif; ?>
							</div>
						<?php endif; ?>

						<nav class="header__navigation-block">
							<?php wp_nav_menu(array(
								'menu' => 'Header menu',
								'container' => false,
							)); ?>

							<?php $header_connect = get_field('header_connect', 'options');
							if ($header_connect) : ?>
								<span class="header__connect popup-open-button end-square font-h5 mobile-only">
									<span class="header__connect-text"><?= $header_connect; ?></span>
								</span>
							<?php endif; ?>

							<img class="header__decoration header__decoration_first mobile-only" src="<?= get_stylesheet_directory_uri(); ?>/build/static/images/general/paw.svg" alt="">
							<img class="header__decoration header__decoration_second mobile-only" src="<?= get_stylesheet_directory_uri(); ?>/build/static/images/general/pursuit.svg" alt="">
						</nav>
					</div>

					<?php $header_menu_open = get_field('header_menu_open', 'options');
					if ($header_menu_open) : ?>
						<div class="header__burger mobile-only font-h5">
							<span class="squares"></span>
							<span class="header__burger-open-text"><?= $header_menu_open; ?></span>
							<?php $header_menu_close = get_field('header_menu_close', 'options');
							if ($header_menu_close) : ?>
								<span class="header__burger-close-text hidden"><?= $header_menu_close; ?></span>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<?php $header_request = get_field('header_request', 'options');
					if ($header_request) : ?>
						<button type="button" class="header__request end-square pc-only popup-open-button font-h5">
							<span class="header__request-text"><?= $header_request; ?></span>
						</button>
					<?php endif; ?>
				</div>
			</header>

			<div class='main-wrap'>