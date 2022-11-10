<?php
/**
 * About options.
 *
 * @package Dreamy Portfolio
 */

$default = dreamy_portfolio_get_default_theme_options();

// About section
$wp_customize->add_section( 'section_details',
	array(
		'title'      => __( 'About Section', 'dreamy-portfolio' ),
		'priority'   => 15,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);


$wp_customize->add_setting( 'theme_options[disable_details_section]',
	array(
		'default'           => $default['disable_details_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'dreamy_portfolio_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Dreamy_Portfolio_Switch_Control( $wp_customize, 'theme_options[disable_details_section]',
    array(
		'label' 			=> __('Disable About Section', 'dreamy-portfolio'),
		'section'    		=> 'section_details',
		'on_off_label' 		=> dreamy_portfolio_switch_options(),
    )
) );

// Add autoplay enable setting and control.
$wp_customize->add_setting( 'theme_options[details_content_enable]', array(
	'default'           => $default['details_content_enable'],
	'sanitize_callback' => 'dreamy_portfolio_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[details_content_enable]', array(
	'label'             => esc_html__( 'Enable About Content', 'dreamy-portfolio' ),
	'section'           => 'section_details',
	'type'              => 'checkbox',
	'active_callback' => 'dreamy_portfolio_details_active',
) );

$wp_customize->add_setting( 'theme_options[details_background_color]', array(
    'sanitize_callback' => 'sanitize_hex_color', // The hue is stored as a positive integer.
    'default'           => '#e5e5e5',
    
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[details_background_color]', array(
    'label'    => esc_html__( 'Background Color', 'dreamy-portfolio' ),
    'section'  => 'section_details',
    'active_callback' => 'dreamy_portfolio_details_active',
) ) );

// Additional Information First Page
$wp_customize->add_setting('theme_options[details_page]', 
	array(
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'dreamy_portfolio_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[details_page]', 
	array(
	'label'       => __('Select Page', 'dreamy-portfolio'),
	'section'     => 'section_details',   
	'settings'    => 'theme_options[details_page]',		
	'type'        => 'dropdown-pages',
	'active_callback' => 'dreamy_portfolio_details_active',
	)
);
// Cta Button Text
$wp_customize->add_setting('theme_options[details_button_label]', 
	array(
	'default' 			=> $default['details_button_label'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[details_button_label]', 
	array(
	'label'       => __('Button Label', 'dreamy-portfolio'),
	'section'     => 'section_details',   
	'settings'    => 'theme_options[details_button_label]',	
	'active_callback' => 'dreamy_portfolio_details_active',	
	'type'        => 'text'
	)
);
