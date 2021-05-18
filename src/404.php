<?php get_header(); ?>

<main class="page404">
	<section class="cover sectionRounded coverHome cover404">
		<div class="sectionRoundedMask">
			<img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
		</div>
		<div class="container">
			<div class="coverHomeText">
				<h1>404</h1>
				<h2>Sorry, this page couldn’t be found.</h2>
				<a href="<?php echo site_url(); ?>" class="btn">Back to Home</a>
			</div>
			<div class="coverHomeImage">
				<img src="<?php echo get_template_directory_uri(); ?>/images/404-image.png" alt="">
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
