<?php
// Template for About me section
?>
<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <?php
            // arguments for the query
            $args_about = array(
              'category_name' => 'about',
              'posts_per_page' => 1
            );
            // the query
            $about_posts = new WP_Query($args_about);
                if ( $about_posts->have_posts() ) :
                // the loop
                  while ( $about_posts->have_posts() ) : $about_posts->the_post();
                      if (has_post_thumbnail() ):?>
                          <div class="col-xs-12">
                          <?php the_post_thumbnail('medium') ?>
                          </div>
                      <?php endif;?>
                          <h2><?php the_title(); ?></h2>
                          <p><?php the_content(); ?></p>
                          <P>Testi testi testi</p>
                  <?php endwhile;
                  // end of the loop
                  wp_reset_postdata(); ?>
              <?php else : ?>
                  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
              <?php endif; ?>
        </div>
    </div>
</section>
<?php
