<?php
/**
 * iknebthem functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package iknebthem
 */

if ( ! function_exists( 'iknebthem_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function iknebthem_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on iknebthem, use a find and replace
	 * to change 'iknebthem' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'iknebthem', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'iknebthem' ),
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
	add_theme_support( 'custom-background', apply_filters( 'iknebthem_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'iknebthem_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function iknebthem_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'iknebthem_content_width', 640 );
}
add_action( 'after_setup_theme', 'iknebthem_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function iknebthem_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'iknebthem' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'iknebthem' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'iknebthem_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function iknebthem_scripts() {
	wp_enqueue_style( 'iknebthem-style', get_stylesheet_uri() );
	wp_enqueue_style( 'iknebthem-bootstrap-css', get_template_directory_uri(). '/templates/yoo_lykka/css/bootstrap.css' );
	wp_enqueue_style( 'iknebthem-theme-css', get_template_directory_uri(). '/templates/yoo_lykka/css/theme.css' );
	wp_enqueue_style( 'iknebthem-custom-css', get_template_directory_uri(). '/templates/yoo_lykka/css/custom.css' );



	wp_enqueue_script( 'iknebthem-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'iknebthem-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'iknebthem-jquery', get_template_directory_uri() . '/media/jui/js/jquery.min.js ', array(), '20151215', true );
	wp_enqueue_script( 'iknebthem-jquery-noconflict', get_template_directory_uri() . '/media/jui/js/jquery-noconflict.js ', array(), '20151215', true );
	wp_enqueue_script( 'iknebthem-jquery-migrate', get_template_directory_uri() . '/media/jui/js/jquery-migrate.min.js ', array(), '20151215', true );
	wp_enqueue_script( 'iknebthem-bootstrap', get_template_directory_uri() . '/media/jui/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'iknebthem-uikit', get_template_directory_uri() . '/templates/yoo_lykka/warp/vendor/uikit/js/uikit.js', array(), '20151215', true );
	wp_enqueue_script( 'iknebthem-autocomplete', get_template_directory_uri() . '/templates/yoo_lykka/warp/vendor/uikit/js/components/autocomplete.js', array(), '20151215', true );
	wp_enqueue_script( 'iknebthem-search', get_template_directory_uri() . '/templates/yoo_lykka/warp/vendor/uikit/js/components/search.js', array(), '20151215', true );
	wp_enqueue_script( 'iknebthem-tooltip', get_template_directory_uri() . '/templates/yoo_lykka/warp/vendor/uikit/js/components/tooltip.js', array(), '20151215', true );
	wp_enqueue_script( 'iknebthem-theme', get_template_directory_uri() . '/templates/yoo_lykka/js/theme.js', array(), '20151215', true );
	wp_enqueue_script( 'iknebthem-social', get_template_directory_uri() . '/templates/yoo_lykka/warp/js/social.js', array(), '20151215', true );









	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'iknebthem_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_theme_support( 'post-thumbnails' );
