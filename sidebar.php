<aside id="sidebar" class="w3-col s12 m3 l3 w3-container" role="complementary">
    <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
    <div id="primary" class="widget-area">
        <?php dynamic_sidebar( 'primary-widget-area' ); ?>
    </div>
    <?php endif; ?>
</aside>