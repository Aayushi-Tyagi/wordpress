<?php
/**
 * BlogMelody: Color Patterns
 *
 * @package WordPress
 * @subpackage BlogMelody
 * @since 1.0
 */

/**
 * Generate the CSS for the current custom color scheme.
 */
function dreamy_portfolio_custom_colors_css() {

	$color_value = dreamy_portfolio_get_option('colorscheme_hue');
	$footer_wgt_bg_color = dreamy_portfolio_get_option('footer_widget_background_color');
	$footer_wgt_font_color = dreamy_portfolio_get_option('footer_widget_font_color');
	$footer_cr_bg_color = dreamy_portfolio_get_option('footer_copyright_background_color');
	$footer_cr_font_color = dreamy_portfolio_get_option('footer_copyright_font_color');
	$menu_bg_color = dreamy_portfolio_get_option('menu_background_color');
	$menu_font_color = dreamy_portfolio_get_option('menu_font_color');
	$project_background_color = dreamy_portfolio_get_option('project_background_color');
	$blog_background_color = dreamy_portfolio_get_option('blog_background_color');
	$counter_background_color = dreamy_portfolio_get_option('counter_background_color');
	$testimonial_background_color = dreamy_portfolio_get_option('testimonial_background_color');
	$slider_background_color = dreamy_portfolio_get_option( 'slider_background_color');

	$header_text_decoration = dreamy_portfolio_get_option('header_text_decoration_options');
	$header_text_transform = dreamy_portfolio_get_option('header_text_transform_options');
	$header_font_style = dreamy_portfolio_get_option('header_font_style_options');
	$header_padding = dreamy_portfolio_get_option('header_top_buttom_padding');
	
	$css = '
	#project {
	    background-color: ' . esc_attr($project_background_color) . ';
	}
	#testimonial{
	    background-color: ' . esc_attr($testimonial_background_color) . ';
	}
	#blog{
	    background-color: ' . esc_attr($blog_background_color) . ';
	}
	#counter{
	    background-color: ' . esc_attr($counter_background_color) . ';
	}
	.half-image-slider #featured-slider {
	    background-color: ' . esc_attr($slider_background_color) . ';
	}';

	/**
	 * Filters Dreamy Portfolio custom colors CSS.
	 *
	 * @since Dreamy Portfolio 1.0.0
	 *
	 * @param string $css        Base theme colors CSS.
	 */
	return apply_filters( 'dreamy_portfolio_custom_colors_css', $css );
}
