<?php
/*
Plugin Name: Grand Royal Stats
Description: Displays animated statistics for Grand Royal Hotel (guests, rooms, reviews).
Version: 1.0
Author: HackMan4el
Author URI: https://github.com/HackMan4el
*/

// Шорткод для вывода статистики
function grandroyal_stats_shortcode() {
    ob_start();
    ?>
    <div class="stats-section">
        <div class="stat-item">
            <span class="stat-number" data-target="10000">0</span>
            <p>Guests Served</p>
        </div>
        <div class="stat-item">
            <span class="stat-number" data-target="500">0</span>
            <p>Rooms Booked</p>
        </div>
        <div class="stat-item">
            <span class="stat-number" data-target="2000">0</span>
            <p>Happy Reviews</p>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                const updateCounter = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const speed = 200;
                    const increment = target / speed;
                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCounter, 20);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCounter();
            });
        });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('grandroyal_stats', 'grandroyal_stats_shortcode');
?>