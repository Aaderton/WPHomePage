<?php
// Template for the header banner image and text
?>
<header class="intro">
  <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
  width="<?php echo get_custom_header()->width; ?>" alt="Banner Image" />
    <div class="intro-body">
        <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <?php
                      // arguments for the query
                      $args_banner = array(
                        'category_name' => 'banner',
                        'posts_per_page' => 1
                      );
                      // the query
                      $banner_posts = new WP_Query($args_banner);
                          if ( $banner_posts->have_posts() ) :
                          // the loop
                            while ( $banner_posts->have_posts() ) : $banner_posts->the_post();?>
                                <h1 class="brand-heading">
                                  <?php the_title(); ?>
                                </h1>
                                <p class="intro-text">
                                  <?php the_content(); ?>
                                </p>
                            <?php endwhile;
                          endif;
                          // end of the loop
                          wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
