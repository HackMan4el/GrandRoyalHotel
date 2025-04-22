<?php
// Подключение стилей и скриптов
function welcomehotel_enqueue_scripts() {
    // Основной CSS
    wp_enqueue_style('welcomehotel-style', get_stylesheet_uri());
    wp_enqueue_style('welcomehotel-custom', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
    
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Playfair+Display:wght@400;700&family=Great+Vibes&display=swap', [], null);
    
    // Основной JS
    wp_enqueue_script('welcomehotel-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', [], null, true);
    wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'welcomehotel_enqueue_scripts');

// Регистрация меню
function welcomehotel_register_menus() {
    register_nav_menus([
        'primary-menu' => __('Primary Menu', 'welcomehotel'),
        'footer-menu' => __('Footer Menu', 'welcomehotel'),
    ]);
}
add_action('init', 'welcomehotel_register_menus');

// Поддержка миниатюр
add_theme_support('post-thumbnails');

// Кастомные размеры изображений
add_image_size('hotel-thumb', 400, 200, true); // Для номеров, акций, услуг
add_image_size('review-avatar', 80, 80, true); // Для аватаров отзывов

// Регистрация кастомных типов записей
function welcomehotel_custom_post_types() {
    // Номера
    register_post_type('room', [
        'labels' => [
            'name' => __('Rooms', 'welcomehotel'),
            'singular_name' => __('Room', 'welcomehotel'),
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'rewrite' => ['slug' => 'rooms'],
    ]);

    // Акции
    register_post_type('promotion', [
        'labels' => [
            'name' => __('Promotions', 'welcomehotel'),
            'singular_name' => __('Promotion', 'welcomehotel'),
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'rewrite' => ['slug' => 'promotions'],
    ]);

    // Отзывы
    register_post_type('review', [
        'labels' => [
            'name' => __('Reviews', 'welcomehotel'),
            'singular_name' => __('Review', 'welcomehotel'),
        ],
        'public' => true,
        'has_archive' => false,
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
    ]);
}
add_action('init', 'welcomehotel_custom_post_types');
?>