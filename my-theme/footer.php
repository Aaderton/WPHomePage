    <footer>
        <div class="container text-center">
            <p><?php bloginfo('name'); ?> &copy; <?php echo date("Y"); ?></p>
            <div class="social-icons">
                <ul class="list-inline banner-social-buttons">
                  <?php
                  // arguments for the query
                  $args = array(
                    'post_type'        => 'social',
                    'posts_per_page' => 1
                  );
                  // the query
                  $args = new WP_Query($args);
                      if ( $args->have_posts() ) :
                      // the loop
                        while ( $args->have_posts() ) : $args->the_post(); ?>
                    <?php if( $facebook = get_field('facebook') ) :?>
                      <li>
                          <a target="_blank" href="<?php echo $facebook ?>"
                          <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                          </a>
                      </li>
                    <?php endif; ?>
                    <?php if( $linkedin = get_field('linkedin') ) :?>
                      <li>
                          <a target="_blank" href="<?php echo $linkedin ?>"
                          <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                          </a>
                      </li>
                    <?php endif; ?>
                    <?php if( $github = get_field('github') ) :?>
                    <li>
                        <a target="_blank" href="<?php echo $github ?>"
                        <i class="fa fa-github-square fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <?php endif; ?>
                  <?php endwhile; ?>
                <?php endif; ?>
                </ul>
            </div>
        </div> <!-- Container -->
    </footer>
    <?php wp_footer(); ?>
  </div> <!-- End of page -->
</body>
</html>
