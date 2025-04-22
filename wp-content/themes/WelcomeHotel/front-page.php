<?php get_header(); ?>
<main class="home-page">
    <section class="hero">
        <div class="container">
            <h1>Welcome to Grand Royal Hotel</h1>
            <p>The only 6-star hotel in the world</p>
            <a href="<?php echo get_permalink(get_page_by_path('booking')); ?>" class="cta-button">Book Now</a>
        </div>
    </section>
    <!-- Другие секции (номера, акции, отзывы) добавим позже -->
</main>
<?php get_footer(); ?>