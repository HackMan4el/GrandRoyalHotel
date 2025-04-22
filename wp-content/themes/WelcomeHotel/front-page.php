<?php get_header(); ?>
<main class="home-page">
    <section class="hero">
        <div class="container">
            <h1 class="animate" data-animate="fadeInUp">Welcome to Grand Royal Hotel</h1>
            <p class="animate" data-animate="fadeInUp" data-delay="0.2">The only 6-star hotel in the world</p>
            <a href="<?php echo get_permalink(get_page_by_path('booking')); ?>" class="cta-button animate" data-animate="fadeInUp" data-delay="0.4">Book Now</a>
        </div>
    </section>

    <section class="rooms">
        <div class="container">
            <h2 class="animate" data-animate="fadeIn">Our Luxurious Rooms</h2>
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
                            <div class="room-card animate" data-animate="fadeInUp">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="room-image">
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
            <h2 class="animate" data-animate="fadeIn">Special Offers</h2>
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
                            <div class="promotion-card animate" data-animate="fadeInUp">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="promotion-image">
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

    <section class="reviews">
        <div class="container">
            <h2 class="animate" data-animate="fadeIn">Guest Reviews</h2>
            <div class="swiper reviews-slider">
                <div class="swiper-wrapper">
                    <?php
                    $reviews_query = new WP_Query([
                        'post_type' => 'review',
                        'posts_per_page' => 4,
                    ]);
                    if ($reviews_query->have_posts()) :
                        while ($reviews_query->have_posts()) : $reviews_query->the_post();
                    ?>
                        <div class="swiper-slide">
                            <div class="review-card animate" data-animate="fadeInUp">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>" class="review-avatar">
                                <?php endif; ?>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
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

    <section class="services">
        <div class="container">
            <h2 class="animate" data-animate="fadeIn">Our Exclusive Services</h2>
            <div class="services-grid">
                <div class="service-item animate" data-animate="fadeInUp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spa.jpg" alt="Spa" class="service-image">
                    <h3>Spa & Wellness</h3>
                    <p>Indulge in world-class treatments and relaxation.</p>
                </div>
                <div class="service-item animate" data-animate="fadeInUp" data-delay="0.2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant.jpg" alt="Restaurant" class="service-image">
                    <h3>Michelin-Star Dining</h3>
                    <p>Experience culinary masterpieces by top chefs.</p>
                </div>
                <div class="service-item animate" data-animate="fadeInUp" data-delay="0.4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/concierge.jpg" alt="Concierge" class="service-image">
                    <h3>Personal Concierge</h3>
                    <p>Your every wish, fulfilled 24/7.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="booking">
        <div class="container">
            <h2 class="animate" data-animate="fadeIn">Book Your Stay</h2>
            <div class="booking-form animate" data-animate="fadeInUp">
                <?php echo do_shortcode('[hotel_booking]'); ?>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2 class="animate" data-animate="fadeIn">Contact Us</h2>
            <div class="contact-content">
                <div class="contact-info animate" data-animate="fadeInUp">
                    <p><strong>Address:</strong> 123 Luxury Street, Moscow, Russia</p>
                    <p><strong>Phone:</strong> +7 (495) 123-45-67</p>
                    <p><strong>Email:</strong> info@grandroyalhotel.com</p>
                </div>
                <div class="contact-form animate" data-animate="fadeInUp" data-delay="0.2">
                    <?php echo do_shortcode('[contact-form-7 id="b49bed0" title="Contact Form"]'); ?>
                </div>
            </div>
            <div class="map animate" data-animate="fadeIn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map-placeholder.jpg" alt="Map Placeholder" class="map-image">
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
        // GSAP Анимации
        gsap.utils.toArray('.animate').forEach(element => {
            const animation = element.dataset.animate;
            const delay = element.dataset.delay || 0;
            gsap.fromTo(element, {
                opacity: 0,
                y: animation === 'fadeInUp' ? 50 : 0,
                scale: animation === 'fadeIn' ? 0.95 : 1,
            }, {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 1,
                delay: delay,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: element,
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse', // Скрытие при обратном скролле
                },
            });
        });

        // Слайдер номеров
        new Swiper('.rooms-slider', {
            slidesPerView: 3,
            spaceBetween: 20,
            loop: true,
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
                1280: {
                    slidesPerView: 3,
                },
            },
        });

        // Слайдер акций
        new Swiper('.promotions-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        // Слайдер отзывов
        new Swiper('.reviews-slider', {
            slidesPerView: 2,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                375: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                1280: {
                    slidesPerView: 2,
                },
            },
        });
    });
</script>
<?php get_footer(); ?>