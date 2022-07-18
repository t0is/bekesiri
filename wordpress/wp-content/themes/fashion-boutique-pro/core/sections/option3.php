<?php if ( get_theme_mod('fashion_boutique_pro_featured_products_section_enable', true) == true ) : ?>
<div id="featured_products" class="py-5">
	<div class="container text-lg-left text-center">
		<div class="row">
			<div class="col-lg-6">
				<h3 class="mt-3"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_featured_products_main_heading'));?></h3>
				<p class="sub-text"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_featured_products_content'));?></p>
			</div>
			<div class="col-lg-6 align-self-center">
	        	<div class="mt-lg-0 mt-4">
	                <?php if ( get_theme_mod('fashion_boutique_pro_featured_products_button_url', true) == true || get_theme_mod('fashion_boutique_pro_featured_products_button_text', true) == true ) : ?>
	                  <a href="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_featured_products_button_url'));?>" class="button1 animate__animated animate__pulse">
	                  <?php echo esc_html(get_theme_mod('fashion_boutique_pro_featured_products_button_text'));?></a>
	                <?php endif; ?>
              	</div>
	        </div>
	    </div>
		<div class=" row mt-5 ">	
	        <?php
	        $fashion_boutique_pro_catData = get_theme_mod('fashion_boutique_pro_featured_products_category');
	        if ( class_exists( 'WooCommerce' ) ) {
	          $args = array( 
	            'post_type' => 'product',
	            'posts_per_page' => get_theme_mod('fashion_boutique_pro_featured_products_number'),
	            'product_cat' => $fashion_boutique_pro_catData,
	            'order' => 'ASC'
	          );
	          $loop = new WP_Query( $args );
	          while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
	          	<div class="col-xl-3 col-lg-4 col-md-6 product-box tab-product mt-4">
		            <div class="product-image  box">
		            	<figure>
			            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
			            <?php if (   has_post_thumbnail() ) { ?>      
	                       <?php woocommerce_show_product_sale_flash( $post, $product ); ?>                 
	                    <?php }?>
			            </figure>
			            <div class="box-content intro-button ">	
			                <?php echo do_shortcode( '[ti_wishlists_addtowishlist]' ); ?>			                     
		                    <?php if( $product->is_type( 'simple' ) ) { woocommerce_template_loop_add_to_cart(  $loop->post, $product );} ?>
		                </div>
	                </div>
		            <div class="product-details text-md-left text-center align-self-center  py-3">
	              	    <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?>
	              	    <h5 class="product-titel mb-3 "><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h5>
	              	    <h6 class=" <?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></h6>
	              	    <span class=" align-self-center">
	                      <?php $icon = get_theme_mod( 'fashion_boutique_pro_featured_products_icon_setting', '' ); ?>
	                      <span class="mr-4 dashicons dashicons-<?php echo esc_attr( $icon ); ?>"></span>       
	                    </span>
		            </div>
	            </div>
	          <?php endwhile; wp_reset_query(); ?>
	        <?php } ?> 
	    </div>
	</div>
</div>
<?php endif; ?>