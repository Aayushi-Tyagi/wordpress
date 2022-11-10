<?php
/**
 * Testimonial options.
 *
 * @package Dreamy Portfolio
 */

$default = dreamy_portfolio_get_default_theme_options();

// Testimonial Section
$wp_customize->add_section( 'section_home_testimonial',
	array(
		'title'      => __( 'Testimonial Section', 'dreamy-portfolio' ),
		'priority'   => 50,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_testimonial_section]',
	array(
		'default'           => $default['disable_testimonial_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'dreamy_portfolio_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Dreamy_Portfolio_Switch_Control( $wp_customize, 'theme_options[disable_testimonial_section]',
    array(
		'label' 			=> __('Enable/Disable Testimonial Section', 'dreamy-portfolio'),
		'section'    		=> 'section_home_testimonial',
		 'settings'  		=> 'theme_options[disable_testimonial_section]',
		'on_off_label' 		=> dreamy_portfolio_switch_options(),
    )
) );

// Testimonial Image
$wp_customize->add_setting('theme_options[testimonial_side_image]', 
	array(
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'dreamy_portfolio_sanitize_image'
	)
);

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
	'theme_options[testimonial_side_image]', 
	array(
	'label'       => __('Section Side Image', 'dreamy-portfolio'),
	'section'     => 'section_home_testimonial',   
	'settings'    => 'theme_options[testimonial_side_image]',		
	'active_callback' => 'dreamy_portfolio_testimonial_active',
	'type'        => 'image',
	)
	)
);

$wp_customize->add_setting( 'theme_options[testimonial_background_color]', array(
    'sanitize_callback' => 'sanitize_hex_color', // The hue is stored as a positive integer.
    'default'           => '#e5e5e5',
    
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[testimonial_background_color]', array(
    'label'    => esc_html__( 'Background Color', 'dreamy-portfolio' ),
    'section'  => 'section_home_testimonial',
    'active_callback' => 'dreamy_portfolio_testimonial_active',
) ) );

//About Section title
$wp_customize->add_setting('theme_options[testimonial_title]', 
	array(
	'default'           => $default['testimonial_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[testimonial_title]', 
	array(
	'label'       => __('Section Title', 'dreamy-portfolio'),
	'section'     => 'section_home_testimonial',   
	'settings'    => 'theme_options[testimonial_title]',
	'active_callback' => 'dreamy_portfolio_testimonial_active',		
	'type'        => 'text'
	)
);

//About Section Subtitle
$wp_customize->add_setting('theme_options[testimonial_subtitle]', 
	array(
	'default'           => $default['testimonial_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[testimonial_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'dreamy-portfolio'),
	'section'     => 'section_home_testimonial',   
	'settings'    => 'theme_options[testimonial_subtitle]',
	'active_callback' => 'dreamy_portfolio_testimonial_active',		
	'type'        => 'text'
	)
);



for( $i=1; $i<=4; $i++ ){

	// Additional Information First Page
	$wp_customize->add_setting('theme_options[testimonial_page_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'dreamy_portfolio_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[testimonial_page_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Page #%1$s', 'dreamy-portfolio'), $i),
		'section'     => 'section_home_testimonial',   
		'settings'    => 'theme_options[testimonial_page_'.$i.']',		
		'type'        => 'dropdown-pages',
		'active_callback' => 'dreamy_portfolio_testimonial_active',
		)
	);
}