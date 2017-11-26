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
<section id="contact" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Contact info</h2>
            <p>aatu.pekkanen@gmail.com</p>
            <ul class="list-inline banner-social-buttons">
                <li>
                    <a target="_blank" href="https://www.facebook.com/aatu.pekkanen.3" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                </li>
            </ul>
        </div>
    </div>
</section>
</div> <!-- End of  content -->
<?php get_footer();?>
