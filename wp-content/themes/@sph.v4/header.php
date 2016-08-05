<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie9 ie8 ie7 ie6" lang="en"><![endif]-->
<!--[if IE 7]><html class="ie9 ie8 ie7" lang="en"><![endif]-->
<!--[if IE 8]><html class="ie9 ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0">
	
	<title><?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name');
    }
    ?></title> 
	
	

	<meta name="robots" content="all" />
	<meta name="verify-v1" content="IRQ3I6Xj7ReRP/eblZNGnuFJ014Oo+g20uVagubBBOg=" />
	<meta name="google-site-verification" content="sKmT2iNaE4l8ziO2dL8mGg1IwZ1mJ_4-XFWAPqnVpY0" />
	
	<?php
  // Get the google plus meta and output the link
  if ( is_singular() ) {
  
  echo '
  <!-- Google author verification -->
  <link rel="author" href="https://plus.google.com/115719560507543103705/posts" />
  ';
  }
  ?>
	
	<?php if(is_single()) : ?>	
  <?php if (has_post_thumbnail( $post->ID )) : ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  	
  <meta property="og:image" content="<?= $image[0]; ?>" />
  <meta name="twitter:image" content="<?= $image[0]; ?>">
  
  <?php endif; ?>
  
  <?php remove_filter( 'the_content', 'sharing_display', 19 ); ?>
  <?php remove_filter( 'the_excerpt', 'sharing_display', 19 ); ?>
  
  <meta name="twitter:title" content="<?php the_title(); ?>">
  <meta name="twitter:description" content="<?php the_excerpt(); ?>">
  <meta name="twitter:site" content="@sph">
    
  <?php endif; ?> 
	
	<!-- Stylesheets and less -->
	<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7292672/718184/css/fonts.css" />
	<script src="//use.typekit.net/com5cbz.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/assets/css/baseweb.css">
	
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
	
</head>
<body>
 
<header class="global-header">
	<section class="container">
		<div class=" col col-12">
    		<div class="logo"><a href="<?php bloginfo('url'); ?>">Sam Howat</a></div>
		</div>
	</section>
</header>