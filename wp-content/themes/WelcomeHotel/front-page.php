<?php get_header(); ?>
<main class="home-page">
    <section class="hero">
        <div class="container">
            <h1>Welcome to Grand Royal Hotel</h1>
            <p>The only 6-star hotel in the world</p>
            <a href="<?php echo get_permalink(get_page_by_path('booking')); ?>" class="cta-button">Book Now</a>
        </div>
    </section>

    <section class="rooms">
        <div class="container">
            <h2>Our Luxurious Rooms</h2>
            <div class="swiper rooms-slider">
                <div class="swiper-wrapper">
                    <?php
                    $rooms_query = new WP_Query([
                        'post_type' => 'room',
                        'posts_per_page' => 6,
                    ]);
                    if ($rooms_query->have_posts()) :
                        while ($rooms_query->have_posts()) : $rooms_query->the_post();
                    ?>
                        <div class="swiper-slide">
                            <div class="room-card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                                <a href="<?php the_permalink(); ?>" class="cta-button">View Details</a>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <section class="promotions">
        <div class="container">
            <h2>Special Offers</h2>
            <div class="swiper promotions-slider">
                <div class="swiper-wrapper">
                    <?php
                    $promotions_query = new WP_Query([
                        'post_type' => 'promotion',
                        'posts_per_page' => 3,
                    ]);
                    if ($promotions_query->have_posts()) :
                        while ($promotions_query->have_posts()) : $promotions_query->the_post();
                    ?>
                        <div class="swiper-slide">
                            <div class="promotion-card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                                <a href="<?php the_permalink(); ?>" class="cta-button">Learn More</a>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="container">
            <?php echo do_shortcode('[grandroyal_stats]'); ?>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        new Swiper('.rooms-slider', {
            slidesPerView: 3,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                375: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
            },
        });

        new Swiper('.promotions-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    });
</script>
<?php get_footer(); ?>