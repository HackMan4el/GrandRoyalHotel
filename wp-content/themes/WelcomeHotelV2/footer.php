<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="footer-menu">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'footer-nav',
                    'container' => false,
                ]);
                ?>
            </div>
            <div class="footer-info">
                <p>123 Luxury Street, Moscow, Russia</p>
                <p>Phone: +7 (495) 123-45-67</p>
                <p>Email: info@grandroyalhotel.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Grand Royal Hotel Best In The World. All rights reserved.</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>