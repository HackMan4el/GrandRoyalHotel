<?php
/*
Template Name: Номерной Фонд
*/
get_header(); ?>
<main class="page-content">
    <div class="container">
        <h1 class="page-title animate">Наши номера</h1>
        <div class="rooms-content">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
            <div class="swiper rooms-page-slider">
                <div class="swiper-wrapper">
                    <?php
                    $rooms_query = new WP_Query([
                        'post_type' => 'room',
                        'posts_per_page' => -1,
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
    </div>
</main>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const roomsPageSlider = new Swiper('.rooms-page-slider', {
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            375: {
                slidesPerView: 1,
            },
        },
    });
});
</script>
<?php get_footer(); ?>