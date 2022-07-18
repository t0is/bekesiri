<?php

add_action( 'admin_menu', 'fashion_boutique_getting_started' );
function fashion_boutique_getting_started() {    	    	
	add_theme_page( esc_html__('Get Started', 'fashion-boutique'), esc_html__('Get Started', 'fashion-boutique'), 'edit_theme_options', 'fashion-boutique-guide-page', 'fashion_boutique_test_guide');   
}

function fashion_boutique_admin_enqueue_scripts() {
	wp_enqueue_style( 'fashion-boutique-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'fashion_boutique_admin_enqueue_scripts' );

if ( ! defined( 'FASHION_BOUTIQUE_DOCS_FREE' ) ) {
define('FASHION_BOUTIQUE_DOCS_FREE',__('https://www.misbahwp.com/docs/fashion-boutique-free-docs/','fashion-boutique'));
}
if ( ! defined( 'FASHION_BOUTIQUE_DOCS_PRO' ) ) {
define('FASHION_BOUTIQUE_DOCS_PRO',__('https://www.misbahwp.com/docs/fashion-boutique-pro-docs','fashion-boutique'));
}
if ( ! defined( 'FASHION_BOUTIQUE_BUY_NOW' ) ) {
define('FASHION_BOUTIQUE_BUY_NOW',__('https://www.misbahwp.com/themes/fashion-boutique-wordpress-theme/','fashion-boutique'));
}
if ( ! defined( 'FASHION_BOUTIQUE_SUPPORT_FREE' ) ) {
define('FASHION_BOUTIQUE_SUPPORT_FREE',__('https://wordpress.org/support/theme/fashion-boutique','fashion-boutique'));
}
if ( ! defined( 'FASHION_BOUTIQUE_REVIEW_FREE' ) ) {
define('FASHION_BOUTIQUE_REVIEW_FREE',__('https://wordpress.org/support/theme/fashion-boutique/reviews/#new-post','fashion-boutique'));
}
if ( ! defined( 'FASHION_BOUTIQUE_DEMO_PRO' ) ) {
define('FASHION_BOUTIQUE_DEMO_PRO',__('https://www.misbahwp.com/demo/fashion-boutique/','fashion-boutique'));
}

function fashion_boutique_test_guide() { ?>
	<?php $theme = wp_get_theme(); ?>
	
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( FASHION_BOUTIQUE_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'fashion-boutique' ) ?></a>			
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'fashion-boutique' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( FASHION_BOUTIQUE_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'fashion-boutique' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( FASHION_BOUTIQUE_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'fashion-boutique' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','fashion-boutique'); ?><?php echo esc_html( $theme ); ?>  <span><?php esc_html_e('Version: ', 'fashion-boutique'); ?><?php echo esc_html($theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','fashion-boutique'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','fashion-boutique'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','fashion-boutique'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','fashion-boutique'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','fashion-boutique'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','fashion-boutique'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','fashion-boutique'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','fashion-boutique'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','fashion-boutique'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','fashion-boutique'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','fashion-boutique'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','fashion-boutique'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','fashion-boutique'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','fashion-boutique'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','fashion-boutique'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>		    
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'fashion-boutique' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','fashion-boutique'); ?></p>
					<div id="admin_pro_links">			
						<a class="blue-button-2" href="<?php echo esc_url( FASHION_BOUTIQUE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'fashion-boutique' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( FASHION_BOUTIQUE_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'fashion-boutique' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( FASHION_BOUTIQUE_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'fashion-boutique' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
