<?php
/*
Template Name: Бронирование
*/
get_header(); ?>
<main class="page-content page-booking">
    <div class="container">
        <h1 class="page-title animate">Забронируйте ваше пребывание</h1>
        <div class="booking-content">
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