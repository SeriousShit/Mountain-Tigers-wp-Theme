</div>
<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">

    <div class="w3-row pagination_div innershadow_to_top">
        <div class="w3-col w3-container m12">

            <?php the_posts_pagination( array('mid_size' => 1) ); ?>
        </div>
    </div>

    <div class="w3-row ">

        <aside id="sidebar " class="sponsoren_div" role="complementary">
            <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
            <div id="primary" class="widget-area">
                <?php dynamic_sidebar( 'footer-widget-area' ); ?>
            </div>
            <?php endif; ?>
        </aside>

        <div id="copyright" class="w3-col w3-container m8">
            <?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) );?>
        </div>
    </div>

</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>