<?php
/**
 * Dreamy Portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dreamy Portfolio
 */


if ( ! function_exists( 'dreamy_portfolio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dreamy_portfolio_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on BlogMelody, use a find and replace
	 * to change 'dreamy-portfolio' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'dreamy-portfolio', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'dreamy-portfolio' ),
	) );

	// Enable support for custom logo.
	add_theme_support( 'custom-logo' , array(
		'height'		=>45,	
		'width'			=>45,	
		'flex-height'	=>true,	
		'flex-width'	=>true,
	));

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'dreamy_portfolio_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	* This theme styles the visual editor to resemble the theme style,
	* specifically font, colors, icons, and column width.
	*/
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	add_editor_style( array( '/assets/css/editor-style' . $min . '.css', dreamy_portfolio_fonts_url() ) );

	// Gutenberg support
	add_theme_support( 'editor-color-palette', array(
       	array(
			'name' => esc_html__( 'Tan', 'dreamy-portfolio' ),
			'slug' => 'tan',
			'color' => '#E6DBAD',
       	),
       	array(
           	'name' => esc_html__( 'Yellow', 'dreamy-portfolio' ),
           	'slug' => 'yellow',
           	'color' => '#FDE64B',
       	),
       	array(
           	'name' => esc_html__( 'Orange', 'dreamy-portfolio' ),
           	'slug' => 'orange',
           	'color' => '#ED7014',
       	),
       	array(
           	'name' => esc_html__( 'Red', 'dreamy-portfolio' ),
           	'slug' => 'red',
           	'color' => '#D0312D',
       	),
       	array(
           	'name' => esc_html__( 'Pink', 'dreamy-portfolio' ),
           	'slug' => 'pink',
           	'color' => '#b565a7',
       	),
       	array(
           	'name' => esc_html__( 'Purple', 'dreamy-portfolio' ),
           	'slug' => 'purple',
           	'color' => '#A32CC4',
       	),
       	array(
           	'name' => esc_html__( 'Blue', 'dreamy-portfolio' ),
           	'slug' => 'blue',
           	'color' => '#3A43BA',
       	),
       	array(
           	'name' => esc_html__( 'Green', 'dreamy-portfolio' ),
           	'slug' => 'green',
           	'color' => '#3BB143',
       	),
       	array(
           	'name' => esc_html__( 'Brown', 'dreamy-portfolio' ),
           	'slug' => 'brown',
           	'color' => '#231709',
       	),
       	array(
           	'name' => esc_html__( 'Grey', 'dreamy-portfolio' ),
           	'slug' => 'grey',
           	'color' => '#6C626D',
       	),
       	array(
           	'name' => esc_html__( 'Black', 'dreamy-portfolio' ),
           	'slug' => 'black',
           	'color' => '#000000',
       	),
   	));

	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-font-sizes', array(
	   	array(
	       	'name' => esc_html__( 'small', 'dreamy-portfolio' ),
	       	'shortName' => esc_html__( 'S', 'dreamy-portfolio' ),
	       	'size' => 12,
	       	'slug' => 'small'
	   	),
	   	array(
	       	'name' => esc_html__( 'regular', 'dreamy-portfolio' ),
	       	'shortName' => esc_html__( 'M', 'dreamy-portfolio' ),
	       	'size' => 16,
	       	'slug' => 'regular'
	   	),
	   	array(
	       	'name' => esc_html__( 'larger', 'dreamy-portfolio' ),
	       	'shortName' => esc_html__( 'L', 'dreamy-portfolio' ),
	       	'size' => 36,
	       	'slug' => 'larger'
	   	),
	   	array(
	       	'name' => esc_html__( 'huge', 'dreamy-portfolio' ),
	       	'shortName' => esc_html__( 'XL', 'dreamy-portfolio' ),
	       	'size' => 48,
	       	'slug' => 'huge'
	   	)
	));
	add_theme_support('editor-styles');
	add_theme_support( 'wp-block-styles' );
}
endif;
add_action( 'after_setup_theme', 'dreamy_portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dreamy_portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dreamy_portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'dreamy_portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dreamy_portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dreamy-portfolio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'dreamy-portfolio' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'dreamy-portfolio' ), 1 ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'dreamy-portfolio' ), 2 ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'dreamy-portfolio' ), 3 ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'dreamy-portfolio' ), 4 ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dreamy_portfolio_widgets_init' );

/**
 * Register custom fonts.
 */
function dreamy_portfolio_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Bad Script, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Bad Script font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Bad Script';
	}
	

	/* translators: If there are characters in your language that are not supported by Righteous, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Righteous font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Righteous';
	}
	/* translators: If there are characters in your language that are not supported by Dosis, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Dosis font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Dosis';
	}
	/* translators: If there are characters in your language that are not supported by Cinzel Decorative, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Cinzel Decorative font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Cinzel Decorative';
	}
	/* translators: If there are characters in your language that are not supported by Faster one, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Faster one font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Faster One';
	}
	/* translators: If there are characters in your language that are not supported by Courgette, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Courgette font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Courgette';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Tangerine font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Tangerine';

	}
	/* translators: If there are characters in your language that are not supported by Henny Penny, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Henny Penny font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Henny Penny';

	}
	
	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Kaushan Script font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Kaushan Script';
	}
	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Marck Script font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Marck Script';
	}

	/* translators: If there are characters in your language that are not supported by Fredericka the Great, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Fredericka the Great font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Fredericka the Great';
	
	}
	/* translators: If there are characters in your language that are not supported by Roboto Slab, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Raleway: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Raleway:300,400,500,600,700';
	}

	// Header Options

	/* translators: If there are characters in your language that are not supported by Poppins, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Poppins';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Montserrat:300,400,500,600,700';
	}

	/* translators: If there are characters in your language that are not supported by Quicksand, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Quicksand font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Quicksand:300,400,500,600,700';
	}

	/* translators: If there are characters in your language that are not supported by Open Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Open Sans';
	}

	/* translators: If there are characters in your language that are not supported by Lato, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Lato font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Lato:300,400,500,600,700';
	}

	/* translators: If there are characters in your language that are not supported by Ubuntu, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Ubuntu font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Ubuntu';
	}

	// Body Options
	
	/* translators: If there are characters in your language that are not supported by |Playfair Display, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Playfair Display font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Playfair Display';
	}

	/* translators: If there are characters in your language that are not supported by Lora, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Lora font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Lora';
	}

	/* translators: If there are characters in your language that are not supported by Titillium Web, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Titillium Web font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Titillium Web';
	}

	/* translators: If there are characters in your language that are not supported by Muli, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Muli font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Muli';
	}

	/* translators: If there are characters in your language that are not supported by Nunito Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Nunito Sans font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Nunito Sans';
	}

	/* translators: If there are characters in your language that are not supported by Maven Pro, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Maven Pro font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Maven Pro';
	}

	/* translators: If there are characters in your language that are not supported by Cairo, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Cairo font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Cairo';
	}

	/* translators: If there are characters in your language that are not supported by Philosopher, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Philosopher font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Philosopher';
	}

	/* translators: If there are characters in your language that are not supported by Roboto, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Roboto font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Roboto';
	}

	/* translators: If there are characters in your language that are not supported by Oxygen, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Oxygen font: on or off', 'dreamy-portfolio' ) ) {
		$fonts[] = 'Oxygen';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}



/**
 * Enqueue scripts and styles.
 */
function dreamy_portfolio_scripts() {
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	$fonts_url = dreamy_portfolio_fonts_url();
	$primary_color = dreamy_portfolio_get_option( 'primary_color' );
	
		wp_enqueue_style( 'dreamy-portfolio-google-fonts', $fonts_url, array(), null );
		

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome' . $min . '.css', '', '4.7.0' );

	wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() .'/assets/css/slick-theme' . $min . '.css', '', 'v2.2.0');

	wp_enqueue_style( 'slick-css', get_template_directory_uri() .'/assets/css/slick' . $min . '.css', '', 'v1.8.0');

	wp_enqueue_style( 'dreamy-portfolio-blocks', get_template_directory_uri() . '/assets/css/blocks' . $min . '.css' );

	wp_enqueue_style( 'dreamy-portfolio-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery-slick', get_template_directory_uri() . '/assets/js/slick' . $min . '.js', array('jquery'), '2017417', true );

	wp_enqueue_script( 'jquery-match-height', get_template_directory_uri() . '/assets/js/jquery.matchHeight' . $min . '.js', array('jquery'), '2017417', true );

	wp_enqueue_script( 'imagesloaded' );
	
	wp_enqueue_script( 'jquery-packery', get_template_directory_uri() . '/assets/js/packery.pkgd' . $min . '.js', array('jquery'), '2017417', true );


	wp_enqueue_script( 'dreamy-portfolio-navigation', get_template_directory_uri() . '/assets/js/navigation' . $min . '.js', array(), '20151215', true );

	wp_enqueue_script( 'dreamy-portfolio-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix' . $min . '.js', array(), '20151215', true );

	wp_enqueue_script( 'dreamy-portfolio-custom-js', get_template_directory_uri() . '/assets/js/custom' . $min . '.js', array('jquery'), '20151215', true );  
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dreamy_portfolio_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 *
 * @since Safar Lite 1.0.0
 */
function dreamy_portfolio_block_editor_styles() {
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Block styles.
	wp_enqueue_style( 'dreamy-portfolio-block-editor-style', get_theme_file_uri( '/assets/css/editor-blocks' . $min . '.css' ) );
	// Add custom fonts.
	wp_enqueue_style( 'dreamy-portfolio-fonts', dreamy_portfolio_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'dreamy_portfolio_block_editor_styles' );

/**
 * Load init.
 */
require_once get_template_directory() . '/inc/init.php';
