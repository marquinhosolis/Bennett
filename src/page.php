<?php
/*
Template Name: Single Page
*/
?>

<?php get_header(); ?>

<main class="singlePage">
    <div class="singlePageCover">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="container">
        <?php the_content(); ?>
    </div>
    <br>
    <br>
</main>	
<?php get_footer(); ?>
