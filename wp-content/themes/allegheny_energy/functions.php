<?php
/**
 * EAGP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EAGP
 */

function theme_enqueue_styles() {
	wp_enqueue_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css');
	wp_enqueue_style('gotham', 'https://cloud.typography.com/7377332/6364152/css/fonts.css');	
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles', 11);

// Removes unneccessary scripts and enqueues proper ones
function theme_enqueue_scripts() {
	wp_deregister_script('wp-embed'); // Only needed if we need a fancy embed from another WP site
	wp_deregister_script('jquery');   // We do this so we can enqueue a more recent version
	wp_enqueue_script('jquery',    ('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'), '', '', false);
	wp_enqueue_script('bootstrap',  'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', '', '', true);
	// wp_enqueue_script('scrollmagicdebug', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', array('scrollmagic'), '', true);
	wp_enqueue_script('script', get_template_directory_uri() . '/includes/main.js', '', '', true );
	wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/539782b023.js');
	// Eventually, only load CF7 scripts where needed
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

if ( ! function_exists( 'allegheny_energy_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function allegheny_energy_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on EAGP, use a find and replace
		 * to change 'allegheny_energy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'allegheny_energy', get_template_directory() . '/languages' );

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
	//	register_nav_menus( array(
//			'menu-1' => esc_html__( 'Primary', 'allegheny_energy' ),
//		) );

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
		add_theme_support( 'custom-background', apply_filters( 'allegheny_energy_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		//add_theme_support( 'custom-logo', array(
//			'height'      => 250,
//			'width'       => 250,
//			'flex-width'  => true,
//			'flex-height' => true,
//		) );
		
		//Add editor styles to display in WP editor
		add_editor_style( array( 'inc/editor-style.css', 'https://cloud.typography.com/7377332/6364152/css/fonts.css', 'https://use.fontawesome.com/539782b023.js' ));
	}
endif;
add_action( 'after_setup_theme', 'allegheny_energy_setup' );

// Adds HTML5 theme support
function wpdocs_after_setup_theme() {
    add_theme_support('html5', array('search-form'));
}
add_action('after_setup_theme', 'wpdocs_after_setup_theme');

// Removes 'Edit This' link across WordPress front-end
function wpse_remove_edit_post_link($link) {  return '';  }
add_filter('edit_post_link', 'wpse_remove_edit_post_link');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function allegheny_energy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'allegheny_energy_content_width', 1600 );
}
add_action( 'after_setup_theme', 'allegheny_energy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function allegheny_energy_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'allegheny_energy' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'allegheny_energy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'allegheny_energy_widgets_init' );

require_once('includes/wp_bootstrap_navwalker.php');

// Adds active class to current page item
function special_nav_class($classes, $item){
     if( in_array('current_page_item', $classes) ){
             $classes[] = 'current_page_item active ';
     }
     return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

// Initializes menu area
function theme_menus_init() {
	register_nav_menu('header_menu', __('Header Menu'));
	register_nav_menu('footer_menu',    __('Menu (Footer)'));
	register_nav_menu('page_menu',    __('Menu (Pages)'));
}
add_action('init', 'theme_menus_init');

 //Add search box to primary menu
 
function wpgood_nav_search($items, $args) {
    // If this isn't the primary menu, do nothing
    if( !($args->theme_location == 'header_menu' || 'page_menu') ) 
    return $items;
    // Otherwise, add search form
    return $items . '<li class="searchbox-position">' . get_search_form(false) . '</li>';
}
add_filter('wp_nav_menu_items', 'wpgood_nav_search', 10, 2);

/**
 * Enqueue scripts and styles.
 */
function allegheny_energy_scripts() {
	//wp_enqueue_style( 'allegheny_energy-style', get_stylesheet_uri() );
//	wp_enqueue_script( 'allegheny_energy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'allegheny_energy-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'allegheny_energy_scripts' );

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


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
 * Custom functions that act independently of the theme templates.
 */
//require get_template_directory() . '/inc/extras.php';
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

require_once(realpath( dirname( __FILE__ ) ). '/o2dca-library/o2dca.php');
