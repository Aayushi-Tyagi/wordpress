<?php
/**
 * Home Page Options.
 *
 * @package Dreamy Portfolio
 */

$default = dreamy_portfolio_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'home_page_panel',
	array(
	'title'      => __( 'Front Page Sections', 'dreamy-portfolio' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

/**
* Section Customizer Options.
*/
require get_template_directory() . '/inc/customizer/sections/slider.php';
require get_template_directory() . '/inc/customizer/sections/details.php';
require get_template_directory() . '/inc/customizer/sections/services.php';
require get_template_directory() . '/inc/customizer/sections/project.php';
require get_template_directory() . '/inc/customizer/sections/cta.php';
require get_template_directory() . '/inc/customizer/sections/blog.php';
require get_template_directory() . '/inc/customizer/sections/testimonial.php';
require get_template_directory() . '/inc/customizer/sections/latest.php';