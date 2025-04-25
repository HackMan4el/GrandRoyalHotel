<?php
/*
Template Name: Акции
*/
get_header(); ?>
<main class="page-content page-promotions">
    <div class="container">
        <h1 class="page-title animate">Специальные предложения</h1>
        <div class="promotions-content">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
            <div class="promotions-catalog">
                <?php
                $promotions_query = new WP_Query([
                    'post_type' => 'promotion',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                ]);
                // Отладка
                echo '<p>Найдено записей: ' . $promotions_query->found_posts . '</p>';
                if ($promotions_query->have_posts()) :
                    while ($promotions_query->have_posts()) : $promotions_query->the_post();
                ?>
                    <div class="promotion-card animate scale">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('hotel-thumb'); ?>" alt="<?php the_title(); ?>" class="promotion-image">
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                        <a href="<?php the_permalink(); ?>" class="cta-button">Подробнее</a>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>Акции пока не добавлены.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>