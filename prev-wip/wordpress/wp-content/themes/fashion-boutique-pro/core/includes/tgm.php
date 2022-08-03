<?php

	require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function fashion_boutique_pro_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework',  'fashion-boutique-pro' ),
			'slug'             => 'kirki',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Contact Form 7', 'fashion-boutique-pro' ),
			'slug'             => 'contact-form-7',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WooCommerce', 'fashion-boutique-pro' ),
			'slug'             => 'woocommerce',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'GTranslate', 'fashion-boutique-pro' ),
			'slug'             => 'gtranslate',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'TI WooCommerce Wishlist', 'fashion-boutique-pro' ),
			'slug'             => 'ti-woocommerce-wishlist',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Woo Quickview', 'fashion-boutique-pro' ),
			'slug'             => 'woo-quickview',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
	);

	$config = array();
	tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'fashion_boutique_pro_register_recommended_plugins' );