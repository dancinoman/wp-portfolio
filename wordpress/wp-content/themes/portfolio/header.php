<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
    <style>
    /* *Images loads from media library */
    <?php $image_header =  wp_get_attachment_image_src(5, "large"); ?>
    header {
      background-image: url(<?php echo $image_header[0] ?>);
      background-size: cover;
      background-position: 0% 40%;
    }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset=<?php bloginfo("charset"); ?> />
    <meta name="description" content="<?php bloginfo("description"); ?>"/>
    <meta name="keywords" content="<?php bloginfo("keywords"); ?>">
    <title><?php bloginfo("name") ?> </title>
  </head>
  <body>
    <header>
      <h1> <?php bloginfo("name"); ?></h1>
    </header>
