<?php
/*
Template Name: Individual Insurance Page
*/
?>

<?php get_header(); ?>
<main class="individualInsurancePage">
    <section class="cover sectionRounded coverHome">
        <div class="sectionRoundedMask">
            <img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
        </div>
        <div class="container">
            <div class="coverHomeText">
                <h1 data-aos="fade-right"><?php the_field('cover_title');?></h1>
                <p data-aos="fade-right" data-aos-delay="300"><?php the_field('cover_copy');?></p>
            </div>
            <div class="aboutImageCover" data-aos="fade-left" data-aos-delay="300">
                <div class="aboutImageCoverBgWrapper">
                    <div class="aboutImageCoverBg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/about-us-image-bg.png)">
                        <div class="content"></div>
                    </div>
                </div>
                <div class="aboutImageCoverImageWrapper">
                    <div class="aboutImageCoverImage" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                        <div class="content"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homeHowCanHelp">
        <div class="container">
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
                        <div class="homeHowCanHelpSplitContentImage" style="background-image: url(<?php the_sub_field('box_image');?>);">
                            <img src="<?php the_sub_field('box_image');?>" alt="">
                        </div>
                        <div class="homeHowCanHelpSplitContentCopy">
                            <h4><?php the_sub_field('box_title');?></h4>
                            <?php the_sub_field('box_copy');?>
                        </div> 
                    </div>
                    <?php $i++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="bennetDifference">
        <div class="bennetDifferenceVector bennetDifferenceVectorBefore">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bennet-difference-bg-vector.png" alt="">
        </div>
        <div class="bennetDifferenceVector bennetDifferenceVectorAfter">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bennet-difference-bg-vector.png" alt="">
        </div>
        <div class="container">
            <div class="bennetDifferenceTitle" data-aos="fade-up">
                <h3>How we help individuals</h3>
                <p><?php the_field('how_we_help_intro_copy');?></p>
            </div>
            <div class="bennetDifferenceBoxes">
                <?php if( have_rows('how_we_help_boxes') ): ?>
                    <?php $i = 0; ?>
                    <?php while( have_rows('how_we_help_boxes') ): the_row(); ?>
                        <div class="bennetDifferenceBox">
                            <div class="bennetDifferenceBoxTitle">
                                <div class="bennetDifferenceBoxTitleModal">
                                    <div class="bennetDifferenceBoxTitleModalMask">
                                        <div class="bennetDifferenceBoxTitleModalContent">
                                            <div class="bennetDifferenceBoxTitleModalContentClose">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </div>
                                            <img src="<?php the_sub_field('box_icon'); ?>" alt="">
                                            <div class="bennetDifferenceBoxTitleModalContentCopy">
                                                <h4><?php the_sub_field('box_title'); ?></h4>
                                                <?php the_sub_field('box_copy'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="<?php the_sub_field('box_icon'); ?>" alt="" data-aos="fade-up">
                                <h4 data-aos="fade-up" data-aos-delay="<?php echo $i; ?>"><?php the_sub_field('box_title'); ?></h4>
                                <a href="#">Learn more</a>
                            </div>
                        </div>
                        <?php $i = $i+100; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                        
            </div>
        </div>
    </section>
    <section class="sectionRounded whyChoose process">
        <div class="sectionRoundedMask">
            <img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
        </div>
        <div class="sectionRoundedMask">
            <img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
        </div>
        <div class="container">
            <div class="whyChooseCopy">
                <div class="aboutMissionTitle">
                    <h3>Our process</h3>
                    <p><?php the_field('our_process_intro_copy'); ?></p>
                </div>
                <div class="processSlider flexslider">
                    <ul class="slides">
                        <li data-aos="fade-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/insurances-process-1.png" />
                            <div class="processCopy">
                                <?php the_field('text_circle_1'); ?>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/insurances-process-2.png" />
                            <div class="processCopy">
                                <?php the_field('text_circle_2'); ?>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/insurances-process-3.png" />
                            <div class="processCopy">
                                <?php the_field('text_circle_3'); ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>            
        </div>
    </section>
    <section class="insuranceFree">
        <div class="insuranceFreeTitle" data-aos="fade-up">
            <h3>Unparalleled help and guidance</h3>
        </div>        
        <div class="container">
            <div class="insuranceFreeCopy" data-aos="fade-right">
                <h4><?php the_field('unparalleled_help_subtitle'); ?></h4>
                <div>
                    <?php the_field('unparalleled_help_copy'); ?>
                </div>
            </div>
            <div class="insuranceFreeImage" data-aos="fade-left">
                <div class="aboutImageCover">
                    <div class="aboutImageCoverBgWrapper">
                        <div class="aboutImageCoverBg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/about-us-image-bg.png)">
                            <div class="content"></div>
                        </div>
                    </div>
                    <div class="aboutImageCoverImageWrapper">
                        <div class="aboutImageCoverImage" style="background-image: url(<?php the_field('unparalleled_help_image'); ?>)">
                            <div class="content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homeHowCanHelp individualsBox2">
        <div class="container">
            <?php if( have_rows('last_boxes') ): ?>
                <?php $i = 0; ?>
                <?php while( have_rows('last_boxes') ): the_row(); ?>
                    <?php 
                        if($i % 2 == 0){
                            $direction = 'right';
                        }else{
                            $direction = 'left';
                        }
                    ?>
                    <div class="homeHowCanHelpSplitContent" data-aos="fade-<?php echo $direction; ?>">
                        <div class="homeHowCanHelpSplitContentImage" style="background-image: url(<?php the_sub_field('box_image');?>);">
                            <img src="<?php the_sub_field('box_image');?>" alt="">
                        </div>
                        <div class="homeHowCanHelpSplitContentCopy">
                            <h4><?php the_sub_field('box_title');?></h4>
                            <?php the_sub_field('box_copy');?>
                        </div> 
                    </div>
                    <?php $i++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="testimonials">
        <div class="testimonialsTitle" data-aos="fade-up">
            <h3>What our clients are saying</h3>
        </div>
        <div class="container">
            <div class="flexslider testimonialsWrapper" data-aos="fade-up">
                <ul class="slides">
                    <?php if( have_rows('testimonials') ): ?>
                        <?php while( have_rows('testimonials') ): the_row(); ?>
                            <li>
                                <div class="testimonialBox">
                                    <div class="testimonialBoxQuote">
                                        “
                                    </div>
                                    <div class="testimonialBoxCopy">
                                        <?php the_sub_field('testimonial_copy');?>
                                        
                                    </div>
                                    <div class="readMoreTestimonial">
                                        <a href="#">read more <i class='fa fa-hand-pointer-o' aria-hidden='true'></i></a>
                                    </div>
                                    <div class="testimonialFooter"> 
                                        <div class="testimonialBoxName">
                                            <strong><?php the_sub_field('testimonial_name');?></strong><br>
                                            <?php the_sub_field('testimonial_title');?>
                                        </div>
                                        <div class="testimonialBoxImage" style="background-image: url(<?php the_sub_field('testimonial_image');?>);">
                                            <div class="content"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
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
            <h3>Ready to find the right insurance solution?</h3>
            <div class="homeCtaCopy">
                <p>We're here and ready to go the extra step for you.</p>
                <a href="<?php echo site_url('/contact-us/')?>" class="hvr-shutter-out-horizontal btn">Schedule a consultation</a>
            </div>				
        </div>
    </section>
</main>	
<?php get_footer(); ?>
