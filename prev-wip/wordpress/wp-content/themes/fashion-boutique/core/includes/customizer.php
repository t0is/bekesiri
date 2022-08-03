<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fashion_boutique_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'fashion-boutique' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'fashion-boutique' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'fashion-boutique' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'fashion_boutique_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'fashion-boutique' ),
	) );

	// Scroll Top

	Kirki::add_section( 'fashion_boutique_section_scroll', array(
	    'title'          => esc_html__( 'Additional Settings', 'fashion-boutique' ),
	    'description'    => esc_html__( 'Scroll To Top', 'fashion-boutique' ),
	    'panel'          => 'fashion_boutique_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_boutique_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_section_scroll',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_fashion_boutique',
		'label'       => esc_html__( 'Menus Text Transform', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_section_scroll',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'fashion-boutique' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'fashion-boutique' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'fashion-boutique' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'fashion-boutique' ),

		],
	]
	);

	// COLOR SECTION

	Kirki::add_section( 'fashion_boutique_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'fashion-boutique' ),
	    'description'    => esc_html__( 'Theme Color Settings', 'fashion-boutique' ),
	    'panel'          => 'fashion_boutique_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_global_colors',
		'section'     => 'fashion_boutique_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'fashion_boutique_global_color',
		'label'       => __( 'choose your Appropriate Color', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_section_color',
		'default'     => '#6f45c5',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'fashion_boutique_global_color_2',
		'label'       => __( 'Choose Your Second Color', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_section_color',
		'default'     => '#fbe502',
	] );

	// POST SECTION

	Kirki::add_section( 'fashion_boutique_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'fashion-boutique' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'fashion-boutique' ),
	    'panel'          => 'fashion_boutique_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_enable_post_heading',
		'section'     => 'fashion_boutique_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fashion_boutique_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'fashion_boutique_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'fashion-boutique' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'fashion-boutique' ),
	    'panel'          => 'fashion_boutique_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_free_shipping_text_heading',
		'section'     => 'fashion_boutique_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Free Shipping Text', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_header_free_shipping',
        'section'     => 'fashion_boutique_section_header',
        'default'     => '',
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_delivery_heading',
		'section'     => 'fashion_boutique_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Delivery Text', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_header_delivery',
        'section'     => 'fashion_boutique_section_header',
        'default'     => '',
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_gift_heading',
		'section'     => 'fashion_boutique_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Gift Text', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_header_gift',
        'section'     => 'fashion_boutique_section_header',
        'default'     => '',
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_my_account_heading',
		'section'     => 'fashion_boutique_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Myaccount Link', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'link',
        'settings'    => 'fashion_boutique_myaccount_link',
        'section'     => 'fashion_boutique_section_header',
        'default'     => '',
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_sale_heading',
		'section'     => 'fashion_boutique_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Text', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_header_sale_text',
        'section'     => 'fashion_boutique_section_header',
        'default'     => '',
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_enable_search',
		'section'     => 'fashion_boutique_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_search_box_enable',
		'section'     => 'fashion_boutique_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_enable_google_translator',
		'section'     => 'fashion_boutique_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Google Translator', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_header_google_translator',
		'section'     => 'fashion_boutique_section_header',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_enable_cart',
		'section'     => 'fashion_boutique_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Cart', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_cart_box_enable',
		'section'     => 'fashion_boutique_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique' ),
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'fashion_boutique_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'fashion-boutique' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'fashion-boutique' ),
        'panel'          => 'fashion_boutique_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_enable_heading',
		'section'     => 'fashion_boutique_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_slide_title_unable_disable',
		'label'       => esc_html__( 'Slider Title Enable / Disable', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_slide_text_unable_disable',
		'label'       => esc_html__( 'Slider Text Enable / Disable', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_slide_btn_unable_disable',
		'label'       => esc_html__( 'Slider Button Enable / Disable', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_slider_heading',
		'section'     => 'fashion_boutique_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'fashion_boutique_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'fashion_boutique_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'fashion-boutique' ),
		'priority'    => 10,
		'choices'     => fashion_boutique_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_slide_text_excerpt_number',
		'section'     => 'fashion_boutique_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fashion_boutique_slide_excerpt_number',
		'label'       => esc_html__( 'Slide Content Range', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_blog_slide_section',
		'default'     => 20,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_slider_button_heading',
		'section'     => 'fashion_boutique_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Button Text', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_slider_button_text',
		'section'  => 'fashion_boutique_blog_slide_section',
		'default'  => 'Shop Now',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_slider_big_heading',
		'section'     => 'fashion_boutique_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '# Tag Text', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_slide_big_text',
		'section'  => 'fashion_boutique_blog_slide_section',
		'default'  => '',
		'priority' => 10,
	] );

	//FEATURED CATEGORY SECTION

	Kirki::add_section( 'fashion_boutique_featured_category_section', array(
	    'title'          => esc_html__( 'Featured Category Settings', 'fashion-boutique' ),
	    'description'    => esc_html__( 'Here you can add different type of featured category.', 'fashion-boutique' ),
	    'panel'          => 'fashion_boutique_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_enable_heading',
		'section'     => 'fashion_boutique_featured_category_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Featured Category',  'fashion-boutique' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_featured_category_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'fashion-boutique' ),
		'section'     => 'fashion_boutique_featured_category_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'fashion-boutique' ),
			'off' => esc_html__( 'Disable',  'fashion-boutique' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'fashion_boutique_featured_category',
		'label'       => esc_html__( 'Select the category to show featured category', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_featured_category_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'fashion-boutique' ),
		'priority'    => 10,
		'choices'     => fashion_boutique_get_categories_select(),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'fashion_boutique_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'fashion-boutique' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'fashion-boutique' ),
        'panel'          => 'fashion_boutique_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_footer_text_heading',
		'section'     => 'fashion_boutique_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_footer_text',
		'section'  => 'fashion_boutique_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_footer_enable_heading',
		'section'     => 'fashion_boutique_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'fashion-boutique' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fashion-boutique' ),
		'section'     => 'fashion_boutique_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique' ),
		],
	] );
}
