  <?php 

/* Template Name: Post Left Sidebar */

get_header(); ?>
<div class="py-5"  id="banner">
  <div class="container py-5">
    <h1 class="post-title" style="color: <?php echo esc_attr(get_theme_mod( 'fashion_boutique_pro_color_setting_rgba', '#000000' )); ?>"><?php esc_html_e('Post','fashion-boutique-pro'); ?></h1>
  </div>
</div>
 
<div id="content" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php get_sidebar(); ?>
      </div>
      <div class="col-md-8">
        <div class="row">
          <?php  
            $fashion_boutique_pro_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts(array(
              'post_type' => 'post', // You can add a custom post type if you like
              'paged' => $fashion_boutique_pro_paged,
              'posts_per_page' => 10 // limit of posts
            ));  
            if ( have_posts() ) :  while ( have_posts() ) : the_post();
          ?>
          <div class="col-lg-6 col-md-12 latest-post mb-5">    
            <div class="latest-box">
              <?php if ( has_post_thumbnail() ) { ?>
                  <div class="post-thumbnail">
                      <figure>
                        <a class="test-image" href="<?php echo esc_url(get_permalink($post->ID)); ?>" title="<?php the_title_attribute(); ?>">
                          <?php
                            the_post_thumbnail();
                          ?>
                        </a>
                      </figure>
                  </div>
              <?php }?>
              <?php if ( has_post_thumbnail() ) { ?>
                <?php if ( get_theme_mod('fashion_boutique_pro_blog_date_enable',true) ) : ?>
                  <div class="post-date text-center">
                    <?php echo ' <span class="date-month">' . get_the_date( 'M' ) . '</span>'; echo '<span class="date-day">' . get_the_date( 'd' ) . '</span>';?>
                  </div>
                 <?php endif; ?>
              <?php }?>
              <?php if ( has_post_thumbnail() ) { ?>
                <div class="content_box  text-left py-3 px-4">
                  <h4 class="post-title"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h4>
                  <div class="recent_date align-self-center">
                    <?php if ( get_theme_mod('fashion_boutique_pro_blog_admin_enable',true) || get_theme_mod('fashion_boutique_pro_blog_comment_enable',true) ) : ?>
                        <?php if ( get_theme_mod('fashion_boutique_pro_blog_admin_enable',true) ) : ?>
                          <span class="admin"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
                        <?php endif; ?>
                        
                        <?php if ( get_theme_mod('fashion_boutique_pro_blog_comment_enable',true) ) : ?>
                          <span class="comments"></i> <?php comments_number( esc_attr('0', 'fashion-boutique-pro'), esc_attr('0', 'fashion-boutique-pro'), esc_attr('%', 'fashion-boutique-pro') ); ?> <?php esc_html_e('comments','fashion-boutique-pro'); ?></span>
                        <?php endif; ?>
                    <?php endif; ?>
                    <span class="icon align-self-center">
                      <?php $icon = get_theme_mod( 'fashion_boutique_pro_latest_news_icon_setting', '' ); ?>
                      <span class="mr-4 dashicons dashicons-<?php echo esc_attr( $icon ); ?>"></span>       
                    </span>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>        
          <?php
            endwhile;
            get_template_part( 'template-parts/pagination' );
            else :
              esc_html_e( 'Sorry, no post found on this archive.',  'fashion-boutique-pro' );
            endif;
          ?>  
        </div>  
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>