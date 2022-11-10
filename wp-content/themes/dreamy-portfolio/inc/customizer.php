<?php
/**
 * Dreamy Portfolio Theme Customizer
 *
 * @package Dreamy Portfolio
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function dreamy_portfolio_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Register custom section types.
	$wp_customize->register_section_type( 'Dreamy_Portfolio_Customize_Section_Upsell' );

	$wp_customize->add_section(
		new Dreamy_Portfolio_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Dreamy Portfolio Pro', 'dreamy-portfolio' ),
				'pro_text' => esc_html__( 'Buy Pro', 'dreamy-portfolio' ),
				'pro_url'  => 'http://www.sensationaltheme.com/downloads/dreamy-portfolio-pro/',
				'priority'  => 10,
			)
		)
	);


	// Add Panel.
	$wp_customize->add_panel( 'theme_option_panel',
		array(
		'title'      => __( 'Theme Options', 'dreamy-portfolio' ),
		'priority'   => 101,
		'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_setting( 'theme_options[colorscheme_hue]', array(
		'default'		=> '#FD4766',
		'sanitize_callback' => 'sanitize_hex_color', // The hue is stored as a positive integer.
		
	) );


	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[colorscheme_hue]', array(
		'label'    => esc_html__( 'Color Scheme', 'dreamy-portfolio' ),
		'section'  => 'colors',
	) ) );

	// Load customize sanitize.
	include get_template_directory() . '/inc/customizer/sanitize.php';

	// Load customize options.
	include get_template_directory() . '/inc/customizer/options.php';

	// Load customize control.
	include get_template_directory() . '/inc/customizer/control.php';

	// Load customize sanitize.
	include get_template_directory() . '/inc/customizer/active-callback.php';

	// Load header sections option.
	include get_template_directory() . '/inc/customizer/theme-option/footer.php';

	// Load header sections option.
	include get_template_directory() . '/inc/customizer/theme-option/general.php';

	// Load header sections option.
	include get_template_directory() . '/inc/customizer/theme-option/header-image.php';

	// Load Single Post sections option.
	include get_template_directory() . '/inc/customizer/theme-option/single-post.php';

	// Load Single Page sections option.
	include get_template_directory() . '/inc/customizer/theme-option/single-page.php';

	// Load home page sections option.
	include get_template_directory() . '/inc/customizer/home-section.php';


	
}
add_action( 'customize_register', 'dreamy_portfolio_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function dreamy_portfolio_customize_preview_js() {
	wp_enqueue_script( 'dreamy_portfolio_customizer', get_template_directory_uri() . '/inc/customizer/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'dreamy_portfolio_customize_preview_js' );
/**
 *
 */
function dreamy_portfolio_customize_backend_scripts() {

	wp_enqueue_style( 'dreamy-portfolio-admin-customizer-style', get_template_directory_uri() . '/inc/customizer/css/customizer-style.css' );
	wp_enqueue_script( 'dreamy-portfolio-admin-customizer', get_template_directory_uri() . '/inc/customizer/js/customizer-scipt.js', array( 'jquery', 'customize-controls' ), '20151215', true );
}
add_action( 'customize_controls_enqueue_scripts', 'dreamy_portfolio_customize_backend_scripts', 10 );
