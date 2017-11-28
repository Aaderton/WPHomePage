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
                  <?php  $footerText = get_field('footer_text');?>
                  <?php  $image = get_field('image');?>
                  <?php  $subHeading = get_field('sub_heading');?>

                    <div class="col-xs-12 col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php the_title(); ?></h3>
                            </div>
                            <div class="panel-image hide-panel-body">
                                <img src="<?php echo $image ?>" class="panel-image-preview"/>
                            </div>
                            <div class="panel-body">
                                <h4><?php echo $subHeading ?></h4>
                                <?php the_content(); ?>
                                <?php if( $link = get_field('link') ) :?>
                                  <p><a target="_blank" href="<?php echo $link?>">
                                  Link to the work</a></p>
                                <?php endif; ?>
                            </div>
                            <div class="panel-footer text-center">
                                <?php echo $footerText ?>
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
