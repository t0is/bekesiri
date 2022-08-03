<?php
  global $post;
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('post-single mb-4'); ?>>
  <?php if ( has_post_thumbnail() ) { ?>
    <div class="post-thumbnail mb-3">
       <?php the_post_thumbnail('fashion_boutique_pro_small_thumbnail'); ?>
    </div>
  <?php }?>
  
    <?php if ( get_theme_mod('fashion_boutique_pro_blog_date_enable',true) || get_theme_mod('fashion_boutique_pro_blog_admin_enable',true) || get_theme_mod('fashion_boutique_pro_blog_comment_enable',true) ) : ?>
      <div class="post-meta mb-2 border-top border-bottom py-2">
        <?php if ( get_theme_mod('fashion_boutique_pro_blog_date_enable',true) ) : ?>
          <i class="far fa-calendar-alt mr-2"></i><?php echo '<span class="date-day">' . get_the_date( 'd' ) . '</span>'; echo ' <span class="date-month">' . get_the_date( 'M' ) . '</span>'; echo ' <span class="date-year">' . get_the_date( 'Y' ) . '</span>'; ?>
        <?php endif; ?>
        <?php if ( get_theme_mod('fashion_boutique_pro_blog_admin_enable',true) ) : ?>
          <i class="far fa-user ml-3 mr-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a>
        <?php endif; ?>
        <?php if ( get_theme_mod('fashion_boutique_pro_blog_comment_enable',true) ) : ?>
          <span class="ml-3"><i class="far fa-comments mr-2"></i> <?php comments_number( esc_attr('0', 'fashion-boutique-pro'), esc_attr('0', 'fashion-boutique-pro'), esc_attr('%', 'fashion-boutique-pro') ); ?> <?php esc_html_e('comments','fashion-boutique-pro'); ?></span>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  <div class="post-content">
    <?php
      the_content();
    ?>
  </div>
  <hr>
  <div class="tags-bg">
    <?php the_tags('<div class="post-tags"> <strong>'.esc_html__('Tags:-','fashion-boutique-pro').'</strong> ', ', ', '</div>'); ?>
  </div>
  <hr>
  <div class="blog_share_icon">
    <span><strong><?php esc_html_e('Social Share:-','fashion-boutique-pro'); ?></strong></span>
    <?php if(get_theme_mod('fashion_boutique_pro_post_general_settings_post_share_facebook',true)==1 || get_theme_mod('fashion_boutique_pro_single_post_general_settings_post_share_pinterest',true)==1 || get_theme_mod('fashion_boutique_pro_single_post_general_settings_post_share_linkedin',true)==1 || get_theme_mod('fashion_boutique_pro_single_post_general_settings_post_share_twitter',true)==1){ ?>                
    <?php } if ( get_theme_mod('fashion_boutique_pro_post_general_settings_post_share_facebook',true) == "1" ) { ?>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank" class="post-facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
    <?php } if ( get_theme_mod('fashion_boutique_pro_single_post_general_settings_post_share_pinterest',true) == "1" ) { ?>
          <a href="https://in.pinterest.com/pin/create/link/?url=<?php echo the_permalink(); ?>" target="_blank" class="post-pinterest"><i class="fab fa-pinterest"></i></a>
    <?php } if ( get_theme_mod('fashion_boutique_pro_single_post_general_settings_post_share_linkedin',true) == "1" ) { ?>
          <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php the_title(); ?>" target="_blank" class="post-linkedin"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
    <?php }if ( get_theme_mod('fashion_boutique_pro_single_post_general_settings_post_share_twitter',true) == "1" ) { ?>
          <a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php echo the_title(); ?>" target="_blank" class="post-twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
    <?php } ?>
  </div>
  <hr>  
</div>