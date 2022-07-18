<?php
/**
 * Wizard
 *
 * @package Whizzie
 * @author Catapult Themes
 * @since 1.0.0
 */

class Whizzie {
	
	protected $version = '1.1.0';
	
	/** @var string Current theme name, used as namespace in actions. */
	protected $fashion_boutique_pro = '';
	protected $theme_title = '';
	
	/** @var string Wizard page slug and title. */
	protected $page_slug = '';
	protected $page_title = '';
	
	/** @var array Wizard steps set by user. */
	protected $config_steps = array();
	
	/**
	 * Relative plugin url for this plugin folder
	 * @since 1.0.0
	 * @var string
	 */
	protected $plugin_url = '';
	
	/**
	 * TGMPA instance storage
	 *
	 * @var object
	 */
	protected $tgmpa_instance;
	
	/**
	 * TGMPA Menu slug
	 *
	 * @var string
	 */
	protected $tgmpa_menu_slug = 'tgmpa-install-plugins';
	
	/**
	 * TGMPA Menu url
	 *
	 * @var string
	 */
	protected $tgmpa_url = 'themes.php?page=tgmpa-install-plugins';
			
	/**
	 * Constructor
	 *
	 * @param $config	Our config parameters
	 */
	public function __construct( $config ) {
		$this->set_vars( $config );
		$this->init();
	}
	
	/**
	 * Set some settings
	 * @since 1.0.0
	 * @param $config	Our config parameters
	 */
	public function set_vars( $config ) {
		
		require_once  get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';
		require_once  get_template_directory() . '/core/includes/tgm.php';
		require_once trailingslashit( WHIZZIE_DIR ) . 'class-fashion-boutique-pro-widget-importer.php';
		
		if( isset( $config['page_slug'] ) ) {
			$this->page_slug = esc_attr( $config['page_slug'] );
		}
		if( isset( $config['page_title'] ) ) {
			$this->page_title = esc_attr( $config['page_title'] );
		}
		if( isset( $config['steps'] ) ) {
			$this->config_steps = $config['steps'];
		}
		
		$this->plugin_path = trailingslashit( dirname( __FILE__ ) );
		$relative_url = str_replace( get_template_directory(), '', $this->plugin_path );
		$this->plugin_url = trailingslashit( get_template_directory_uri() . $relative_url );
		$current_theme = wp_get_theme();
		$this->theme_title = $current_theme->get( 'Name' );
		$this->fashion_boutique_pro = strtolower( preg_replace( '#[^a-zA-Z]#', '', $current_theme->get( 'Name' ) ) );
		$this->page_slug = apply_filters( $this->fashion_boutique_pro . '_theme_setup_wizard_page_slug', $this->fashion_boutique_pro . '-wizard' );
		$this->parent_slug = apply_filters( $this->fashion_boutique_pro . '_theme_setup_wizard_parent_slug', '' );		
	}
	
	/**
	 * Hooks and filters
	 * @since 1.0.0
	 */	
	public function init() {
		
		add_action( 'after_switch_theme', array( $this, 'redirect_to_wizard' ) );
		if ( class_exists( 'TGM_Plugin_Activation' ) && isset( $GLOBALS['tgmpa'] ) ) {
			add_action( 'init', array( $this, 'get_tgmpa_instance' ), 30 );
			add_action( 'init', array( $this, 'set_tgmpa_url' ), 40 );
		}
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'admin_menu', array( $this, 'menu_page' ) );
		add_action( 'admin_init', array( $this, 'get_plugins' ), 30 );
		add_filter( 'tgmpa_load', array( $this, 'tgmpa_load' ), 10, 1 );
		add_action( 'wp_ajax_setup_plugins', array( $this, 'setup_plugins' ) );
		add_action( 'wp_ajax_setup_widgets', array( $this, 'setup_widgets' ) );
	}
	
	public function redirect_to_wizard() {
		global $pagenow;
		if( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) && current_user_can( 'manage_options' ) ) {
			wp_redirect( admin_url( 'themes.php?page=' . esc_attr( $this->page_slug ) ) );
		}
	}
	
	public function enqueue_scripts() {
		wp_enqueue_style( 'theme-setup-style', get_template_directory_uri() . '/core/theme-setup/assets/css/theme-setup-style.css');
		wp_register_script( 'theme-setup-script', get_template_directory_uri() . '/core/theme-setup/assets/js/theme-setup-script.js', array( 'jquery' ), time() );
		wp_localize_script( 
			'theme-setup-script',
			'whizzie_params',
			array(
				'ajaxurl' 		=> admin_url( 'admin-ajax.php' ),
				'wpnonce' 		=> wp_create_nonce( 'whizzie_nonce' ),
				'verify_text'	=> esc_html( 'verifying',  'fashion-boutique-pro' )
			)
		);
		wp_enqueue_script( 'theme-setup-script' );
	}
	
	public static function get_instance() {
		if ( ! self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}
	
	public function tgmpa_load( $status ) {
		return is_admin() || current_user_can( 'install_themes' );
	}
			
	/**
	 * Get configured TGMPA instance
	 *
	 * @access public
	 * @since 1.1.2
	 */
	public function get_tgmpa_instance() {
		$this->tgmpa_instance = call_user_func( array( get_class( $GLOBALS['tgmpa'] ), 'get_instance' ) );
	}
	
	/**
	 * Update $tgmpa_menu_slug and $tgmpa_parent_slug from TGMPA instance
	 *
	 * @access public
	 * @since 1.1.2
	 */
	public function set_tgmpa_url() {
		$this->tgmpa_menu_slug = ( property_exists( $this->tgmpa_instance, 'menu' ) ) ? $this->tgmpa_instance->menu : $this->tgmpa_menu_slug;
		$this->tgmpa_menu_slug = apply_filters( $this->fashion_boutique_pro . '_theme_setup_wizard_tgmpa_menu_slug', $this->tgmpa_menu_slug );
		$tgmpa_parent_slug = ( property_exists( $this->tgmpa_instance, 'parent_slug' ) && $this->tgmpa_instance->parent_slug !== 'themes.php' ) ? 'admin.php' : 'themes.php';
		$this->tgmpa_url = apply_filters( $this->fashion_boutique_pro . '_theme_setup_wizard_tgmpa_url', $tgmpa_parent_slug . '?page=' . $this->tgmpa_menu_slug );
	}
	
	/**
	 * Make a modal screen for the wizard
	 */
	public function menu_page() {
		add_theme_page( esc_html( $this->page_title ), esc_html( $this->page_title ), 'manage_options', $this->page_slug, array( $this, 'wizard_page' ) );
	}
	
	/**
	 * Make an interface for the wizard
	 */
	public function wizard_page() { 
		tgmpa_load_bulk_installer();
		// install plugins with TGM.
		if ( ! class_exists( 'TGM_Plugin_Activation' ) || ! isset( $GLOBALS['tgmpa'] ) ) {
			die( 'Failed to find TGM' );
		}
		$url = wp_nonce_url( add_query_arg( array( 'plugins' => 'go' ) ), 'whizzie-setup' );
		
		$method = ''; 
		$fields = array_keys( $_POST ); 
		if ( false === ( $creds = request_filesystem_credentials( esc_url_raw( $url ), $method, false, false, $fields ) ) ) {
			return true;
		}
		if ( ! WP_Filesystem( $creds ) ) {
			request_filesystem_credentials( esc_url_raw( $url ), $method, true, false, $fields );
			return true;
		}
		/* If we arrive here, we have the filesystem */ ?>
		<div class="wrap">
			<?php printf( '<h1>%s</h1>', esc_html( $this->page_title ) );
			echo '<div class="card whizzie-wrap">';
				$steps = $this->get_steps();
				echo '<ul class="whizzie-menu">';
				foreach( $steps as $step ) {
					$class = 'step step-' . esc_attr( $step['id'] );
					echo '<li data-step="' . esc_attr( $step['id'] ) . '" class="' . esc_attr( $class ) . '">';
						printf( '<h2>%s</h2>', esc_html( $step['title'] ) );
						// $content is split into summary and detail
						$content = call_user_func( array( $this, $step['view'] ) );
						if( isset( $content['summary'] ) ) {
							printf(
								'<div class="summary">%s</div>',
								wp_kses_post( $content['summary'] )
							);
						}
						if( isset( $content['detail'] ) ) {
							// Add a link to see more detail
							printf( '<p><a href="#" class="more-info">%s</a></p>', __( 'More Info',  'fashion-boutique-pro' ) );
							printf(
								'<div class="detail">%s</div>',
								$content['detail'] // Need to escape this
							);
						}
						// The next button
						if( isset( $step['button_text'] ) && $step['button_text'] ) {
							printf( 
								'<div class="button-wrap"><a href="#"  class="button btnPush btnBlueGreen do-it" data-callback="%s" data-step="%s">%s</a></div>',
								esc_attr( $step['callback'] ),
								esc_attr( $step['id'] ),
								esc_html( $step['button_text'] )
							);

							
						}
						// The skip button
						if( isset( $step['can_skip'] ) && $step['can_skip'] ) {
							printf( 
								'<div class="button-wrap" style="margin-left: 0.5em;"><a href="#"   class="button btnPush btnBlueGreen do-it" data-callback="%s" data-step="%s">%s</a></div>',
								'do_next_step',
								esc_attr( $step['id'] ),
								__( 'Skip',  'fashion-boutique-pro' )
							);
						}
					
					echo '</li>';
				}
				echo '</ul>';
				echo '<ul class="whizzie-nav">';
					foreach( $steps as $step ) {
						if( isset( $step['icon'] ) && $step['icon'] ) {
							echo '<li class="nav-step-' . esc_attr( $step['id'] ) . '"><span class="dashicons dashicons-' . esc_attr( $step['icon'] ) . '"></span></li>';
						}
					}
				echo '</ul>';
				?>
				<div class="step-loading"><span class="spinner"></span></div>
			</div>			
		</div>
	<?php }
	
	/**
	 * @return Array
	 */
	public function get_steps() {
		$dev_steps = $this->config_steps;
		$steps = array( 
			'intro' => array(
				'id'			=> 'intro',
				'title'			=> __( 'Welcome to ',  'fashion-boutique-pro' ) . $this->theme_title,
				'icon'			=> 'dashboard',
				'view'			=> 'get_step_intro',
				'callback'		=> 'do_next_step',
				'button_text'	=> __( 'Start Now',  'fashion-boutique-pro' ),
				'can_skip'		=> false
			),
			'plugins' => array(
				'id'			=> 'plugins',
				'title'			=> __( 'Plugins',  'fashion-boutique-pro' ),
				'icon'			=> 'admin-plugins',
				'view'			=> 'get_step_plugins',
				'callback'		=> 'install_plugins',
				'button_text'	=> __( 'Install Plugins',  'fashion-boutique-pro' ),
				'can_skip'		=> true
			),
			'widgets' => array(
				'id'			=> 'widgets',
				'title'			=> __( 'Demo Importer',  'fashion-boutique-pro' ),
				'icon'			=> 'welcome-widgets-menus',
				'view'			=> 'get_step_widgets',
				'callback'		=> 'install_widgets',
				'button_text'	=> __( 'Import Demo',  'fashion-boutique-pro' ),
				'can_skip'		=> true
			),
			'done' => array(
				'id'			=> 'done',
				'title'			=> __( 'All Done',  'fashion-boutique-pro' ),
				'icon'			=> 'yes',
				'view'			=> 'get_step_done',
				'callback'		=> ''
			)
		);
		
		// Iterate through each step and replace with dev config values
		if( $dev_steps ) {
			$can_config = array( 'title', 'icon', 'button_text', 'can_skip' );
			foreach( $dev_steps as $dev_step ) {
				if( isset( $dev_step['id'] ) ) {
					$id = $dev_step['id'];
					if( isset( $steps[$id] ) ) {
						foreach( $can_config as $element ) {
							if( isset( $dev_step[$element] ) ) {
								$steps[$id][$element] = $dev_step[$element];
							}
						}
					}
				}
			}
		}
		return $steps;
	}
	
	/**
	 * Print the content for the intro step
	 */
	public function get_step_intro() { ?>
		<div class="summary">
			<p>
				<?php esc_html_e('Thank you for choosing this '.$this->theme_title.' Theme. Using this quick setup wizard, you will be able to configure your new website and get it running in just a few minutes. Just follow these simple steps mentioned in the wizard and get started with your website.', 'fashion-boutique-pro'); ?>
			</p>
			<p>
				<?php esc_html_e('You may even skip the steps and get back to the dashboard if you have no time at the present moment. You can come back any time if you change your mind.', 'fashion-boutique-pro'); ?>
			</p>
		</div>
	<?php }
	
	/**
	 * Get the content for the plugins step
	 * @return $content Array
	 */
	public function get_step_plugins() {
		$plugins = $this->get_plugins();
		$content = array(); ?>
			<div class="summary">
				<p>
					<?php esc_html_e('Additional plugins always make your website exceptional. Install these plugins by clicking the install button. You may also deactivate them from the dashboard.', 'fashion-boutique-pro') ?>
				</p>
			</div>
		<?php
		$content['detail'] = '<ul class="whizzie-do-plugins">';
		foreach( $plugins['all'] as $slug=>$plugin ) {
			$content['detail'] .= '<li data-slug="' . esc_attr( $slug ) . '">' . '<span class="left-span">' .esc_html( $plugin['name'] ) .'</span>'. '<span class="right-span">';
			$keys = array();
			if ( isset( $plugins['install'][ $slug ] ) ) {
			    $keys[] = 'Installation';
			}
			if ( isset( $plugins['update'][ $slug ] ) ) {
			    $keys[] = 'Update';
			}
			if ( isset( $plugins['activate'][ $slug ] ) ) {
			    $keys[] = 'Activation';
			}
			$content['detail'] .= implode( ' and ', $keys ) . ' required';
			$content['detail'] .= '</span></li>';
		}
		$content['detail'] .= '</ul>';
		
		return $content;
	}
	
	/**
	 * Print the content for the widgets step
	 * @since 1.1.0
	 */
	public function get_step_widgets() { ?>
		<div class="summary">
			<p>
				<?php esc_html_e('This theme supports importing the demo content and adding widgets. Get them installed with the below button. Using the Customizer, it is possible to update or even deactivate them', 'fashion-boutique-pro'); ?>
			</p>
		</div>
	<?php }
	
	/**
	 * Print the content for the final step
	 */
	public function get_step_done() { ?>
		<div id="mb-demo-setup-guid" class="summary">
			<p><?php esc_html_e('Awesome! You have Created Your Website Successfully.','fashion-boutique-pro'); ?></p>
			<div class="mb-setup-finish">				
				<a href="<?php echo esc_url(admin_url()); ?>" class="button btnPush btnBlueGreen"><?php esc_html_e('Finish', 'fashion-boutique-pro'); ?></a>
			</div>
		</div>		
	<?php }
	
	/**
	 * Get the plugins registered with TGMPA
	 */
	public function get_plugins() {
		$instance = call_user_func( array( get_class( $GLOBALS['tgmpa'] ), 'get_instance' ) );
		$plugins = array(
			'all' 		=> array(),
			'install'	=> array(),
			'update'	=> array(),
			'activate'	=> array()
		);
		foreach( $instance->plugins as $slug=>$plugin ) {
			if( $instance->is_plugin_active( $slug ) && false === $instance->does_plugin_have_update( $slug ) ) {
				// Plugin is installed and up to date
				continue;
			} else {
				$plugins['all'][$slug] = $plugin;
				if( ! $instance->is_plugin_installed( $slug ) ) {
					$plugins['install'][$slug] = $plugin;
				} else {
					if( false !== $instance->does_plugin_have_update( $slug ) ) {
						$plugins['update'][$slug] = $plugin;
					}
					if( $instance->can_plugin_activate( $slug ) ) {
						$plugins['activate'][$slug] = $plugin;
					}
				}
			}
		}
		return $plugins;
	}
		
	public function setup_plugins() {
		if ( ! check_ajax_referer( 'whizzie_nonce', 'wpnonce' ) || empty( $_POST['slug'] ) ) {
			wp_send_json_error( array( 'error' => 1, 'message' => esc_html__( 'No Slug Found', 'fashion-boutique-pro' ) ) );
		}
		$json = array();
		$plugins = $this->get_plugins();
		
		foreach ( $plugins['activate'] as $slug => $plugin ) {
			if ( $_POST['slug'] == $slug ) {
				$json = array(
					'url'           => admin_url( $this->tgmpa_url ),
					'plugin'        => array( $slug ),
					'tgmpa-page'    => $this->tgmpa_menu_slug,
					'plugin_status' => 'all',
					'_wpnonce'      => wp_create_nonce( 'bulk-plugins' ),
					'action'        => 'tgmpa-bulk-activate',
					'action2'       => - 1,
					'message'       => esc_html__( 'Activating Plugin', 'fashion-boutique-pro' ),
				);
				break;
			}
		}
		foreach ( $plugins['update'] as $slug => $plugin ) {
			if ( $_POST['slug'] == $slug ) {
				$json = array(
					'url'           => admin_url( $this->tgmpa_url ),
					'plugin'        => array( $slug ),
					'tgmpa-page'    => $this->tgmpa_menu_slug,
					'plugin_status' => 'all',
					'_wpnonce'      => wp_create_nonce( 'bulk-plugins' ),
					'action'        => 'tgmpa-bulk-update',
					'action2'       => - 1,
					'message'       => esc_html__( 'Updating Plugin', 'fashion-boutique-pro' ),
				);
				break;
			}
		}
		foreach ( $plugins['install'] as $slug => $plugin ) {
			if ( $_POST['slug'] == $slug ) {
				$json = array(
					'url'           => admin_url( $this->tgmpa_url ),
					'plugin'        => array( $slug ),
					'tgmpa-page'    => $this->tgmpa_menu_slug,
					'plugin_status' => 'all',
					'_wpnonce'      => wp_create_nonce( 'bulk-plugins' ),
					'action'        => 'tgmpa-bulk-install',
					'action2'       => - 1,
					'message'       => esc_html__( 'Installing Plugin', 'fashion-boutique-pro' ),
				);
				break;
			}
		}
		if ( $json ) {
			$json['hash'] = md5( serialize( $json ) ); // used for checking if duplicates happen, move to next plugin
			wp_send_json( $json );
		} else {
			wp_send_json( array( 'done' => 1, 'message' => esc_html__( 'Success', 'fashion-boutique-pro' ) ) );
		}
		exit;
	}

	public function fashion_boutique_pro_create_customizer_main_nav_menu() {

		// ------- Create Nav Menu --------
		$menuname = $lblg_themename . 'Main Menus';
        $bpmenulocation = 'main-menu';
        $menu_exists = wp_get_nav_menu_object( $menuname );

        if( !$menu_exists){
            $menu_id = wp_create_nav_menu($menuname);
            $home_parent = wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' =>  __('Home','fashion-boutique-pro'),
					'menu-item-classes' => 'home',
					'menu-item-url' =>home_url( '/' ),
					'menu-item-status' => 'publish')
			);

			wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' =>  __('Blog','fashion-boutique-pro'),
                'menu-item-classes' => 'blog',
                'menu-item-url' => home_url( '/index.php/blog/' ), 
                'menu-item-status' => 'publish'));

            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' =>  __('Page','fashion-boutique-pro'),
                'menu-item-classes' => 'page',
                'menu-item-url' => home_url( '/index.php/page/' ), 
                'menu-item-status' => 'publish'));

            $shop_parent = wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' =>  __('Shop','fashion-boutique-pro'),
	                'menu-item-classes' => 'shop',
	                'menu-item-url' => home_url( '/index.php/shop/' ), 
	                'menu-item-status' => 'publish'));
			
			wp_update_nav_menu_item($menu_id, 0, array(
					 'menu-item-title' => __('My account','fashion-boutique-pro'),
					 'menu-item-classes' => 'my-account',
					 'menu-item-url' => home_url( '/index.php/my-account/' ),
					 'menu-item-status' => 'publish',
					 'menu-item-parent-id' => $shop_parent));

			wp_update_nav_menu_item($menu_id, 0, array(
					 'menu-item-title' => __('Cart','fashion-boutique-pro'),
					 'menu-item-classes' => 'cart',
					 'menu-item-url' => home_url( '/index.php/cart/' ),
					 'menu-item-status' => 'publish',
					 'menu-item-parent-id' => $shop_parent));

			wp_update_nav_menu_item($menu_id, 0, array(
					 'menu-item-title' => __('Checkout','fashion-boutique-pro'),
					 'menu-item-classes' => 'checkout',
					 'menu-item-url' => home_url( '/index.php/checkout/' ),
					 'menu-item-status' => 'publish',
					 'menu-item-parent-id' => $shop_parent));

            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' =>  __('Contact Us','fashion-boutique-pro'),
                'menu-item-classes' => 'contact',
                'menu-item-url' => home_url( '/index.php/contact/' ), 
                'menu-item-status' => 'publish'));

			if( !has_nav_menu( $bpmenulocation ) ){
                $locations = get_theme_mod('nav_menu_locations');
                $locations[$bpmenulocation] = $menu_id;
                set_theme_mod( 'nav_menu_locations', $locations );
            }
        }
	}
	
	/**
	 * Imports the Demo Content
	 * @since 1.1.0
	 */
	public function setup_widgets() {
		$home_id=''; $blog_id=''; $page_id=''; $contact_id='';
		$home_content = '';

		$home_title = 'Home';
		$home = array(
			'post_type' => 'page',
			'post_title' => $home_title,
			'post_content'  => $home_content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'home'
		);
		$home_id = wp_insert_post($home);
        
		add_post_meta( $home_id, '_wp_page_template', 'frontpage.php' );

		$home = get_page_by_title( 'Home' );
		update_option( 'page_on_front', $home->ID );
		update_option( 'show_on_front', 'page' );
        
		$blog_title = 'Blog';
		$blog = array(
			'post_type' => 'page',
			'post_title' => $blog_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'blog'
		);
		$blog_id = wp_insert_post($blog);
         
     	//Set the blog page template
     	add_post_meta( $blog_id, '_wp_page_template', 'post-left-sidebar.php' );

     	// Create a Page 
 	 	$page_title = 'Page ';
      	$content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel, et argentum simul reddere parentibus meis, debitum eo - aliam putant quinque aut sex annos - ut certus quid faciam. Quod suus Faciam, cum magna mutatio. Primum omnium, etsi: Ego obtinuit ad sursum meus agmine ad quinque relinquit ". Et respexit super ad terror horologium, in pectore et ';

      	$page = array(
          'post_type' => 'page',
          'post_title' => $page_title,
          'post_content'  => $content,
          'post_status' => 'publish',
          'post_author' => 1,
          'post_slug' => 'page'
      	);
  		$page_id = wp_insert_post($page);
        
		$contact_title = 'Contact';
      	$contact = array(
          'post_type' => 'page',
          'post_title' => $contact_title,
          'post_status' => 'publish',
          'post_author' => 1,
          'post_slug' => 'contact'
      	);
     	$contact_id = wp_insert_post($contact);
        
     	add_post_meta( $contact_id, '_wp_page_template', 'contact-template.php' );

  		
     	// -- Menu-- //

     	$this->fashion_boutique_pro_create_customizer_main_nav_menu();

 	//---Tobar Header--//
        
        set_theme_mod( 'fashion_boutique_pro_top_header_icon_setting1', 'cart');
     	set_theme_mod( 'fashion_boutique_pro_top_header_delivery_text', 'Free Shipping on all orders over $100.');
     	 
        set_theme_mod( 'fashion_boutique_pro_top_header_icon_setting2', 'admin-site-alt3');
     	set_theme_mod( 'fashion_boutique_pro_top_header_worldwide_text', 'Worldwide Delivery and same day dispatch.');
        
        set_theme_mod( 'fashion_boutique_pro_top_header_icon_setting3', 'calendar');
     	set_theme_mod( 'fashion_boutique_pro_top_header_gifts_text', 'Receive Gifts when you subscribe.');
        
 	// -------Header Navigation-----//

     	set_theme_mod( 'fashion_boutique_pro_header_button1_text', 'All Categories');
     	set_theme_mod( 'fashion_boutique_pro_header_button1_url', '#');

        set_theme_mod( 'fashion_boutique_pro_header_button2_text', 'Black Friday Sale');
     	set_theme_mod( 'fashion_boutique_pro_header_button2_url', ' #');
     	 set_theme_mod( 'fashion_boutique_pro_button2_get_title', 'Get 75% OFF');

 	//-----Slider-----//

     	set_theme_mod( 'fashion_boutique_pro_slider_counter', '3');

		for($i=1; $i<=3; $i++) {
			set_theme_mod( 'fashion_boutique_pro_slider_image'.$i, get_template_directory_uri().'/images/slider/slider'.$i.'.png' );
			set_theme_mod( 'fashion_boutique_pro_slider_main_heading'.$i, 'Trendy Attires At One Stop' );
			set_theme_mod( 'fashion_boutique_pro_slider_content'.$i, 'Alienum phaedrum torquatos nec eu, vis detraxit ertssa periculiser ex, nihil' );
			set_theme_mod( 'fashion_boutique_pro_slider_button_text'.$i, 'Shop Now' );
			set_theme_mod( 'fashion_boutique_pro_slider_button_url'.$i, '#' ); 

			set_theme_mod( 'fashion_boutique_pro_slider_background_text'.$i, '#trend' );

			set_theme_mod( 'fashion_boutique_pro_slider_icon_counter'.$i, '4');
            for($m=1; $m<=4; $m++) {

	        $team_icon=array('facebook-alt','instagram','linkedin','twitter' );
				set_theme_mod( 'fashion_boutique_pro_slider_icon_setting'.$m .$i, $team_icon[$m-1] );

		    set_theme_mod( 'fashion_boutique_pro_slider_icon_url'.$m .$i, '#' );

			}                
		}

	// ---Featured Category Section---//

		set_theme_mod( 'fashion_boutique_pro_featured_category_main_heading', 'Featured Categories');
     	set_theme_mod( 'fashion_boutique_pro_featured_category_content', 'Alienum phaedrum torquatos nec eu, vis detraxit ertssa periculiser ex, nihil expetendis in meinerst gers frust bura ');

     	set_theme_mod( 'fashion_boutique_pro_featured1_counter', '4');
     	for($i=1; $i<=4; $i++) {
			set_theme_mod( 'fashion_boutique_pro_category1_image'.$i, get_template_directory_uri().'/images/featured-category1/featured-category'.$i.'.png' );
			set_theme_mod( 'fashion_boutique_pro_featured_category_title1'.$i, 'Accessories' );
			set_theme_mod( 'fashion_boutique_pro_featured_category_title_url1'.$i, '#' ); 
		}

		set_theme_mod( 'fashion_boutique_pro_featured2_counter', '8');
     	for($p=1; $p<=8; $p++) {
			set_theme_mod( 'fashion_boutique_pro_category2_image'.$p, get_template_directory_uri().'/images/featured-category2/featured-category'.$p.'.png' );
			set_theme_mod( 'fashion_boutique_pro_featured_category_title2'.$p, 'Accessories' );
			set_theme_mod( 'fashion_boutique_pro_featured_category_title_url2'.$p, '#' ); 
		}


	// ---Featured Products Section---//

		set_theme_mod( 'fashion_boutique_pro_featured_products_main_heading', 'Featured Products');
     	set_theme_mod( 'fashion_boutique_pro_featured_products_content', 'Alienum phaedrum torquatos nec eu, vis detraxit ertssa periculiser ex, nihil expetendis in meinerst gers frust bura ');
     	set_theme_mod( 'fashion_boutique_pro_featured_products_button_text', 'Check All Products' );
		set_theme_mod( 'fashion_boutique_pro_featured_products_button_url', '#' ); 

        set_theme_mod( 'fashion_boutique_pro_featured_products_number', '8' );
     	wp_insert_term(
          'featured-product', // the term
          'product_cat', // the taxonomy
          array(
          'description'=> '',
          'slug' => 'featured-product',
          'term_id'=>12,
          'term_taxonomy_id'=>34,
          ));

          set_theme_mod( 'fashion_boutique_pro_featured_products_category', 'Featured Product' );
          if ( class_exists( 'WooCommerce' ) ) {

            $featured_product=array('Green Branded Shades','Smart Mens Sneakers','Stylish Hand Bag','Leather Mens Watch','Blue Silk Top','Silk Floral Heels','Leather Backpack','Mens Branded Wear' );
		 
		   for($i=1;$i<=8;$i++) {

			$title =   $featured_product[$i-1];
            $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.';

            // Create post object
            $my_post = array(
            'post_title'    => wp_strip_all_tags( $title ),
            'post_content'  => $content,
            'post_status'   => 'publish',
            'post_type'     => 'product',
            );

            // Insert the post into the database
            $post_id = wp_insert_post( $my_post );
            // Gets term object from Tree in the database.
            $term = get_term_by('name', 'featured-product', 'product_cat');
            wp_set_object_terms($post_id, $term->term_id, 'product_cat');

            update_post_meta( $post_id, '_price', "99" );
            update_post_meta( $post_id, '_sale_price', "99" );
            update_post_meta( $post_id, '_regular_price', "199" );
            update_post_meta( $post_id, 'best-custom-field1', "" );
            update_post_meta( $post_id, 'best-custom-field2', "" );


            $image_url = get_template_directory_uri().'/images/featured-products/featured-products'.$i.'.png';

            $image_name= 'featured-products'.$i.'.png';
            $upload_dir       = wp_upload_dir();
            // Set upload folder
            $image_data= file_get_contents($image_url);
            // Get image data
            $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name );
            // Generate unique name
            $filename= basename( $unique_file_name );
            // Create image file name

            // Check folder permission and define file location
            if( wp_mkdir_p( $upload_dir['path'] ) ) {
            $file = $upload_dir['path'] . '/' . $filename;
            } else {
            $file = $upload_dir['basedir'] . '/' . $filename;
            }

            // Create the image  file on the server
            file_put_contents( $file, $image_data );

            // Check image file type
            $wp_filetype = wp_check_filetype( $filename, null );

            // Set attachment data
            $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title'     => sanitize_file_name( $filename ),
            'post_content'   => '',
            'post_type'     => 'product',
            'post_status'    => 'inherit'
            );
            // Create the attachment
            $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
            // Include image.php
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            // Define attachment metadata
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
            // Assign metadata to attachment
            wp_update_attachment_metadata( $attach_id, $attach_data );
            // And finally assign featured image to post
            set_post_thumbnail( $post_id, $attach_id );
          }
        }

    //------About Us Section------//

        set_theme_mod( 'fashion_boutique_pro_about_us_title', 'TRENDSETTER');
     	set_theme_mod( 'fashion_boutique_pro_about_us_sub_heading', 'Our Products And Services Tells Who We Are ');
     	set_theme_mod( 'fashion_boutique_pro_about_us_content', 'Alienum phaedrum torquatos nec eu, vis detraxit ertssa periculiser ex, nihil expetendis in meinerst gers frust bura ');
     	set_theme_mod( 'fashion_boutique_pro_about_us_button1_text', 'Know More');
     	set_theme_mod( 'fashion_boutique_pro_about_us_button1_url', '#');

     	set_theme_mod( 'fashion_boutique_pro_about_us_main_heading', 'About Us');
     	set_theme_mod( 'fashion_boutique_pro_about_us_content1', 'TRENDSETTER – is a famous worldwide dipiscing dignissim euismod ad venenatis volutpat sociis feugiat purus ridicul usAlienum phaedrum torquatos nec eu, vis ertssa peric uliser ex, nihil expetendis in meinerst gers frust bura ');
     	set_theme_mod( 'fashion_boutique_pro_about_us_button2_text', 'Read More');
     	set_theme_mod( 'fashion_boutique_pro_about_us_button2_url', '#');


    // ---Hot Products Section---//

     	set_theme_mod( 'fashion_boutique_pro_hot_products_main_heading', 'Hot Products');
     	set_theme_mod( 'fashion_boutique_pro_hot_products_content', 'Alienum phaedrum torquatos nec eu, vis detraxitpericuliser ex, nihil expetendis in gers');
     	set_theme_mod( 'fashion_boutique_pro_hot_products_button_text', 'Check All Products' );
		set_theme_mod( 'fashion_boutique_pro_hot_products_button_url', '#' ); 

        set_theme_mod( 'fashion_boutique_pro_hot_products_number', '4' );
     	wp_insert_term(
          'hot-product', // the term
          'product_cat', // the taxonomy
          array(
          'description'=> '',
          'slug' => 'hot-product',
          'term_id'=>12,
          'term_taxonomy_id'=>34,
          ));

          set_theme_mod( 'fashion_boutique_pro_hot_products_category', 'Hot Product' );
          if ( class_exists( 'WooCommerce' ) ) {

            $hot_product=array('Winter Stylish Hats','Mens Watch','Unisex Shades','Full Sleeve T-Shirt' );
		 
		   for($i=1;$i<=4;$i++) {

			$title =   $hot_product[$i-1];
            $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.';

            // Create post object
            $my_post = array(
            'post_title'    => wp_strip_all_tags( $title ),
            'post_content'  => $content,
            'post_status'   => 'publish',
            'post_type'     => 'product',
            );

            // Insert the post into the database
            $post_id = wp_insert_post( $my_post );
            // Gets term object from Tree in the database.
            $term = get_term_by('name', 'hot-product', 'product_cat');
            wp_set_object_terms($post_id, $term->term_id, 'product_cat');

            update_post_meta( $post_id, '_price', "99" );
            update_post_meta( $post_id, '_sale_price', "99" );
            update_post_meta( $post_id, '_regular_price', "199" );
            update_post_meta( $post_id, 'best-custom-field1', "" );
            update_post_meta( $post_id, 'best-custom-field2', "" );


            $image_url = get_template_directory_uri().'/images/hot-products/hot-products'.$i.'.png';

            $image_name= 'hot-products'.$i.'.png';
            $upload_dir       = wp_upload_dir();
            // Set upload folder
            $image_data= file_get_contents($image_url);
            // Get image data
            $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name );
            // Generate unique name
            $filename= basename( $unique_file_name );
            // Create image file name

            // Check folder permission and define file location
            if( wp_mkdir_p( $upload_dir['path'] ) ) {
            $file = $upload_dir['path'] . '/' . $filename;
            } else {
            $file = $upload_dir['basedir'] . '/' . $filename;
            }

            // Create the image  file on the server
            file_put_contents( $file, $image_data );

            // Check image file type
            $wp_filetype = wp_check_filetype( $filename, null );

            // Set attachment data
            $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title'     => sanitize_file_name( $filename ),
            'post_content'   => '',
            'post_type'     => 'product',
            'post_status'    => 'inherit'
            );
            // Create the attachment
            $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
            // Include image.php
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            // Define attachment metadata
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
            // Assign metadata to attachment
            wp_update_attachment_metadata( $attach_id, $attach_data );
            // And finally assign featured image to post
            set_post_thumbnail( $post_id, $attach_id );
          }
        }


    // ---Reviews Section---//

     	set_theme_mod( 'fashion_boutique_pro_reviews_main_heading', 'Our Customer Reviews');
     	set_theme_mod( 'fashion_boutique_pro_reviews_counter', '3');
		for($i=1; $i<=3; $i++) {
			set_theme_mod( 'fashion_boutique_pro_reviews_image'.$i, get_template_directory_uri().'/images/review/review'.$i.'.png' );
			set_theme_mod( 'fashion_boutique_pro_reviews_icon_setting'.$i, 'format-quote ' );
			set_theme_mod( 'fashion_boutique_pro_reviews_content'.$i, 'Highly recommend the products according to prices, trendy and I just loved shopping at this place worldwide.  ' );
			set_theme_mod( 'fashion_boutique_pro_reviews_name'.$i, 'Luis Warner ' );
			set_theme_mod( 'fashion_boutique_pro_reviews_title'.$i, 'Blogger ' );
		}


    // ---Newsletter Section---//

		set_theme_mod( 'fashion_boutique_pro_newsletter_sub_heading', 'Black Friday ');
		set_theme_mod( 'fashion_boutique_pro_newsletter_get_text', 'GET');
		set_theme_mod( 'fashion_boutique_pro_newsletter_number_text', '75');
		set_theme_mod( 'fashion_boutique_pro_newsletter_per_text', '%');
		set_theme_mod( 'fashion_boutique_pro_newsletter_off_text', 'OFF');

		set_theme_mod( 'fashion_boutique_pro_newsletter_main_heading', 'Join Our Newsletter');
		set_theme_mod( 'fashion_boutique_pro_newsletter_content', 'Sign up with us and be the first one to get all the offers and News about us');

		$cf7title = "Newsletter";
		$cf7content = '[email* email-328 placeholder "Enter Email Address"][submit "Submit"]
		[_site_title] "[your-subject]"
		[_site_title] <support@misbahwp.com>
		From: [your-name] <[your-email]>
		Subject: [your-subject]

		Message Body:
		[your-message]

		-- 
		This e-mail was sent from a contact form on [_site_title] ([_site_url])
		[_site_admin_email]
		Reply-To: [your-email]

		0
		0

		[_site_title] "[your-subject]"
		[_site_title] <support@misbahwp.com>
		Message Body:
		[your-message]

		-- 
		This e-mail was sent from a contact form on [_site_title] ([_site_url])
		[your-email]
		Reply-To: [_site_admin_email]

		0
		0
		Thank you for your message. It has been sent.
		There was an error trying to send your message. Please try again later.
		One or more fields have an error. Please check and try again.
		There was an error trying to send your message. Please try again later.
		You must accept the terms and conditions before sending your message.
		The field is required.
		The field is too long.
		The field is too short.
		There was an unknown error uploading the file.
		You are not allowed to upload files of this type.
		The file is too big.
		There was an error uploading the file.';

		$cf7_post = array(
		'post_title'    => wp_strip_all_tags( $cf7title ),
		'post_content'  => $cf7content,
		'post_status'   => 'publish',
		'post_type'     => 'wpcf7_contact_form',
		);
		// Insert the post into the database
		$cf7post_id = wp_insert_post( $cf7_post );

		add_post_meta($cf7post_id, "_form", '[email* email-328 placeholder "Enter Email Address"][submit "Submit"]');

		$cf7mail_data  = array('subject' => '[_site_title] "[your-subject]"',
		    'sender' => '[_site_title] <support@misbahwp.com>',
		    'body' => 'From: [your-name] <[your-email]>
		Subject: [your-subject]

		Message Body:
		[your-message]

		-- 
		This e-mail was sent from a contact form on [_site_title] ([_site_url])',
		    'recipient' => '[_site_admin_email]',
		    'additional_headers' => 'Reply-To: [your-email]',
		    'attachments' => '',
		    'use_html' => 0,
		    'exclude_blank' => 0 );

		add_post_meta($cf7post_id, "_mail", $cf7mail_data);
		// Gets term object from Tree in the database.

		$cf7shortcode = '[contact-form-7 id="'.$cf7post_id.'" title="'.$cf7title.'"]';

		set_theme_mod( 'fashion_boutique_pro_newsletter_shortcode',$cf7shortcode );

    // ---Latest News Section---//

		set_theme_mod( 'fashion_boutique_pro_latest_news_main_heading', 'Latest News' );
     	set_theme_mod( 'fashion_boutique_pro_latest_news_content', 'Alienum phaedrum torquatos nec eu, vis detraxit ertssa periculiser ex, nihil expetendis in meinerst gers frust bura ' );

     	set_theme_mod( 'fashion_boutique_pro_latest_news_number', '9');

		$latest_news_category = wp_create_category('latest News');
  		set_theme_mod( 'fashion_boutique_pro_latest_news_category', 'Latest News' ); 
		 
		for($i=1;$i<=9;$i++) {

			$title = 'Alienum phaedrum torquatos nec eu, vis detraxitpericuliser ex, nihil.. ';
			$content = 'Consectetur adipiscing eelit, seesd desdo eiusmod tempor incididunt usadeet labore et dolore magna aliqua.';

			// Create post object
			$my_post = array(
				'post_title'    => wp_strip_all_tags( $title ),
				'post_content'  => $content,
				'post_status'   => 'publish',
				'post_type'     => 'post',
				'post_category' => array($latest_news_category) 
			);

			// Insert the post into the database
			$post_id = wp_insert_post( $my_post );

			$image_url = get_template_directory_uri().'/images/latest-news/latest-news'.$i.'.png';

			$image_name= 'Latest News'.$i.'.png';
			$upload_dir       = wp_upload_dir(); 
			// Set upload folder
			$image_data       = file_get_contents($image_url); 
			 
			// Get image data
			$unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
			// Generate unique name
			$filename= basename( $unique_file_name ); 
			// Create image file name
			// Check folder permission and define file location
			if( wp_mkdir_p( $upload_dir['path'] ) ) {
				$file = $upload_dir['path'] . '/' . $filename;
			} else {
				$file = $upload_dir['basedir'] . '/' . $filename;
			}
			file_put_contents( $file, $image_data );
			$wp_filetype = wp_check_filetype( $filename, null );
			$attachment = array(
				'post_mime_type' => $wp_filetype['type'],
				'post_title'     => sanitize_file_name( $filename ),
				'post_content'   => '',
				'post_type'     => 'post',
				'post_status'    => 'inherit'
			);
			$attach_id = wp_insert_attachment( $attachment, $file, $post_id );
			require_once(ABSPATH . 'wp-admin/includes/image.php');
			$attach_data = wp_generate_attachment_metadata( $attach_id, $file );
				wp_update_attachment_metadata( $attach_id, $attach_data );
				set_post_thumbnail( $post_id, $attach_id );

		set_theme_mod( 'fashion_boutique_pro_latest_news_icon_setting', 'minus' );
		}

    // ---Brands Section---//

		set_theme_mod( 'fashion_boutique_pro_brands_main_heading', 'Shop By Brands');
		set_theme_mod( 'fashion_boutique_pro_brands_content', 'Alienum phaedrum torquatos nec eu, vis detraxit ertssa periculiser ex, nihil ');

     	set_theme_mod( 'fashion_boutique_pro_brands1_counter', '8');
		for($i=1; $i<=8; $i++) {
			set_theme_mod( 'fashion_boutique_pro_brands1_image'.$i, get_template_directory_uri().'/images/brands1/brands'.$i.'.png' );
		}

		set_theme_mod( 'fashion_boutique_pro_brands2_counter', '6');
		for($p=1; $p<=6; $p++) {
			set_theme_mod( 'fashion_boutique_pro_brands2_image'.$p, get_template_directory_uri().'/images/brands2/brands'.$p.'.png' );
		}
 	

    //------------Contact Page Template-----------//

        set_theme_mod( 'fashion_boutique_pro_contact_page_heading', 'Contact Us');
		set_theme_mod( 'fashion_boutique_pro_contact_us_form_main_heading_text', 'Get in touch');
        
		set_theme_mod( 'fashion_boutique_pro_contact_us_form_content_text', 'We are here to help. Please complete the short form below and we’ll respond as soon as possible.');


		$cf7title = "Contact Page";
		$cf7content = '[text text-706 placeholder "Your Name"][email email-917 placeholder "Email Address"]
		[tel tel-594 placeholder "Phone No."][text text-334 placeholder "Subject"]
		[textarea textarea-35 placeholder "Message"]
		[submit "Submit"]
		[_site_title] "[your-subject]"
		[_site_title] <support@misbahwp.com>
		From: [your-name] <[your-email]>
		Subject: [your-subject]

		Message Body:
		[your-message]

		-- 
		This e-mail was sent from a contact form on [_site_title] ([_site_url])
		[_site_admin_email]
		Reply-To: [your-email]

		0
		0

		[_site_title] "[your-subject]"
		[_site_title] <support@misbahwp.com>
		Message Body:
		[your-message]

		-- 
		This e-mail was sent from a contact form on [_site_title] ([_site_url])
		[your-email]
		Reply-To: [_site_admin_email]

		0
		0
		Thank you for your message. It has been sent.
		There was an error trying to send your message. Please try again later.
		One or more fields have an error. Please check and try again.
		There was an error trying to send your message. Please try again later.
		You must accept the terms and conditions before sending your message.
		The field is required.
		The field is too long.
		The field is too short.
		There was an unknown error uploading the file.
		You are not allowed to upload files of this type.
		The file is too big.
		There was an error uploading the file.';

		$cf7_post = array(
		'post_title'    => wp_strip_all_tags( $cf7title ),
		'post_content'  => $cf7content,
		'post_status'   => 'publish',
		'post_type'     => 'wpcf7_contact_form',
		);
		// Insert the post into the database
		$cf7post_id = wp_insert_post( $cf7_post );

		add_post_meta($cf7post_id, "_form", '[text text-706 placeholder "Your Name"][email email-917 placeholder "Email Address"]
		[tel tel-594 placeholder "Phone No."][text text-334 placeholder "Subject"]
		[textarea textarea-35 placeholder "Message"]
		[submit "Submit"]');

		$cf7mail_data  = array('subject' => '[_site_title] "[your-subject]"',
		    'sender' => '[_site_title] <support@misbahwp.com>',
		    'body' => 'From: [your-name] <[your-email]>
		Subject: [your-subject]

		Message Body:
		[your-message]

		-- 
		This e-mail was sent from a contact form on [_site_title] ([_site_url])',
		    'recipient' => '[_site_admin_email]',
		    'additional_headers' => 'Reply-To: [your-email]',
		    'attachments' => '',
		    'use_html' => 0,
		    'exclude_blank' => 0 );

		add_post_meta($cf7post_id, "_mail", $cf7mail_data);
		// Gets term object from Tree in the database.

		$cf7shortcode = '[contact-form-7 id="'.$cf7post_id.'" title="'.$cf7title.'"]';

		set_theme_mod( 'fashion_boutique_pro_contact_us_form_shortcode',$cf7shortcode );

		set_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_heading_text', 'We Are Open To Discuss ');

		set_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_icon1', 'clock');
		set_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_heading_text1', 'OPEN HOURS');
		set_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_content1', 'Mon-Fri: 9AM-6PM');
		set_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_content12', 'Saturday: 9AM-4PM');
		set_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_content13', 'Sunday: Closed');

		set_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_icon2', 'location');
		set_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_heading_text2', 'Address');
		set_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_content2', '272 Rodney St, Brooklyn, NY 11211 76 East Houston Street New York City');

		set_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_icon3', 'phone');
		set_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_heading_text3', 'CONTACTS');
		set_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_content3', '+(01) 234-567-890');
		set_theme_mod( 'fashion_boutique_pro_contact_enquiry_section_content4', 'info@.fashionboutique.com');

		//--copyright--//
        
        set_theme_mod( 'fashion_boutique_pro_footer_logo_image', get_template_directory_uri().'/images/logo/footer-logo'.'.png' );
		set_theme_mod( 'fashion_boutique_pro_footer_text', 'Copyright 2022' );
		set_theme_mod( 'fashion_boutique_pro_footer_copyright_image', get_template_directory_uri().'/images/copyright/copyright'.'.png' );
		set_theme_mod( 'fashion_boutique_pro_copyright_image_url', '#' );

		//--404 Page--//

		set_theme_mod( 'fashion_boutique_pro_404_page_main_heading', '404' );
		set_theme_mod( 'fashion_boutique_pro_404_page_sub_heading', 'Oops! That page cant be found.' );
		set_theme_mod( 'fashion_boutique_pro_404_page_content', 'Were really sorry but we cant seem to find the page you were looking for.' );
		set_theme_mod( 'fashion_boutique_pro_404_page_button_text', ' Back The Homepage ' );

		//-- footer-wigdet--//
		$fashion_boutique_pro_Widget_Importer = new fashion_boutique_pro_Widget_Importer;
		$fashion_boutique_pro_Widget_Importer->import_widgets( $this->widget_file_url );

	}
}