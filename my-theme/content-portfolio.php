<?php
// Template for Portfolio section
?>
<div class="row form-group">
            <?php
            // arguments for the query
            $args = array(
              'post_type'        => 'portfolio',
              'posts_per_page' => -1
            );
            // the query
            $args = new WP_Query($args);
                if ( $args->have_posts() ) :
                // the loop
                  while ( $args->have_posts() ) : $args->the_post(); ?>
                    <div class="col-xs-12 col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php the_title(); ?></h3>
                            </div>
                            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <?php $image = wp_get_attachment_image_src (
                                    get_post_thumbnail_id( $post->ID ),
                                    'single-post-thumbnail'
                                  ); ?>
                                <div class="panel-image hide-panel-body">
                                    <img src="<?php echo $image[0]; ?>" class="panel-image-preview"/>
                                </div>
                            <?php endif;?>
                            <div class="panel-body">
                                <?php the_content(); ?>
                            </div>
                            <div class="panel-footer text-center">
                                Click the image for more info
                            </div>
                        </div>
                    </div>
                  <?php endwhile;
                  // end of the loop
                  wp_reset_postdata(); ?>
              <?php else : ?>
                  <p><?php _e('Sorry, no portfolio items found.'); ?></p>
              <?php endif; ?>
            </div> <!-- row -->
        </div> <!-- Container -->
    </div> <!-- Portfolio div -->
</section> <!-- Portfolio Section -->
