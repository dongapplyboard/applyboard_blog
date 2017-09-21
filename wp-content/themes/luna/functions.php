<?php
/**
 * luna functions and definitions
 *
 * @package luna
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'luna_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function luna_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on luna, use a find and replace
	 * to change 'luna' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'luna', get_template_directory() . '/languages' );

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
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'luna-home-project', 400 );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'luna' ), 
	) ); 

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'luna_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // luna_setup
add_action( 'after_setup_theme', 'luna_setup' );


/*-----------------------------------------------------------------------------------------------------//
	Register Widgets
	
	@link http://codex.wordpress.org/Function_Reference/register_sidebar
-------------------------------------------------------------------------------------------------------*/


function luna_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'luna' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Default Home Page - News', 'luna' ),
		'id'            => 'default-home-widget-area', 
		'description'   => esc_html__( 'Use this widget area to display MT - Home Posts widget on your default home page', 'luna' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">', 
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Social Widget Area', 'luna' ),
		'id'            => 'social-widget-area', 
		'description'   => esc_html__( 'Drag the MT - Social Icons widget here.', 'luna' ),
		'before_widget' => '',
		'after_widget'  => '', 
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	
	
	//Register the sidebar widgets   
	register_widget( 'luna_Video_Widget' ); 
	register_widget( 'luna_Contact_Info' );
	register_widget( 'luna_social' );
	register_widget( 'luna_action' );
	register_widget( 'luna_home_news' );
	
	
}
add_action( 'widgets_init', 'luna_widgets_init' );


/*-----------------------------------------------------------------------------------------------------//
	Scripts
-------------------------------------------------------------------------------------------------------*/

function luna_scripts() {
	wp_enqueue_style( 'luna-style', get_stylesheet_uri() );
	
	
	$headings_font = esc_html(get_theme_mod('headings_fonts'));
	$body_font = esc_html(get_theme_mod('body_fonts'));
	
	if( $headings_font ) {
		wp_enqueue_style( 'luna-headings-fonts', '//fonts.googleapis.com/css?family='. $headings_font );	
	} else {
		   
	}	
	if( $body_font ) {
		wp_enqueue_style( 'luna-body-fonts', '//fonts.googleapis.com/css?family='. $body_font ); 	
	} else {
		 
	} 
	
	wp_enqueue_style( 'luna-menu', get_template_directory_uri() . '/css/jPushMenu.css' );
	
	wp_enqueue_style( 'luna-font-awesome', get_template_directory_uri() . '/fonts/font-awesome.css' ); 

	wp_enqueue_style( 'luna-column-clear', get_template_directory_uri() . '/css/mt-column-clear.css' );

	wp_enqueue_script( 'luna-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'luna-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'luna-menu', get_template_directory_uri() . '/js/jPushMenu.js', array('jquery'), false, true );

	wp_enqueue_script( 'luna-scripts', get_template_directory_uri() . '/js/luna.scripts.js', array(), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'luna_scripts' );

/**
 * Load html5shiv
 */
function luna_html5shiv() {
    echo '<!--[if lt IE 9]>' . "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/js/html5shiv.js' ) . '"></script>' . "\n";
    echo '<![endif]-->' . "\n";
}
add_action( 'wp_head', 'luna_html5shiv' ); 

/**
 * Change the excerpt length
 */
function luna_excerpt_length( $length ) {
	
	$excerpt = esc_attr( get_theme_mod('exc_length', '40'));
	return $excerpt; 

}

add_filter( 'excerpt_length', 'luna_excerpt_length', 999 );


/*-----------------------------------------------------------------------------------------------------//
	Includes
-------------------------------------------------------------------------------------------------------*/

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
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php'; 

/**
 * Google Fonts  
 */
require get_template_directory() . '/inc/gfonts.php';  

/**
 * register your custom widgets
 */ 
require get_template_directory() . "/widgets/contact-info.php"; 
require get_template_directory() . "/widgets/video-widget.php";
require get_template_directory() . "/widgets/widget-mt-social.php"; 
require get_template_directory() . "/widgets/widget-mt-cta.php";
require get_template_directory() . "/widgets/widget-mt-home-news.php";

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/luna-styles.php';
require get_template_directory() . '/inc/luna-sanitize.php';

/**
 * Include additional custom admin panel features. 
 */
require get_template_directory() . '/panel/functions-admin.php';
require get_template_directory() . '/panel/theme-admin-page.php';
