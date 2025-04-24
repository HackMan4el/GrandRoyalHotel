<?php
/*
Template Name: Contacts
*/
get_header(); ?>
<main class="page-content">
    <div class="container">
        <h1 class="page-title animate">Contact Us</h1>
        <div class="contact-content">
            <div class="contact-info animate">
                <?php
                // Выводим контент страницы из Gutenberg
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>
            <div class="contact-form animate">
                <?php echo do_shortcode('[contact-form-7 id="YOUR_CONTACT_FORM_ID" title="Contact Form"]'); ?>
            </div>
        </div>
        <div class="map animate scale">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.234567890123!2d37.617299!3d55.755826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTXCsDQ1JzIwLjkiTiAzN8KwMzcnMDIuMyJF!5e0!3m2!1sen!2sru!4v1631234567890" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</main>
<?php get_footer(); ?>