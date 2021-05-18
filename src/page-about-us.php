<?php
/*
Template Name: About Us Page
*/
?>

<?php get_header(); ?>
<main class="ourAgencyPage">
    <section class="cover sectionRounded coverHome">
        <div class="sectionRoundedMask">
            <img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
        </div>
        <div class="container">
            <div class="coverHomeText">
                <h1 data-aos="fade-right"><?php the_title(); ?></h1>
                <h2 data-aos="fade-right" data-aos-delay="300"><?php the_field('page_subtitle'); ?></h2>
                <p data-aos="fade-right" data-aos-delay="300"><?php the_field('page_intro_copy'); ?></p>
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
            <div class="homeHowCanHelpTitle" data-aos="fade-up">
                <h3>Delivering Results & Creative Thinking to Employee Benefits</h3>
            </div>
            <div class="homeHowCanHelpSplitContent" data-aos="fade-right">
                <?php if( have_rows('delivering_results_box') ): ?>
                    <?php while( have_rows('delivering_results_box') ): the_row(); ?>
                        <div class="homeHowCanHelpSplitContentCopy">
                            <?php the_sub_field('delivering_results_box_copy');?>
                        </div>
                        <div class="homeHowCanHelpSplitContentImage" style="background-image: url(<?php the_sub_field('delivering_results_box_photo');?>);">
                            <img src="<?php the_sub_field('delivering_results_box_photo');?>" alt="">
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
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
                <h3>The Bennett Insurance difference</h3>
                <p>Learn how we earn <strong><i>and keep</i></strong> the trust of our clients.</p>
            </div>
            <div class="bennetDifferenceBoxes">
                <?php if( have_rows('differences_boxes') ): ?>
                    <?php $i = 0; ?>
                    <?php while( have_rows('differences_boxes') ): the_row(); ?>
                    <?php 
                        if($i % 2 == 0){
                            $direction = 'right';
                        }else{
                            $direction = 'left';
                        }
                    ?>
                        <div class="bennetDifferenceBox" data-aos="fade-<?php echo $direction; ?>">
                            <div class="bennetDifferenceBoxTitle">
                                <div class="bennetDifferenceBoxIcon">
                                    <img src="<?php the_sub_field('difference_icon');?>" alt="">
                                </div>
                                <h4><?php the_sub_field('difference_title');?></h4>
                            </div>
                            <div class="bennetDifferenceBoxCopy">
                                <?php the_sub_field('difference_copy');?>
                            </div>
                        </div>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="bennetDifferenceButton">
            <a href="<?php echo site_url('/employee-benefits/'); ?>" class="hvr-shutter-out-horizontal btn">Find your customized employee <br> benefit solution now</a>
        </div>
    </section>
    <section class="sectionRounded whyChoose aboutMission">
        <div class="sectionRoundedMask">
            <img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
        </div>
        <div class="sectionRoundedMask">
            <img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
        </div>
        <div class="container">
            <div class="whyChooseCopy">
                <div class="aboutMissionTitle" data-aos="fade-up">
                    <h3>Our mission</h3>
                    <p><?php the_field('our_mission_copy');?></p>
                </div>
                <div class="aboutMissionValues">
                    <div class="aboutMissionTitle" data-aos="fade-up">
                        <h3>The values we uphold</h3>
                    </div>
                    <div class="aboutMissionValuesWrapper">
                        <?php if( have_rows('values') ): 
                            $i = 0; ?>
                            <?php while( have_rows('values') ): the_row(); ?>
                                <div class="aboutMissionValue" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>">
                                    <h4><?php the_sub_field('value_title');?></h4>
                                    <p><?php the_sub_field('value_copy');?></p>
                                </div>
                                <?php $i = $i+100;?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>            
        </div>
    </section>
    <section class="team">
        <div class="container">
            <div class="teamTitle" data-aos="fade-up">
                <h3>Meet the leadership team</h3>
            </div>
            <?php if( have_rows('team_members') ): ?>
                <?php while( have_rows('team_members') ): the_row(); ?>
                    <div class="teamMember">
                        <div class="teamMemberModal">
                            <div class="teamMemberModalMask">
                                <div class="teamMemberModalContent">
                                    <div class="teamMemberModalContentClose">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                    <div class="teamMemberModalContentHeader">
                                        <div class="teamMemberModalContentHeaderPhoto" style="background-image: url(<?php the_sub_field('team_member_photo');?>);">
                                            <div class="content"></div>
                                        </div>
                                        <div class="teamMemberModalContentHeaderData">
                                            <h4><?php the_sub_field('team_member_name');?></h4>
                                            <div class="teamMemberModalContentHeaderDataCopy">
                                                <span><?php the_sub_field('team_member_title');?></span>
                                                <?php if( get_sub_field('team_member_email') ): ?>
                                                    <a href="mailto:<?php the_sub_field('team_member_email'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                                <?php endif; ?>
                                                <?php if( get_sub_field('team_member_linkedin') ): ?>
                                                    <a href="<?php the_sub_field('team_member_linkedin'); ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                                <?php endif; ?> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teamMemberModalContentCopy">
                                        <?php the_sub_field('team_member_full_copy');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teamMemberPhoto" style="background-image: url(<?php the_sub_field('team_member_photo');?>);" data-aos="fade-right">
                            <img src="<?php the_sub_field('team_member_photo');?>" alt="<?php the_sub_field('team_member_name');?>">
                        </div>
                        <div class="teamMemberCopy" data-aos="fade-left">
                            <h4><?php the_sub_field('team_member_name');?></h4>
                            <div class="teamMemberTitle">
                                <span><?php the_sub_field('team_member_title');?></span> 
                                <?php if( get_sub_field('team_member_email') ): ?>
                                    <a href="mailto:<?php the_sub_field('team_member_email'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                <?php endif; ?>
                                <?php if( get_sub_field('team_member_linkedin') ): ?>
                                    <a href="<?php the_sub_field('team_member_linkedin'); ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                <?php endif; ?> 
                            </div>
                            <div class="teamMemberText">
                                <?php the_sub_field('team_member_intro_text');?>
                                <div class="teamMemberTextReadMore">
                                    <a href="#">Read more <i class="fa fa-hand-pointer-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="sectionRounded homeCta" data-aos="fade-left">
        <div class="sectionRoundedMask">
            <img src="<?php echo get_template_directory_uri(); ?>/images/rounded-mask-white.png" alt="">
        </div>
        <div class="container">
            <?php if( have_rows('page_cta') ): ?>
                <?php while( have_rows('page_cta') ): the_row(); ?>
                    <h3><?php the_sub_field('page_cta_title');?></h3>
                    <div class="homeCtaCopy">
                        <p><?php the_sub_field('page_cta_text');?></p>
                        <a href="<?php echo site_url('/contact-us/')?>" class="hvr-shutter-out-horizontal btn">Schedule a consultation</a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>				
        </div>
    </section>
</main>	
<?php get_footer(); ?>
