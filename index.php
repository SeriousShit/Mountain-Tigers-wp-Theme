<?php get_header(); ?>
<div class="w3-row">
    <section id="content" class="w3-col s12 m9 l9" role="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php comments_template(); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'nav', 'below' ); ?>
    </section>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>