<?php get_header(); ?>
<main class="home-page">
    <section class="hero">
        <div class="container">
            <h1 class="animate">Добро пожаловать в Grand Royal Hotel</h1>
            <p class="animate">Единственный 6-звёздочный отель в мире</p>
            <a href="<?php echo get_permalink(get_page_by_path('booking')); ?>" class="cta-button animate">Забронировать</a>
        </div>
    </section>

    <section class="rooms">
        <div class="container">
            <h2 class="animate">Наши роскошные номера</h2>
            <div class="swiper rooms-slider">
                <div class="swiper-wrapper">
                    <?php
                    $rooms_query = new WP_Query([
                        'post_type' => 'room',
                        'posts_per_page' => 4,
                    ]);
                    if ($rooms_query->have_posts()) :
                        while ($rooms_query->have_posts()) : $rooms_query->the_post();
                    ?>
                        <div class="swiper-slide">
                            <div class="room-card animate">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('hotel-thumb'); ?>" alt="<?php the_title(); ?>" class="room-image">
                                <?php endif; ?>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                                <a href="<?php the_permalink(); ?>" class="cta-button">Подробнее</a>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>Номера пока не добавлены.</p>';
                    endif;
                    ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="promotions">
        <div class="container">
            <h2 class="animate">Специальные предложения</h2>
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
                            <div class="promotion-card animate scale">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('hotel-thumb'); ?>" alt="<?php the_title(); ?>" class="promotion-image">
                                <?php endif; ?>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                                <a href="<?php the_permalink(); ?>" class="cta-button">Узнать больше</a>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>Акции пока не добавлены.</p>';
                    endif;
                    ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <h2 class="animate">Отзывы гостей</h2>
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
                            <div class="review-card animate rotate">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('review-avatar'); ?>" alt="<?php the_title(); ?>" class="review-avatar">
                                <?php endif; ?>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>Отзывы пока не добавлены.</p>';
                    endif;
                    ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2 class="animate">Наши эксклюзивные услуги</h2>
            <div class="swiper services-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-item animate">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spa.jpg" alt="Спа" class="service-image">
                            <h3>Спа и велнес</h3>
                            <p>Погрузитесь в мир релакса с нашими первоклассными процедурами в роскошном спа-центре.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item animate" style="animation-delay: 0.2s;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant.jpg" alt="Ресторан" class="service-image">
                            <h3>Ресторан с мишленовскими звёздами</h3>
                            <p>Насладитесь кулинарными шедеврами от лучших шеф-поваров в нашем ресторане.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item animate" style="animation-delay: 0.4s;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/concierge.jpg" alt="Консьерж" class="service-image">
                            <h3>Персональный консьерж</h3>
                            <p>Ваши желания исполняются 24/7 нашей командой консьержей.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="booking">
        <div class="container">
            <h2 class="animate">Забронируйте ваше пребывание</h2>
            <div class="booking-form animate scale">
                <?php echo do_shortcode('[contact-form-7 id="YOUR_BOOKING_FORM_ID" title="Форма бронирования"]'); ?>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="container">
            <h2 class="animate">Наши достижения</h2>
            <?php echo do_shortcode('[grandroyal_stats]'); ?>
            <script>
            document.addEventListener('DOMContentLoaded', () => {
                const statsObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            document.querySelectorAll('.stat-number').forEach(stat => {
                                const target = parseInt(stat.getAttribute('data-count'));
                                let current = 0;
                                const increment = target / 100;
                                const updateCounter = () => {
                                    current += increment;
                                    stat.textContent = Math.ceil(current);
                                    if (current < target) {
                                        requestAnimationFrame(updateCounter);
                                    } else {
                                        stat.textContent = target;
                                    }
                                };
                                updateCounter();
                            });
                            statsObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });
                statsObserver.observe(document.querySelector('.stats-section'));
            });
            </script>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2 class="animate">Свяжитесь с нами</h2>
            <div class="contact-content">
                <div class="contact-info animate">
                    <p><strong>Адрес:</strong> ул. Роскоши, 123, Москва, Россия</p>
                    <p><strong>Телефон:</strong> +7 (495) 123-45-67</p>
                    <p><strong>Email:</strong> info@grandroyalhotel.com</p>
                </div>
                <div class="contact-form animate">
                    <?php echo do_shortcode('[contact-form-7 id="YOUR_CONTACT_FORM_ID" title="Форма контактов"]'); ?>
                </div>
            </div>
            <div class="map animate scale">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.234567890123!2d37.617299!3d55.755826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTXCsDQ1JzIwLjkiTiAzN8KwMzcnMDIuMyJF!5e0!3m2!1sru!2sru!4v1631234567890" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>