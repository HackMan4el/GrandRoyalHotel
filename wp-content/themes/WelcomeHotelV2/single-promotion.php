<?php get_header(); ?>
<main class="page-content single-promotion">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <h1 class="page-title animate"><?php the_title(); ?></h1>
            <div class="promotion-content">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="promotion-featured-image animate">
                        <img src="<?php the_post_thumbnail_url('single-featured'); ?>" alt="<?php the_title(); ?>" class="wp-block-image">
                    </div>
                <?php endif; ?>
                <div class="promotion-description animate">
                    <?php the_content(); ?>
                </div>
                <div class="promotion-cta animate scale">
                    <a href="<?php echo get_permalink(get_page_by_path('booking')); ?>" class="wp-block-button__link">Воспользоваться предложением</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</main>
<?php get_footer(); ?>