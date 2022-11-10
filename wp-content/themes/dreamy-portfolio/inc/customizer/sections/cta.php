<?php
/**
 * Call to action options.
 *
 * @package Dreamy Portfolio
 */

$default = dreamy_portfolio_get_default_theme_options();

// Call to action section
$wp_customize->add_section( 'section_cta',
	array(
		'title'      => __( 'Call To Action Section', 'dreamy-portfolio' ),
		'priority'   => 35,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);


$wp_customize->add_setting( 'theme_options[disable_cta_section]',
	array(
		'default'           => $default['disable_cta_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'dreamy_portfolio_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Dreamy_Portfolio_Switch_Control( $wp_customize, 'theme_options[disable_cta_section]',
    array(
		'label' 			=> __('Disable Call to action section', 'dreamy-portfolio'),
		'section'    		=> 'section_cta',
		'on_off_label' 		=> dreamy_portfolio_switch_options(),
    )
) );

// Add posted on enable setting and control.
$wp_customize->add_setting( 'theme_options[cta_content_enable]', array(
	'default'           => $default['cta_content_enable'],
	'sanitize_callback' => 'dreamy_portfolio_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[cta_content_enable]', array(
	'label'             => esc_html__( 'Enable Cta Content Area', 'dreamy-portfolio' ),
	'section'           => 'section_cta',
	'type'              => 'checkbox',
	'active_callback' => 'dreamy_portfolio_cta_active',
) );

// Additional Information First Page
$wp_customize->add_setting('theme_options[cta_page]', 
	array(
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'dreamy_portfolio_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[cta_page]', 
	array(
	'label'       => __('Select Page', 'dreamy-portfolio'),
	'section'     => 'section_cta',   
	'settings'    => 'theme_options[cta_page]',		
	'type'        => 'dropdown-pages',
	'active_callback' => 'dreamy_portfolio_cta_active',
	)
);
// Cta Button Text
$wp_customize->add_setting('theme_options[cta_button_label]', 
	array(
	'default' 			=> $default['cta_button_label'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[cta_button_label]', 
	array(
	'label'       => __('Button Label', 'dreamy-portfolio'),
	'section'     => 'section_cta',   
	'settings'    => 'theme_options[cta_button_label]',	
	'active_callback' => 'dreamy_portfolio_cta_active',	
	'type'        => 'text'
	)
);

// Cta Button Text
$wp_customize->add_setting('theme_options[cta_alt_button_label]', 
	array(
	'default' 			=> $default['cta_alt_button_label'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[cta_alt_button_label]', 
	array(
	'label'       => __('Alt Button Label', 'dreamy-portfolio'),
	'section'     => 'section_cta',   
	'settings'    => 'theme_options[cta_alt_button_label]',	
	'active_callback' => 'dreamy_portfolio_cta_active',	
	'type'        => 'text'
	)
);
// Cta Button Url
$wp_customize->add_setting('theme_options[cta_alt_button_url]', 
	array(
	'default' 			=> $default['cta_alt_button_url'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'esc_url_raw'
	)
);

$wp_customize->add_control('theme_options[cta_alt_button_url]', 
	array(
	'label'       => __('Button Url', 'dreamy-portfolio'),
	'section'     => 'section_cta',   
	'settings'    => 'theme_options[cta_alt_button_url]',	
	'active_callback' => 'dreamy_portfolio_cta_active',	
	'type'        => 'url'
	)
);