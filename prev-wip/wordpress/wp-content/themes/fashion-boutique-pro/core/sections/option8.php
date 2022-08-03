<?php if ( get_theme_mod('fashion_boutique_pro_latest_news_section_enable', true) == true ) : ?>
<div id="latest_news" class="py-lg-5">
	<div class="container text-center">
        <h3><?php echo esc_html(get_theme_mod('fashion_boutique_pro_latest_news_main_heading'));?></h3>
        <p><?php echo esc_html(get_theme_mod('fashion_boutique_pro_latest_news_content'));?></p>
        <div class="owl-carousel pt-3 ">  
          	<?php $args = array(
	            'post_type' => 'post',
	            'post_status' => 'publish',
	            'category_name' =>  get_theme_mod('fashion_boutique_pro_latest_news_category'),
	            'posts_per_page' => get_theme_mod('fashion_boutique_pro_latest_news_number'),
	        ); ?>
          	<?php $arr_posts = new WP_Query( $args );
	            if ( $arr_posts->have_posts() ) :
	            while ( $arr_posts->have_posts() ) :
	            $arr_posts->the_post();
            ?>
          	<div class="text-left post-item">
              	<?php if ( has_post_thumbnail() ) { ?>
                <div class="post-thumbnail">
                  <figure>
                    <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" title="<?php the_title_attribute(); ?>">
                      <?php
                      the_post_thumbnail();
                      ?>
                    </a>
                  </figure>
                </div>
              	<?php }?>
                <?php if ( has_post_thumbnail() ) { ?>
                  <div class="post-date text-center">
                    <?php echo ' <span class="date-month">' . get_the_date( 'M' ) . '</span>'; echo '<span class="date-day">' . get_the_date( 'd' ) . '</span>';?>                    
                  </div>
                <?php }?>
                <div class="latest_content  pt-3">
                  <div class="post-content entry-content py-2">
                    <h4 class="post-title  px-4"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h4>
                  </div>
                  <div class="recent_date align-self-center px-3">
                    <span class="admin"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>                                    		     
                    <span class="comments"> <?php comments_number( esc_attr('0', 'fashion-boutique-pro'), esc_attr('0', 'fashion-boutique-pro'), esc_attr('%', 'fashion-boutique-pro') ); ?> <?php esc_html_e('comments','fashion-boutique-pro'); ?></span>
                    <span class="icon align-self-center">
                      <?php $icon = get_theme_mod( 'fashion_boutique_pro_latest_news_icon_setting', '' ); ?>
                      <span class="mr-4 dashicons dashicons-<?php echo esc_attr( $icon ); ?>"></span>       
                    </span>
                  </div>  
                </div>
            </div>
   	        <?php
	        endwhile;
	        endif; ?>
        </div>
    </div>
</div>
<?php endif; ?> 