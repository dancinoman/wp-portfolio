<?php get_header(); ?>

<div class="header-text">
  <p>
    <?php
      $post = get_post(11);
      echo $post->post_content;
    ?>
  </p>
<div>

<?php get_footer(); ?>
