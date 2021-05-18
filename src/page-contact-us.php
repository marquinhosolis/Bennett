<?php
/*
Template Name: Contact Us Page
*/
?>

<?php get_header(); ?>
<main class="contactPage">
    <section class="cover sectionRounded coverHome coverContact">
		<div class="sectionRoundedMask">
			<img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
		</div>
		<div class="container">
            <div class="coverHomeImage" data-aos="fade-left">
				<img src="<?php echo get_template_directory_uri(); ?>/images/contact-image.png" alt="">
			</div>
			<div class="coverHomeText" data-aos="fade-right">
				<h1>Contact us</h1>
                <?php the_field('intro_text'); ?>
			</div>
		</div>
    </section>
    <section class="formSectionWrapper">
        <div class="container">
            <div class="formWrapper" data-aos="fade-up">
                <?php echo do_shortcode('[formidable id=1]'); ?>
            </div>
            <address data-aos="fade-up">
                <div class="socialMedia">
                    <a href="<?php theme_variables('facebook'); ?>" target="_blank">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </a>
                    <a href="<?php theme_variables('facebook'); ?>" target="_blank">
                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="phone">
                    <strong>Office</strong><br>
                    <a href="tel:<?php theme_variables('phone'); ?>"><?php theme_variables('phone'); ?></a>
                </div>
                <div class="address">
                    <a href="<?php theme_variables('google_maps_link_north_orlando'); ?>" target="_blank">
                        <strong>North Orlando</strong><br>
                        <?php theme_variables('address_north_orlando'); ?>
                    </a>
                </div>
                <div class="address">
                    <a href="<?php theme_variables('google_maps_link_winter_springs'); ?>" target="_blank">
                        <strong>Winter Springs</strong><br>
                        <?php theme_variables('address_winter_springs'); ?>
                    </a>
                </div>
            </address>
        </div>
    </section>
</main>	
<?php get_footer(); ?>
