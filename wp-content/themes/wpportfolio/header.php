<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title>
        <?php bloginfo('name');?> |
        <?php is_front_page() ? bloginfo('description') : wp_title();?>
    </title>

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">

	<!-- Bootstrap 4 -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">

	<!-- Icon fonts -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/font-awesome.min.css">

	<!-- Hover css -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/hover-min.css">

    <?php wp_head();?>

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-white navbar-fixed-to">
        <div class="container">
            <a class="navbar-brand" href="#">
            	<img src="../resources/img/lc.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <?php bloginfo('name');?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
          <!--  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php"><span class="oi oi-home"></span> Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php"><span class="oi oi-person"></span> Personal</a>
					</li>
					<li class="nav-item">
							<a class="nav-link" href="index.php"><span class="fa fa-graduation-cap"></span> Education</a>
					</li>
					<li class="nav-item">
							<a class="nav-link" href="index.php"><span class="oi oi-check"></span> Qualifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php"><span class="oi oi-folder"></span> Portfolio</a>
				</li>
                </ul>
             
            </div> -->
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse justify-content-end',
                    'container_id'      => 'navbarNavDropdown',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker())
                );
             ?>

        </div>
    </nav> 