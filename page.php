<?php
    /*
    Template Name: Page
    */
?>
<?php get_header() ?>
<section>
    <?php if (have_posts() ) : while( have_posts()) : the_post(); ?>
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>
    <?php endwhile; else : ?>
        <?php _e('Page non-trouvée.') ?>
    <?php endif; ?>
</section>
<?php get_footer(); ?>
