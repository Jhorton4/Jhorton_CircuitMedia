<?php
/**
 * circuitmedia-site functions and definitions
 *
 * @package circuitmedia-site
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'circuitmedia_site_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function circuitmedia_site_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on circuitmedia-site, use a find and replace
	 * to change 'circuitmedia_site' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'circuitmedia_site', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'circuitmedia_site' ),
		'footer' => __( 'footer Menu', 'circuitmedia_site' ),
		'social' => __( 'Social Menu', 'circuitmedia_site' ),   // If you want to use a social menu


	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'circuitmedia_site_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // circuitmedia_site_setup
add_action( 'after_setup_theme', 'circuitmedia_site_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function circuitmedia_site_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'circuitmedia_site' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer', 'circuitmedia_site' ),
		'id'            => 'footer-widgets',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'circuitmedia_site_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function circuitmedia_site_scripts() {
	wp_enqueue_style( 'circuitmedia_site-style', get_stylesheet_uri() );

	wp_enqueue_style( 'circuitmedia_open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' );

	wp_enqueue_script( 'circuitmedia_site-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'circuitmedia_site-main', get_template_directory_uri() . '/js/main.js', array(), '20120206', true );

	wp_enqueue_script( 'circuitmedia_site-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'circuitmedia_site_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
function wcs_woo_remove_reviews_tab($tabs) {
unset($tabs['reviews']);
return $tabs;
}

if ( is_page('special-page') ) {
     /** Remove default sidebar */
     remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
}
