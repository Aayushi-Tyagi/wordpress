<?php 
/**
 * List of posts for post choices.
 * @return Array Array of post ids and name.
 */
function dreamy_portfolio_post_choices() {
    $posts = get_posts( array( 'numberposts' => -1 ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'dreamy-portfolio' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    return  $choices;
}

if ( ! function_exists( 'dreamy_portfolio_switch_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function dreamy_portfolio_switch_options() {
        $arr = array(
            'on'        => esc_html__( 'Enable', 'dreamy-portfolio' ),
            'off'       => esc_html__( 'Disable', 'dreamy-portfolio' )
        );
        return apply_filters( 'dreamy_portfolio_switch_options', $arr );
    }
endif;

/**
 * List of category for category choices.
 * @return Array Array of post ids and name.
 */
function dreamy_portfolio_category_choices() {
    $tax_args = array(
        'hierarchical' => 0,
        'taxonomy'     => 'category',
    );
    $taxonomies = get_categories( $tax_args );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'dreamy-portfolio' );
    foreach ( $taxonomies as $tax ) {
        $choices[ $tax->term_id ] = $tax->name;
    }
    return  $choices;
}


 /**
 * Get an array of google fonts.
 * 
 */
function dreamy_portfolio_font_choices() {
    $font_family_arr = array();
    $font_family_arr[''] = esc_html__( '--Default--', 'dreamy-portfolio' );

    // Make the request
    $request = wp_remote_get( get_theme_file_uri( 'assets/fonts/webfonts.json' ) );

    if( is_wp_error( $request ) ) {
        return false; // Bail early
    }
    // Retrieve the data
    $body = wp_remote_retrieve_body( $request );
    $data = json_decode( $body );
    if ( ! empty( $data ) ) {
        foreach ( $data->items as $items => $fonts ) {
            $family_str_arr = explode( ' ', $fonts->family );
            $family_value = implode( '-', array_map( 'strtolower', $family_str_arr ) );
            $font_family_arr[ $family_value ] = $fonts->family;
        }
    }

    return apply_filters( 'dreamy_portfolio_font_choices', $font_family_arr );
}

if ( ! function_exists( 'dreamy_portfolio_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function dreamy_portfolio_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'dreamy-portfolio' ),
            'header-font-1'   => esc_html__( 'Raleway', 'dreamy-portfolio' ),
            'header-font-2'   => esc_html__( 'Poppins', 'dreamy-portfolio' ),
            'header-font-3'   => esc_html__( 'Montserrat', 'dreamy-portfolio' ),
            'header-font-4'   => esc_html__( 'Open Sans', 'dreamy-portfolio' ),
            'header-font-5'   => esc_html__( 'Lato', 'dreamy-portfolio' ),
            'header-font-6'   => esc_html__( 'Ubuntu', 'dreamy-portfolio' ),
            'header-font-7'   => esc_html__( 'Playfair Display', 'dreamy-portfolio' ),
            'header-font-8'   => esc_html__( 'Lora', 'dreamy-portfolio' ),
            'header-font-9'   => esc_html__( 'Titillium Web', 'dreamy-portfolio' ),
            'header-font-10'   => esc_html__( 'Muli', 'dreamy-portfolio' ),
            'header-font-11'   => esc_html__( 'Oxygen', 'dreamy-portfolio' ),
            'header-font-12'   => esc_html__( 'Nunito Sans', 'dreamy-portfolio' ),
            'header-font-13'   => esc_html__( 'Maven Pro', 'dreamy-portfolio' ),
            'header-font-14'   => esc_html__( 'Cairo', 'dreamy-portfolio' ),
            'header-font-15'   => esc_html__( 'Philosopher', 'dreamy-portfolio' ),
            'header-font-16'   => esc_html__( 'Quicksand', 'dreamy-portfolio' ),
            'header-font-17'   => esc_html__( 'Henny Penny', 'dreamy-portfolio' ),
            'header-font-18'   => esc_html__( 'Fredericka', 'dreamy-portfolio' ),
            'header-font-19'   => esc_html__( 'Marck Script', 'dreamy-portfolio' ),
            'header-font-20'   => esc_html__( 'Kaushan Script', 'dreamy-portfolio' ),
        );

        $output = apply_filters( 'dreamy_portfolio_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;


if ( ! function_exists( 'dreamy_portfolio_body_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function dreamy_portfolio_body_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'dreamy-portfolio' ),
            'body-font-1'     => esc_html__( 'Raleway', 'dreamy-portfolio' ),
            'body-font-2'     => esc_html__( 'Poppins', 'dreamy-portfolio' ),
            'body-font-3'     => esc_html__( 'Roboto', 'dreamy-portfolio' ),
            'body-font-4'     => esc_html__( 'Open Sans', 'dreamy-portfolio' ),
            'body-font-5'     => esc_html__( 'Lato', 'dreamy-portfolio' ),
            'body-font-6'   => esc_html__( 'Ubuntu', 'dreamy-portfolio' ),
            'body-font-7'   => esc_html__( 'Playfair Display', 'dreamy-portfolio' ),
            'body-font-8'   => esc_html__( 'Lora', 'dreamy-portfolio' ),
            'body-font-9'   => esc_html__( 'Titillium Web', 'dreamy-portfolio' ),
            'body-font-10'   => esc_html__( 'Muli', 'dreamy-portfolio' ),
            'body-font-11'   => esc_html__( 'Oxygen', 'dreamy-portfolio' ),
            'body-font-12'   => esc_html__( 'Nunito Sans', 'dreamy-portfolio' ),
            'body-font-13'   => esc_html__( 'Maven Pro', 'dreamy-portfolio' ),
            'body-font-14'   => esc_html__( 'Cairo', 'dreamy-portfolio' ),
            'body-font-15'   => esc_html__( 'Philosopher', 'dreamy-portfolio' ),
        );

        $output = apply_filters( 'dreamy_portfolio_body_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;

 ?>