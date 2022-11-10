<?php
/**
 * Header options.
 *
 * @package Dreamy Portfolio
 */

$default = dreamy_portfolio_get_default_theme_options();

// Header Author Section
$wp_customize->add_section( 'section_home_header',
	array(
		'title'      => __( 'Header Options', 'dreamy-portfolio' ),
		'priority'   => 5,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_header_background_section]',
	array(
		'default'           => $default['disable_header_background_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'dreamy_portfolio_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Dreamy_Portfolio_Switch_Control( $wp_customize, 'theme_options[disable_header_background_section]',
    array(
		'label' 			=> __('Enable/Disable Header Background Image', 'dreamy-portfolio'),
		'section'    		=> 'section_home_header',
		 'settings'  		=> 'theme_options[disable_header_background_section]',
		'on_off_label' 		=> dreamy_portfolio_switch_options(),
    )
) );

// header title setting and control
$wp_customize->add_setting( 'theme_options[header_background_image]', array(
	'type'              => 'theme_mod',
	'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_options[header_background_image]', array(
	'label'           	=> esc_html__( 'Select Header Background', 'dreamy-portfolio' ),
	'section'        	=> 'section_home_header',
	'settings'    		=> 'theme_options[header_background_image]',	
	'active_callback' 	=> 'dreamy_portfolio_header_background_active',
) ) );

// Number of items
$wp_customize->add_setting('theme_options[header_top_buttom_padding]', 
	array(
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'dreamy_portfolio_sanitize_number_range'
	)
);

$wp_customize->add_control('theme_options[header_top_buttom_padding]', 
	array(
	'label'       => __('Top Bottom Padding', 'dreamy-portfolio'),
	'description' => __('Save & Refresh the customizer to see its effect. Maximum is 160.', 'dreamy-portfolio'),
	'section'     => 'section_home_header',   
	'settings'    => 'theme_options[header_top_buttom_padding]',		
	'type'        => 'number',
	'input_attrs' => array(
			'min'	=> 0,
			'max'	=> 160,
			'step'	=> 1,
		),
	)
);