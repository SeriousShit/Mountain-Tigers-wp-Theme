<?php get_header(); ?>

<section id="content" role="main" class="w3-col m8">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
    <?php comments_template(); ?>
    <?php endwhile; endif; ?>
</section>

<div class="w3-col m4">
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
; ?>