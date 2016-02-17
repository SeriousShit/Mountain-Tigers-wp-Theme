<aside id="sidebar" class="w3-col s12 m3 l3" role="complementary">
    <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
    <div id="primary" class="widget-area">
        <ul class="xoxo">
            <?php dynamic_sidebar( 'primary-widget-area' ); ?>
        </ul>
    </div>
    <?php endif; ?>
</aside>