<?php

define( 'fashion_boutique_pro_MIN_PHP_VERSION', '5.3' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('fashion_boutique_pro_enqueue_scripts')) {

	function fashion_boutique_pro_enqueue_scripts() {

		wp_enqueue_style( 'google-fonts-poppins', 'https://fonts.googleapis.com/css2?family=Great+Vibes&family=Italianno&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap', [], null );

		wp_enqueue_style( 'google-fonts-jost:ital', 'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', [], null );

		wp_enqueue_style(
			'bootstrap-css',
			get_template_directory_uri() . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',
			get_template_directory_uri() . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl.carousel-css',
			get_template_directory_uri() . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style(
			'woocommerce-css',
			get_template_directory_uri() . '/css/woocommerce.css',
			array(),'4.1.1'
		);

		wp_enqueue_style(
			'animates-css',
			get_template_directory_uri() . '/css/animates.css',
			array(),'4.1.1'
		);

		wp_enqueue_style(' fashion-boutique-pro-style', get_stylesheet_uri(), array() );

		wp_enqueue_script(
			' fashion-boutique-pro-navigation',
			get_template_directory_uri() . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'owl.carousel',
			get_template_directory_uri() . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			' fashion-boutique-pro-script',
			get_template_directory_uri() . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$css = '';

		if ( get_header_image() ) :

			$css .=  '
				#site-navigation {
					background-image: url('.esc_url(get_header_image()).');
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
				}';

		endif;

		if ( get_header_textcolor() ) :

			$css .=  '
				.logo a {
					color: #'.esc_attr(get_header_textcolor()).';
				}';

		endif;

		if ( get_theme_mod(' fashion_boutique_pro_color_overlay') ) :

			$css .=  '
				a:hover,
				a:focus,
				.logo a:hover,
				.logo a:focus,
				#main-menu a:hover,
				#main-menu ul li a:hover,
				#main-menu li:hover > a,
				#main-menu a:focus,
				#main-menu ul li a:focus,
				#main-menu li.focus > a,
				#main-menu li:focus > a,
				#main-menu ul li.current-menu-item > a,
				#main-menu ul li.current_page_item > a,
				#main-menu ul li.current-menu-parent > a,
				#main-menu ul li.current_page_ancestor > a,
				#main-menu ul li.current-menu-ancestor > a {
					color: '.esc_attr(get_theme_mod(' fashion_boutique_pro_color_overlay')).';
				}';

		endif;

		wp_add_inline_style( ' fashion-boutique-pro-style', $css );

	}

	add_action( 'wp_enqueue_scripts', 'fashion_boutique_pro_enqueue_scripts' );

    }
    add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
	function load_dashicons_front_end() {
	  wp_enqueue_style( 'dashicons' );
	}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('fashion_boutique_pro_after_setup_theme')) {

	function fashion_boutique_pro_after_setup_theme() {

		if ( ! isset( $content_width ) ) $content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menus',  'fashion-boutique-pro' ),
		));

		add_theme_support( "responsive-embeds" );
		add_theme_support('title-tag');
		add_theme_support('woocommerce');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-background', array(
		  'default-color' => 'f3f4f7'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );

		add_theme_support( 'custom-header', array(
			'width' => 1920,
			'height' => 90
		));

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'fashion_boutique_pro_after_setup_theme', 999 );

}

require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
include_once get_theme_file_path( '/core/includes/class-kirki-installer-section.php' );
require get_template_directory() . '/core/includes/custom-recent-post-layout1.php';
require get_parent_theme_file_path('/core/theme-setup/config.php' );

/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('fashion_boutique_pro_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function fashion_boutique_pro_comment($comment, $args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:',  'fashion-boutique-pro'); 
                comment_author_link(); ?><?php edit_comment_link(__('Edit',  'fashion-boutique-pro'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
	                <a class="pull-left" href="#">
	                    <?php if (0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>
	                </a>
		            <div class="media-body">
		                <div class="media-body-wrap card">
		                    <div class="card-header">
		                        <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
		                        <div class="comment-meta">
		                            <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
		                                <time datetime="<?php comment_time('c'); ?>">
		                                    <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time',  'fashion-boutique-pro'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
		                                </time>
		                            </a>
		                            <?php edit_comment_link( __( 'Edit',  'fashion-boutique-pro' ), '<span class="edit-link">', '</span>' ); ?>
		                        </div>
		                    </div>

		                    <?php if ('0' == $comment->comment_approved) : ?>
		                        <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.',  'fashion-boutique-pro'); ?></p>
		                    <?php endif; ?>

		                    <div class="comment-content card-block">
		                        <?php comment_text(); ?>
		                    </div>

		                    <?php comment_reply_link(
		                        array_merge(
		                            $args, array(
		                                'add_below' => 'div-comment',
		                                'depth' => $depth,
		                                'max_depth' => $args['max_depth'],
		                                'before' => '<div class="reply comment-reply card-footer">',
		                                'after' => '</div><!-- .reply -->'
		                            )
		                        )
		                    ); ?>
		                </div>
		            </div>
            </article>

            <?php
        endif;
    }
endif;


if (!function_exists('fashion_boutique_pro_widgets_init')) {

	function fashion_boutique_pro_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','fashion-boutique-pro'),
			'id'   => 'fashion-boutique-pro-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'fashion-boutique-pro'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','fashion-boutique-pro'),
			'id'   => 'fashion-boutique-pro-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'fashion-boutique-pro'),
			'before_widget' => '<div id="%1$s" class="col-md-6 col-lg-3 col-12 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '  </h4>'

		));

	}

	add_action( 'widgets_init', 'fashion_boutique_pro_widgets_init' );

}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','fashion-boutique-pro' ); ?>">
		<i class="fas fa-shopping-cart"></i>
		<p class="cart-item-box"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></p>
	</a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}

function get_categories_select() {
	$teh_cats = get_categories();
	$results;

	$count = count($teh_cats);
	for ($i=0; $i < $count; $i++) {
		if (isset($teh_cats[$i]))
	  	$results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;
	else
  		$count++;
	}
	return $results;
}

function fashion_boutique_pro_sanitize_select( $input, $setting ) {	
	// Ensure input is a slug
	$input = sanitize_key( $input );
	
	// Get list of choices from the control
	// associated with the setting
	$choices = $setting->manager->get_control( $setting->id )->choices;
	
	// If the input is a valid key, return it;
	// otherwise, return the default
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'fashion_boutique_pro_loop_columns');
	if (!function_exists('fashion_boutique_pro_loop_columns')) {
	function fashion_boutique_pro_loop_columns() {
		return get_theme_mod( 'fashion_boutique_pro_products_per_row', '3' ); 
		// 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'fashion_boutique_pro_products_per_page' );
function fashion_boutique_pro_products_per_page( $cols ) {
  	return  get_theme_mod( 'fashion_boutique_pro_products_per_page',9);
}

function fashion_boutique_pro_remove_sections( $wp_customize ) {
	$wp_customize->remove_control('display_header_text');
	$wp_customize->remove_setting('display_header_text');
}
add_action( 'customize_register', 'fashion_boutique_pro_remove_sections');

add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_true' );

?>