<?php
/**
 * openair functions and definitions
 *
 * @package openair
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( 'openair_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function openair_setup() {
	global $cap, $content_width;

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	if ( function_exists( 'add_theme_support' ) ) {

		/**
		 * Add default posts and comments RSS feed links to head
		*/
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for Post Thumbnails on posts and pages
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		*/
		add_theme_support( 'post-thumbnails' );

        add_image_size( 'meteor-slider', 1170, 585 ); // 1170px wide x 585px high
        add_image_size( 'front-page-box-image', 465, 260, true ); // 465px wide x 260px high

        /* From the ARTS site */
//        add_image_size('slide-image',980,410,true);
//        add_image_size('home-box',309,180,true);
//        add_image_size('home-box-wide',465,260,true);
//        add_image_size('post-image',644,330,true);

		/**
		 * Enable support for Post Formats
		*/
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

		/**
		 * Setup the WordPress core custom background feature.
		*/
		add_theme_support( 'custom-background', apply_filters( 'openair_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

	}

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on openair, use a find and replace
	 * to change 'openair' to the name of your theme in all the template files
	*/
	load_theme_textdomain( 'openair', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Header bottom menu', 'openair' ),
	) );

}
endif; // openair_setup
add_action( 'after_setup_theme', 'openair_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function openair_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'openair' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
        'name'          => __( 'Footer One' ),
        'id'            => 'footer-one',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-title">',
        'after_titel'   => '</h4>',
    ) );

    register_sidebar( array(
      'name'          => __( 'Footer Two' ),
      'id'            => 'footer-two',
      'before_widget' => '<div class="footer-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="footer-title">',
      'after_titel'   => '</h4>',
    ) );

    register_sidebar( array(
      'name'          => __( 'Footer Three' ),
      'id'            => 'footer-three',
      'before_widget' => '<div class="footer-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="footer-title">',
      'after_titel'   => '</h4>',
    ) );

    register_sidebar( array(
      'name'          => __( 'Footer Four' ),
      'id'            => 'footer-four',
      'before_widget' => '<div class="footer-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="footer-title">',
      'after_titel'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'openair_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function openair_scripts() {

	// load bootstrap css
	wp_enqueue_style( 'openair-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.css' );

	// load openair styles
	wp_enqueue_style( 'openair-style', get_stylesheet_uri() );

	// load bootstrap js
	wp_enqueue_script('openair-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.js', array('jquery') );

	// load bootstrap wp js
	wp_enqueue_script( 'openair-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery') );

	wp_enqueue_script( 'openair-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'openair-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', 'openair_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';
