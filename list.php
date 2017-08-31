<?php
    /*
    Template Name: Liste
    */
?>
<?php get_header() ?>
<section>
    <?php if (have_posts() ) : while( have_posts()) : the_post(); ?>
        <h1><?php the_title() ?></h1>
        <p><?php the_content() ?></p>
    <?php endwhile; else : ?>
        <?php _e('Page non-trouvée.') ?>
    <?php endif; ?>
</section>
<?php
    $args = array(
        'post_type' => "noel"
    );
    $query = new WP_query( $args );
?>
<section class="container">
    <div id="posts">
        <div class="row">
            <?php  if($query->have_posts()) : while($query -> have_posts()) : $query->the_post();  ?>
            <div class="post col-sm-4">
                <a href=<?php the_field("url")?>><img src=<?php the_post_thumbnail('thumbnail')?><?php the_field("shop") ?></a>
                <p class="nomObjet text-xs-center"><?php the_field("name") ?></p>
            </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
