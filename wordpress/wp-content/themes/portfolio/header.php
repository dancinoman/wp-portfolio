<!DOCTYPE html>
<html>
  <head>
  <?php wp_head(); ?>
  <style>
  /* *Images loads from media library */
  <?php $image_header =  wp_get_attachment_image_src(5); ?>
  header {
    background-image: url(<?php echo $image_header[0] ?>); /* this image source is too small */ 
    background-position: 0% 40%;
  }
  </style>
  </head>
  <body>
    <header>
      <h1> <?php bloginfo("name"); ?></h1>

    </header>
