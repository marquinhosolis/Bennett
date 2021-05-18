<?php
/*
Template Name: Employee Benefits Page
*/
?>

<?php get_header(); ?>
<main class="employeeBenefitsPage">
    <section class="cover sectionRounded coverHome">
        <div class="sectionRoundedMask">
            <img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
        </div>
        <div class="container">
            <div class="coverHomeText">
                <h1 data-aos="fade-right"><?php the_field('cover_title'); ?></h1>
                <p data-aos="fade-right" data-aos-delay="300"><?php the_field('cover_copy'); ?></p>
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
            <div class="bennetDifferenceTitle" data-aos="fade-up" data-aos-delay="100">
                <h3>How we help you build a better business</h3>
                <p><?php the_field('how_can_help_intro_copy');?></p>
            </div>
            <div class="beneffitsLists" >
                <div class="beneffitsList" data-aos="fade-right">
                    <h4>Products:</h4>
                    <?php the_field('how_can_help_products_list');?>
                </div>
                <div class="beneffitsList" data-aos="fade-left">
                    <h4>Implementation / Services:</h4>
                    <?php the_field('how_can_help_services_list');?>
                </div>
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
                <div class="aboutMissionTitle" data-aos="fade-up">
                    <h3>Our process</h3>
                    <p><?php the_field('our_process_intro_copy');?></p>
                </div>
                <div class="processSlider flexslider">
                    <ul class="slides">
                        <li data-aos="fade-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/employee-benefits-page-1.png" />
                            <div class="processCopy">
                                <?php the_field('text_circle_1');?>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/employee-benefits-page-2.png" />
                            <div class="processCopy">
                                <?php the_field('text_circle_2');?>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/employee-benefits-page-3.png" />
                            <div class="processCopy">
                                <?php the_field('text_circle_3');?>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/employee-benefits-page-4.png" />
                            <div class="processCopy">
                                <?php the_field('text_circle_4');?>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="400">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/employee-benefits-page-5.png" />
                            <div class="processCopy">
                                <?php the_field('text_circle_5');?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>            
        </div>
    </section>
    <section class="insuranceFree">
        <div class="insuranceFreeTitle" data-aos="fade-up">
            <h3>Free Benefit Review</h3>
        </div>        
        <div class="container">
            <div class="insuranceFreeCopy" data-aos="fade-right">
                <h4><?php the_field('free_benefit_review_subtitle');?></h4>
                <div>
                    <?php the_field('free_benefit_review_copy');?>
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
                        <div class="aboutImageCoverImage" style="background-image: url(<?php the_field('free_benefit_review_image');?>)">
                            <div class="content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionRounded homeCta" data-aos="fade-left">
        <div class="sectionRoundedMask">
            <img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
        </div>
        <div class="container">
            <h3>Ready to find the right employee benefits solution for your business?</h3>
            <div class="homeCtaCopy">
                <p>We're here and ready to go the extra step for you.</p>
                <a href="<?php echo site_url('/contact-us/')?>" class="hvr-shutter-out-horizontal btn">Schedule a consultation</a>
            </div>				
        </div>
    </section>
</main>	
<?php get_footer(); ?>
