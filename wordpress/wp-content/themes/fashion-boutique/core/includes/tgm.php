<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function fashion_boutique_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'fashion-boutique' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Google Language Translator', 'fashion-boutique' ),
			'slug'             => 'google-language-translator',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	fashion_boutique_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'fashion_boutique_register_recommended_plugins' );