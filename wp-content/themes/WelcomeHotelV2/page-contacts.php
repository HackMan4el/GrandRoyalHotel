<?php
/*
Template Name: Контакты
*/
get_header(); ?>
<main class="page-content page-contacts">
    <div class="container">
        <h1 class="page-title animate">Свяжитесь с нами</h1>
        <div class="contacts-content">
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