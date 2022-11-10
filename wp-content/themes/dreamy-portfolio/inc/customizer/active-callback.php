<?php
/**
 * Active callback functions.
 *
 * @package Dreamy Portfolio
 */

function dreamy_portfolio_header_background_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_header_background_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_about_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_about_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_about_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( dreamy_portfolio_about_active( $control ) && ( 'about_custom' == $content_type ) );
} 

function dreamy_portfolio_about_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( dreamy_portfolio_about_active( $control ) && ( 'about_page' == $content_type ) );
}

function dreamy_portfolio_about_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( dreamy_portfolio_about_active( $control ) && ( 'about_post' == $content_type ) );
}

function dreamy_portfolio_about_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( dreamy_portfolio_about_active( $control ) && ( 'about_category' == $content_type ) );
}


//========================Slider Section=====================//

function dreamy_portfolio_slider_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_featured-slider_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_slider_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( dreamy_portfolio_slider_active( $control ) && ( 'sr_page' == $content_type ) );
}

function dreamy_portfolio_slider_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( dreamy_portfolio_slider_active( $control ) && ( 'sr_post' == $content_type ) );
}

function dreamy_portfolio_slider_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return  dreamy_portfolio_slider_seperator( $control ) && ( in_array( $content_type, array( 'sr_page', 'sr_post', 'sr_custom' ) ) ) ;
}

function dreamy_portfolio_slider_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( dreamy_portfolio_slider_active( $control ) && ( 'sr_custom' == $content_type ) );
}

function dreamy_portfolio_slider_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( dreamy_portfolio_slider_active( $control ) && ( 'sr_category' == $content_type ) );
}



//========================Services Section=====================//

function dreamy_portfolio_services_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_services_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function dreamy_portfolio_services_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[services_content_type]' )->value();
    return ( dreamy_portfolio_services_active( $control ) && ( 'services_page' == $content_type ) );
}

function dreamy_portfolio_services_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[services_content_type]' )->value();
    return ( dreamy_portfolio_services_active( $control ) && ( 'services_post' == $content_type ) );
}

function dreamy_portfolio_services_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[services_content_type]' )->value();
    return ( dreamy_portfolio_services_active( $control ) && ( 'services_category' == $content_type ) );
}
//===================End Services Section==============//


//========================Information Section=====================//

function dreamy_portfolio_information_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_information_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_information_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( dreamy_portfolio_information_active( $control ) && ( 'information_custom' == $content_type ) );
} 

function dreamy_portfolio_information_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( dreamy_portfolio_information_active( $control ) && ( 'information_page' == $content_type ) );
}

function dreamy_portfolio_information_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( dreamy_portfolio_information_active( $control ) && ( 'information_post' == $content_type ) );
}


//========================detail Section=====================//

function dreamy_portfolio_details_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_details_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_details_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[details_content_type]' )->value();
    return ( dreamy_portfolio_details_active( $control ) && ( 'details_custom' == $content_type ) );
} 

function dreamy_portfolio_details_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[details_content_type]' )->value();
    return ( dreamy_portfolio_details_active( $control ) && ( 'details_page' == $content_type ) );
}

function dreamy_portfolio_details_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[details_content_type]' )->value();
    return ( dreamy_portfolio_details_active( $control ) && ( 'details_post' == $content_type ) );
}


//========================Project Section=====================//

function dreamy_portfolio_project_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_project_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_project_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( dreamy_portfolio_project_active( $control ) && ( 'project_custom' == $content_type ) );
} 

function dreamy_portfolio_project_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( dreamy_portfolio_project_active( $control ) && ( 'project_page' == $content_type ) );
}

function dreamy_portfolio_project_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( dreamy_portfolio_project_active( $control ) && ( 'project_post' == $content_type ) );
}

function dreamy_portfolio_project_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( dreamy_portfolio_project_active( $control ) && ( 'project_category' == $content_type ) );
}


//========================Cta Section=====================//

function dreamy_portfolio_cta_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_cta_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_cta_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( dreamy_portfolio_cta_active( $control ) && ( 'cta_custom' == $content_type ) );
} 

function dreamy_portfolio_cta_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( dreamy_portfolio_cta_active( $control ) && ( 'cta_page' == $content_type ) );
}

function dreamy_portfolio_cta_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( dreamy_portfolio_cta_active( $control ) && ( 'cta_post' == $content_type ) );
}


//========================Team Section=====================//

function dreamy_portfolio_team_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_team_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_team_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( dreamy_portfolio_team_active( $control ) && ( 'team_custom' == $content_type ) );
} 

function dreamy_portfolio_team_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( dreamy_portfolio_team_active( $control ) && ( 'team_page' == $content_type ) );
}

function dreamy_portfolio_team_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( dreamy_portfolio_team_active( $control ) && ( 'team_post' == $content_type ) );
}

function dreamy_portfolio_team_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( dreamy_portfolio_team_active( $control ) && ( 'team_category' == $content_type ) );
}

//========================Team Section=====================//

function dreamy_portfolio_features_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_features_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_features_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( dreamy_portfolio_features_active( $control ) && ( 'features_custom' == $content_type ) );
} 

function dreamy_portfolio_features_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( dreamy_portfolio_features_active( $control ) && ( 'features_page' == $content_type ) );
}

function dreamy_portfolio_features_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( dreamy_portfolio_features_active( $control ) && ( 'features_post' == $content_type ) );
}

function dreamy_portfolio_features_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( dreamy_portfolio_features_active( $control ) && ( 'features_category' == $content_type ) );
}

//========================Conatct Section=====================//

function dreamy_portfolio_contact_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_contact_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

//========================Testimonial Section=====================//

function dreamy_portfolio_testimonial_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_testimonial_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_testimonial_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( dreamy_portfolio_testimonial_active( $control ) && ( 'testimonial_custom' == $content_type ) );
} 

function dreamy_portfolio_testimonial_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( dreamy_portfolio_testimonial_active( $control ) && ( 'testimonial_page' == $content_type ) );
}

function dreamy_portfolio_testimonial_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( dreamy_portfolio_testimonial_active( $control ) && ( 'testimonial_post' == $content_type ) );
}

function dreamy_portfolio_testimonial_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( dreamy_portfolio_testimonial_active( $control ) && ( 'testimonial_category' == $content_type ) );
}

//========================Counter Section=====================//
function dreamy_portfolio_counter_section( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_counter_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

//========================Client Section=====================//

function dreamy_portfolio_client_section( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_client_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

//========================Porfolio Section=====================//

function dreamy_portfolio_portfolio_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_portfolio_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}




//========================Pricing Section=====================//

function dreamy_portfolio_pricing_section( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_pricing_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}




function dreamy_portfolio_blog_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_blog_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_blog_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( dreamy_portfolio_blog_active( $control ) && ( 'blog_page' == $content_type ) );
}

function dreamy_portfolio_blog_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( dreamy_portfolio_blog_active( $control ) && ( 'blog_post' == $content_type ) );
}

function dreamy_portfolio_blog_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( dreamy_portfolio_blog_active( $control ) && ( 'blog_category' == $content_type ) );
}

function dreamy_portfolio_message_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_message_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_message_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[message_content_type]' )->value();
    return ( dreamy_portfolio_message_active( $control ) && ( 'message_custom' == $content_type ) );
} 

function dreamy_portfolio_message_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[message_content_type]' )->value();
    return ( dreamy_portfolio_message_active( $control ) && ( 'message_page' == $content_type ) );
}

function dreamy_portfolio_message_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[message_content_type]' )->value();
    return ( dreamy_portfolio_message_active( $control ) && ( 'message_post' == $content_type ) );
}
function dreamy_portfolio_video_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_video_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_trending_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_trending_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_trending_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( dreamy_portfolio_trending_active( $control ) && ( 'trending_page' == $content_type ) );
}

function dreamy_portfolio_trending_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( dreamy_portfolio_trending_active( $control ) && ( 'trending_post' == $content_type ) );
}

function dreamy_portfolio_trending_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( dreamy_portfolio_trending_active( $control ) && ( 'trending_category' == $content_type ) );
}

function dreamy_portfolio_sensational_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_sensational_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_sensational_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sensational_content_type]' )->value();
    return ( dreamy_portfolio_sensational_active( $control ) && ( 'sensational_page' == $content_type ) );
}

function dreamy_portfolio_sensational_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sensational_content_type]' )->value();
    return ( dreamy_portfolio_sensational_active( $control ) && ( 'sensational_post' == $content_type ) );
}

function dreamy_portfolio_sensational_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sensational_content_type]' )->value();
    return ( dreamy_portfolio_sensational_active( $control ) && ( 'sensational_category' == $content_type ) );
}

function dreamy_portfolio_mustread_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_mustread_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_mustread_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[mustread_content_type]' )->value();
    return ( dreamy_portfolio_mustread_active( $control ) && ( 'mustread_page' == $content_type ) );
}

function dreamy_portfolio_mustread_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[mustread_content_type]' )->value();
    return ( dreamy_portfolio_mustread_active( $control ) && ( 'mustread_post' == $content_type ) );
}

function dreamy_portfolio_mustread_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[mustread_content_type]' )->value();
    return ( dreamy_portfolio_mustread_active( $control ) && ( 'mustread_category' == $content_type ) );
}

function dreamy_portfolio_tips_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_tips_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_tips_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[tips_content_type]' )->value();
    return ( dreamy_portfolio_tips_active( $control ) && ( 'tips_page' == $content_type ) );
}

function dreamy_portfolio_tips_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[tips_content_type]' )->value();
    return ( dreamy_portfolio_tips_active( $control ) && ( 'tips_post' == $content_type ) );
}

function dreamy_portfolio_tips_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[tips_content_type]' )->value();
    return ( dreamy_portfolio_tips_active( $control ) && ( 'tips_category' == $content_type ) );
}

function dreamy_portfolio_featured_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_featured_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function dreamy_portfolio_featured_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_content_type]' )->value();
    return ( dreamy_portfolio_featured_active( $control ) && ( 'featured_page' == $content_type ) );
}

function dreamy_portfolio_featured_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_content_type]' )->value();
    return ( dreamy_portfolio_featured_active( $control ) && ( 'featured_post' == $content_type ) );
}

function dreamy_portfolio_featured_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_content_type]' )->value();
    return ( dreamy_portfolio_featured_active( $control ) && ( 'featured_category' == $content_type ) );
}



/**
 * Active Callback for top bar section
 */
function dreamy_portfolio_contact_info_ac( $control ) {

    $show_contact_info = $control->manager->get_setting( 'theme_options[show_header_contact_info]')->value();
    $control_id        = $control->id;
         
    if ( $control_id == 'theme_options[header_location]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_email]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_phone]' && $show_contact_info ) return true;

    return false;
}

function dreamy_portfolio_social_links_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[show_header_social_links]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

