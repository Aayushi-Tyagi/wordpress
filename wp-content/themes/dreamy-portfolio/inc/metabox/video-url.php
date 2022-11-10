<?php
/**
 * Subtitle metabox file.
 *
 * @package BlogMelody
 * @since Dreamy Portfolio 1.0
 */

if ( ! function_exists( 'dreamy_portfolio_video_url_callback' ) ) :
    /** 
     * Outputs the content of the Video Url
     */
    function dreamy_portfolio_video_url_callback( $post ) {
        wp_nonce_field( basename( __FILE__ ), 'dreamy_portfolio_nonce' );
        $video_url = get_post_meta( $post->ID, 'dreamy-portfolio-video-url', true );
        ?>
        <p>
         <label for="dreamy-portfolio-video-url" class="dreamy-portfolio-row-title"><?php esc_html_e( 'Video Url', 'dreamy-portfolio' )?></label>
         <input class="widefat" type="url" name="dreamy-portfolio-video-url" id="dreamy-portfolio-video-url" value="<?php echo esc_url( $video_url ); ?>"/>     
        </p>

        <?php
    }
endif;

if ( ! function_exists( 'dreamy_portfolio_video_url_save' ) ) :
    /**
     * Saves the Video Url input
     */
    function dreamy_portfolio_video_url_save( $post_id ) {
        // Checks save status
        $is_autosave = wp_is_post_autosave( $post_id );
        $is_revision = wp_is_post_revision( $post_id );
        $is_valid_nonce = ( isset( $_POST[ 'dreamy_portfolio_nonce' ] ) && wp_verify_nonce( sanitize_key( $_POST[ 'dreamy_portfolio_nonce' ] ), basename( __FILE__ ) ) ) ? 'true' : 'false';

        // Exits script depending on save status
        if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
            return;
        }

        // Checks for input and sanitizes/saves if needed
        if( isset( $_POST[ 'dreamy-portfolio-video-url' ] ) ) {
            update_post_meta( $post_id, 'dreamy-portfolio-video-url', sanitize_text_field( wp_unslash( $_POST[ 'dreamy-portfolio-video-url' ] ) ) );
        }

    }
endif;
add_action( 'save_post', 'dreamy_portfolio_video_url_save' );

