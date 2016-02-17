<?php get_header(); ?>
<div class="w3-row">
    <section id="content" class="w3-col s12 m9 l9" role="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
        <?php endwhile; endif; ?>
        <footer class="footer">
            <?php get_template_part( 'nav', 'below-single' ); ?>
        </footer>
    </section>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>