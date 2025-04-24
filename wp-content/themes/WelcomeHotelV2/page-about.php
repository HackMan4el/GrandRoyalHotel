<?php
/*
Template Name: О нас
*/
get_header(); ?>
<main class="page-content page-about">
    <div class="container">
        <h1 class="page-title animate">О Grand Royal Hotel</h1>
        <div class="about-content">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>