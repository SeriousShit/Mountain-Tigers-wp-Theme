<article class="w3-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header>
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
    <?php if ( is_singular() ) { echo '<h1 class="entry-title">'; }
    else { echo '<h2 class="entry-title">'; } ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
    <?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; }
    ?>
    <?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
</header>

<section class="entry-content">
    <?php the_content(); ?>
    <div class="entry-links"><?php wp_link_pages(); ?></div>
</section>

<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
<?php edit_post_link(); ?>
</article>