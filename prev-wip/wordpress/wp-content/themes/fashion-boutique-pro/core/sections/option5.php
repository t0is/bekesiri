<?php if ( get_theme_mod('fashion_boutique_pro_hot_products_section_enable', true) == true ) : ?>
<div id="hot_products" class="py-lg-5">
	<div class="container text-lg-left text-center">
		<div class="row">
			<div class="col-lg-4  py-lg-5 mt-5">
				<h3 class="mt-5"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_hot_products_main_heading'));?></h3>
		        <p class="sub-text mt-3"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_hot_products_content'));?></p>
		        <div class="mt-5">
	                <?php if ( get_theme_mod('fashion_boutique_pro_hot_products_button_url', true) == true || get_theme_mod('fashion_boutique_pro_hot_products_button_text', true) == true ) : ?>
	                  <a href="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_hot_products_button_url'));?>" class="button1 animate__animated animate__pulse">
	                  <?php echo esc_html(get_theme_mod('fashion_boutique_pro_hot_products_button_text'));?></a>
	                <?php endif; ?>
              	</div>
	    	</div>
			<div class="col-lg-8  mt-5 " id="gallery">	
		        <?php
		        $fashion_boutique_pro_catData = get_theme_mod('fashion_boutique_pro_hot_products_category');
		        if ( class_exists( 'WooCommerce' ) ) {
		          $args = array( 
		            'post_type' => 'product',
		            'posts_per_page' => get_theme_mod('fashion_boutique_pro_hot_products_number'),
		            'product_cat' => $fashion_boutique_pro_catData,
		            'order' => 'ASC'
		          );
		          $loop = new WP_Query( $args );
		          while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
		          	<div class="product-box tab-product">
			            <div class="product-image  box mx-xl-3">
				            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
				            <div class="box-content intro-button ">	
				            	<?php echo do_shortcode( '[ti_wishlists_addtowishlist]' ); ?>
			                    <?php if( $product->is_type( 'simple' ) ) { woocommerce_template_loop_add_to_cart(  $loop->post, $product );} ?>
			                </div>
		                </div>
			            <div class=" text-left align-self-center ">
		            		<div class="product-details">
			              	    <h5 class="product-titel "><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h5>
			              	    <h6 class=" <?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></h6>
			              	</div>
			            </div>
		            </div>
		          <?php endwhile; wp_reset_query(); ?>
		        <?php } ?> 
		    </div>
		</div>
	</div>
</div>
<?php endif; ?>