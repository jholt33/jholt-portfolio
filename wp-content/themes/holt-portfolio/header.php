<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title><?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?></title>

<?php wp_head() ?>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

<!-- Header
============================================= -->
<header id="header" class="full-header dark">

  <div id="header-wrap">

    <div class="container clearfix">

      <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

      <!-- Logo
      ============================================= -->
      <div id="logo">
        <a href="<?php bloginfo('url');?>" class="standard-logo" data-dark-logo="<?php bloginfo('template_directory');?>/images/fsclogo@2x.png"><img src="<?php bloginfo('template_directory');?>/images/fsclogo@2x.png"></a>
        <a href="<?php bloginfo('url');?>" class="retina-logo" data-dark-logo="<?php bloginfo('template_directory');?>/images/logos/fsc-logo.png"><img src="<?php bloginfo('template_directory');?>/images/logo/fsc-logo.png"></a>
      </div> <!-- logo end -->

      <!-- Primary Navigation
      ============================================= -->
      <nav id="primary-menu" class="style-5">

					<?php

					wp_nav_menu(array(
					   'main-nav' 	 => 'Main Navigation',
						 'container'   => false,
						 // 		 'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						//  'link_before' => '<div><i class="icon-home2"></i>',
						//  'link_after'  => '</div>',
						 'walker' 		=> new Microdot_Walker_Nav_Menu()
					));

					?>

        <!-- Top Search
        ============================================= -->
        <div id="top-search">
          <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
          <form action="<?php echo home_url( '/' ); ?>" method="get" role="search">
            <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
          </form>
        </div> <!-- top-search end -->

      </nav> <!-- primary-menu end -->

    </div> <!-- container end -->

  </div> <!-- header-wrap end -->

</header> <!-- header end -->
