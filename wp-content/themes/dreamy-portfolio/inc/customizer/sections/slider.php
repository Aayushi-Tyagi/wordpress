<?php
/**
 * Slider options.
 *
 * @package Dreamy Portfolio
 */

$default = dreamy_portfolio_get_default_theme_options();

// Featured Slider Section
$wp_customize->add_section( 'section_featured_slider',
	array(
		'title'      => __( 'Featured Slider Section', 'dreamy-portfolio' ),
		'priority'   => 10,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_featured-slider_section]',
	array(
		'default'           => $default['disable_featured-slider_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'dreamy_portfolio_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Dreamy_Portfolio_Switch_Control( $wp_customize, 'theme_options[disable_featured-slider_section]',
    array(
		'label' 	=> __('Disable slider Section', 'dreamy-portfolio'),
		'section'    			=> 'section_featured_slider',
		'on_off_label' 		=> dreamy_portfolio_switch_options(),
    )
) );

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[slider_layout_option]', array(
	'default'           => $default['slider_layout_option'],
	'sanitize_callback' => 'dreamy_portfolio_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[slider_layout_option]', array(
	'label'             => esc_html__( 'Choose Slider Layout', 'dreamy-portfolio' ),
	'section'           => 'section_featured_slider',
	'type'              => 'radio',
	'active_callback' => 'dreamy_portfolio_slider_active',
	'choices'				=> array( 
		'fullwidth-slider'     => esc_html__( 'Full Width Slider', 'dreamy-portfolio' ), 
		'half-image-slider'     => esc_html__( 'Half Image Slider', 'dreamy-portfolio' ),
		)
) );
$wp_customize->add_setting( 'theme_options[slider_background_color]', array(
    'sanitize_callback' => 'sanitize_hex_color', // The hue is stored as a positive integer.
    'default'           => '#efefef',
    
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[slider_background_color]', array(
    'label'    => esc_html__( 'Background Color for Half Image Slider ', 'dreamy-portfolio' ),
    'section'  => 'section_featured_slider',
    'active_callback' => 'dreamy_portfolio_slider_active',
) ) );

// Add autoplay enable setting and control.
$wp_customize->add_setting( 'theme_options[slider_infinite_enable]', array(
	'default'           => $default['slider_infinite_enable'],
	'sanitize_callback' => 'dreamy_portfolio_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[slider_infinite_enable]', array(
	'label'             => esc_html__( 'Enable Slider Slide Infinite', 'dreamy-portfolio' ),
	'section'           => 'section_featured_slider',
	'type'              => 'checkbox',
	'active_callback' => 'dreamy_portfolio_slider_active',
) );

// Add autoplay enable setting and control.
$wp_customize->add_setting( 'theme_options[slider_fade_enable]', array(
	'default'           => $default['slider_fade_enable'],
	'sanitize_callback' => 'dreamy_portfolio_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[slider_fade_enable]', array(
	'label'             => esc_html__( 'Enable Slider Fade Effect', 'dreamy-portfolio' ),
	'section'           => 'section_featured_slider',
	'type'              => 'checkbox',
	'active_callback' => 'dreamy_portfolio_slider_active',
) );

// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[slider_content_enable]', array(
	'default'           => $default['slider_content_enable'],
	'sanitize_callback' => 'dreamy_portfolio_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[slider_content_enable]', array(
	'label'             => esc_html__( 'Enable Content', 'dreamy-portfolio' ),
	'section'           => 'section_featured_slider',
	'type'              => 'checkbox',
	'active_callback' => 'dreamy_portfolio_slider_active',
) );

// Number of items
$wp_customize->add_setting('theme_options[slider_speed]', 
	array(
	'default' 			=> $default['slider_speed'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'dreamy_portfolio_sanitize_number_range'
	)
);

$wp_customize->add_control('theme_options[slider_speed]', 
	array(
	'label'       => __('Slider Speed', 'dreamy-portfolio'),
	'description' => __('Slider Speed Default speed 800', 'dreamy-portfolio'),
	'section'     => 'section_featured_slider',   
	'settings'    => 'theme_options[slider_speed]',		
	'type'        => 'number',
	'active_callback' => 'dreamy_portfolio_slider_active',
	)
);

$wp_customize->add_setting( 'theme_options[slider_dot]',
	array(

		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'dreamy_portfolio_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Dreamy_Portfolio_Switch_Control( $wp_customize, 'theme_options[slider_dot]',
    array(
		'label' 	=> __('Disable Slider Dots', 'dreamy-portfolio'),
		'section'    			=> 'section_featured_slider',
		'on_off_label' 		=> dreamy_portfolio_switch_options(),
		'active_callback' => 'dreamy_portfolio_slider_active',
    )
) );

// Number of items
$wp_customize->add_setting('theme_options[number_of_sr_column]', 
	array(
	'default' 			=> $default['number_of_sr_column'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'dreamy_portfolio_sanitize_number_range'
	)
);

$wp_customize->add_control('theme_options[number_of_sr_column]', 
	array(
	'label'       => __('Number Of Slides Column', 'dreamy-portfolio'),
	'description' => __('Save & Refresh the customizer to see its effect. Maximum is 3.', 'dreamy-portfolio'),
	'section'     => 'section_featured_slider',   
	'settings'    => 'theme_options[number_of_sr_column]',		
	'type'        => 'number',
	'active_callback' => 'dreamy_portfolio_slider_active',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 3,
			'step'	=> 1,
		),
	)
);

for( $i=1; $i<=3; $i++ ){

		// Additional Information First Page
	$wp_customize->add_setting('theme_options[slider_title_meta_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control('theme_options[slider_title_meta_'.$i.']', 
		array(
		'label'       => sprintf( __('Before Title #%1$s', 'dreamy-portfolio'), $i),
		'section'     => 'section_featured_slider',   
		'settings'    => 'theme_options[slider_title_meta_'.$i.']',		
		'type'        => 'text',
		'active_callback' => 'dreamy_portfolio_slider_active',
		)
	);

	// Additional Information First Page
	$wp_customize->add_setting('theme_options[slider_after_title_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control('theme_options[slider_after_title_'.$i.']', 
		array(
		'label'       => sprintf( __('After Title #%1$s', 'dreamy-portfolio'), $i),
		'section'     => 'section_featured_slider',   
		'settings'    => 'theme_options[slider_after_title_'.$i.']',		
		'type'        => 'text',
		'active_callback' => 'dreamy_portfolio_slider_active',
		)
	);

	// Additional Information First Page
	$wp_customize->add_setting('theme_options[slider_page_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'dreamy_portfolio_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[slider_page_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Page #%1$s', 'dreamy-portfolio'), $i),
		'section'     => 'section_featured_slider',   
		'settings'    => 'theme_options[slider_page_'.$i.']',		
		'type'        => 'dropdown-pages',
		'active_callback' => 'dreamy_portfolio_slider_active',
		)
	);
	// Cta Button Text
	$wp_customize->add_setting('theme_options[slider_custom_btn_text_' . $i . ']', 
		array(

		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control('theme_options[slider_custom_btn_text_' . $i . ']', 
		array(
		'label'       => sprintf( __('Button Label %d', 'dreamy-portfolio'),$i ),
		'section'     => 'section_featured_slider',   
		'settings'    => 'theme_options[slider_custom_btn_text_' . $i . ']',	
		'active_callback' => 'dreamy_portfolio_slider_active',	
		'type'        => 'text',
		)
	);

	// slider hr setting and control
	$wp_customize->add_setting( 'theme_options[slider_hr_'. $i .']', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Dreamy_Portfolio_Customize_Horizontal_Line( $wp_customize, 'theme_options[slider_hr_'. $i .']',
		array(
			'section'         => 'section_featured_slider',
			'active_callback' => 'dreamy_portfolio_slider_active',
			'type'			  => 'hr',
	) ) );
}
// Slider Button Text
$wp_customize->add_setting('theme_options[slider_alt_custom_btn_text]', 
	array(

	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[slider_alt_custom_btn_text]', 
	array(
	'label'       => __('Alternative Button Label', 'dreamy-portfolio'),
	'section'     => 'section_featured_slider',   
	'settings'    => 'theme_options[slider_alt_custom_btn_text]',	
	'active_callback' => 'dreamy_portfolio_slider_active',	
	'type'        => 'text',
	)
);

	// Slider Button Url
$wp_customize->add_setting('theme_options[slider_alt_custom_btn_url]', 
	array(

	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control('theme_options[slider_alt_custom_btn_url]', 
	array(
	'label'       => __('Alternative Button Url', 'dreamy-portfolio'),
	'section'     => 'section_featured_slider',   
	'settings'    => 'theme_options[slider_alt_custom_btn_url]',	
	'active_callback' => 'dreamy_portfolio_slider_active',	
	'type'        => 'url',
	)
);

// Slider Button Text
$wp_customize->add_setting('theme_options[slider_social_title_text]', 
	array(
	'default' 			=> $default['slider_social_title_text'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control('theme_options[slider_social_title_text]', 
	array(
	'label'       => __('Slider Social Title', 'dreamy-portfolio'),
	'section'     => 'section_featured_slider',   
	'settings'    => 'theme_options[slider_social_title_text]',	
	'active_callback' => 'dreamy_portfolio_slider_active',	
	'type'        => 'text',
	)
);

for( $i=1; $i<=3; $i++ ){

    // Setting social_links.
    $wp_customize->add_setting('theme_options[slider_social_link'.$i.']', array(
            'sanitize_callback' => 'esc_url_raw',
        ) );

    $wp_customize->add_control('theme_options[slider_social_link'.$i.']', array(
        'label'             => esc_html__( 'Social Links', 'dreamy-portfolio' ),
        'section'           => 'section_featured_slider',
        'active_callback'   => 'dreamy_portfolio_slider_active',
        'type'              => 'url',
    ) );
}