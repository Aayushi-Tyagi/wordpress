<?php
/**
 * Services options.
 *
 * @package Fotoografia Pro
 */

$default = dreamy_portfolio_get_default_theme_options();

// Services Section
$wp_customize->add_section( 'section_home_services',
	array(
		'title'      => __( 'Services Section', 'dreamy-portfolio' ),
		'priority'   => 20,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_services_section]',
	array(
		'default'           => $default['disable_services_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'dreamy_portfolio_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Dreamy_Portfolio_Switch_Control( $wp_customize, 'theme_options[disable_services_section]',
    array(
		'label' 			=> __('Enable/Disable Service Section', 'dreamy-portfolio'),
		'section'    		=> 'section_home_services',
		 'settings'  		=> 'theme_options[disable_services_section]',
		'on_off_label' 		=> dreamy_portfolio_switch_options(),
    )
) );


// Add autoplay enable setting and control.
$wp_customize->add_setting( 'theme_options[disable_services_background]', array(
	'default'           => $default['disable_services_background'],
	'sanitize_callback' => 'dreamy_portfolio_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[disable_services_background]', array(
	'label'             => esc_html__( 'Enable Services Image', 'dreamy-portfolio' ),
	'description' => __('Enable for Image in Left Side/ Disable for Background', 'dreamy-portfolio'),
	'section'           => 'section_home_services',
	'type'              => 'checkbox',
	'active_callback' => 'dreamy_portfolio_services_active',
) );

// services title setting and control
$wp_customize->add_setting( 'theme_options[services_background_image]', array(
	'type'              => 'theme_mod',
	'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_options[services_background_image]', array(
	 esc_html__( 'Select Background Image', 'dreamy-portfolio' ),
	'section'        	=> 'section_home_services',
	'settings'    		=> 'theme_options[services_background_image]',	
	'active_callback' 	=> 'dreamy_portfolio_services_active',
) ) );

//Services Section title
$wp_customize->add_setting('theme_options[services_title]', 
	array(
	'default'           => $default['services_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[services_title]', 
	array(
	'label'       => __('Section Title', 'dreamy-portfolio'),
	'section'     => 'section_home_services',   
	'settings'    => 'theme_options[services_title]',
	'active_callback' => 'dreamy_portfolio_services_active',		
	'type'        => 'text'
	)
);

//Contact Section title
$wp_customize->add_setting('theme_options[services_subtitle]', 
	array(
	'default'           => $default['services_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[services_subtitle]', 
	array(
	'label'       => __('Section Title', 'dreamy-portfolio'),
	'section'     => 'section_home_services',   
	'settings'    => 'theme_options[services_subtitle]',
	'active_callback' => 'dreamy_portfolio_services_active',		
	'type'        => 'text'
	)
);

// Add autoplay enable setting and control.
$wp_customize->add_setting( 'theme_options[disable_services_icon]', array(
	'default'           => $default['disable_services_icon'],
	'sanitize_callback' => 'dreamy_portfolio_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[disable_services_icon]', array(
	'label' 			=> __('Enable/Disable Service icons', 'dreamy-portfolio'),
	'description' => __('If Services icons is disable then features image is enable', 'dreamy-portfolio'),
	'section'    		=> 'section_home_services',
	'settings'  		=> 'theme_options[disable_services_icon]',
	'type'              => 'checkbox',
	'active_callback' => 'dreamy_portfolio_services_active',
) );

// Add autoplay enable setting and control.
$wp_customize->add_setting( 'theme_options[services_content_enable]', array(
	'default'           => $default['services_content_enable'],
	'sanitize_callback' => 'dreamy_portfolio_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[services_content_enable]', array(
	'label'             => esc_html__( 'Enable Services Content', 'dreamy-portfolio' ),
	'section'           => 'section_home_services',
	'type'              => 'checkbox',
	'active_callback' => 'dreamy_portfolio_services_active',
) );
$services_count='';
$disable_services_background     =dreamy_portfolio_get_option( 'disable_services_background' );
if ($disable_services_background==false) {
	$services_count=6;
} else{
	$services_count=4;
}

for( $i=1; $i<=$services_count; $i++ ){

		//Services Section icon
	$wp_customize->add_setting('theme_options[services_icon_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control('theme_options[services_icon_'.$i.']', 
		array(
		'label'       => sprintf( __('Icon #%1$s', 'dreamy-portfolio'), $i),
		'description' => sprintf( __('Please input icon as eg: fa-archive. Find Font-awesome icons %1$shere%2$s', 'dreamy-portfolio'), '<a href="' . esc_url( 'https://fontawesome.com/v4/icons/' ) . '" target="_blank">', '</a>' ),
		'section'     => 'section_home_services',   
		'settings'    => 'theme_options[services_icon_'.$i.']',
		'active_callback' => 'dreamy_portfolio_services_active',		
		'type'        => 'text'
		)
	);

	// Additional Information First Page
	$wp_customize->add_setting('theme_options[services_page_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'dreamy_portfolio_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[services_page_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Page #%1$s', 'dreamy-portfolio'), $i),
		'section'     => 'section_home_services',   
		'settings'    => 'theme_options[services_page_'.$i.']',		
		'type'        => 'dropdown-pages',
		'active_callback' => 'dreamy_portfolio_services_active',
		)
	);
}
