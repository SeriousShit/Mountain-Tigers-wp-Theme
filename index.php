<?php get_header(); ?>

<section id="content" role="main" class="w3-col m9">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
    <?php comments_template(); ?>
    <?php endwhile; endif; ?>
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
; ?>