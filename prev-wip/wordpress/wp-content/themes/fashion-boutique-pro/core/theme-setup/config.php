<?php
/**
 * Settings for theme wizard
 *
 * @package Whizzie
 * @author Catapult Themes
 * @since 1.0.0
 */

/**
 * Define constants
 **/
if ( ! defined( 'WHIZZIE_DIR' ) ) {
	define( 'WHIZZIE_DIR', dirname( __FILE__ ) );
}
require trailingslashit( WHIZZIE_DIR ) . 'whizzie.php';
$current_theme = wp_get_theme();
$theme_title = $current_theme->get( 'Name' );


/**
 * Make changes below
 **/
$config['page_slug'] 	=  'fashion-boutique-pro';
$config['page_title']	= ' Fashion Boutique Pro Theme Setup';
$config['steps'] = array( 
	'intro' => array(
		'id'			=> 'intro',
		'title'			=> __( 'Welcome to ',  'fashion-boutique-pro' ) . $theme_title,
		'icon'			=> 'dashboard',
		'button_text'	=> __( 'Start Now',  'fashion-boutique-pro' ),
		'can_skip'		=> false
	),
	'plugins' => array(
		'id'			=> 'plugins',
		'title'			=> __( 'Plugins',  'fashion-boutique-pro' ),
		'icon'			=> 'admin-plugins',
		'button_text'	=> __( 'Install Plugins',  'fashion-boutique-pro' ),
		'can_skip'		=> true
	),
	'widgets' => array(
		'id'			=> 'widgets',
		'title'			=> __( 'Demo Importer',  'fashion-boutique-pro' ),
		'icon'			=> 'welcome-widgets-menus',
		'button_text'	=> __( 'Import Demo',  'fashion-boutique-pro' ),
		'can_skip'		=> true
	),
	'done' => array(
		'id'			=> 'done',
		'title'			=> __( 'All Done',  'fashion-boutique-pro' ),
		'icon'			=> 'yes',
	)
);

/**
 * This kicks off the wizard
 **/
if( class_exists( 'Whizzie' ) ) {
	$Whizzie = new Whizzie( $config );
}