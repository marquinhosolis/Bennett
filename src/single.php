<?php
/*
Template Name: Single Post
*/
?>

<?php get_header(); ?>
    <main class="singlePost">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="postNav">
                <div class="previous_post_link">
                    <?php previous_post_link( '%link','<i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous Blog' ) ?>
                </div>
                <div class="next_post_link">
                    <?php next_post_link( '%link','Next Blog <i class="fa fa-long-arrow-right" aria-hidden="true"></i>' ) ?>
                </div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>