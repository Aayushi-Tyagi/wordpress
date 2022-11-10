<?php
/**
 * Dreamy Portfolio metabox file.
 *
 * This is the template that includes all the other files for metaboxes of Dreamy Portfolio theme
 *
 * @package Dreamy Portfolio
 * @since Dreamy Portfolio 0.1
 */

// Include Post subtitle meta
require get_template_directory() . '/inc/metabox/video-url.php'; 




if ( ! function_exists( 'dreamy_portfolio_custom_meta' ) ) : 
    /**
     * Adds meta box to the post editing screen
     */
    function dreamy_portfolio_custom_meta() {
        $post_type = array( 'post', 'page' );

        // POST Subtitle 
        add_meta_box( 'dreamy_portfolio_video_url', esc_html__( 'Video Links', 'dreamy-portfolio' ), 'dreamy_portfolio_video_url_callback', $post_type );
               
    }
endif;
add_action( 'add_meta_boxes', 'dreamy_portfolio_custom_meta' );


