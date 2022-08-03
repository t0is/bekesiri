<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fashion-boutique' ); ?></a>

<div class="topheader py-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-9 col-sm-9 align-self-center text-center text-md-left">
				<?php if ( get_theme_mod('fashion_boutique_header_free_shipping') ) : ?>
					<span class="mr-3"><i class="fas fa-truck mr-2"></i><?php echo esc_html( get_theme_mod('fashion_boutique_header_free_shipping' ) ); ?></span>
				<?php endif; ?>

				<?php if ( get_theme_mod('fashion_boutique_header_delivery') ) : ?>
					<span class="mr-3"><i class="fas fa-globe mr-2"></i><?php echo esc_html( get_theme_mod('fashion_boutique_header_delivery' ) ); ?></span>
				<?php endif; ?>

				<?php if ( get_theme_mod('fashion_boutique_header_gift') ) : ?>
					<span><i class="fas fa-gift mr-2"></i><?php echo esc_html( get_theme_mod('fashion_boutique_header_gift' ) ); ?></span>
				<?php endif; ?>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-3 align-self-center">
				<?php if ( get_theme_mod('fashion_boutique_header_google_translator') ) : ?>
					<?php echo do_shortcode('[google-translator]'); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<header id="site-navigation" class="header text-center text-md-left py-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
				<div class="logo">
		    		<div class="logo-image">
		    			<?php echo esc_url( the_custom_logo() ); ?>
			    	</div>
			    	<div class="logo-content">
				    	<?php
				    		if ( get_theme_mod('fashion_boutique_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('fashion_boutique_display_header_text', true) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
			    		?>
					</div>
				</div>
		   	</div>
			<div class="col-lg-8 col-md-7 col-sm-7 align-self-center">
				<?php if(has_nav_menu('main-menu')){ ?>
					<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'fashion-boutique' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				<?php }?>
			</div>
			<div class="col-lg-1 col-md-2 col-sm-2 align-self-center text-center text-md-right">
				<?php if ( get_theme_mod('fashion_boutique_cart_box_enable', true) == true ) : ?>
					<?php if ( class_exists( 'woocommerce' ) ) {?>
						<a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','fashion-boutique' ); ?>"><i class="fas fa-shopping-cart mr-3"></i></a>
					<?php }?>
				<?php endif; ?>
				<?php if ( get_theme_mod('fashion_boutique_myaccount_link') ) : ?>
					<a href="<?php echo esc_url( get_theme_mod('fashion_boutique_myaccount_link' ) ); ?>" class=""><i class="far fa-user"></i></a>
				<?php endif; ?>				
			</div>
	   	</div>
	</div>
</header>

<div class="product-info py-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-4 align-self-center">
		        <?php if(class_exists('woocommerce')){ ?>
		          	<button class="product-btn"><?php echo esc_html_e('All Categories','fashion-boutique'); ?></button>
		          	<div class="product-cat" style="display: none;">
		            	<?php
		              		$args = array(
			                'orderby'    => 'title',
			                'order'      => 'ASC',
			                'hide_empty' => 0,
			                'parent'  => 0
		              	);
		              	$product_categories = get_terms( 'product_cat', $args );
		              	$count = count($product_categories);
		              	if ( $count > 0 ){
                  			foreach ( $product_categories as $product_category ) {
			                    $product_cat_id = $product_category->term_id;
			                    $cat_link = get_category_link( $product_cat_id );
		                    	if ($product_category->category_parent == 0) { ?>
		                  		<li class="drp_dwn_menu"><a href="<?php echo esc_url(get_term_link( $product_category ) ); ?>">
		                  	<?php
		                }
		                echo esc_html( $product_category->name ); ?></a></li>
		            	<?php } } ?>
		          	</div>
		        <?php }?>
			</div>
			<div class="col-lg-6 col-md-8 col-sm-8 align-self-center">
				<div class="header-search text-center py-3 py-md-0">
			    	<?php if ( get_theme_mod('fashion_boutique_search_box_enable', true) == true ) : ?>
			    		<form method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
				            <label class="screen-reader-text" for="woocommerce-product-search-field"><?php esc_html_e('Search for:', 'fashion-boutique'); ?></label>
				            <input type="search" id="woocommerce-product-search-field" class="search-field " placeholder="<?php echo esc_html('Search Here','fashion-boutique'); ?>" value="<?php echo get_search_query(); ?>" name="s"/>
				            <button type="submit" value="" class="search-button"><i class="fas fa-search"></i></button>
				            <input type="hidden" name="post_type" value="product"/>
			          	</form>
			    	<?php endif; ?>
			    </div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 align-self-center">
				<?php if ( get_theme_mod('fashion_boutique_header_sale_text') ) : ?>
					<h6 class="mt-md-3 mt-lg-0"><?php echo esc_html( get_theme_mod('fashion_boutique_header_sale_text' ) ); ?></h6>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>