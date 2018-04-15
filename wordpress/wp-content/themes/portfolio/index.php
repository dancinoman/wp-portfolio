<?php get_header(); ?>
<!-- Header text -->

<?php
  $posts_head = get_posts(array("category"=> 2));
  foreach($posts_head as $post) { ?>
    <div class="header-text">
      <p> <?php echo $post->post_content; ?> </p>
    </div>
<?php }

  $categories = get_categories();
  foreach($categories as $cat) {
    if($cat->category_parent == 7) { ?>
      <!-- The portfolio seperated by categories -->
      <div class="portfolio-title">
        <?php echo $cat->cat_name; ?>
      </div>
      <?php
      $portfolios = get_posts(array('category'=> $cat->cat_ID));
      foreach($portfolios as $pf) {
        echo $pf->post_content;
     }
    }
  }
?>









<?php get_footer(); ?>
