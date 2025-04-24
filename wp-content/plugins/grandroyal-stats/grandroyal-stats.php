<?php
/*
Plugin Name: Grand Royal Stats
Description: Плагин для отображения анимированных счётчиков для Grand Royal Hotel.
Version: 1.0
Author: HackMan4el
Author URI: https://github.com/HackMan4el
*/

function grandroyal_stats_shortcode() {
    ob_start();
    ?>
    <div class="stats-section">
        <div class="stat-item animate">
            <span class="stat-number" data-count="10000">0</span>
            <p>Обслужено гостей</p>
        </div>
        <div class="stat-item animate" style="animation-delay: 0.2s;">
            <span class="stat-number" data-count="500">0</span>
            <p>Забронировано номеров</p>
        </div>
        <div class="stat-item animate" style="animation-delay: 0.4s;">
            <span class="stat-number" data-count="2000">0</span>
            <p>Положительных отзывов</p>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('grandroyal_stats', 'grandroyal_stats_shortcode');
?>