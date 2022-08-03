<?php
  global $post;
?>

<div class="col-lg-6 col-md-6 col-sm-6">
  <div id="post-<?php the_ID(); ?>" <?php post_class('post-box mb-4 p-3'); ?>>
    <?php if ( has_post_thumbnail() ) { ?>
      <div class="post-thumbnail mb-3">
        <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
      </div>
    <?php }?>    
    <h3 class="post-title mb-3 mt-0"><?php the_title(); ?></h3>
    <?php if ( get_theme_mod('fashion_boutique_blog_admin_enable',true) || get_theme_mod('fashion_boutique_blog_comment_enable',true) ) : ?>
      <div class="post-meta my-3">
        <?php if ( get_theme_mod('fashion_boutique_blog_admin_enable',true) ) : ?>
          <i class="far fa-user mr-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a>
        <?php endif; ?>
        <?php if ( get_theme_mod('fashion_boutique_blog_comment_enable',true) ) : ?>
          <span class="ml-3"><i class="far fa-comments mr-2"></i> <?php comments_number( esc_attr('0', 'fashion-boutique'), esc_attr('0', 'fashion-boutique'), esc_attr('%', 'fashion-boutique') ); ?> <?php esc_html_e('comments','fashion-boutique'); ?></span>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <div class="post-content">
      <?php echo wp_trim_words( get_the_content(), get_theme_mod('fashion_boutique_post_excerpt_number',15) ); ?>
    </div>
    <div class="post-button my-3">
      <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Read More','fashion-boutique'); ?></a>
    </div>
  </div>
</div>