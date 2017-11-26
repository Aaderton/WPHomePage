<?php
  // Portfolio section title content
?>

<section id="portfolio" class="content-section text-center">
    <div class="portfolio-section">
        <div class="container">
              <?php
              // arguments for the query
              $args = array(
                'category_name' => 'portfolio-title',
                'posts_per_page' => 1
              );
              // the query
              $args = new WP_Query($args);
                  if ( $args->have_posts() ) :
                  // the loop
                    while ( $args->have_posts() ) : $args->the_post();?>
                            <div class="col-lg-8 col-lg-offset-2">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </div>
                    <?php endwhile;
                    // end of the loop
                    wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
