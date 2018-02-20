<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="chrome=1">

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'themename' ), max( $paged, $page ) );

	?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--  Mobile Viewport Fix -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Place favicon.ico and apple-touch-icons in the images folder -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png"><!--60X60-->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-ipad.png"><!--72X72-->
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-iphone4.png"><!--114X114-->
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-ipad3.png">	<!--144X144-->

	<link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />

	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<div id="page" class="hfeed">
		<header id="branding" role="banner">
        <nav class="nav justify-content-center navbar-expand-sm sticky-top bg-white fixed-top" id="nav-inicial">
            <a href="<?php echo home_url(); ?>" id="logo-inicial" class="mr-3">
              <img src="<?php echo home_url(); ?>/wp-content/themes/historiasnocontadas/img/logoHNCconnumeral.png" alt="">
            </a>
            <a class="nav-link active mt-3 item-a" href="#">Historias</a>
            <a class="nav-link mt-3 item-a" href="#">Personajes</a>
            <a class="nav-link dropdown-toggle mt-3 item-a" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Eventos</a>
             <div class="dropdown-menu">
               <a class="dropdown-item" href="#">Action</a>
               <a class="dropdown-item" href="#">Another action</a>
               <a class="dropdown-item" href="#">Something else here</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#">Separated link</a>
             </div>
             <a class="nav-link mt-3 item-a" href="#">Tu historia</a>

             <ul class="nav justify-content-end pl-5">
              <li class="nav-item">
                <a class="nav-link mt-3 item-a" href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link mt-3 item-a" href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link mt-3 item-a" href="#"><i class="fab fa-instagram"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link mt-3 item-a disabled" href="#"><i class="fas fa-search"></i></a>
              </li>
            </ul>
        </nav>

        <div class="pos-f-t sticky-top" id="nav-movil">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
              <h4 class="text-white">Collapsed content</h4>
              <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
          </div>
          <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </nav>
        </div>

		</header><!-- #branding -->


		<div id="main">
