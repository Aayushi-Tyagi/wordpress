<?php
/**
 * Home Page Options.
 *
 * @package Dreamy Portfolio
 */

$default = dreamy_portfolio_get_default_theme_options();

// Latest Blog Section
$wp_customize->add_section( 'section_home_blog',
	array(
		'title'      => __( 'Blog Section', 'dreamy-portfolio' ),
		'priority'   => 60,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);


$wp_customize->add_setting( 'theme_options[disable_blog_section]',
	array(
		'default'           => $default['disable_blog_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'dreamy_portfolio_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Dreamy_Portfolio_Switch_Control( $wp_customize, 'theme_options[disable_blog_section]',
    array(
		'label' 	=> __('Disable Blog Section', 'dreamy-portfolio'),
		'section'    			=> 'section_home_blog',
		
		'on_off_label' 		=> dreamy_portfolio_switch_options(),
    )
) );


// Blog title
$wp_customize->add_setting('theme_options[blog_title]', 
	array(
	'default'           => $default['blog_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[blog_title]', 
	array(
	'label'       => __('Section Title', 'dreamy-portfolio'),
	'section'     => 'section_home_blog',   
	'settings'    => 'theme_options[blog_title]',	
	'active_callback' => 'dreamy_portfolio_blog_active',		
	'type'        => 'text'
	)
);

// Blog title
$wp_customize->add_setting('theme_options[blog_subtitle]', 
	array(
	'default'           => $default['blog_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[blog_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'dreamy-portfolio'),
	'section'     => 'section_home_blog',   
	'settings'    => 'theme_options[blog_subtitle]',	
	'active_callback' => 'dreamy_portfolio_blog_active',		
	'type'        => 'text'
	)
);
$wp_customize->add_setting( 'theme_options[blog_background_color]', array(
    'sanitize_callback' => 'sanitize_hex_color', // The hue is stored as a positive integer.
    'default'           => '#e5e5e5',
    
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[blog_background_color]', array(
    'label'    => esc_html__( 'Background Color', 'dreamy-portfolio' ),
    'section'  => 'section_home_blog',
    'active_callback' => 'dreamy_portfolio_blog_active',
) ) );

// Add autoplay enable setting and control.
$wp_customize->add_setting( 'theme_options[blog_content_enable]', array(
	'default'           => $default['blog_content_enable'],
	'sanitize_callback' => 'dreamy_portfolio_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[blog_content_enable]', array(
	'label'             => esc_html__( 'Enable Blog Content', 'dreamy-portfolio' ),
	'section'           => 'section_home_blog',
	'type'              => 'checkbox',
	'active_callback' => 'dreamy_portfolio_blog_active',
) );
// Setting  Blog Category.
$wp_customize->add_setting( 'theme_options[blog_category]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new Dreamy_Portfolio_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[blog_category]',
		array(
		'label'    => __( 'Select Category', 'dreamy-portfolio' ),
		'section'  => 'section_home_blog',
		'settings' => 'theme_options[blog_category]',	
		'active_callback' => 'dreamy_portfolio_blog_active',		
		'priority' => 100,
		)
	)
);

