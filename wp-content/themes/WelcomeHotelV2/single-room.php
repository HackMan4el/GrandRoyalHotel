<?php get_header(); ?>
<main class="page-content single-room">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <h1 class="page-title animate"><?php the_title(); ?></h1>
            <div class="room-content">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="room-featured-image animate">
                        <img src="<?php the_post_thumbnail_url('single-featured'); ?>" alt="<?php the_title(); ?>" class="wp-block-image">
                    </div>
                <?php endif; ?>
                <div class="room-description animate">
                    <?php the_content(); ?>
                </div>
                <div class="room-cta animate scale">
                    <a href="<?php echo get_permalink(get_page_by_path('booking')); ?>" class="wp-block-button__link">Забронировать</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</main>
<?php get_footer(); ?>