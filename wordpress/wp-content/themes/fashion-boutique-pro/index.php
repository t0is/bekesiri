<?php get_header(); ?>

<div class="py-5"  id="banner">
  <div class="container py-5">
    <h1 class="post-title" style="color: <?php echo esc_attr(get_theme_mod( 'fashion_boutique_pro_color_setting_rgba', '#000000' )); ?> "><?php esc_html_e('Post','fashion-boutique-pro'); ?></h1></div>
</div>

<div id="content" class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <div class="row">
          <?php
            if ( have_posts() ) :

              while ( have_posts() ) :

                the_post();
                get_template_part( 'template-parts/content' );

              endwhile;

            else:

              esc_html_e( 'Sorry, no post found on this archive.',  'fashion-boutique-pro' );

            endif;

            get_template_part( 'template-parts/pagination' );
          ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>