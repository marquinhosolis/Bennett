<!doctype html>
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="utf-8">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
		<meta name="language" content="PT-BR">
		<meta content="pt-br" http-equiv="content-language">
		<link rel="stylesheet" href="https://use.typekit.net/zzh6jmq.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/lib/hamburgers.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/lib/hover.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css" integrity="sha512-c7jR/kCnu09ZrAKsWXsI/x9HCO9kkpHw4Ftqhofqs+I2hNxalK5RGwo/IAhW3iqCHIw55wBSSCFlm8JP0sw2Zw==" crossorigin="anonymous" />
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css">
		<?php wp_head(); ?> 
	</head>
	<body>
<header>
	<div class="container">
		<div class="logoHeader" data-aos="fade-down">
		<a href="<?php echo site_url(); ?>">
			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/images/bennett-logo-white.png" media="(min-width: 768px)">
				<img src="<?php echo get_template_directory_uri(); ?>/images/bennett-logo-color.png" alt="Bennet Insurance Logo">
			</picture>
		</a>
	</div>
	<div class="hamburger hamburger--squeeze" data-aos="fade-right">
		<div class="hamburger-box">
		<div class="hamburger-inner"></div>
		</div>
	</div>
	<nav class="desktopNav" data-aos="fade-down">
		<?php wp_nav_menu( array( 'theme_location' => 'mainNav' ) ); ?>
	</nav>
	</div>
</header>
<nav class="mobileNav">
	<?php wp_nav_menu( array( 'theme_location' => 'mainNav' ) ); ?>
</nav>
<div class='header--fixed'>
	<div class="container">
		<div class="logoHeader">
			<a href="<?php echo site_url(); ?>">
				<picture>
					<img src="<?php echo get_template_directory_uri(); ?>/images/bennett-logo-color.png" alt="Bennet Insurance Logo">
				</picture>
			</a>
		</div>
		<nav class="desktopNav">
			<?php wp_nav_menu( array( 'theme_location' => 'mainNav' ) ); ?>
		</nav>
	</div>
</div>	