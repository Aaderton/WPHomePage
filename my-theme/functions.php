<?php
/**
 * My THeme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package My_Theme
 */

if ( ! function_exists( 'my_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function my_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Home Page, use a find and replace
		 * to change 'my-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'my-theme', get_template_directory() . '/languages' );

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
    add_theme_support('menus');
		register_nav_menu('primary', 'Primary Header Navigation');
		register_nav_menu('secondary', 'Secondary Header Navigation');

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
		add_theme_support( 'custom-background', apply_filters( 'my_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Set up the WordPress core custom header feature.
		add_theme_support('custom-header');

		// Set up post format featured
		add_theme_support('post-formats');

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'my_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function my_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'my_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'my_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function my_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'my-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'my-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );

/**
 * Head function
		*function my_theme_remove_version() {
		*		return '';
		*}
		*add_filter('the_generator', 'my_theme_remove_version');
*/

// Remove version number
remove_action('wp_head', 'wp_generator');

/**
	* Custom Post Type
*/
function my_theme_custom_post_type() {
	$labels = array(
			'name' => 'Portfolio',
			'singular_name' => 'Portfolio Item',
			'add_new' => 'Add Item',
			'all_items' => 'All Items',
			'add_new_item' => 'Add Portfolio Item',
			'edit_item' => 'Edit Portfolio Item',
			'new_item' => 'New Item',
			'view_item' => 'View Item',
			'search_item' => 'Search Portfolio',
			'not_found' => 'No items found',
			'not_found_in_trash' => 'No items found in trash',
			'parent_item_colon' => 'Parent item'
	);
	$args = array(
			'labels' => $labels,
			'public' => true,
			'has-archive' => true,
			'publicly_queryable' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchial' => false,
			'supports' => array(
					'title',
					'editor',
					'excerpt',
					'thumbnail',
					'revisions'
			),
			'taxonomies' => array('category','post_tag'),
			'menu_position' => 5,
			'exclude_from_search' => false
	);
	register_post_type('portfolio',$args);
}
add_action('init','my_theme_custom_post_type');

/**
	* Enqueue scripts and styles.
*/
function my_theme_scripts() {
	wp_enqueue_style('my_theme_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('my_theme_font_awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css');
  wp_enqueue_style('my_theme_google_fonts_monteserrat', 'http://fonts.googleapis.com/css?family=Montserrat:400,700');
  wp_enqueue_style('my_theme_google_fonts_lora', 'http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
  wp_enqueue_style('my-theme-style', get_stylesheet_uri() );
	wp_enqueue_script ('my_theme_bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),
	'20170710', true );
  wp_enqueue_script ('my_theme_jquery_easing_js', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script ('my_theme_grayscale_js', get_template_directory_uri() . '/js/grayscale.js', array(), '1.1', true);
	wp_enqueue_script ('my_theme_panels_js', get_template_directory_uri() . '/js/panels.js', array('jquery'), '1.0', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
