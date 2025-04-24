<?php
/*
Template Name: Услуги
*/
get_header(); ?>
<main class="page-content">
    <div class="container">
        <h1 class="page-title animate">Наши услуги</h1>
        <div class="services-content">
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