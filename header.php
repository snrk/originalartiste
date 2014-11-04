<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/foundation.css" />
<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900|Cutive+Mono&subset=latin,latin-ext">
<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="row">
    <div class="off-canvas-wrap contenu">
        <div class="inner-wrap">
            <div class="header">
                <nav class="tab-bar" data-topbar data-options="is_hover: false">
                    <section class="left-small show-for-small">
                    	<a class="left-off-canvas-toggle menu-icon "><img class="iconmenu" src="<?php bloginfo('template_directory'); ?>/img/nav_menu.png"/></a>
                    </section>
                    <section class="right tab-bar-section">
                    	 <a href="http://www.originalartiste.tumblr.com"><img class="icon" src="<?php bloginfo('template_directory'); ?>/img/tumblr.png" alt="tumblr" /></a>
                    	 <a href="http://www.twitter.com/originalartiste"><img class="icon" src="<?php bloginfo('template_directory'); ?>/img/twitter.png" alt="twitter" /></a>
                    	 <a href="http://www.instagram.com/originalartiste"><img class="icon" src="<?php bloginfo('template_directory'); ?>/img/instagram.png" alt="instagram" /></a>
                         <a href="http://www.facebook.com/originalartiste"><img class="icon" src="<?php bloginfo('template_directory'); ?>/img/facebook.png" alt="facebook" /></a>
                         <a href="https://www.youtube.com/user/originalartiste"><img class="icon" src="<?php bloginfo('template_directory'); ?>/img/youtube.png" alt="youtube" /></a>
                         <a href="https://vimeo.com/originalartiste"><img class="icon" src="<?php bloginfo('template_directory'); ?>/img/vimeo.png" alt="vimeo" /></a>
                         <a href="https://www.flickr.com/photos/originalartiste/"><img class="icon" src="<?php bloginfo('template_directory'); ?>/img/flickr.png" alt="flickr" /></a>
                    </section>
                </nav> 
            </div>
            <aside class="left-off-canvas-menu">
            	<div class="banniere">
            	</div>
                <?php wp_nav_menu(); ?>
            </aside>
            <article class="small-12">
                <div class="menu">	
          			<nav class=" hide-for-small marge ">
          				<?php wp_nav_menu(); ?>
          			</nav>
                </div>
