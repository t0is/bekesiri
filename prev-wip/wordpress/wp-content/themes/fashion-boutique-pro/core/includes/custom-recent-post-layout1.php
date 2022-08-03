<?php 

/**
 * Extend Recent Posts Widget 
 *
 * Adds different formatting to the default WordPress Recent Posts Widget
 */

Class fashion_boutique_pro_Recent_Posts_Layout1_Widget extends WP_Widget_Recent_Posts {

	function widget($args, $instance) {
	
		extract( $args );
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('') : $instance['title'], $instance, $this->id_base);
				
		if( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
			$number = 10;
					
		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
		if( $r->have_posts() ) :
			echo $before_widget;
			if( $title ) echo $before_title . $title . $after_title; ?>
			<ul>
				<?php while( $r->have_posts() ) : $r->the_post(); ?>
					<div class="row recent_post text-left">
			          <?php if ( has_post_thumbnail() ) { ?>
			            <div class="col-lg-3 col-md-3 col-3 mt-2 pr-0">
			              <div class="post-thumbnail">
			                <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" title="<?php the_title_attribute(); ?>">
			                  <?php
			                    the_post_thumbnail();
			                  ?>
			                </a>
			              </div>
			            </div>
			          <?php }?>
			          <div class="<?php if(has_post_thumbnail()) { ?>col-lg-9 col-md-9 col-9 mt-2" <?php } else { ?>col-lg-12 col-md-12" <?php } ?>>
			            <h4 class="post-title mb-0 ml-lg-0 ml-md-2"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h4>
			            <div class="post-meta mt-0 ml-lg-0 ml-md-2">
			              <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a>          
			            </div>
			          </div>
			        </div>
				<?php endwhile; ?>
			</ul>
			<?php
			echo $after_widget;
		
		wp_reset_postdata();
		
		endif;
	}
}
function fashion_boutique_pro_recent_widget_layout1_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('fashion_boutique_pro_Recent_Posts_Layout1_Widget');
}
add_action('widgets_init', 'fashion_boutique_pro_recent_widget_layout1_registration');