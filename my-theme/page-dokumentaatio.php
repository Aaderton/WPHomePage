<?php
/* Template Name: Dokumentaatio */
?>
<?php get_header(); ?>
<section id="contact" class="container content-section text-center">
    <div class="row">
        <div class="xs-12 col-lg-8 col-lg-offset-2">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer();?>
