<aside id="footer-widget" class="w3-container w3-theme-l1" role="complementary">
    <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
    <div id="" class="widget-area">
        <?php dynamic_sidebar( 'footer-widget-area' ); ?>
    </div>
    <?php endif; ?>
</aside>