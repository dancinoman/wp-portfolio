<?php get_header(); ?>
<!-- Header text -->

<?php
  $posts_head = get_posts(array("category"=> 2));
  foreach($posts_head as $post) { ?>
    <div class="header-text">
      <p> <?php echo $post->post_content; ?> </p>
    </div>
<?php } ?>

<?php
  $posts_title = get_posts(array("category"=> 3));
    foreach($posts_title as $post) { ?>
      <!-- The title for sections-->
      <div class="portfolio-title">
        <?php echo $post->post_title; ?>
      </div>
  <?php } ?>







<?php get_footer(); ?>
