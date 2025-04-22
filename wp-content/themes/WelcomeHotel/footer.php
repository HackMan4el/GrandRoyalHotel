<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-menu">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'footer-nav',
                ]);
                ?>
            </div>
            <div class="social-links">
                <a href="https://facebook.com" target="_blank">Facebook</a>
                <a href="https://twitter.com" target="_blank">Twitter</a>
                <a href="https://vk.com" target="_blank">VK</a>
            </div>
            <div class="footer-info">
                <p>© <?php echo date('Y'); ?> Grand Royal Hotel Best In The World. All rights reserved.</p>
                <p>Address: 123 Luxury Street, Moscow, Russia | Email: info@grandroyalhotel.com</p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>