<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <?php
                   wp_nav_menu(array(
                   'theme_location'    => 'secondary',
                   'container'       => '',
                   'container_id'    => '',
                   'container_class' => '',
                   'menu_id'         => false,
                   'menu_class'      => 'navbar-brand page-scroll',
                   'depth'           => 0,
                   'fallback_cb'     => false
                   ));
                   ?>
            </div>
            <!-- Establish the navigation -->
            <?php
               wp_nav_menu(array(
               'theme_location'    => 'primary',
               'container'       => 'div',
               'container_id'    => '',
               'container_class' => 'collapse navbar-collapse navbar-right navbar-main-collapse',
               'menu_id'         => false,
               'menu_class'      => 'nav navbar-nav',
               'depth'           => 0,
               'fallback_cb'     => false
               ));
               ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
