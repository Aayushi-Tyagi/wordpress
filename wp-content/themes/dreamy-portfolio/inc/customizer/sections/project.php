<?php
/**
 * Post Slider options.
 *
 * @package Dreamy Portfolio
 */

$default = dreamy_portfolio_get_default_theme_options();

// Post Slider Author Section
$wp_customize->add_section( 'section_home_project',
	array(
		'title'      => __( 'Project', 'dreamy-portfolio' ),
		'priority'   => 30,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_project_section]',
	array(
		'default'           => $default['disable_project_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'dreamy_portfolio_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Dreamy_Portfolio_Switch_Control( $wp_customize, 'theme_options[disable_project_section]',
    array(
		'label' 			=> __('Enable/Disable Project Section', 'dreamy-portfolio'),
		'section'    		=> 'section_home_project',
		 'settings'  		=> 'theme_options[disable_project_section]',
		'on_off_label' 		=> dreamy_portfolio_switch_options(),
    )
) );
// Add posted on enable setting and control.
$wp_customize->add_setting( 'theme_options[project_content_enable]', array(
	'default'           => $default['project_content_enable'],
	'sanitize_callback' => 'dreamy_portfolio_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[project_content_enable]', array(
	'label'             => esc_html__( 'Enable Content', 'dreamy-portfolio' ),
	'section'           => 'section_home_project',
	'type'              => 'checkbox',
	'active_callback' => 'dreamy_portfolio_project_active',
) );

$wp_customize->add_setting( 'theme_options[project_background_color]', array(
    'sanitize_callback' => 'sanitize_hex_color', // The hue is stored as a positive integer.
    'default'           => '#ffffff',
    
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[project_background_color]', array(
    'label'    => esc_html__( 'Background Color', 'dreamy-portfolio' ),
    'section'  => 'section_home_project',
    'active_callback' => 'dreamy_portfolio_project_active',
) ) );

//About Section title
$wp_customize->add_setting('theme_options[project_title]', 
	array(
	'default'           => $default['project_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[project_title]', 
	array(
	'label'       => __('Section Title', 'dreamy-portfolio'),
	'section'     => 'section_home_project',   
	'settings'    => 'theme_options[project_title]',
	'active_callback' => 'dreamy_portfolio_project_active',		
	'type'        => 'text'
	)
);

//About Section Subtitle
$wp_customize->add_setting('theme_options[project_subtitle]', 
	array(
	'default'           => $default['project_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[project_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'dreamy-portfolio'),
	'section'     => 'section_home_project',   
	'settings'    => 'theme_options[project_subtitle]',
	'active_callback' => 'dreamy_portfolio_project_active',		
	'type'        => 'text'
	)
);

// Setting  Team Category.
$wp_customize->add_setting( 'theme_options[project_category]',
	array(

	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new Dreamy_Portfolio_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[project_category]',
		array(
		'label'    => __( 'Select Category', 'dreamy-portfolio' ),
		'section'  => 'section_home_project',
		'settings' => 'theme_options[project_category]',	
		'active_callback' => 'dreamy_portfolio_project_active',		
		)
	)
);
