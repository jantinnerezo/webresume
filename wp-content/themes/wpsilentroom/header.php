<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('name');?> |
     <?php is_front_page() ? bloginfo('description') : wp_title();?>
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom template stylesheets -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/custom.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

    <?php wp_head(); ?>
  </head>
  <body>


    <!-- Navbar section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="img/quarter-logo.svg" width="30" height="30" class="d-inline-block align-top" alt=""> <?php bloginfo('name');?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbarSupportedContent',
                'menu_class'        => 'navbar-nav mr-auto nav-right',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>



    </nav>

      <!-- Showcase section -->
      <section id="showcase">
        <img src="img/quarter-logo.png" alt="">
    </section>