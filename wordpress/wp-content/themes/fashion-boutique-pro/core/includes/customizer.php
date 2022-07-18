<?php

if ( class_exists("Kirki")){


	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_display_site_logo',
		'label'       => esc_html__( 'Site Logo Enable / Disable Button', 'fashion-boutique-pro' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique-pro' ),
		],
	] );


    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'fashion-boutique-pro' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique-pro' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'fashion-boutique-pro' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique-pro' ),
		],
	] );	

	Kirki::add_panel( 'fashion_boutique_pro_panel_id', array(
	    'priority'    => 1,
	    'title'       => esc_html__( 'Theme Options', 'fashion-boutique-pro' ),
	) );


	// POST SECTION

	Kirki::add_section( 'fashion_boutique_pro_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'fashion-boutique-pro' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'fashion-boutique-pro' ),
	    'panel'          => 'fashion_boutique_pro_panel_id',
	    'priority'       => 1,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_post_heading',
		'section'     => 'fashion_boutique_pro_section_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_blog_date_enable',
		'label'       => esc_html__( 'Post Date Enable / Disable Button', 'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique-pro' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_blog_comments_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique-pro' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique-pro' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_post_content_heading',
		'section'     => 'fashion_boutique_pro_section_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Post Content Settings.', 'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fashion_boutique_pro_post_content_lenght',
		'label'       => esc_html__( 'Post Content Lenght', 'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_section_post',
		'default'     => 30,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_post_banner_heading',
		'section'     => 'fashion_boutique_pro_section_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Post & Page Banner Settings.', 'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'global', array(
		'type'        => 'background',
		'settings'    => 'fashion_boutique_pro_post_section_bannre_background_setting',
		'label'       => esc_html__( 'Banner Background',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_section_post',
		'default'     => array(
			'background-color'    => '#eee7f9',
			'background-image'    => '',
			'background-repeat'   => 'no-repeat',
			'background-size'     => 'cover',
			'background-attach'   => 'fixed',
			'background-position' => 'left-top',
			'background-opacity'  => 90,
		),
		'priority'		 => 10,
		'output'		 => array(
			array(
				'element' => '#banner',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'fashion_boutique_pro_color_setting_rgba',
		'label'       => esc_html__( 'Banner Heading Color', 'fashion-boutique-pro' ),
		'description' => esc_html__( '', 'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_section_post',
		'default'     => '#000000',
		'choices'     => [
			'alpha' => true,
		],
    ] );

	// THEME SETTING

	Kirki::add_section( 'fashion_boutique_pro_theme_section', array(
        'title'          => esc_html__( 'Theme Settings', 'fashion-boutique-pro' ),
        'description'    => esc_html__( 'You have to select section.', 'fashion-boutique-pro' ),
        'panel'          => 'fashion_boutique_pro_panel_id',
        'priority'       => 2,
    ) );


    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_site_preloader_section_heading',
		'section'     => 'fashion_boutique_pro_theme_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Preloader Section',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_site_preloader_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_theme_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique-pro' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_header_fixed_section_heading',
		'section'     => 'fashion_boutique_pro_theme_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Header Fixed Section', 'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_header_fixed_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_theme_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique-pro' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_scroll_top_section_heading',
		'section'     => 'fashion_boutique_pro_theme_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Scroll To Top Section', 'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_scroll_top_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_theme_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable', 'fashion-boutique-pro' ),
		],
	] ); 


    // REORDER

    Kirki::add_section( 'fashion_boutique_pro_reorder_section_home', array(
        'title'          => esc_html__( 'Section Reorder ',  'fashion-boutique-pro' ),
        'panel'          => 'fashion_boutique_pro_panel_id',
        'priority'       => 3,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'sortable',
		'settings'    => 'fashion_boutique_pro_sortable_setting',
		'label'       => esc_html__( 'With the help of this section you can enable / disable the sections and also reorder the sections.',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_reorder_section_home',
		'default'     => [ 'option1','option2','option3','option4','option5','option6','option7','option8','option9'],

		'choices'     => [
			'option1' => esc_html__( 'Slider Section',  'fashion-boutique-pro' ),
			'option2' => esc_html__( 'Featured Categories Section',  'fashion-boutique-pro' ),
			'option3' => esc_html__( 'Featured Products Section',  'fashion-boutique-pro' ),
			'option4' => esc_html__( 'About Us Section',  'fashion-boutique-pro' ),
			'option5' => esc_html__( 'Hot Product Section',  'fashion-boutique-pro' ),
			'option6' => esc_html__( 'Testimonial Section',  'fashion-boutique-pro' ),
			'option7' => esc_html__( 'NewsLetter Section',  'fashion-boutique-pro' ),
			'option8' => esc_html__( 'Latest News Section',  'fashion-boutique-pro' ),
			'option9' => esc_html__( 'Brands Section',  'fashion-boutique-pro' ),
			'option10' => esc_html__( 'Additional Block Section',  'fashion-boutique-pro' ),
		],
		'priority'    => 10,
    ] );

     
    // HEADER SECTION

	Kirki::add_section( 'fashion_boutique_pro_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'fashion-boutique-pro' ),
	    'description'    => esc_html__( 'Here you can add different type of social icons.', 'fashion-boutique-pro' ),
	    'panel'          => 'fashion_boutique_pro_panel_id',
	    'priority'       => 4,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_top_header',
		'section'     => 'fashion_boutique_pro_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Top Header', 'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_top_header_delivery',
		'section'     => 'fashion_boutique_pro_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Delivery Link', 'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'dashicons',
        'settings' => 'fashion_boutique_pro_top_header_icon_setting1',
        'label'    => esc_html__( 'Icon',  'fashion-boutique-pro' ),
        'section'  => 'fashion_boutique_pro_section_header',
        'default'  => '',
        'priority'    => 10,
    ] );
       
    Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'fashion_boutique_pro_top_header_delivery_text',
        'label'    => esc_html__( 'Text',  'fashion-boutique-pro' ),
        'section'  => 'fashion_boutique_pro_section_header',
        'default'  => '',
        'priority'    => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_top_header_worldwide',
		'section'     => 'fashion_boutique_pro_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Worldwide Link', 'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'dashicons',
        'settings' => 'fashion_boutique_pro_top_header_icon_setting2',
        'label'    => esc_html__( 'Icon',  'fashion-boutique-pro' ),
        'section'  => 'fashion_boutique_pro_section_header',
        'default'  => '',
        'priority'    => 10,
    ] );
       
    Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'fashion_boutique_pro_top_header_worldwide_text',
        'label'    => esc_html__( 'Text',  'fashion-boutique-pro' ),
        'section'  => 'fashion_boutique_pro_section_header',
        'default'  => '',
        'priority'    => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_top_header_gifts',
		'section'     => 'fashion_boutique_pro_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Gifts Link', 'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'dashicons',
        'settings' => 'fashion_boutique_pro_top_header_icon_setting3',
        'label'    => esc_html__( 'Icon',  'fashion-boutique-pro' ),
        'section'  => 'fashion_boutique_pro_section_header',
        'default'  => '',
        'priority'    => 10,
    ] );
       
    Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'fashion_boutique_pro_top_header_gifts_text',
        'label'    => esc_html__( 'Text',  'fashion-boutique-pro' ),
        'section'  => 'fashion_boutique_pro_section_header',
        'default'  => '',
        'priority'    => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_wishlist_url',
		'section'     => 'fashion_boutique_pro_header_menu_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Wishlist page url', 'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'link',
        'settings' => 'fashion_boutique_pro_wishlist_url',
        'label'    => esc_html__( 'Page Url',  'fashion-boutique-pro' ),
        'section'  => 'fashion_boutique_pro_header_menu_section',
        'default'  => '',
        'priority'    => 10,
    ] );

    //Header All Category

    Kirki::add_section( 'fashion_boutique_pro_all_category_section', array(
	    'title'          => esc_html__( 'All Category Settings', 'fashion-boutique-pro' ),
	    'description'    => esc_html__( 'You have to select slider description.', 'fashion-boutique-pro' ),
	    'panel'          => 'fashion_boutique_pro_panel_id',
	    'priority'       => 5,
	) );
	
	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_heading_all_category',
		'section'     => 'fashion_boutique_pro_all_category_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable All Category',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_all_category_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_all_category_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable',  'fashion-boutique-pro' ),
		],
	] );
    
    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_all_category_heading',
		'section'     => 'fashion_boutique_pro_all_category_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'All Category Section ',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_pro_header_button1_text',
        'label'       => esc_html__( 'Button Text ',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_all_category_section',
        'default'     => '',
    ] ); 

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'link',
        'settings'    => 'fashion_boutique_pro_header_button1_url',
        'label'       => esc_html__( 'Button Url ',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_all_category_section',
        'default'     => '',
    ] ); 

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_pro_header_button2_text',
        'label'       => esc_html__( 'Button Text ',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_all_category_section',
        'default'     => '',
    ] ); 

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'link',
        'settings'    => 'fashion_boutique_pro_header_button2_url',
        'label'       => esc_html__( 'Button Url ',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_all_category_section',
        'default'     => '',
    ] ); 

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_pro_button2_get_title',
        'label'       => esc_html__( 'Button Title ',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_all_category_section',
        'default'     => '',
    ] ); 


	// SLIDER SECTION

	Kirki::add_section( 'fashion_boutique_pro_slider_section', array(
	    'title'          => esc_html__( 'Slider Settings', 'fashion-boutique-pro' ),
	    'description'    => esc_html__( 'You have to select slider description.', 'fashion-boutique-pro' ),
	    'panel'          => 'fashion_boutique_pro_panel_id',
	    'priority'       => 5,
	) );
	
	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_heading_slider',
		'section'     => 'fashion_boutique_pro_slider_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_slider_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_slider_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable',  'fashion-boutique-pro' ),
		],
	] );
    
    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_slider_heading',
		'section'     => 'fashion_boutique_pro_slider_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Section ',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'number',
        'settings'    => 'fashion_boutique_pro_slider_counter',
        'label'       => esc_html__( 'Slider Counter Section',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_slider_section',
        'default'     => 3,
        'choices'     => [
            'min'  => 0,
            'max'  => 80,
            'step' => 1,
        ],
    ] );

    $slider_image = get_theme_mod('fashion_boutique_pro_slider_counter','');
            for ( $i = 1; $i <= $slider_image; $i++ ) :

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'image',
        'settings'    => 'fashion_boutique_pro_slider_image' .$i,
        'label'       => esc_html__( 'Slider Image ',  'fashion-boutique-pro' ).$i,
        'description' => esc_html__( 'Image Dimension (1400 x 650)',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_slider_section',
        'default'     => '',
    ] );  

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_pro_slider_main_heading' .$i,
        'label'       => esc_html__( 'Main Heading ',  'fashion-boutique-pro' ).$i,
        'section'     => 'fashion_boutique_pro_slider_section',
        'default'     => '',
    ] ); 

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'textarea',
        'settings'    => 'fashion_boutique_pro_slider_content' .$i,
        'label'       => esc_html__( 'Content ',  'fashion-boutique-pro' ).$i,
        'section'     => 'fashion_boutique_pro_slider_section',
        'default'     => '',
    ] ); 

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_pro_slider_button_text' .$i,
        'label'       => esc_html__( 'Button Text ',  'fashion-boutique-pro' ).$i,
        'section'     => 'fashion_boutique_pro_slider_section',
        'default'     => '',
    ] ); 

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'link',
        'settings'    => 'fashion_boutique_pro_slider_button_url' .$i,
        'label'       => esc_html__( 'Button Url ',  'fashion-boutique-pro' ).$i,
        'section'     => 'fashion_boutique_pro_slider_section',
        'default'     => '',
    ] ); 

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_pro_slider_background_text' .$i,
        'label'       => esc_html__( 'Background Text ',  'fashion-boutique-pro' ).$i,
        'section'     => 'fashion_boutique_pro_slider_section',
        'default'     => '',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'number',
        'settings'    => 'fashion_boutique_pro_slider_icon_counter'.$i,
        'label'       => esc_html__( 'Social Icon Counter ',  'fashion-boutique-pro' ).$i,
        'section'     => 'fashion_boutique_pro_slider_section',
        'default'     => 4,
        'choices'     => [
            'min'  => 0,
            'max'  => 80,
            'step' => 1,
        ],
    ] );

    $slider_icon = get_theme_mod('fashion_boutique_pro_slider_icon_counter'.$i,'');
            for ( $m = 1; $m <= $slider_icon; $m++ ) :
    
    Kirki::add_field( 'theme_config_id', [
        'type'     => 'dashicons',
        'settings' => 'fashion_boutique_pro_slider_icon_setting'.$m .$i,
        'label'    => esc_html__( 'Social Icon ', 'fashion-boutique-pro').$m .$i,
        'section'  => 'fashion_boutique_pro_slider_section',
        'default'  =>  '',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'     => 'link',
        'settings' => 'fashion_boutique_pro_slider_icon_url'.$m .$i,
        'label'    => esc_html__( 'Social Icon Url ',  'fashion-boutique-pro' ).$m .$i,
        'section'  => 'fashion_boutique_pro_slider_section',
        'default'  => '', 
    ] );

    endfor;

	endfor;

	//FEATURED CATEGORY SECTION

	Kirki::add_section( 'fashion_boutique_pro_featured_category_section', array(
	    'title'          => esc_html__( 'Featured Category Settings', 'fashion-boutique-pro' ),
	    'description'    => esc_html__( 'You have to select hot products section.', 'fashion-boutique-pro' ),
	    'panel'          => 'fashion_boutique_pro_panel_id',
	    'priority'       => 9,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_heading_category',
		'section'     => 'fashion_boutique_pro_featured_category_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Featured Category',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_featured_category_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_featured_category_section',
		'default'     => '1',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable',  'fashion-boutique-pro' ),
		],
	] );
    
    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_featured_category_heading',
		'section'     => 'fashion_boutique_pro_featured_category_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Featured Category Section ',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 3,
	] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'number',
        'settings'    => 'fashion_boutique_pro_featured1_counter',
        'label'       => esc_html__( 'Featured Category 1 Counter Section',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_featured_category_section',
        'default'     => 3,
        'choices'     => [
            'min'  => 0,
            'max'  => 80,
            'step' => 1,
        ],
    ] );

    $featured_image1 = get_theme_mod('fashion_boutique_pro_featured1_counter','');
            for ( $i = 1; $i <= $featured_image1; $i++ ) :

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'image',
        'settings'    => 'fashion_boutique_pro_category1_image' .$i,
        'label'       => esc_html__( 'Image 1 ',  'fashion-boutique-pro' ).$i,
        'section'     => 'fashion_boutique_pro_featured_category_section',
        'default'     => '',
    ] );  

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_featured_category_title1' .$i,
		'label'    => esc_html__( 'Title Text 1 ', 'fashion-boutique-pro' ).$i,
		'section'  => 'fashion_boutique_pro_featured_category_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'settings' => 'fashion_boutique_pro_featured_category_title_url1' .$i,
		'label'    => esc_html__( 'Title Url 1 ', 'fashion-boutique-pro' ).$i,
		'section'  => 'fashion_boutique_pro_featured_category_section',
    ] );

	endfor;

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_featured_category_main_heading',
		'label'    => esc_html__( 'Main Heading', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_featured_category_section',
		'priority' => 8,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'textarea',
		'settings' => 'fashion_boutique_pro_featured_category_content',
		'label'    => esc_html__( 'Content', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_featured_category_section',
		'priority' => 9,
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'number',
        'settings'    => 'fashion_boutique_pro_featured2_counter',
        'label'       => esc_html__( 'Featured Category 2 Counter Section',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_featured_category_section',
        'default'     => 3,
        'choices'     => [
            'min'  => 0,
            'max'  => 80,
            'step' => 1,
        ],
    ] );

    $featured_image2 = get_theme_mod('fashion_boutique_pro_featured2_counter','');
            for ( $p = 1; $p <= $featured_image2; $p++ ) :

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'image',
        'settings'    => 'fashion_boutique_pro_category2_image' .$p,
        'label'       => esc_html__( 'Image 2 ',  'fashion-boutique-pro' ).$p,
        'section'     => 'fashion_boutique_pro_featured_category_section',
        'default'     => '',
    ] );  

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_featured_category_title2' .$p,
		'label'    => esc_html__( 'Title Text 2 ', 'fashion-boutique-pro' ).$p,
		'section'  => 'fashion_boutique_pro_featured_category_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'settings' => 'fashion_boutique_pro_featured_category_title_url2' .$p,
		'label'    => esc_html__( 'Title Url 2 ', 'fashion-boutique-pro' ).$p,
		'section'  => 'fashion_boutique_pro_featured_category_section',
    ] );

	endfor;

	// FEATURED PRODUCT SECTION

	Kirki::add_section( 'fashion_boutique_pro_featured_products_section', array(
	    'title'          => esc_html__( 'Featured Products Settings', 'fashion-boutique-pro' ),
	    'description'    => esc_html__( 'You have to select hot products section.', 'fashion-boutique-pro' ),
	    'panel'          => 'fashion_boutique_pro_panel_id',
	    'priority'       => 9,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_heading_featured',
		'section'     => 'fashion_boutique_pro_featured_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Featured Products',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_featured_products_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_featured_products_section',
		'default'     => '1',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable',  'fashion-boutique-pro' ),
		],
	] );
    
    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_featured_products_heading',
		'section'     => 'fashion_boutique_pro_featured_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Featured Products Section ',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 3,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_featured_products_main_heading',
		'label'    => esc_html__( 'Main Heading', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_featured_products_section',
		'priority' => 4,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_featured_products_content',
		'label'    => esc_html__( 'Content', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_featured_products_section',
		'priority' => 5,
    ] );

     Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_pro_featured_products_button_text',
        'label'       => esc_html__( 'Button Text ',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_featured_products_section',
        'default'     => '',
    ] ); 

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'link',
        'settings'    => 'fashion_boutique_pro_featured_products_button_url',
        'label'       => esc_html__( 'Button Url ',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_featured_products_section',
        'default'     => '',
    ] ); 

    kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'fashion_boutique_pro_featured_products_number',
		'label'       => esc_html__( 'Number of product to show ',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_featured_products_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'priority' => 6,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'fashion_boutique_pro_featured_products_icon_setting',
		'label'    => esc_html__( 'Icon ', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_featured_products_section',
		'priority' => 10,
    ] );
	
    //ABOUT US SECTION

    Kirki::add_section( 'fashion_boutique_pro_about_us_section', array(
	    'title'          => esc_html__( 'About Us Settings', 'fashion-boutique-pro' ),
	    'description'    => esc_html__( 'You have to select hot products section.', 'fashion-boutique-pro' ),
	    'panel'          => 'fashion_boutique_pro_panel_id',
	    'priority'       => 9,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_heading_about_us',
		'section'     => 'fashion_boutique_pro_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable About Us',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_about_us_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_about_us_section',
		'default'     => '1',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable',  'fashion-boutique-pro' ),
		],
	] );
    
    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_about_us_heading',
		'section'     => 'fashion_boutique_pro_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'About Us Section ',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 3,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_about_us_title',
		'label'    => esc_html__( 'Title', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_about_us_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'textarea',
		'settings' => 'fashion_boutique_pro_about_us_sub_heading',
		'label'    => esc_html__( 'Sub Heading', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_about_us_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'textarea',
		'settings' => 'fashion_boutique_pro_about_us_content',
		'label'    => esc_html__( 'Content', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_about_us_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_pro_about_us_button1_text',
        'label'       => esc_html__( 'Button 1 Text ',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_about_us_section',
        'default'     => '',
        'priority'    => 10,
    ] ); 

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'link',
        'settings'    => 'fashion_boutique_pro_about_us_button1_url',
        'label'       => esc_html__( 'Button 1 Url ',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_about_us_section',
        'default'     => '',
        'priority' 	  => 10,
    ] ); 

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_about_us_main_heading',
		'label'    => esc_html__( 'Heading', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_about_us_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'textarea',
		'settings' => 'fashion_boutique_pro_about_us_content1',
		'label'    => esc_html__( 'Content 1', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_about_us_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_pro_about_us_button2_text',
        'label'       => esc_html__( 'Button 2 Text ',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_about_us_section',
        'default'     => '',
        'priority' 	  => 10,
    ] ); 

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'link',
        'settings'    => 'fashion_boutique_pro_about_us_button2_url',
        'label'       => esc_html__( 'Button 2 Url ',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_about_us_section',
        'default'     => '',
        'priority' 	  => 10,
    ] ); 

    //HOT PRODUCTS SECTION

    Kirki::add_section( 'fashion_boutique_pro_hot_products_section', array(
	    'title'          => esc_html__( 'Hot Products Settings', 'fashion-boutique-pro' ),
	    'description'    => esc_html__( 'You have to select hot products section.', 'fashion-boutique-pro' ),
	    'panel'          => 'fashion_boutique_pro_panel_id',
	    'priority'       => 9,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_heading_hot',
		'section'     => 'fashion_boutique_pro_hot_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Hot Products',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_hot_products_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_hot_products_section',
		'default'     => '1',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable',  'fashion-boutique-pro' ),
		],
	] );
    
    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_hot_products_heading',
		'section'     => 'fashion_boutique_pro_hot_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Hot Products Section ',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 3,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_hot_products_main_heading',
		'label'    => esc_html__( 'Main Heading', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_hot_products_section',
		'priority' => 4,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_hot_products_content',
		'label'    => esc_html__( 'Content', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_hot_products_section',
		'priority' => 5,
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_pro_hot_products_button_text',
        'label'       => esc_html__( 'Button Text ',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_hot_products_section',
        'default'     => '',
    ] ); 

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'link',
        'settings'    => 'fashion_boutique_pro_hot_products_button_url',
        'label'       => esc_html__( 'Button Url ',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_hot_products_section',
        'default'     => '',
    ] ); 

    kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'fashion_boutique_pro_hot_products_number',
		'label'       => esc_html__( 'Number of product to show ',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_hot_products_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'priority' => 6,
			'step' => 1,
		],
	] );

   	//REVIEWS SECTION

    Kirki::add_section( 'fashion_boutique_pro_reviews_section', array(
	    'title'          => esc_html__( 'Review Settings', 'fashion-boutique-pro' ),
	    'description'    => esc_html__( 'You have to select hot products section.', 'fashion-boutique-pro' ),
	    'panel'          => 'fashion_boutique_pro_panel_id',
	    'priority'       => 9,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_heading_reviews',
		'section'     => 'fashion_boutique_pro_reviews_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Review',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_reviews_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_reviews_section',
		'default'     => '1',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable',  'fashion-boutique-pro' ),
		],
	] );
    
    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_reviews_heading',
		'section'     => 'fashion_boutique_pro_reviews_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Review Section ',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 3,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_reviews_main_heading',
		'label'    => esc_html__( 'Main Heading', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_reviews_section',
		'priority' => 10,
    ] );

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'number',
        'settings'    => 'fashion_boutique_pro_reviews_counter',
        'label'       => esc_html__( 'Review Counter Section',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_reviews_section',
        'default'     => 3,
        'choices'     => [
            'min'  => 0,
            'max'  => 80,
            'step' => 1,
        ],
    ] );

    $review_content = get_theme_mod('fashion_boutique_pro_reviews_counter','');
            for ( $i = 1; $i <= $review_content; $i++ ) :

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'image',
        'settings'    => 'fashion_boutique_pro_reviews_image' .$i,
        'label'       => esc_html__( 'Image ',  'fashion-boutique-pro' ).$i,
        'description' => esc_html__( 'Image Dimension (1400 x 650)',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_reviews_section',
        'default'     => '',
    ] );  

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'dashicons',
        'settings'    => 'fashion_boutique_pro_reviews_icon_setting' .$i,
        'label'       => esc_html__( 'Icon ',  'fashion-boutique-pro' ).$i,
        'section'     => 'fashion_boutique_pro_reviews_section',
        'default'     => '',
    ] );  

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'textarea',
        'settings'    => 'fashion_boutique_pro_reviews_content' .$i,
        'label'       => esc_html__( 'Content ',  'fashion-boutique-pro' ).$i,
        'section'     => 'fashion_boutique_pro_reviews_section',
        'default'     => '',
    ] ); 

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_pro_reviews_name' .$i,
        'label'       => esc_html__( 'Name ',  'fashion-boutique-pro' ).$i,
        'section'     => 'fashion_boutique_pro_reviews_section',
        'default'     => '',
    ] ); 

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'fashion_boutique_pro_reviews_title' .$i,
        'label'       => esc_html__( 'Designation ',  'fashion-boutique-pro' ).$i,
        'section'     => 'fashion_boutique_pro_reviews_section',
        'default'     => '',
    ] ); 

	endfor;

	//NEWSLETTER SECTION

	Kirki::add_section( 'fashion_boutique_pro_newsletter_section', array(
	    'title'          => esc_html__( 'Newsletter Settings', 'fashion-boutique-pro' ),
	    'description'    => esc_html__( 'You have to select hot products section.', 'fashion-boutique-pro' ),
	    'panel'          => 'fashion_boutique_pro_panel_id',
	    'priority'       => 9,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_heading_newsletter',
		'section'     => 'fashion_boutique_pro_newsletter_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Newsletter',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_newsletter_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_newsletter_section',
		'default'     => '1',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable',  'fashion-boutique-pro' ),
		],
	] );
    
    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_newsletter_heading',
		'section'     => 'fashion_boutique_pro_newsletter_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Newsletter Section ',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 3,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_newsletter_sub_heading',
		'label'    => esc_html__( 'Sub Heading', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_newsletter_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_newsletter_get_text',
		'label'    => esc_html__( 'Get Text ', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_newsletter_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_newsletter_number_text',
		'label'    => esc_html__( 'Number Text', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_newsletter_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_newsletter_per_text',
		'label'    => esc_html__( 'Off Heading', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_newsletter_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_newsletter_off_text',
		'label'    => esc_html__( 'Off Heading', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_newsletter_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_newsletter_main_heading',
		'label'    => esc_html__( 'Main Heading', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_newsletter_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_newsletter_content',
		'label'    => esc_html__( 'Content', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_newsletter_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_newsletter_shortcode',
		'label'    => esc_html__( 'Shortcode', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_newsletter_section',
		'priority' => 10,
    ] );

    //LATEST NEWS SECTION

    Kirki::add_section( 'fashion_boutique_pro_latest_news_section', array(
	    'title'          => esc_html__( 'Latest News Settings', 'fashion-boutique-pro' ),
	    'description'    => esc_html__( 'You have to select Latest News Section.', 'fashion-boutique-pro' ),
	    'panel'          => 'fashion_boutique_pro_panel_id',
	    'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_heading_latest_news',
		'section'     => 'fashion_boutique_pro_latest_news_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Latest News',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_latest_news_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_latest_news_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable',  'fashion-boutique-pro' ),
		],
	] );
    
    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_latest_news_heading',
		'section'     => 'fashion_boutique_pro_latest_news_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Latest News Section ',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_latest_news_main_heading',
		'label'    => esc_html__( 'Main Heading ', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_latest_news_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'textarea',
		'settings' => 'fashion_boutique_pro_latest_news_content',
		'label'    => esc_html__( 'Content ', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_latest_news_section',
		'priority' => 10,
    ] );

    kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'fashion_boutique_pro_latest_news_number',
		'label'       => esc_html__( 'Number of post to show ',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_latest_news_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'fashion_boutique_pro_latest_news_category',
		'label'       => esc_html__( 'Select the category to show  news feed ',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_latest_news_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...',  'fashion-boutique-pro' ),
		'priority'    => 10,
		'choices'     => get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'number',
		'settings' => 'fashion_boutique_pro_latest_news_content_lenght',
		'label'    => esc_html__( 'Content Length ', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_latest_news_section',
		'default'  => 30,
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'fashion_boutique_pro_latest_news_icon_setting',
		'label'    => esc_html__( 'Icon ', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_latest_news_section',
		'priority' => 10,
    ] );

	//BRANDS SECTION

	Kirki::add_section( 'fashion_boutique_pro_brands_section', array(
	    'title'          => esc_html__( 'Brands Settings', 'fashion-boutique-pro' ),
	    'description'    => esc_html__( 'You have to select Brands Section.', 'fashion-boutique-pro' ),
	    'panel'          => 'fashion_boutique_pro_panel_id',
	    'priority'       => 13,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_enable_heading_brands',
		'section'     => 'fashion_boutique_pro_brands_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Brands',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_brands_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_brands_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable',  'fashion-boutique-pro' ),
		],
	] );
    
    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_brands_heading',
		'section'     => 'fashion_boutique_pro_brands_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Brands Section ',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_brands_main_heading',
		'label'    => esc_html__( 'Main Heading ', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_brands_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'textarea',
		'settings' => 'fashion_boutique_pro_brands_content',
		'label'    => esc_html__( 'Content ', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_brands_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'number',
        'settings'    => 'fashion_boutique_pro_brands1_counter',
        'label'       => esc_html__( 'Brands 1 Counter Section',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_brands_section',
        'default'     => 3,
        'choices'     => [
            'min'  => 0,
            'max'  => 80,
            'step' => 1,
        ],
    ] );

    $brands_image = get_theme_mod('fashion_boutique_pro_brands1_counter','');
            for ( $i = 1; $i <= $brands_image; $i++ ) :

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'image',
        'settings'    => 'fashion_boutique_pro_brands1_image' .$i,
        'label'       => esc_html__( 'Image ',  'fashion-boutique-pro' ).$i,
        'description' => esc_html__( 'Image Dimension (1400 x 650)',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_brands_section',
        'default'     => '',
    ] );  

	endfor;

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'number',
        'settings'    => 'fashion_boutique_pro_brands2_counter',
        'label'       => esc_html__( 'Brands 2 Counter Section',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_brands_section',
        'default'     => 3,
        'choices'     => [
            'min'  => 0,
            'max'  => 80,
            'step' => 1,
        ],
    ] );

    $brands_img = get_theme_mod('fashion_boutique_pro_brands2_counter','');
            for ( $p = 1; $p <= $brands_img; $p++ ) :

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'image',
        'settings'    => 'fashion_boutique_pro_brands2_image' .$p,
        'label'       => esc_html__( 'Image ',  'fashion-boutique-pro' ).$p,
        'description' => esc_html__( 'Image Dimension (1400 x 650)',  'fashion-boutique-pro' ),
        'section'     => 'fashion_boutique_pro_brands_section',
        'default'     => '',
    ] );  

	endfor;

	//Footer copyright

	Kirki::add_section( 'fashion_boutique_pro_footer_copyright_section', array(
        'title'          => esc_html__( 'Footer Copyright Settings', 'fashion-boutique-pro' ),
        'description'    => esc_html__( 'You have to select footer description.', 'fashion-boutique-pro' ),
        'panel'          => 'fashion_boutique_pro_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_footer_copyright_heading',
		'section'     => 'fashion_boutique_pro_footer_copyright_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright  Section ',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_boutique_pro_footer_copyright_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_footer_copyright_section',
		'default'     => '1',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'fashion-boutique-pro' ),
			'off' => esc_html__( 'Disable',  'fashion-boutique-pro' ),
		],
	] );
    

    Kirki::add_field( 'theme_config_id', [
	    'type'     => 'text',
	    'settings' => 'fashion_boutique_pro_footer_text',
	    'label'    => esc_html__( 'Copyright Text', 'fashion-boutique-pro' ),
	    'section'  => 'fashion_boutique_pro_footer_copyright_section',
	    'default'  => '',
	    'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	    'type'     => 'image',
	    'settings' => 'fashion_boutique_pro_footer_logo_image',
	    'label'    => esc_html__( 'Footer Logo Image', 'fashion-boutique-pro' ),
	    'section'  => 'fashion_boutique_pro_footer_copyright_section',
	    'default'  => '',
	    'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	    'type'     => 'image',
	    'settings' => 'fashion_boutique_pro_footer_copyright_image',
	    'label'    => esc_html__( 'Crad Image', 'fashion-boutique-pro' ),
	    'section'  => 'fashion_boutique_pro_footer_copyright_section',
	    'default'  => '',
	    'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	    'type'     => 'link',
	    'settings' => 'fashion_boutique_pro_copyright_image_url',
	    'label'    => esc_html__( 'Image Url', 'fashion-boutique-pro' ),
	    'section'  => 'fashion_boutique_pro_footer_copyright_section',
	    'default'  => '',
	    'priority' => 10,
	] );

    // Contact Page//

    Kirki::add_panel( 'fashion_boutique_pro_contact_id', array(
	    'priority'    => 2,
	    'title'       => esc_html__( 'Contact Page Settings', 'fashion-boutique-pro' ),
	) ); 

    Kirki::add_section( 'fashion_boutique_pro_contact_form_section', array(
	    'title'          => esc_html__( 'Contact Form Section', 'fashion-boutique-pro' ),
	    'description'    => esc_html__( 'You have to select contact us section.', 'fashion-boutique-pro' ),
	    'panel'          => 'fashion_boutique_pro_contact_id',
	    'priority'       => 1,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_contact_form_loaction_heading',
		'section'     => 'fashion_boutique_pro_contact_form_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Contact Form',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_contact_page_heading',
		'label'    => esc_html__( 'Page Heading Text ', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_contact_us_form_main_heading_text',
		'label'    => esc_html__( 'Heading Text ', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'textarea',
		'settings' => 'fashion_boutique_pro_contact_us_form_content_text',
		'label'    => esc_html__( 'Content Text ', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_contact_us_form_shortcode',
		'label'    => esc_html__( 'Contact Us Form Shortcode ', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_section',
		'priority' => 10,
    ] );

 	Kirki::add_section( 'fashion_boutique_pro_location_form_section', array(
	    'title'          => esc_html__( 'Location Section', 'fashion-boutique-pro' ),
	    'description'    => esc_html__( 'You have to select contact us section.', 'fashion-boutique-pro' ),
	    'panel'          => 'fashion_boutique_pro_contact_id',
	    'priority'       => 1,
	) );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_contact_form_loaction_heading',
		'section'     => 'fashion_boutique_pro_location_form_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Location Search ',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_contact_form_loaction_map_latitude',
		'label'    => esc_html__( 'Location Latitude Text ', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_location_form_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_contact_form_loaction_map_longitude',
		'label'    => esc_html__( 'Location Longitude Text ', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_location_form_section',
		'priority' => 10,
    ] );

    Kirki::add_section( 'fashion_boutique_pro_contact_form_enquiry_section', array(
	    'title'          => esc_html__( 'Enquiry Section', 'fashion-boutique-pro' ),
	    'description'    => esc_html__( 'You have to select enquiry section.', 'fashion-boutique-pro' ),
	    'panel'          => 'fashion_boutique_pro_contact_id',
	    'priority'       => 1,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_contact_enquiry_section_heading_text',
		'label'    => esc_html__( 'Heading Text', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_enquiry_section',
		'priority' => 10,
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_contact_form_enquiry_section_heading',
		'section'     => 'fashion_boutique_pro_contact_form_enquiry_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enquiry 1',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'fashion_boutique_pro_contact_enquiry_section_icon1',
		'label'    => esc_html__( 'dashicons', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_enquiry_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_contact_enquiry_section_heading_text1',
		'label'    => esc_html__( 'Time Title', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_enquiry_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_contact_enquiry_section_content1',
		'label'    => esc_html__( 'Time Content', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_enquiry_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_contact_enquiry_section_content12',
		'label'    => esc_html__( 'Time Content', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_enquiry_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_contact_enquiry_section_content13',
		'label'    => esc_html__( 'Time Content', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_enquiry_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_contact_form_enquiry_section_heading2',
		'section'     => 'fashion_boutique_pro_contact_form_enquiry_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enquiry 2',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'fashion_boutique_pro_contact_enquiry_section_icon2',
		'label'    => esc_html__( 'dashicons', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_enquiry_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_contact_enquiry_section_heading_text2',
		'label'    => esc_html__( 'Location Title', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_enquiry_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_contact_enquiry_section_content2',
		'label'    => esc_html__( 'Location Content', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_enquiry_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_contact_form_enquiry_section_heading',
		'section'     => 'fashion_boutique_pro_contact_form_enquiry_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enquiry 3',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'fashion_boutique_pro_contact_enquiry_section_icon3',
		'label'    => esc_html__( 'dashicons', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_enquiry_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_contact_enquiry_section_heading_text3',
		'label'    => esc_html__( 'Title', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_enquiry_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_contact_enquiry_section_content3',
		'label'    => esc_html__( 'Contact Number', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_enquiry_section',
		'priority' => 10,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_boutique_pro_contact_enquiry_section_content4',
		'label'    => esc_html__( 'Mail Address', 'fashion-boutique-pro' ),
		'section'  => 'fashion_boutique_pro_contact_form_enquiry_section',
		'priority' => 10,
    ] );

	//404 Page Settings

	Kirki::add_section( 'fashion_boutique_pro_404_page_section', array(
        'title'          => esc_html__( '404 Page Section',  'fashion-boutique-pro' ),
        'description'    => esc_html__( '',  'fashion-boutique-pro' ),
        'panel'          => '',
        'priority'       => 10,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_404_page_custom',
		'section'     => 'fashion_boutique_pro_404_page_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Content', 'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'fashion_boutique_pro_404_page_main_heading',
        'label'    => esc_html__( 'Main Heading ', 'fashion-boutique-pro'),
        'section'  => 'fashion_boutique_pro_404_page_section',
        'default'  =>  '',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'fashion_boutique_pro_404_page_sub_heading',
        'label'    => esc_html__( 'Sub Heading', 'fashion-boutique-pro'),
        'section'  => 'fashion_boutique_pro_404_page_section',
        'default'  =>  '',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'     => 'textarea',
        'settings' => 'fashion_boutique_pro_404_page_content',
        'label'    => esc_html__( 'Content', 'fashion-boutique-pro'),
        'section'  => 'fashion_boutique_pro_404_page_section',
        'default'  =>  '',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'fashion_boutique_pro_404_page_button_text',
        'label'    => esc_html__( 'Button Text', 'fashion-boutique-pro'),
        'section'  => 'fashion_boutique_pro_404_page_section',
        'default'  =>  '',
    ] );

	///Theme WooCommerce SETTINGS

    Kirki::add_panel( 'fashion_boutique_pro_theme_woocommerce_id', array(
	    'priority'    => 3,
	    'title'       => esc_html__( 'Theme WooCommerce  Settings',  'fashion-boutique-pro' ),
	) );

	Kirki::add_section( 'fashion_boutique_pro_woocommerce_section', array(
        'title'          => esc_html__( 'WooCommerce Product',  'fashion-boutique-pro' ),
        'description'    => esc_html__( 'You have to select products show in row and columns .',  'fashion-boutique-pro' ),
        'panel'          => 'fashion_boutique_pro_theme_woocommerce_id',
        'priority'       => 10,
    ) );

    Kirki::add_field( 'theme_config_id', [
        'type'     => 'number',
        'settings' => 'fashion_boutique_pro_products_per_row',
        'label'    => esc_html__( 'Products Show In Row ', 'fashion-boutique-pro'),
        'section'  => 'fashion_boutique_pro_woocommerce_section',
        'default'  =>  '3',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'     => 'number',
        'settings' => 'fashion_boutique_pro_products_per_page',
        'label'    => esc_html__( 'Number Products Show In Per Page ', 'fashion-boutique-pro'),
        'section'  => 'fashion_boutique_pro_woocommerce_section',
        'default'  =>  '9',
    ] );

    Kirki::add_section( 'fashion_boutique_pro_woocommerce_page_section', array(
        'title'          => esc_html__( 'WooCommerce Page Layout',  'fashion-boutique-pro' ),
        'description'    => esc_html__( 'You have to select postion of page layout',  'fashion-boutique-pro' ),
        'panel'          => 'fashion_boutique_pro_theme_woocommerce_id',
        'priority'       => 10,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_shop_product_custom',
		'section'     => 'fashion_boutique_pro_woocommerce_page_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Shop Page Layouts', 'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'fashion_boutique_pro_shop_product_layout_options',
		'label'       => esc_html__( 'Shop Page Layouts', 'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_woocommerce_page_section',
		'default'     => 'Full Width',
		'placeholder' => esc_html__( 'Select an template', 'fashion-boutique-pro' ),
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'fashion-boutique-pro' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'fashion-boutique-pro' ),
			'Full Width' => esc_html__( 'Full Width', 'fashion-boutique-pro' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_shop_single_product_custom',
		'section'     => 'fashion_boutique_pro_woocommerce_page_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Shop Page Single Product Layouts', 'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'fashion_boutique_pro_single_product_layout_options',
		'label'       => esc_html__( 'Single Product Page Layouts', 'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_woocommerce_page_section',
		'default'     => 'Full Width',
		'placeholder' => esc_html__( 'Select an template', 'fashion-boutique-pro' ),
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'fashion-boutique-pro' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'fashion-boutique-pro' ),
			'Full Width' => esc_html__( 'Full Width', 'fashion-boutique-pro' ),
		],
	] );


	///BACKGROUND SETTINGS

    Kirki::add_panel( 'fashion_boutique_pro_theme_id', array(
	    'priority'    => 4,
	    'title'       => esc_html__( 'Background  Settings',  'fashion-boutique-pro' ),
	) );

	// Slider Section Section

	Kirki::add_section( 'fashion_boutique_pro_slider_background_section', array(
        'title'          => esc_html__( 'Slider Section',  'fashion-boutique-pro' ),
        'description'    => esc_html__( 'You have to select background-color or background-image .',  'fashion-boutique-pro' ),
        'panel'          => 'fashion_boutique_pro_theme_id',
        'priority'       => 160,
    ) );

	Kirki::add_field( 'global', array(
		'type'        => 'background',
		'settings'    => 'fashion_boutique_pro_slider_section_background_setting',
		'label'       => esc_html__( 'Featured Category Section Background',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_slider_background_section',
		'default'     => array(
			'background-color'    => '#fbf7fe',
			'background-image'    =>  '',
			'background-repeat'   => 'no-repeat',
			'background-size'     => 'cover',
			'background-attach'   => 'fixed',
			'background-position' => 'left-top',
			'background-opacity'  => 90,
		),
		'priority'		 => 10,
		'output'		 => array(
			array(
				'element' => '.slider-box ',
			),
		),
	) );

	// Featured Category Section

	Kirki::add_section( 'fashion_boutique_pro_featured_category_background_section', array(
        'title'          => esc_html__( 'Featured Category Section',  'fashion-boutique-pro' ),
        'description'    => esc_html__( 'You have to select background-color or background-image .',  'fashion-boutique-pro' ),
        'panel'          => 'fashion_boutique_pro_theme_id',
        'priority'       => 160,
    ) );

	Kirki::add_field( 'global', array(
		'type'        => 'background',
		'settings'    => 'fashion_boutique_pro_featured_category_section_background_setting',
		'label'       => esc_html__( 'Featured Category Section Background',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_featured_category_background_section',
		'default'     => array(
			'background-color'    => '#ffffff',
			'background-image'    =>  '',
			'background-repeat'   => 'no-repeat',
			'background-size'     => 'cover',
			'background-attach'   => 'fixed',
			'background-position' => 'left-top',
			'background-opacity'  => 90,
		),
		'priority'		 => 10,
		'output'		 => array(
			array(
				'element' => '#featured_category',
			),
		),
	) );

	// Featured Products Section

	Kirki::add_section( 'fashion_boutique_pro_featured_products_background_section', array(
        'title'          => esc_html__( 'Featured Products Section',  'fashion-boutique-pro' ),
        'description'    => esc_html__( 'You have to select background-color or background-image .',  'fashion-boutique-pro' ),
        'panel'          => 'fashion_boutique_pro_theme_id',
        'priority'       => 160,
    ) );

	Kirki::add_field( 'global', array(
		'type'        => 'background',
		'settings'    => 'fashion_boutique_pro_featured_products_section_background_setting',
		'label'       => esc_html__( 'Featured Products Section Background',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_featured_products_background_section',
		'default'     => array(
			'background-color'    => '#fbf7fe',
			'background-image'    =>  '',
			'background-repeat'   => 'no-repeat',
			'background-size'     => 'cover',
			'background-attach'   => 'fixed',
			'background-position' => 'left-top',
			'background-opacity'  => 90,
		),
		'priority'		 => 10,
		'output'		 => array(
			array(
				'element' => '#featured_products',
			),
		),
	) );

	// About Us Section

	Kirki::add_section( 'fashion_boutique_pro_about_us_background_section', array(
        'title'          => esc_html__( 'About Us Section',  'fashion-boutique-pro' ),
        'description'    => esc_html__( 'You have to select background-color or background-image .',  'fashion-boutique-pro' ),
        'panel'          => 'fashion_boutique_pro_theme_id',
        'priority'       => 160,
    ) );

	Kirki::add_field( 'global', array(
		'type'        => 'background',
		'settings'    => 'fashion_boutique_pro_about_us_section_background_setting',
		'label'       => esc_html__( 'About Us Section Background',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_about_us_background_section',
		'default'     => array(
			'background-color'    => '#ffff',
			'background-image'    =>  get_template_directory_uri() . '/images/background/about-us.png',
			'background-repeat'   => 'no-repeat',
			'background-size'     => 'cover',
			'background-attach'   => 'fixed',
			'background-position' => 'left-top',
			'background-opacity'  => 90,
		),
		'priority'		 => 10,
		'output'		 => array(
			array(
				'element' => '#about_us',
			),
		),
	) );

	// Hot Products Section

	Kirki::add_section( 'fashion_boutique_pro_hot_products_background_section', array(
        'title'          => esc_html__( 'Hot Products Section',  'fashion-boutique-pro' ),
        'description'    => esc_html__( 'You have to select background-color or background-image .',  'fashion-boutique-pro' ),
        'panel'          => 'fashion_boutique_pro_theme_id',
        'priority'       => 160,
    ) );

	Kirki::add_field( 'global', array(
		'type'        => 'background',
		'settings'    => 'fashion_boutique_pro_hot_products_section_background_setting',
		'label'       => esc_html__( 'Hot Products Section Background',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_hot_products_background_section',
		'default'     => array(
			'background-color'    => '#ffff',
			'background-image'    =>  '',
			'background-repeat'   => 'no-repeat',
			'background-size'     => 'cover',
			'background-attach'   => 'fixed',
			'background-position' => 'left-top',
			'background-opacity'  => 90,
		),
		'priority'		 => 10,
		'output'		 => array(
			array(
				'element' => '#hot_products',
			),
		),
	) );

	// Reviews Section

	Kirki::add_section( 'fashion_boutique_pro_review_background_section', array(
        'title'          => esc_html__( 'Review Section',  'fashion-boutique-pro' ),
        'description'    => esc_html__( 'You have to select background-color or background-image .',  'fashion-boutique-pro' ),
        'panel'          => 'fashion_boutique_pro_theme_id',
        'priority'       => 160,
    ) );

	Kirki::add_field( 'global', array(
		'type'        => 'background',
		'settings'    => 'fashion_boutique_pro_review_section_background_setting',
		'label'       => esc_html__( 'Review Section Background',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_review_background_section',
		'default'     => array(
			'background-color'    => '#fbf7fe',
			'background-image'    =>  '',
			'background-repeat'   => 'no-repeat',
			'background-size'     => 'cover',
			'background-attach'   => 'fixed',
			'background-position' => 'left-top',
			'background-opacity'  => 90,
		),
		'priority'		 => 10,
		'output'		 => array(
			array(
				'element' => '#reviews',
			),
		),
	) );

	// NewsLetter 1 Section

	Kirki::add_section( 'fashion_boutique_pro_newsletter_background_section', array(
        'title'          => esc_html__( 'Newsletter  Section',  'fashion-boutique-pro' ),
        'description'    => esc_html__( 'You have to select background-color or background-image .',  'fashion-boutique-pro' ),
        'panel'          => 'fashion_boutique_pro_theme_id',
        'priority'       => 160,
    ) );

	Kirki::add_field( 'global', array(
		'type'        => 'background',
		'settings'    => 'fashion_boutique_pro_newsletter1_section_background_setting',
		'label'       => esc_html__( 'Newsletter 1 Section Background',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_newsletter_background_section',
		'default'     => array(
			'background-color'    => '#fff',
			'background-image'    =>  get_template_directory_uri() . '/images/newsletter/newsletter1.png',
			'background-repeat'   => 'no-repeat',
			'background-size'     => 'cover',
			'background-attach'   => 'fixed',
			'background-position' => 'left-top',
			'background-opacity'  => 90,
		),
		'priority'		 => 10,
		'output'		 => array(
			array(
				'element' => '.newsletter_box1',
			),
		),
	) );

	Kirki::add_field( 'global', array(
		'type'        => 'background',
		'settings'    => 'fashion_boutique_pro_newsletter2_section_background_setting',
		'label'       => esc_html__( 'Newsletter 2 Section Background',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_newsletter_background_section',
		'default'     => array(
			'background-color'    => '#fff',
			'background-image'    =>  get_template_directory_uri() . '/images/newsletter/newsletter2.png',
			'background-repeat'   => 'no-repeat',
			'background-size'     => 'cover',
			'background-attach'   => 'fixed',
			'background-position' => 'left-top',
			'background-opacity'  => 90,
		),
		'priority'		 => 10,
		'output'		 => array(
			array(
				'element' => '.newsletter_box2',
			),
		),
	) );

	// Latest News Section

	Kirki::add_section( 'fashion_boutique_pro_latest_news_background_section', array(
        'title'          => esc_html__( 'Latest News Section',  'fashion-boutique-pro' ),
        'description'    => esc_html__( 'You have to select background-color or background-image .',  'fashion-boutique-pro' ),
        'panel'          => 'fashion_boutique_pro_theme_id',
        'priority'       => 160,
    ) );

	Kirki::add_field( 'global', array(
		'type'        => 'background',
		'settings'    => 'fashion_boutique_pro_latest_news_section_background_setting',
		'label'       => esc_html__( 'Latest News Section Background',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_latest_news_background_section',
		'default'     => array(
			'background-color'    => '#fbf7fe',
			'background-image'    =>  '',
			'background-repeat'   => 'no-repeat',
			'background-size'     => 'cover',
			'background-attach'   => 'fixed',
			'background-position' => 'left-top',
			'background-opacity'  => 90,
		),
		'priority'		 => 10,
		'output'		 => array(
			array(
				'element' => '#latest_news',
			),
		),
	) );

	// Brands Section

	Kirki::add_section( 'fashion_boutique_pro_brands_background_section', array(
        'title'          => esc_html__( 'Brands Section',  'fashion-boutique-pro' ),
        'description'    => esc_html__( 'You have to select background-color or background-image .',  'fashion-boutique-pro' ),
        'panel'          => 'fashion_boutique_pro_theme_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'global', array(
		'type'        => 'background',
		'settings'    => 'fashion_boutique_pro_brands_section_outer_background_setting',
		'label'       => esc_html__( 'Brands Section Background',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_brands_background_section',
		'default'     => array(
			'background-color'    => '#fbf7fe',
			'background-image'    =>  '',
			'background-repeat'   => 'no-repeat',
			'background-size'     => 'cover',
			'background-attach'   => 'fixed',
			'background-position' => 'left-top',
			'background-opacity'  => 90,
		),
		'priority'		 => 10,
		'output'		 => array(
			array(
				'element' => '#brands',
			),
		),
	) );

	Kirki::add_field( 'global', array(
		'type'        => 'background',
		'settings'    => 'fashion_boutique_pro_brands_section_background_setting',
		'label'       => esc_html__( 'Brands Section Inner Background',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_brands_background_section',
		'default'     => array(
			'background-color'    => '#fff',
			'background-image'    =>  get_template_directory_uri() . '/images/background/brand.png',
			'background-repeat'   => 'no-repeat',
			'background-size'     => 'cover',
			'background-attach'   => 'fixed',
			'background-position' => 'left-top',
			'background-opacity'  => 90,
		),
		'priority'		 => 10,
		'output'		 => array(
			array(
				'element' => '.brand-box',
			),
		),
	) );

	
	// Footer Section

	Kirki::add_section( 'fashion_boutique_pro_footer_background_section', array(
        'title'          => esc_html__( 'Footer Section',  'fashion-boutique-pro' ),
        'description'    => esc_html__( 'You have to select background-color or background-image .',  'fashion-boutique-pro' ),
        'panel'          => 'fashion_boutique_pro_theme_id',
        'priority'       => 160,
    ) );

	Kirki::add_field( 'global', array(
		'type'        => 'background',
		'settings'    => 'fashion_boutique_pro_footer_section_background_setting',
		'label'       => esc_html__( 'Footer Section Background',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_footer_background_section',
		'default'     => array(
			'background-color'    => '#ffffff',
			'background-image'    => '',
			'background-repeat'   => 'no-repeat',
			'background-size'     => 'cover',
			'background-attach'   => 'fixed',
			'background-position' => 'left-top',
			'background-opacity'  => 90,
		),
		'priority'		 => 10,
		'output'		 => array(
			array(
				'element' => 'footer',
			),
		),
	) );

    // FONT STYLE TYPOGRAPHY

	Kirki::add_config( 'fashion_boutique_pro_panel_id', array(
		'option_type' => 'theme_mod',
		'capability'  => 'edit_theme_options',
		'priority'    => 4,
	) );

	Kirki::add_section( 'fashion_boutique_pro_font_style_section', array(
		'title'      => esc_attr__( 'Typography Options',  'fashion-boutique-pro' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_all_headings_typography',
		'section'     => 'fashion_boutique_pro_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'fashion_boutique_pro_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'fashion-boutique-pro' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'fashion-boutique-pro' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_body_content_typography',
		'section'     => 'fashion_boutique_pro_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'fashion_boutique_pro_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'fashion-boutique-pro' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'fashion-boutique-pro' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

    //Color Settings

    Kirki::add_panel( 'fashion_boutique_pro_color_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Color Options',  'fashion-boutique-pro' ),
	) ); 

	Kirki::add_section( 'fashion_boutique_pro_theme_color_section', array(
		'title'      => esc_attr__( 'Theme Color Option',  'fashion-boutique-pro' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );
    
    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_theme_color_custom',
		'section'     => 'fashion_boutique_pro_theme_color_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Background',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'global', array(
		'type'        => 'background',
		'settings'    => 'fashion_boutique_pro_theme_color',
		'label'       => esc_html__( 'Button Background',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_theme_color_section',
		'default'     => array(
			'background-color'    => '#ffe600',
		),
		'priority'		 => 10,
		'output'		 => array(
			array(
				'element'  => array('.all-category .category','#slider .button','#slider .button::before', '#slider .button::after','#button_scroll','#button_scroll::before', '#button_scroll::after','#featured_products .button1:hover','#about_us .button1','#about_us .button1::before', '#about_us .button1::after','#about_us .button2:hover','#hot_products .button1:hover','#newsletter input.wpcf7-form-control.has-spinner.wpcf7-submit','#about_us .about_hr','#contact input.wpcf7-form-control.has-spinner.wpcf7-submit','.searchform input[type=submit]','.sidebar-area #woocommerce_product_search-2 button','.post-single .blog_share_icon .fab','.comment-respond input#submit','.comment-reply a','.woocommerce #respond input#submit.alt', '.woocommerce a.button.alt', '.woocommerce button.button.alt', '.woocommerce input.button.alt', '.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button', '.woocommerce input.button', '.woocommerce a.added_to_cart', '.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button', '.woocommerce input.button','.pagination .nav-links a:hover', '.pagination .nav-links a:focus', '.pagination .nav-links span.current', '.fashion-boutique-pro-pagination span.current', '.fashion-boutique-pro-pagination span.current:hover', '.fashion-boutique-pro-pagination span.current:focus', '.fashion-boutique-pro-pagination a span:hover', '.fashion-boutique-pro-pagination a span:focus','.woocommerce nav.woocommerce-pagination ul li a:focus', '.woocommerce nav.woocommerce-pagination ul li a:hover', '.woocommerce nav.woocommerce-pagination ul li span.current','nav.woocommerce-MyAccount-navigation ul li','p.cart-item-box','.page-404 .intro-button::before', '.page-404 .intro-button::after'),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_theme_button_color_custom',
		'section'     => 'fashion_boutique_pro_theme_color_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Button Background',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'global', array(
		'type'        => 'background',
		'settings'    => 'fashion_boutique_pro_theme_button_background_color',
		'label'       => esc_html__( 'Button  Hover & Other Background',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_theme_color_section',
		'default'     => array(
			'background-color'    => '#6f46c5',
		),
		'priority'		 => 10,
		'output'		 => array(
			array(
				'element'  => array('#main-menu ul.sub-menu li a:hover:after','#slider .button:hover','#button_scroll:hover','#about_us .button1:hover','#newsletter input.wpcf7-form-control.has-spinner.wpcf7-submit:hover','.searchform input[type=submit]:hover', '.searchform input[type=submit]:focus','.sidebar-area #woocommerce_product_search-2 button:hover','.sidebar-area h4.title','.woocommerce #respond input#submit.alt:hover', '.woocommerce a.button.alt:hover', '.woocommerce button.button.alt:hover', '.woocommerce input.button.alt:hover', '.woocommerce #respond input#submit:hover', '.woocommerce a.button:hover', '.woocommerce button.button:hover', '.woocommerce input.button:hover', '.woocommerce a.added_to_cart:hover','.post-single .blog_share_icon .fab:hover','.comment-reply a:hover','.comment-respond input#submit:hover','nav.woocommerce-MyAccount-navigation ul li:hover','#slider .owl-nav','#latest_news .owl-dots button.owl-dot.active','#site-navigation .sidenav a.closebtn', '.open-menu','#slider .owl-dots button.owl-dot.active','#slider .owl-dots button.owl-dot.active','.top-header','.top-header select#gtranslate_selector','.top-header option','.page-404 .intro-button:hover'),
			),
		),
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_icon_text_color_custom',
		'section'     => 'fashion_boutique_pro_theme_color_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( ' Icon & Text color',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'global', array(
		'type'        => 'color',
		'settings'     => 'fashion_boutique_pro_sub_icon_text_color_settings',
		'label'       => esc_attr__('Icon Hover & Text color',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_theme_color_section',
		'priority'    => 10,
		'default'     => '#6f46c5',
		'output'      => array(
			array(
			  'element'  => array('#main-menu a:hover', '#main-menu ul li a:hover', '#main-menu li:hover > a', '#main-menu a:focus', '#main-menu ul li a:focus', '#main-menu li.focus > a', '#main-menu li:focus > a', '#main-menu ul li.current-menu-item > a', '#main-menu ul li.current_page_item > a', '#main-menu ul li.current-menu-parent > a', '#main-menu ul li.current_page_ancestor > a', '#main-menu ul li.current-menu-ancestor > a','.all-category .button2','#slider .dashicons','a:hover, a:focus','#featured_products ins span.woocommerce-Price-amount.amount','#hot_products ins span.woocommerce-Price-amount.amount','#reviews .dashicons','#reviews h5','#latest_news .admin a','.footer-area bdi','.footer-area .post-meta a','.woocommerce ul.products li.product .price', '.woocommerce div.product p.price', '.woocommerce div.product span.price','#contact h6','#contact .services-box:hover .dashicons','.latest-post .admin a','.post-meta i','.sidebar-area bdi','nav#footer-menu li a:hover','.copyright a:hover','#slider h2','.footer-area .textwidget i','#hot_products a.tinvwl_add_to_wishlist_button.tinvwl-icon-heart.tinvwl-position-after:hover'),
			  'property' => 'color'
			),
		),
    ));

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_boutique_pro_border_color_custom',
		'section'     => 'fashion_boutique_pro_theme_color_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( ' Border Color',  'fashion-boutique-pro' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'global', array(
		'type'        => 'color',
		'settings'     => 'fashion_boutique_pro_border_color_settings',
		'label'       => esc_attr__('Border color',  'fashion-boutique-pro' ),
		'section'     => 'fashion_boutique_pro_theme_color_section',
		'priority'    => 10,
		'default'     => '#ffe600',   
		'output'      => array(
			array(
			  'element'  => array('.sidebar-area h4.title','#featured_products .button1:hover','#about_us .button2:hover','#hot_products .button1:hover'),
			  'property' => 'border-color',
			),
		),
    )); 

}

	//Woocommerce product

	add_action( 'customize_register', 'fashion_boutique_pro_customizer_settings' );
	function fashion_boutique_pro_customizer_settings( $wp_customize ){

	// Featured Products Section

		$args = array(
	       'type'                     => 'product',
	        'child_of'                 => 0,
	        'parent'                   => '',
	        'orderby'                  => 'term_group',
	        'order'                    => 'ASC',
	        'hide_empty'               => false,
	        'hierarchical'             => 1,
	        'number'                   => '',
	        'taxonomy'                 => 'product_cat',
	        'pad_counts'               => false
	    );
		$categories = get_categories($args);
		$cat_posts = array();
		$m = 0;
		$cat_posts[]='Select';
		foreach($categories as $category){
			if($m==0){
				$default = $category->slug;
				$m++;
			}
			$cat_posts[$category->slug] = $category->name;
		}

		$wp_customize->add_setting('fashion_boutique_pro_featured_products_category',array(
			'default'	=> 'select',
			'sanitize_callback' => 'fashion_boutique_pro_sanitize_select',
		));

		$wp_customize->add_control('fashion_boutique_pro_featured_products_category',array(
			'type'    => 'select',
			'choices' => $cat_posts,
			'label' => __('Select category to display products ','fashion-boutique-pro'),
			'section' => 'fashion_boutique_pro_featured_products_section',
		));


		// Hot Products Section

		$args = array(
	       'type'                     => 'product',
	        'child_of'                 => 0,
	        'parent'                   => '',
	        'orderby'                  => 'term_group',
	        'order'                    => 'ASC',
	        'hide_empty'               => false,
	        'hierarchical'             => 1,
	        'number'                   => '',
	        'taxonomy'                 => 'product_cat',
	        'pad_counts'               => false
	    );
		$categories = get_categories($args);
		$cat_posts = array();
		$m = 0;
		$cat_posts[]='Select';
		foreach($categories as $category){
			if($m==0){
				$default = $category->slug;
				$m++;
			}
			$cat_posts[$category->slug] = $category->name;
		}

		$wp_customize->add_setting('fashion_boutique_pro_hot_products_category',array(
			'default'	=> 'select',
			'sanitize_callback' => 'fashion_boutique_pro_sanitize_select',
		));

		$wp_customize->add_control('fashion_boutique_pro_hot_products_category',array(
			'type'    => 'select',
			'choices' => $cat_posts,
			'label' => __('Select category to display products ','fashion-boutique-pro'),
			'section' => 'fashion_boutique_pro_hot_products_section',
		));
	
	}


