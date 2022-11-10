<?php
/**
 * Default theme options.
 *
 * @package Dreamy Portfolio
 */

if ( ! function_exists( 'dreamy_portfolio_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function dreamy_portfolio_get_default_theme_options() {

	$theme_data = wp_get_theme();
	$defaults = array();

	$defaults['show_header_contact_info'] 	= true;
	$defaults['disable_homepage_content_section'] 			= true;
    $defaults['header_email']             	= __( 'info@sensationaltheme.com','dreamy-portfolio' );
    $defaults['header_phone' ]            	= __( '+1-541-754-3010','dreamy-portfolio' );
    $defaults['header_location' ]           = __( 'London, UK','dreamy-portfolio' );
    $defaults['show_header_social_links'] 	= true;
    $defaults['header_social_links']		= array();
    $defaults['disable_header_background_section'] = false;
    $defaults['show_header_search'] 	= true;


    $defaults['header_text_transform_options'] 	= 'none';
    $defaults['header_text_decoration_options'] 	= 'none';
    $defaults['header_font_style_options'] 	= 'none';
    $defaults['header_text_design'] 	= false;

	// Featured Slider Section
	$defaults['disable_featured-slider_section']	= false;
	$defaults['number_of_sr_items']			= 4;
	$defaults['number_of_sr_column']		= 1;
	$defaults['slider_layout_option']			= 'halfwidth-slider';
	$defaults['slider_content_position_option']			= 'left-position';
	$defaults['sr_content_type']			= 'sr_page';
	$defaults['slider_speed']				= 800;
	$defaults['disable_white_overlay']		= false;
	$defaults['slider_arrow_enable']		= true;
	$defaults['slider_fade_enable']		 	= true;
	$defaults['slider_autoplay_enable']		= true;
	$defaults['slider_infinite_enable']		= true;
	$defaults['slider_title_enable']		= true;
	$defaults['slider_category_enable']		= true;
	$defaults['slider_content_enable']		= true;
	$defaults['slider_posted_on_enable']		= false;
	$defaults['disable_blog_banner_section']		= false;
	$defaults['slider_social_title_text']	   		= esc_html__( 'Follow Me:', 'dreamy-portfolio' );

	
	//Details Section	
	$defaults['disable_details_section']	   	= false;
	$defaults['background_details_section']		= get_template_directory_uri() .'/assets/images/default-header.jpg';
	$defaults['details_custom_title']	   		= esc_html__( 'I never dreamed about success, I worked for it.', 'dreamy-portfolio' );
	$defaults['details_subtitle']	   	 		= esc_html__( 'About', 'dreamy-portfolio' );
	$defaults['details_custom_description']	   	= esc_html__( 'Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.Business consulting excepteur sint occaecat cupidatat consulting', 'dreamy-portfolio' );
	$defaults['details_button_label']	   	 	= esc_html__( 'Know More', 'dreamy-portfolio' );
	$defaults['details_button_url']	   	 		= '#';
	$defaults['details_content_type']			= 'details_post';
	$defaults['details_content_enable']			= true;
	$defaults['about_details_content_enable']	= true;
	$defaults['details_excerpt_enable']			= false;
	$defaults['number_of_about_items']			= 4;
	$defaults['number_of_about_category_items']	= 4;

	// Our Service Section
	$defaults['disable_services_section']	= false;
	$defaults['services_title']	   	 		= esc_html__( 'Reasons to Choose My Services', 'dreamy-portfolio' );
	$defaults['services_subtitle']	   		= esc_html__( 'Services', 'dreamy-portfolio' );
	$defaults['number_of_services_column']	= 2;
	$defaults['number_of_services_items']	= 4;
	$defaults['services_content_type']		= 'services_page';
	$defaults['services_content_enable']	= true;
	$defaults['disable_services_icon']		= true;
	$defaults['disable_services_background']		= true;

	// Project Section
	$defaults['disable_project_section']	= false;
	$defaults['number_of_project_items']			= 5;
	$defaults['project_layout_option']			= 'default-project';
	$defaults['project_content_type']			= 'project_post';
	$defaults['project_title']	   	 		= esc_html__( 'Experience my effective portfolios', 'dreamy-portfolio' );
	$defaults['project_viewall_text']	   	 		= esc_html__( 'View All Projects', 'dreamy-portfolio' );
	$defaults['project_subtitle']	   	 	= esc_html__( 'Portfolio', 'dreamy-portfolio' );
	$defaults['project_category_enable']		= true;
	$defaults['project_posted_on_enable']		= true;
	$defaults['project_arrow_enable']		= true;
	$defaults['project_dots_enable']		= true;
	$defaults['project_content_enable']		= true;


	// Testimonial Section
	$defaults['disable_testimonial_section']	= false;
	$defaults['number_of_testimonial_items']			= 5;
	$defaults['testimonial_layout_option']			= 'default-testimonial';
	$defaults['testimonial_content_type']			= 'testimonial_post';
	$defaults['testimonial_title']	   	 		= esc_html__( 'Our clients reviews.', 'dreamy-portfolio' );
	$defaults['testimonial_viewall_text']	   	 		= esc_html__( 'View All Projects', 'dreamy-portfolio' );
	$defaults['testimonial_subtitle']	   	 	= esc_html__( 'Testimonials', 'dreamy-portfolio'  );
	$defaults['testimonial_category_enable']		= true;
	$defaults['testimonial_posted_on_enable']		= true;
	$defaults['testimonial_arrow_enable']		= true;
	$defaults['testimonial_dots_enable']		= true;
	$defaults['testimonial_content_enable']		= true;

	//Cta Section	
	$defaults['disable_cta_section']	   	= false;
	$defaults['background_cta_section']		= get_template_directory_uri() .'/assets/images/default-header.jpg';
	$defaults['cta_small_description']	   	= esc_html__( 'Need More Help?', 'dreamy-portfolio' );
	$defaults['cta_description']	   	 	= esc_html__( 'A better way to hire our best help', 'dreamy-portfolio' );
	$defaults['cta_button_label']	   	 	= esc_html__( 'Purchase Now', 'dreamy-portfolio' );
	$defaults['cta_button_url']	   	 		= '#';
	$defaults['cta_alt_button_label']	   	= esc_html__( 'Contact Us', 'dreamy-portfolio' );
	$defaults['cta_alt_button_url']	   	 	= '#';
	$defaults['cta_content_type']			= 'cta_post';
	$defaults['cta_content_enable']			= true;
	$defaults['cta_excerpt_enable']			= true;

	// Team Section
	$defaults['disable_team_section']	= true;
	$defaults['team_title']	   	 		= esc_html__( 'Our Team', 'dreamy-portfolio' );
	$defaults['team_subtitle']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'dreamy-portfolio' );
	$defaults['number_of_column']		= 4;
	$defaults['number_of_items']			= 4;
	$defaults['team_content_type']			= 'team_page';
	$defaults['team_content_enable']				= true;

	// About Section
	$defaults['disable_features_section']	= true;
	$defaults['features_title']	   	 		= esc_html__( 'Our Features', 'dreamy-portfolio' );
	$defaults['features_subtitle']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'dreamy-portfolio' );

	$defaults['number_of_features_items']	= 5;
	$defaults['features_content_type']		= 'features_page';


	// Blog Section
	$defaults['disable_blog_section']		= false;
	$defaults['blog_title']	   	 			= esc_html__( 'Latest Post', 'dreamy-portfolio' ); 
	$defaults['blog_subtitle']	   	 	= esc_html__( 'Blog', 'dreamy-portfolio'  );
	$defaults['blog_number']				= 3;
	$defaults['number_of_blog_column']		= 3;
	$defaults['blog_content_type']			= 'blog_category';
	$defaults['image_buttom']				= false;
	$defaults['blog_content_enable']				= true;
	$defaults['blog_category_enable']				= true;

	//contact Section
	$defaults['disable_contact_section']	= true;	
	$defaults['contact_title']	   	 		= esc_html__( 'Get in touch with us!', 'dreamy-portfolio' );
	$defaults['contact_subtitle']	   	 	= esc_html__( 'Contact', 'dreamy-portfolio' );
	$defaults['contact_content']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'dreamy-portfolio' );
	$defaults['contact_address_title']	   	 	= esc_html__( 'Address:', 'dreamy-portfolio' );
	$defaults['contact_phone_title']	   	 	= esc_html__( 'Contact Number:', 'dreamy-portfolio' );
	$defaults['contact_email_title']	   	 	= esc_html__( 'Email ID:', 'dreamy-portfolio' );
	$defaults['contact_address']	   	 	= esc_html__( '158th Avenue SE Lidgerwood,nd, United States', 'dreamy-portfolio' );
	$defaults['contact_phone']	   	 	= esc_html__( '+123 45678923', 'dreamy-portfolio' );
	$defaults['contact_email']	   	 	= esc_html__( 'example@gmail.com', 'dreamy-portfolio' );

	//Counter Section	
	$defaults['disable_counter_section']	= true;
	$defaults['number_of_counter_items']	= 4;
	$defaults['counter_value_1']	   	= esc_html__( '1400+', 'dreamy-portfolio' );
	$defaults['counter_value_2']	   	= esc_html__( '500+', 'dreamy-portfolio' );
	$defaults['counter_value_3']	   	= esc_html__( '600+', 'dreamy-portfolio' );
	$defaults['counter_value_4']	   	= esc_html__( '70', 'dreamy-portfolio' );
	$defaults['counter_icon_1']	   	= esc_html__( 'fa-leaf', 'dreamy-portfolio' );
	$defaults['counter_icon_2']	   	= esc_html__( 'fa-leaf', 'dreamy-portfolio' );
	$defaults['counter_icon_3']	   	= esc_html__( 'fa-leaf', 'dreamy-portfolio' );
	$defaults['counter_icon_4']	   	= esc_html__( 'fa-leaf', 'dreamy-portfolio' );
	$defaults['counter_text_1']	   	= esc_html__( 'Client', 'dreamy-portfolio' );
	$defaults['counter_text_2']	   	= esc_html__( 'Project', 'dreamy-portfolio' );
	$defaults['counter_text_3']	   	= esc_html__( 'Employee', 'dreamy-portfolio' );
	$defaults['counter_text_4']	   	= esc_html__( 'Branches', 'dreamy-portfolio' );

	//client Section	
	$defaults['client_title']	   	 		= esc_html__( 'Supported By', 'dreamy-portfolio' );
	$defaults['client_subtitle']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'dreamy-portfolio' );
	$defaults['disable_client_section']	= true;
	$defaults['number_of_client_items']	= 6;

	// Portfolio Section
	$defaults['disable_portfolio_section']	= true;
	$defaults['portfolio_title']	   	 		= esc_html__( 'Experience my effective portfolios', 'dreamy-portfolio' );
	$defaults['portfolio_subtitle']	   	 	= esc_html__( 'Portfolio', 'dreamy-portfolio' );
	$defaults['number_of_portfolio_items']			= 6;
	$defaults['number_of_category_items']			= 5;
	$defaults['portfolio_see_all_txt']	   	 		= esc_html__( 'see all', 'dreamy-portfolio' );
	$defaults['portfolio_image_enable']		= true;
	$defaults['portfolio_title_enable']		= true;
	$defaults['portfolio_content_enable']		= true;
	$defaults['portfolio_column_option']			= 'col-1';

	//Pricing Section	
	$defaults['disable_pricing_section']	   	= true;
	$defaults['pricing_title']	   				= esc_html__( 'Price', 'dreamy-portfolio' );
	$defaults['pricing_sub_title']	   	 		= esc_html__( 'Pricing', 'dreamy-portfolio' );
	$defaults['pricing_count']					= 3;



	// Author Section
	$defaults['disable_message_section']	= true;
	$defaults['message_content_type']	 	= 'message_page';
	$defaults['message_custom_title']	   	= esc_html__( 'Hello, I am Nijasi Thitak', 'dreamy-portfolio' );
	$defaults['message_custom_content']	   	= esc_html__( 'I’ve been working with a company this month doing blogger outreach for a project. Part of my job is to vet blogs and determine their audience, their traffic, and whether they’re a good fit for this particular project. Having spent several hours reviewing blogs in several markets, I’ve come to a conclusion: We all need to work on our About pages.', 'dreamy-portfolio' );
	$defaults['message_btn_text']	 	= esc_html__( 'Read More', 'dreamy-portfolio' );

	// Latest Posts Section

	$defaults['latest_posts_title']	   	 	= esc_html__( 'My Latest Blogs', 'dreamy-portfolio' );
	$defaults['latest_section_posts_title']	   	 	= esc_html__( 'I love natural beauty, and I think it’s your best look, but I think makeup as an artist is so transformative.', 'dreamy-portfolio' );
	$defaults['number_of_latest_posts_column']	= 2;
	$defaults['pagination_type']		= 'default';
	$defaults['latest_category_enable']		= true;
	$defaults['latest_author_enable']		= true;
	$defaults['latest_comment_enable']		= true;
	$defaults['latest_read_more_text_enable']		= true;
	$defaults['latest_posted_on_enable']		= true;
	$defaults['latest_video_enable']		= true;
	$defaults['blog_layout_content_type']		= 'blog-one';
	$defaults['archive_post_header_title_enable']		= true;
	$defaults['blog_post_header_title_enable']		= true;

	// About Section
	$defaults['disable_about_section']	= true;
	$defaults['number_of_about_items']			= 3;
	$defaults['about_layout_option']			= 'default-about';
	$defaults['about_content_type']			= 'about_post';
	$defaults['about_category_enable']		= true;
	$defaults['about_posted_on_enable']		= true;
	$defaults['about_arrow_enable']		= true;
	$defaults['about_dots_enable']		= true;
	$defaults['about_content_enable']		= false;

	//Must Read Section
	$defaults['disable_mustread_section']	= true;
	$defaults['mustread_title']	   	 		= esc_html__( 'Must Read Posts', 'dreamy-portfolio' );
	$defaults['number_of_mustread_items']			= 6;
	$defaults['mustread_content_type']			= 'mustread_post';
	$defaults['mustread_category_enable']		= true;
	$defaults['mustread_posted_on_enable']		= true;
	$defaults['mustread_content_enable']		= false;

	// Single Post Option
	$defaults['single_post_category_enable']		= true;
	$defaults['single_post_posted_on_enable']		= true;
	$defaults['single_post_video_enable']		= true;
	$defaults['single_post_comment_enable']		= true;
	$defaults['single_post_author_enable']		= true;
	$defaults['single_post_pagination_enable']		= true;
	$defaults['single_post_image_enable']		= true;
	$defaults['single_post_header_image_enable']		= true;
	$defaults['single_post_header_title_enable']		= true;
	$defaults['single_post_header_image_as_header_image_enable']		= true;

	// Single Post Option
	$defaults['single_page_video_enable']		= true;
	$defaults['single_page_image_enable']		= true;
	$defaults['single_page_header_image_enable']		= true;
	$defaults['single_page_header_title_enable']		= true;
	$defaults['single_page_header_image_as_header_image_enable']		= true;
	
	$defaults['theme_typography']			=  'default';
	$defaults['body_theme_typography']		=  'default';

	//General Section
	$defaults['latest_readmore_text']				= esc_html__('Read More','dreamy-portfolio');
	$defaults['excerpt_length']				= 50;
	$defaults['layout_options_blog']			= 'right-sidebar';
	$defaults['layout_options_archive']			= 'right-sidebar';
	$defaults['layout_options_page']			= 'right-sidebar';	
	$defaults['layout_options_single']			= 'right-sidebar';	

	//Footer section 
	$defaults['scroll_top_visible']		= true;		
	$defaults['copyright_text']				= esc_html__( 'Copyright &copy; All rights reserved.', 'dreamy-portfolio' );
	$defaults['powered_by_text']			= esc_html__( 'Dreamy Portfolio by Sensational Theme', 'dreamy-portfolio' );

	// Pass through filter.
	$defaults = apply_filters( 'dreamy_portfolio_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'dreamy_portfolio_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function dreamy_portfolio_get_option( $key ) {

		$default_options = dreamy_portfolio_get_default_theme_options();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;