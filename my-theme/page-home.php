<?php
/**
 * Template Name: Koti testi
 */
 ?>
<?php get_header(); ?>
<!-- Intro Header, get content-banner template -->
<?php get_template_part('content','banner'); ?>
   <div id=content>
    <!-- About Section, get content-about template -->
      <?php get_template_part('content','about'); ?>
    <!-- Portfolio Section -->
    <?php get_template_part('content','portfolio-title'); ?>
    <?php get_template_part('content','portfolio'); ?>
    <!-- Contact Section -->
    <?php get_template_part('content','contact'); ?>
</div> <!-- End of  content -->
<?php get_footer();?>
