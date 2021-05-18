<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
	<main class="homePage">
		<section class="cover sectionRounded coverHome">
			<div class="sectionRoundedMask">
				<img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
			</div>
			<div class="container">
				<div class="coverHomeText">
					<h1 data-aos="fade-right"><?php the_field('cover_title'); ?></h1>
					<h2 data-aos="fade-right" data-aos-delay="300"><?php the_field('cover_copy'); ?></h2>
					<a href="<?php echo site_url('/contact-us/'); ?>" class="hvr-shutter-out-horizontal btn" data-aos="fade-right" data-aos-delay="300">Schedule a consultation</a>
				</div>
				<div class="aboutImageCover" data-aos="fade-left" data-aos-delay="300">
                <div class="aboutImageCoverBgWrapper">
                    <div class="aboutImageCoverBg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/about-us-image-bg.png)">
                        <div class="content"></div>
                    </div>
                </div>
                <div class="aboutImageCoverImageWrapper">
					<div class="aboutImageCoverImage">
						<img src="<?php echo get_template_directory_uri(); ?>/images/lightbulb--dark.png" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/images/lightbulb--light.png" alt="">
					</div>
				</div>
				
            </div>
			</div>
		</section>
		<section class="homeHowCanHelp">
			<div class="container">
				<div class="homeHowCanHelpTitle" data-aos="fade-up">
					<h3><?php the_field('section_1_title'); ?></h3>
					<p><?php the_field('section_1_intro_copy'); ?></p>
				</div>
				<?php if( have_rows('boxes') ): ?>
					<?php $i = 0; ?>
					<?php while( have_rows('boxes') ): the_row(); ?>
						<?php 
							if($i % 2 == 0){
								$direction = 'right';
							}else{
								$direction = 'left';
							}
						?>
						<div class="homeHowCanHelpSplitContent" data-aos="fade-<?php echo $direction; ?>">
							<div class="homeHowCanHelpSplitContentCopy">
								<h4><?php the_sub_field('box_title');?></h4>
								<?php the_sub_field('box_copy');?>
								<a href="<?php the_sub_field('button_link');?>" class="hvr-shutter-out-horizontal btn"><?php the_sub_field('button_label');?></a>
							</div>
							<div class="homeHowCanHelpSplitContentImage" style="background-image: url(<?php the_sub_field('box_image');?>);">
								<img src="<?php the_sub_field('box_image');?>" alt="">
							</div>
						</div>
						<?php $i++; ?>
					<?php endwhile; ?>
                <?php endif; ?>
			</div>
		</section>
		<section class="sectionRounded whyChoose">
			<div class="sectionRoundedMask">
				<img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
			</div>
			<div class="sectionRoundedMask">
				<img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
			</div>
			<div class="container">
				<div class="whyChooseCopy" data-aos="fade-right">
					<h3><?php the_field('why_choose_title'); ?></h3>
					<?php the_field('why_choose_copy'); ?>
					<a href="<?php echo site_url('/about-us/'); ?>" class="hvr-shutter-out-horizontal btn">Learn more about us</a>
				</div>
				<div class="whyChooseImage" data-aos="fade-left">
					<img src="<?php the_field('why_choose_image'); ?>" alt="">
				</div>
				
			</div>
		</section>
		<section class="sectionRounded homeAboutNumbers">
			<div class="sectionRoundedMask">
				<img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
			</div>
			<div class="container">
				<ul>
					<?php if( have_rows('numbers') ): ?>
					<?php $i = 0; ?>
						<?php while( have_rows('numbers') ): the_row(); ?>
							<li data-aos="fade-up" data-aos-delay="<?php echo $i; ?>">
								<h3><?php the_sub_field('number_title');?></h3>
								<p><?php the_sub_field('number_copy');?></p>
							</li>
							<?php $i = $i + 100; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</section>
		<section class="carriersHome">
			<div class="carriersHomeTitle" data-aos="fade-up">
				<h3>Our carriers</h3>
				<p><?php the_field('carriers_copy'); ?></p>
			</div>
			<div class="container">
				

				<div class="flexslider carousel carriersCarousel">
					<ul class="slides">
						<?php if( have_rows('carriers_logos') ): ?>
							<?php $i = 0; ?>
							<?php while( have_rows('carriers_logos') ): the_row(); ?>
								<li data-aos="fade-up" data-aos-delay="<?php echo $i; ?>">
									<!-- <a href="<?php the_sub_field('logo_link');?>">
										<img src="<?php the_sub_field('logo_image');?>" alt="">
									</a> -->
									<img src="<?php the_sub_field('logo_image');?>" alt="">
								</li>
								<?php $i = $i + 100; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>

				
			</div>
		</section>
		<section class="sectionRounded homeCta" data-aos="fade-left">
			<div class="sectionRoundedMask">
				<img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
			</div>
			<div class="container">
				<h3>Ready to find the right benefits package or insurance solution?</h3>
				<div class="homeCtaCopy">
					<p>In 30 minutes, we can review your current policy and let you know how we can offer a better solution.</p>
					<a href="<?php echo site_url('/contact-us/')?>" class="hvr-shutter-out-horizontal btn">Schedule a consultation</a>
				</div>				
			</div>
		</section>
	</main>
<?php get_footer(); ?>