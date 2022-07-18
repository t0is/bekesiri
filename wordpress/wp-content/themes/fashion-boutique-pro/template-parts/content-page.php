<?php
  global $post;
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('page-single mb-4'); ?>>
  <?php if ( has_post_thumbnail() ) { ?>
    <div class="post-thumbnail">
      <?php the_post_thumbnail(' fashion_boutique_pro_small_thumbnail'); ?>
    </div>
  <?php }?>
  
  <div class="post-content">
    <?php the_content(); ?>
  </div>
</div>