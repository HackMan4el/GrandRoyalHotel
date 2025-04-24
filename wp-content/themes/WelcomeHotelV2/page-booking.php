<?php
/*
Template Name: Booking
*/
get_header(); ?>
<main class="page-content">
    <div class="container">
        <h1 class="page-title animate">Book Your Stay</h1>
        <div class="booking-form animate scale">
            <?php
            // Выводим контент страницы из Gutenberg (например, описание)
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
            <?php echo do_shortcode('[contact-form-7 id="YOUR_BOOKING_FORM_ID" title="Booking Form"]'); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>