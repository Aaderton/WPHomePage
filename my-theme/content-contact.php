<?php
    // Contact section template
?>
<section id="contact" class="container content-section text-center">
    <div class="row">
        <div class="xs-12 col-lg-8 col-lg-offset-2">
          <?php
          // arguments for the query
          $args = array(
            'category_name' => 'contact',
            'posts_per_page' => 1
          );
          // the query
          $args = new WP_Query($args);
              if ( $args->have_posts() ) :
              // the loop
                while ( $args->have_posts() ) : $args->the_post();?>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                <?php endwhile;
                // end of the loop
                wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
