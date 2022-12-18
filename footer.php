</main>
<footer>
    <div class="container">
        <div class="contact">
            <h3>まんぷく杯運営</h3>
            <div>
                <a href="https://twitter.com/tenohirasize" target="_blank">
                    <div class="sns">
                        <i class="fa-brands fa-twitter"></i>
                    </div>
                    <span>大会運営チーム<br>主宰 まんぷくちゃん Twitter</span>
                </a>
            </div>
        </div>
        <?php
        wp_nav_menu(
            array(
                'menu' => 'Footer Navigation',
                'container' => 'nav',
                'container_class' => 'footer-nav',
                'theme_location' => 'footer-menu'
            )
        );
        ?>
    </div>
    <div class="copyright">
        <small>&copy; まんぷく杯運営チーム</small>
    </div>
</footer>
<div id="page-top"><span></span></div>
<?php wp_footer(); ?>
</body>

</html>