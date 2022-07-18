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

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fashion-boutique-pro' ); ?></a>
<?php if ( get_theme_mod('fashion_boutique_pro_site_preloader_section_enable', true) == true ) : ?>
	<div class="cssloader">
    	<div class="sh1"></div>
    	<div class="sh2"></div>
    	<h1 class="lt"><?php esc_html_e( 'loading',  'fashion-boutique-pro' ); ?></h1>
    </div>
<?php endif; ?>
<div class="header-menu">
	<div class=" top-header text-center text-lg-left text-md-left">
		<div class="container-fluid px-lg-5">
			<div class="row">
				<div class=" col-lg-10 col-md-10 align-self-center content">
					<div class="row">
						<div class="col-lg-4 col-md-4 align-self-center">
							<?php $icon = get_theme_mod( 'fashion_boutique_pro_top_header_icon_setting1', '' ); ?>
			                <span class="dashicons mr-2 dashicons-<?php echo esc_attr( $icon ); ?>"></span>
							<span class="delivery "><?php echo esc_html(get_theme_mod('fashion_boutique_pro_top_header_delivery_text'));?></a></span>
			            </div>
			            <div class="col-lg-4 col-md-4 align-self-center">
			                <?php $icon = get_theme_mod( 'fashion_boutique_pro_top_header_icon_setting2', '' ); ?>
			                <span class="dashicons mr-2 dashicons-<?php echo esc_attr( $icon ); ?>"></span>
			                <span class="worldwide "><?php echo esc_html(get_theme_mod('fashion_boutique_pro_top_header_worldwide_text'));?></a></span>
			            </div>
			            <div class="col-lg-4 col-md-4 align-self-center">
			                <?php $icon = get_theme_mod( 'fashion_boutique_pro_top_header_icon_setting3', '' ); ?>
			                <span class="dashicons mr-2 dashicons-<?php echo esc_attr( $icon ); ?>"></span>
			                <span class="gifts "><?php echo esc_html(get_theme_mod('fashion_boutique_pro_top_header_gifts_text'));?></a></span>
			            </div>
		            </div>
				</div>
				
				<div class="col-lg-2 col-md-2 text-center">
					<?php echo do_shortcode('[gtranslate]'); ?>
				</div>
		    </div>
	    </div>
	</div>

	<?php if ( get_theme_mod('fashion_boutique_pro_header_fixed_section_enable', true) == false ) : ?> 
	    <div id="site-navigation"></div>
	<?php endif; ?>

	<header id="site-navigation" class=" header text-center text-md-left">
		<div class="container-fluid menu-header px-lg-5 py-lg-3">
			<div class="row">
				<div class="col-lg-3 col-md-3 ">
					<div class="logo text-center text-md-center text-lg-left">
				    	<div class="logo-image mr-3">
					    	<?php if(get_theme_mod('custom_logo') == ''){ ?>
					    		<?php if ( get_theme_mod('fashion_boutique_pro_display_site_logo', true) == true ) : ?>
					    		  <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri().'/images/logo/logo.png');?>"></a>
					    		<?php endif; ?>
					    	<?php } else { 
				    		 	echo esc_url( the_custom_logo() );
					    	}?>
					    </div>
					    <div class="logo-content">
					    	<?php
					    		if ( get_theme_mod('fashion_boutique_pro_display_header_title', '') ) :
						      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
						      			echo esc_attr(get_bloginfo('name'));
						      		echo '</a>';
						      	endif;
						      	if ( get_theme_mod('fashion_boutique_pro_display_header_text', '') ) :
					      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
					      		endif;
						    ?>
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-6 col-3 align-self-center text-md-center text-left">
					<div id="mySidenav" class="sidenav">
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					  	<nav id="main-menu" class="close-panal">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'main-menu',
									'container' => 'false'
								));
							?>
						</nav>
					</div>
					<div class="open-menu"><span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span></div>
				</div>
			
				<div class="col-lg-2 col-md-2 col-9 order-button align-self-center text-right">
<!--					--><?php //if ( get_theme_mod('fashion_boutique_pro_search_box_enable', true) == true ) : ?>
<!--	                    <span class="header-search text-center ml-lg-1 ml-xl-4"> -->
<!--	                        <a class="open-search-form" href="#search-form"><i class="fa fa-search" aria-hidden="true"></i></a>-->
<!--	                        <div class="search-form">--><?php //get_search_form();?><!--</div>-->
<!--	                    </span>-->
<!--	                --><?php //endif; ?>
<!--					<span class="my_account mx-xl-3 mx-lg-1 mx-2">-->
<!--					    <a href="--><?php //echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?><!--" title="--><?php //_e('My Account',''); ?><!--"><i class="far fa-user"></i>-->
<!--					    </a>-->
<!--					</span>-->

                    <span class="header-search text-center ml-lg-1 ml-xl-4">
                        <a class="" href="#"><i class="dashicons dashicons-facebook-alt" aria-hidden="true"></i></a>
                    </span>
                    <span class="header-search text-center ml-lg-1 ml-xl-4">
                        <a class="" href="#"><i class="dashicons dashicons-twitter" aria-hidden="true"></i></a>
                    </span>
                    <span class="header-search text-center ml-lg-1 ml-xl-4">
                        <a class="" href="#"><i class="dashicons dashicons-instagram" aria-hidden="true"></i></a>
                    </span>


				</div>
			</div>
		</div>
	</header>

	 
	<div class="container-fluid  all-category px-lg-5 align-self-center py-3">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<div class="category text-center align-self-center">
					<?php if ( get_theme_mod('fashion_boutique_pro_header_button1_text', true) == true ) : ?> 
			            <a href="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_header_button1_url'));?>" class="button1 animate__animated animate__pulse">
			            <?php echo esc_html(get_theme_mod('fashion_boutique_pro_header_button1_text'));?></a>
			        <?php endif; ?>
			    </div>
			</div>

			<div class="col-lg-6 col-md-6 align-self-center  product-search">
				<div class="row">
					<div class="col-xl-8 col-lg-7 col-md-6 col-6"> 
						<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
					        <?php
					          $search_placeholder = esc_html(get_theme_mod('fashion_boutique_pro_product_search_placeholder', esc_html__('Find Yours Products','fashion-boutique-pro'))) ;
					          $button_text = esc_html(get_theme_mod('fashion_boutique_pro_product_search_button_text',esc_html__('','fashion-boutique-pro'))) ;
					        ?>
					        <label class="screen-reader-text" for="woocommerce-product-search-field"><?php esc_html_e('Search for:', 'fashion-boutique-pro'); ?></label>
					        <input type="search" id="woocommerce-product-search-field" class="search-field "   placeholder="<?php echo esc_attr($search_placeholder); ?>" value="<?php echo get_search_query(); ?>" name="s"/>
					        <button type="submit" value="" class="search-button"><i class="fas fa-search"></i></button>
					        <input type="hidden" name="post_type" value="product"/>
					    </form>
					</div>
				    <div class="col-xl-4 col-lg-5 col-md-6 col-6 align-self-center">
			            <?php if(class_exists('woocommerce')){ ?>
				          <button class="product-btn"><?php echo esc_html_e('All Category','fashion-boutique-pro'); ?><i class=" ml-md-5 ml-3 fas fa-sort-down"></i></button>
				            <div class="product-cat">
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
					                    $product_cat_id   = $product_category->term_id;
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
			    </div>
			</div>
			
			<div class="col-lg-3 col-md-3 align-self-center">
				<div  class="sale_title text-center align-self-center ">
					<?php if ( get_theme_mod('fashion_boutique_pro_header_button2_text', true) == true ) : ?> 
			            <a href="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_header_button2_url'));?>" class="button2 animate__animated animate__pulse">
			            <?php echo esc_html(get_theme_mod('fashion_boutique_pro_header_button2_text'));?></a>
			            <h6><?php echo esc_html(get_theme_mod('fashion_boutique_pro_button2_get_title'));?></h6>
			        <?php endif; ?>
			    </div>
			</div>
		</div>
	</div>
 
</div>

