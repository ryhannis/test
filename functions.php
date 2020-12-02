<?php
/**
 * Inventive Ventures functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Inventive_Ventures
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'inventive_ventures_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function inventive_ventures_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Inventive Ventures, use a find and replace
		 * to change 'inventive-ventures' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'inventive-ventures', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'inventive-ventures' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'inventive_ventures_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'inventive_ventures_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function inventive_ventures_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'inventive_ventures_content_width', 640 );
}
add_action( 'after_setup_theme', 'inventive_ventures_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function inventive_ventures_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'inventive-ventures' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'inventive-ventures' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'inventive_ventures_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function inventive_ventures_scripts() {
	wp_enqueue_style( 'inventive-ventures-style', get_stylesheet_uri(), array(), _S_VERSION );

wp_enqueue_style( 'inventive-ventures-tachyons', get_template_directory_uri()
 . '/css/tachyons.css');

 wp_enqueue_style( 'inventive-ventures-custom', get_template_directory_uri()
 . '/css/custom.css');

	// here we load barba.js from our js folder
	wp_enqueue_script('inventive-ventures-barba', get_template_directory_uri() . '/js/barba.js');

	// here we load our script file using jquery alongside it
	wp_enqueue_script('inventive-ventures-menu', get_template_directory_uri() . '/js/menu.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'inventive_ventures_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function nice_background($image_field) {
	echo 'background-image: url(' . get_field($image_field) . ')';
}

function your_themes_pagination(){
    global $wp_query; 
    echo paginate_links();
}


