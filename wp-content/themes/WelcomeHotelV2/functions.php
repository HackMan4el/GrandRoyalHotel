<?php
// Подключение стилей и скриптов
function welcomehotel_enqueue_scripts() {
    wp_enqueue_style('welcomehotel-style', get_stylesheet_uri());
    wp_enqueue_style('welcomehotel-custom', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], '11.1.4');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Playfair+Display:wght@400;700&family=Great+Vibes&display=swap', [], null);
    wp_enqueue_script('welcomehotel-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], '11.1.4', true);
}
add_action('wp_enqueue_scripts', 'welcomehotel_enqueue_scripts');

// Регистрация меню
function welcomehotel_register_menus() {
    register_nav_menus([
        'primary-menu' => __('Главное меню', 'welcomehotelv2'),
        'footer-menu' => __('Меню в футере', 'welcomehotelv2'),
    ]);
}
add_action('init', 'welcomehotel_register_menus');

// Поддержка миниатюр
add_theme_support('post-thumbnails');
add_image_size('hotel-thumb', 400, 250, true);
add_image_size('review-avatar', 80, 80, true);
add_image_size('single-featured', 800, 400, true);

// Регистрация кастомных типов записей
function welcomehotel_custom_post_types() {
    register_post_type('room', [
        'labels' => [
            'name' => __('Номера', 'welcomehotelv2'),
            'singular_name' => __('Номер', 'welcomehotelv2'),
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => ['slug' => 'rooms'],
    ]);

    register_post_type('promotion', [
        'labels' => [
            'name' => __('Акции', 'welcomehotelv2'),
            'singular_name' => __('Акция', 'welcomehotelv2'),
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => ['slug' => 'promotions'],
    ]);

    register_post_type('review', [
        'labels' => [
            'name' => __('Отзывы', 'welcomehotelv2'),
            'singular_name' => __('Отзыв', 'welcomehotelv2'),
        ],
        'public' => true,
        'has_archive' => false,
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);

    register_post_type('service', [
        'labels' => [
            'name' => __('Услуги', 'welcomehotelv2'),
            'singular_name' => __('Услуга', 'welcomehotelv2'),
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => ['slug' => 'services'],
    ]);
}
add_action('init', 'welcomehotel_custom_post_types');
?>