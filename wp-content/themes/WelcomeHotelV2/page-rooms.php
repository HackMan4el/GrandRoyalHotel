<?php
/*
Template Name: Номерной Фонд
*/
get_header(); ?>
<main class="page-content page-rooms">
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
            <div class="rooms-catalog">
                <?php
                $rooms_query = new WP_Query([
                    'post_type' => 'room',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                ]);
                // Отладка
                echo '<p>Найдено записей: ' . $rooms_query->found_posts . '</p>';
                if ($rooms_query->have_posts()) :
                    while ($rooms_query->have_posts()) : $rooms_query->the_post();
                ?>
                    <div class="room-card animate">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('hotel-thumb'); ?>" alt="<?php the_title(); ?>" class="room-image">
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                        <a href="<?php the_permalink(); ?>" class="cta-button">Подробнее</a>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>Номера пока не добавлены.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>