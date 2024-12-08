<?php
/**
 * Medical Heed functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Medical_Heed
 */

if ( ! function_exists( 'medical_heed_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function medical_heed_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Medical Heed, use a find and replace
		 * to change 'medical-heed' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'medical-heed', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( "wp-block-styles" );

		add_theme_support( "responsive-embeds" );

		add_theme_support( "align-wide" );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		
		add_image_size('medical-head-about-image', 555, 460, true );

		add_image_size('medical-head-single-image', 820, 450, true );

		add_image_size('medical-head-image-size', 1350, 550, true ); // Banner Slider


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1'   => esc_html__('Primary', 'medical-heed' ),
			'menu-2'   => esc_html__( 'Footer Menu', 'medical-heed' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'medical_heed_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		add_theme_support('custom-line-height');

		add_theme_support('custom-spacing');

		add_theme_support('custom-units');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

	}
endif;
add_action( 'after_setup_theme', 'medical_heed_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medical_heed_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'medical_heed_content_width', 640 );
}
add_action( 'after_setup_theme', 'medical_heed_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medical_heed_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Widget Area', 'medical-heed' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'medical-heed' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area One', 'medical-heed' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'medical-heed' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area Two', 'medical-heed' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'medical-heed' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area Three', 'medical-heed' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'medical-heed' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Popup Sidebar Widget Area', 'medical-heed' ),
		'id'            => 'popup-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'medical-heed' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'medical_heed_widgets_init' );


if ( ! function_exists( 'medical_heed_fonts_url' ) ) :

	/**
	 * Register Google fonts for Medical Heed
	 *
	 * Create your own medical_heed_fonts_url() function to override in a child theme.
	 *
	 * @since Medical Heed 1.0.0
	 *
	 * @return string Google fonts URL for the theme.
	 */

    function medical_heed_fonts_url() {

        $fonts_url = '';

        $font_families = array();


       if ( 'off' !== _x( 'on', 'PT Sans: on or off', 'medical-heed' ) ) {
            $font_families[] = 'PT+Sans:400,700';
        }

        if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'medical-heed' ) ) {
            $font_families[] = 'Open+Sans:300,400,600,700i';
        }
        if ( 'off' !== _x( 'on', 'Work Sans font: on or off', 'medical-heed' ) ) {
            $font_families[] = 'Work+Sans:300,400,600,700,800';
        }
        if ( 'off' !== _x( 'on', 'Rubik font: on or off', 'medical-heed' ) ) {
            $font_families[] = 'Rubik:300,400,700,900';
        }


        if( $font_families ) {

            $query_args = array(

                'family' => urlencode( implode( '|', $font_families ) ),
                'subset' => urlencode( 'latin,latin-ext' ),
            );

            $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
        }

        return esc_url ( $fonts_url );
    }

endif;

/**
 * Enqueue scripts and styles.
 */
function medical_heed_scripts() {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'medical-heed-fonts', medical_heed_fonts_url(), array(), null );

	// Load Font Awesome CSS Library File
	wp_enqueue_style( 'font-awesome5', trailingslashit( esc_url ( get_template_directory_uri() ) ) . 'assets/library/font-awesome/css/fontawesome'. esc_attr ( $min ) . '.css' );

	// Flexslider Slider
	wp_enqueue_style( 'flexslider', trailingslashit( esc_url ( get_template_directory_uri() ) ) . '/assets/library/flexslider/css/flexslider.css' );

	// Load Bootstrap CSS Library File
	wp_enqueue_style( 'bootstrap', trailingslashit( esc_url ( get_template_directory_uri() ) ) . 'assets/library/bootstrap/css/bootstrap' . esc_attr ( $min ) . '.css' );

	// Load owlcarousel CSS Library File
	wp_enqueue_style( 'owlcarousel', trailingslashit( esc_url ( get_template_directory_uri() ) ) . 'assets/library/owlcarousel/css/owl.carousel' . esc_attr ( $min ) . '.css' );

	wp_enqueue_style( 'medical-heed-style', get_stylesheet_uri() );

	// Load the html5 shiv.
    wp_enqueue_script('html5', trailingslashit( esc_url ( get_template_directory_uri() ) ) . 'assets/library/html5shiv/html5shiv' . esc_attr ( $min ) . '.js', array('jquery'), '3.7.3', false);
    wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

    // Load the respond.
    wp_enqueue_script('respond', trailingslashit( esc_url ( get_template_directory_uri() ) ). 'assets/library/respond/respond' . esc_attr ( $min ) . '.js', array('jquery'), false);
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );

    wp_enqueue_script('jquery-sticky', trailingslashit( esc_url ( get_template_directory_uri() ) ) . 'assets/js/jquery.sticky.js', array('jquery'), '3.3.7', true );

	wp_enqueue_script('jquery-flexslider', trailingslashit( esc_url ( get_template_directory_uri() ) ) . '/assets/library/flexslider/js/jquery.flexslider-min.js', array('jquery'), true);

    wp_enqueue_script('owlcarousel', trailingslashit( esc_url ( get_template_directory_uri() ) ) . 'assets/library/owlcarousel/js/owl.carousel' . esc_attr ( $min ) . '.js', array('jquery'), '3.3.7', true );

    wp_enqueue_script('medical-head-main', trailingslashit( esc_url ( get_template_directory_uri() ) ) . 'assets/js/main.js', array('jquery'), '3.3.7', true );

	wp_enqueue_script( 'medical-heed-navigation', trailingslashit( esc_url ( get_template_directory_uri() ) ) . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'medical-heed-skip-link-focus-fix',  trailingslashit( esc_url ( get_template_directory_uri() ) ) . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'medical_heed_scripts' );


/**
 * Sets the Medical Heed Template Instead of front-page.
 */
function medical_heed_front_page_set( $template ) {

	$medical_heed_front_page = get_theme_mod( 'medical_heed_front_page' ,false);

	if( true != $medical_heed_front_page ){

		if ( 'posts' == get_option( 'show_on_front' ) ) {

			include( get_home_template() );

		} else {

			include( get_page_template() );
		}
	}
}
add_filter( 'medical_heed_enable_front_page', 'medical_heed_front_page_set' );

/**
 * Load Files.
 */
require get_template_directory() . '/inc/init.php';



function medical_heed_import_files_array(){
    return array(
        'demo-one' => array(
	        'name' => 'Medical Heed - Main',
	        'external_url' => 'https://demo.sparklewpthemes.com/demo-data/medicalheed/demo-one/demo-one.zip',
	        'image' => 'https://demo.sparklewpthemes.com/medicalheedpro/demos/wp-content/uploads/sites/4/2020/12/2.png',
	        'preview_url' => 'https://demo.sparklewpthemes.com/medicalheed/',
	        'menuArray' => array(
	            'menu-1' => 'Main Menu',
	            'menu-2' => 'Top Menu'
	        ),
	        'home_slug' => '',
	        'tags' => array(
	            'free' => 'Free',
	        ),
	        'categories' => array( 
	            'medical' => 'Medical'
	        ),/*Categories*/
	        'pagebuilder' => array(
	            'widget' => "Widgets",
	        ),
	        'plugins' => array(
	            'contact-form-7' => array(
	                'name' => 'Contact Form 7',
	                'source' => 'wordpress',
	                'file_path' => 'contact-form-7/wp-contact-form-7.php'
	            )
	        )   
	    ),
	    'demo-one1' => array(
	        'name' => 'Medical Clinic',
	        'external_url' => 'https://demo.sparklewpthemes.com/demo-data/medicalheed/demo-one/demo-one1.zip',
	        'image' => 'https://demo.sparklewpthemes.com/demo-data/medicalheed/demo-one/demo-one1.jpeg',
	        'preview_url' => 'https://demo.sparklewpthemes.com/medicalheed/mediclinic/',
	        'menuArray' => array(
	            'menu-1' => 'Main Menu',
	            'menu-2' => 'Our Services',
	        ),
	        'home_slug' => '',
	        'tags' => array(
	            'free' => 'Free',
	        ),
	        'categories' => array( 
	            'medical' => 'Medical'
	        ),/*Categories*/
	        'pagebuilder' => array(
	            'widget' => "Widgets",
	        ),
	        'plugins' => array(
	            'contact-form-7' => array(
	                'name' => 'Contact Form 7',
	                'source' => 'wordpress',
	                'file_path' => 'contact-form-7/wp-contact-form-7.php'
	            ),
	        )   
	    ),
	    'demo-two' => array(
	        'name' => 'Medical Heed - Pro',
	        'image' => 'https://demo.sparklewpthemes.com/medicalheedpro/demos/wp-content/uploads/sites/4/2020/12/1.png',
	        'preview_url' => 'https://demo.sparklewpthemes.com/medicalheedpro/demo02/',
	        'menuArray' => array(
	            'menu-1' => 'Main Menu',
	            'menu-2' => 'Top Menu'
	        ),
	        'home_slug' => '',
	        'tags' => array(
	            'pro' => 'Premium',
	        ),
	        'categories' => array( 
	            'medical' => 'Medical'
	        ),/*Categories*/
	        'pagebuilder' => array(
	            'widget' => "Widgets",
	        ),
	        'type' => 'pro',
	        'buy_url' => 'https://sparklewpthemes.com/wordpress-themes/medicalheedpro/'
	    ),
	    'demo-three' => array(
	        'name' => 'Medical Heed - Pro',
	        'image' => 'https://demo.sparklewpthemes.com/medicalheedpro/demos/wp-content/uploads/sites/4/2020/12/4.png',
	        'preview_url' => 'https://demo.sparklewpthemes.com/medicalheedpro/sample-v2/',
	        'menuArray' => array(
	            'menu-1' => 'Main Menu',
	            'menu-2' => 'Top Menu'
	        ),
	        'home_slug' => '',
	        'tags' => array(
	            'pro' => 'Premium',
	        ),
	        'categories' => array( 
	            'medical' => 'Medical'
	        ),/*Categories*/
	        'pagebuilder' => array(
	            'widget' => "Widgets",
	        ),
	        'type' => 'pro',
	        'buy_url' => 'https://sparklewpthemes.com/wordpress-themes/medicalheedpro/'
	    ),
    );
}
add_filter( 'sparkle_demo_import_config', 'medical_heed_import_files_array' );




if(!function_exists('sparklethemes_register_block_patterns')){

	function sparklethemes_register_block_patterns() {

		$patterns = array();

		$block_pattern_categories = array(
			'medical-heed' => array( 'label' => esc_html__( 'Medical Heed Patterns', 'medical-heed' ) ),
		);

		$block_pattern_categories = apply_filters( 'sparklethemes_register_block_patterns', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {

			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {

				register_block_pattern_category( $name, $properties );

			}
		}

		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Check Mark', 'medical-heed' ),
				/*
				* Styles for the custom checkmark list block style
				* https://github.com/WordPress/gutenberg/issues/51480
				*/
				'inline_style' => '
				.is-style-checkmark-list .block-editor-block-list__block{
					display: flex;
					align-items: center;
				}
				.is-style-checkmark-list .block-editor-block-list__block:before{
					color: var(--wp--preset--color--primary);
				}
				.editor-styles-wrapper ol.is-style-checkmark-list, 
				.editor-styles-wrapper ul.is-style-checkmark-list,
				ol.is-style-checkmark-list,
				ul.is-style-checkmark-list{
					padding: 0;
				}
				.is-style-checkmark-list li{
					margin-bottom: 5px;
					list-style: none;
					display: flex;
					align-items: center;
				}
				.is-style-checkmark-list li a{
					margin-left: 3px;
				}
				.is-style-checkmark-list li:before {
					content: "\f12a";
					font-family: "dashicons";
					color: #ff7101;
					margin-right: 5px;
				}',
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'         => 'circle-list',
				'label'        => __( 'Circle List', 'medical-heed' ),
				/*
				* Styles for the custom circle list block style
				* https://github.com/WordPress/gutenberg/issues/51480
				*/
				'inline_style' => '
				.is-style-circle-list .block-editor-block-list__block{
					display: flex;
					align-items: center;
				}
				.is-style-circle-list .block-editor-block-list__block:before{
					color: var(--wp--preset--color--primary);
				}
				.editor-styles-wrapper ol.is-style-circle-list, 
				.editor-styles-wrapper ul.is-style-circle-list,
				ol.is-style-circle-list,
				ul.is-style-circle-list{
					padding: 0;
				}
				.is-style-circle-list li{
					margin-bottom: 5px;
					list-style: none;
					display: flex;
					align-items: center;
				}
				.is-style-circle-list li a{
					margin-left: 3px;
				}
				.is-style-circle-list li:before {
					content: "\f159";
					font-family: "dashicons";
					color: #ff7101;
					margin-right: 5px;
				}',
			)
		);

		/** Button */
		register_block_style(
			'core/button',
			array(
				'name'         => 'primary-button',
				'label'        => esc_html__( 'Primary Button', 'medical-heed' ),
				'inline_style' => '
				.wp-block-button .wp-block-button__link.is-style-outline, 
				.wp-block-button.is-style-outline>.wp-block-button__link {
					padding: 20px 32px;
					cursor: pointer;
				}
				.wp-block-button .wp-block-button__link.is-style-outline:not(.has-text-color), 
				.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color){
					color: var(--wp--preset--color--primary);
				}

				.wp-block-button.is-style-primary-button .wp-block-button__link,
				.editor-styles-wrapper .is-style-primary-button.wp-block-button .wp-block-button__link {
					overflow: hidden;
					position: relative;
					z-index: 1;
					vertical-align: middle;
					padding-right:55px;
					cursor: pointer;
				}
				
				.is-style-primary-button .wp-block-button__link::after {
					content: "\f344";
					position: absolute;
					margin-left: 5px;
					font-family: "dashicons";
				}

				.wp-block-button.is-style-primary-button .wp-block-button__link:before,
				.editor-styles-wrapper .is-style-primary-button.wp-block-button .wp-block-button__link:before {
					content: "";
					position: absolute;
					z-index: -1;
					background-color: var(--wp--preset--color--black);
					left: auto;
					right: 0;
					top: 0;
					height: 100%;
					width: 0;
					-webkit-transition: all ease 0.4s;
					-o-transition: all ease 0.4s;
					transition: all ease 0.4s;
				}
				
				.wp-block-button.is-style-primary-button .wp-block-button__link:hover,
				.editor-styles-wrapper .is-style-primary-button.wp-block-button .wp-block-button__link:hover {
					color: var(--wp--preset--color--white);
				}
				
				.wp-block-button.is-style-primary-button .wp-block-button__link:hover:before,
				.editor-styles-wrapper .is-style-primary-button.wp-block-button .wp-block-button__link:hover:before {
					width: 101%;
					right: auto;
					left: 0;
				}',
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'         => 'secondary-button',
				'label'        => esc_html__( 'Secondary Button', 'medical-heed' ),
				'inline_style' => '
				.wp-block-button.is-style-secondary-button .wp-block-button__link,
				.editor-styles-wrapper .is-style-secondary-button.wp-block-button .wp-block-button__link {
					overflow: hidden;
					position: relative;
					z-index: 1;
					vertical-align: middle;
					padding-right:55px;
					cursor: pointer;
					background-color: var(--wp--preset--color--white);
					color: var(--wp--preset--color--primary);
					border: 2px solid var(--wp--preset--color--primary);
					padding: 18px 55px 18px 30px;
				}
				
				.is-style-secondary-button .wp-block-button__link::after {
					content: "\f344";
					position: absolute;
					margin-left: 5px;
					font-family: "dashicons";
				}

				.wp-block-button.is-style-secondary-button .wp-block-button__link:before,
				.editor-styles-wrapper .is-style-secondary-button.wp-block-button .wp-block-button__link:before {
					content: "";
					position: absolute;
					z-index: -1;
					background-color: var(--wp--preset--color--primary);
					left: auto;
					right: 0;
					top: 0;
					height: 100%;
					width: 0;
					-webkit-transition: all ease 0.4s;
					-o-transition: all ease 0.4s;
					transition: all ease 0.4s;
				}
				
				.wp-block-button.is-style-secondary-button .wp-block-button__link:hover,
				.editor-styles-wrapper .is-style-secondary-button.wp-block-button .wp-block-button__link:hover {
					color: var(--wp--preset--color--white);
				}
				
				.wp-block-button.is-style-secondary-button .wp-block-button__link:hover:before,
				.editor-styles-wrapper .is-style-secondary-button.wp-block-button .wp-block-button__link:hover:before {
					width: 101%;
					right: auto;
					left: 0;
				}',
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'         => 'no-border',
				'label'        => esc_html__( 'No Border', 'medical-heed' ),
				'inline_style' => '
				.wp-block-button.is-style-no-border .wp-block-button__link,
				.editor-styles-wrapper .is-style-no-border.wp-block-button .wp-block-button__link {
					overflow: hidden;
					position: relative;
					z-index: 1;
					vertical-align: middle;
					cursor: pointer;
					background-color: transparent;
					color: var(--wp--preset--color--black);
					padding: 0 25px 0 0;
				}
				
				.is-style-no-border .wp-block-button__link::after {
					content: "\f344";
					position: absolute;
					margin-left: 5px;
					font-family: "dashicons";
				}

				.wp-block-button.is-style-no-border .wp-block-button__link:hover,
				.editor-styles-wrapper .is-style-no-border.wp-block-button .wp-block-button__link:hover {
					color: var(--wp--preset--color--primary);
				}',
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'         => 'video',
				'control__label' => 'shiv',
				'label'        => esc_html__( 'Video Icon', 'medical-heed' ),
				'inline_style' => '
				.wp-block-button.is-style-video .wp-block-button__link,
				.editor-styles-wrapper .is-style-video.wp-block-button .wp-block-button__link {
					position: relative;
					z-index: 99;
					width: 65px;
					height: 65px;
					font-size: 25px;
					color: var(--wp--preset--color--white);
					text-align: center;
					background: var(--wp--preset--color--primary);
					border-radius: 50%;
					font-size:0;
					display: inline-flex;
					align-items: center;
					justify-content: center;
					box-shadow: 0 0 16px rgba(19, 143, 129, 0.9);
				}
				.is-style-video .wp-block-button__link::before {
					position: absolute;
					content: "";
					top: -2px;
					bottom: -2px;
					left: -2px;
					right: -2px;
					border-radius: 50%;
					box-shadow: 0 0 rgba(255, 255, 255, 0.2), 0 0 0 16px rgba(255, 255, 255, 0.2), 0 0 0 32px rgba(255, 255, 255, 0.2), 0 0 0 48px rgba(255, 255, 255, 0.2);
					animation: ripples 1s linear infinite;
					animation-play-state: running;
					opacity: 1;
					visibility: visible;
					transform: scale(0.6);
					z-index: 0;
				}
				
				.is-style-video .wp-block-button__link::after {
					content: "\f235";
					position: absolute;
					font-family: "dashicons";
					font-size: 25px;
				}

				.wp-block-button.is-style-video .wp-block-button__link:hover,
				.editor-styles-wrapper .is-style-video.wp-block-button .wp-block-button__link:hover {
					box-shadow: 0px 4px 10px var(--wp--preset--color--primary);
				}
				.wp-block-button.is-style-video .wp-block-button__link:hover:before,
				.editor-styles-wrapper .is-style-video.wp-block-button .wp-block-button__link:hover:before {
					animation-play-state: paused;
					opacity: 0;
					visibility: hidden;
					transition: 0.3s;
				}',
			)
		);

		/** Read More */
		register_block_style(
			'core/read-more',
			array(
				'name'         => 'primary-button',
				'label'        => esc_html__( 'Primary Button', 'medical-heed' ),
				'inline_style' => '
				.is-style-primary-button.wp-block-read-more{
					overflow: hidden;
					position: relative;
					z-index: 1;
					vertical-align: middle;
					padding-right:55px;
					cursor: pointer;
					background: var(--wp--preset--color--primary);
					color: var(--wp--preset--color--white);
				}
				.is-style-primary-button.wp-block-read-more::after {
					content: "\f344";
					position: absolute;
					margin-left: 5px;
					font-family: "dashicons";
				}
				.is-style-primary-button.wp-block-read-more:before{
					content: "";
					position: absolute;
					z-index: -1;
					background-color: var(--wp--preset--color--black);
					left: auto;
					right: 0;
					top: 0;
					height: 100%;
					width: 0;
					-webkit-transition: all ease 0.4s;
					-o-transition: all ease 0.4s;
					transition: all ease 0.4s;
				}
				.is-style-primary-button.wp-block-read-more:hover{
					color: var(--wp--preset--color--white);
				}
				.is-style-primary-button.wp-block-read-more:hover:before{
					width: 101%;
					right: auto;
					left: 0;
				}',
			)
		);

		register_block_style(
			'core/read-more',
			array(
				'name'         => 'secondary-button',
				'label'        => esc_html__( 'Secondary Button', 'medical-heed' ),
				'inline_style' => '

				.is-style-secondary-button.wp-block-read-more{
					overflow: hidden;
					position: relative;
					z-index: 1;
					padding-right:55px;
					cursor: pointer;
					background-color: var(--wp--preset--color--white);
					color: var(--wp--preset--color--primary);
					border: 2px solid var(--wp--preset--color--primary);
				}
				
				.is-style-secondary-button.wp-block-read-more::after {
					content: "\f344";
					position: absolute;
					margin-left: 5px;
					font-family: "dashicons";
				}

				.is-style-secondary-button.wp-block-read-more:before {
					content: "";
					position: absolute;
					z-index: -1;
					background-color: var(--wp--preset--color--primary);
					left: auto;
					right: 0;
					top: 0;
					height: 100%;
					width: 0;
					-webkit-transition: all ease 0.4s;
					-o-transition: all ease 0.4s;
					transition: all ease 0.4s;
				}
				
				.is-style-secondary-button.wp-block-read-more:hover {
					color: var(--wp--preset--color--white);
				}
				
				.is-style-secondary-button.wp-block-read-more:hover:before {
					width: 101%;
					right: auto;
					left: 0;
				}',
			)
		);

		register_block_style(
			'core/read-more',
			array(
				'name'         => 'no-border',
				'label'        => esc_html__( 'No Border', 'medical-heed' ),
				'inline_style' => '

				.is-style-no-border.wp-block-read-more{
					overflow: hidden;
					position: relative;
					z-index: 1;
					vertical-align: middle;
					cursor: pointer;
					background-color: transparent;
					color: var(--wp--preset--color--black);
				}
				
				.is-style-no-border.wp-block-read-more::after {
					content: "\f344";
					position: absolute;
					margin-left: 5px;
					font-family: "dashicons";
				}

				.is-style-no-border.wp-block-read-more:hover {
					color: var(--wp--preset--color--primary);
				}',
			)
		);

	}
}
add_action( 'init', 'sparklethemes_register_block_patterns', 9 );