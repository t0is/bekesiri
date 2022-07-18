<?php 

/* Template Name: Page Left Sidebar */

get_header(); ?>
<div class="py-5"  id="banner">
  <div class="container ">
    <h1 class="post-title" style="color: <?php echo esc_attr(get_theme_mod( 'fashion_boutique_pro_color_setting_rgba', '#000000' )); ?>"><?php the_title(); ?></h1>
  </div>
</div>

<div id="content" class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php get_sidebar(); ?>
      </div>
      <div class="col-md-8">
        <?php
          while ( have_posts() ) :
              the_post();
              get_template_part( 'template-parts/content', get_post_type());

              wp_link_pages(
                array(
                  'before' => '<div class=" fashion-boutique-pro-pagination">',
                  'after' => '</div>',
                  'link_before' => '<span>',
                  'link_after' => '</span>'
                )
              );
              comments_template();
          endwhile;
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
