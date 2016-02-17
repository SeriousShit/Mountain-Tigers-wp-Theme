<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
    <?php get_sidebar('footer'); ?>
    <div id="copyright" class="w3-container w3-theme">
        <?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://tidythemes.com/">
        TidyThemes</a>' ); ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>