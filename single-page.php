<?php
/*
Template Name: single-page
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Patrick Peters">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  <?php get_header();?>  
  </head>

  <div class="greywrap">
  <?php 
   while ( have_posts() ) : the_post();
    the_content();
    endwhile; ?>
  </div>
  <?php get_footer();?>