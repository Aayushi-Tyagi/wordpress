<?php 
/**
 * Template part for displaying Details Section
 *
 *@package Dreamy Portfolio
 */
    $details_content_type     = dreamy_portfolio_get_option( 'details_content_type' );
    $details_button_label       = dreamy_portfolio_get_option( 'details_button_label' );
    $details_subtitle       = dreamy_portfolio_get_option( 'details_subtitle' );
    $details_button_url         = dreamy_portfolio_get_option( 'details_button_url' );
    $details_alt_button_label       = dreamy_portfolio_get_option( 'details_alt_button_label' );
    $details_alt_button_url         = dreamy_portfolio_get_option( 'details_alt_button_url' );
    $details_content   = dreamy_portfolio_get_option( 'details_content_enable' );
    $details_excerpt_enable   = dreamy_portfolio_get_option( 'details_excerpt_enable' );
    $details_content_font_size = dreamy_portfolio_get_option( 'details_content_font_size');
    $details_subtitle_font_size = dreamy_portfolio_get_option( 'details_subtitle_font_size');
    $details_section_header_font_size = dreamy_portfolio_get_option( 'details_section_header_font_size');
    $number_of_about_items  = dreamy_portfolio_get_option( 'number_of_about_items' );
    $about_details_content_enable  = dreamy_portfolio_get_option( 'about_details_content_enable' );
    $about_detail_category= dreamy_portfolio_get_option( 'about_detail_category' );

?>
    <style>
        <?php if ($details_subtitle_font_size != 0): ?>
            #details .section-subtitle{
                font-size:<?php echo esc_html($details_subtitle_font_size); ?>px;
            }
        <?php endif ?>
        <?php if ($details_section_header_font_size != 0): ?>
            #details .section-title{
                font-size:<?php echo esc_html($details_section_header_font_size); ?>px;
            }
        <?php endif ?>
        <?php if ($details_content_font_size != 0): ?>
            #details .entry-content p{
                font-size:<?php echo esc_html($details_content_font_size); ?>px;
            }
        <?php endif ?>
    </style>

        <?php 
        $details_id = dreamy_portfolio_get_option( 'details_page' );
            $args = array (
            'post_type'     => 'page',
            'posts_per_page' => 1,
            'p' => $details_id,
            
        ); 
            
        $the_query = new WP_Query( $args );

        // The Loop
        while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
        <div id="about-ball" class="moivng-ball"></div>
            <article class="has-post-thumbnail">

                <div class="featured-image" >
                    <img src="<?php the_post_thumbnail_url(); ?>">
                </div><!-- .featured-image -->
                <div class="entry-container">
                    <header class="entry-header">
                        <?php if ( ! empty( $details_subtitle ) ) : ?>
                            <h3 class="section-subtitle"><?php echo esc_html($details_subtitle); ?></h3>
                        <?php endif; ?>
                        <h2 class="section-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </header>

                    <?php if ($details_content == true): ?>
                        <div class="entry-content">
                            <?php
                                if ($details_excerpt_enable) {
                                    $excerpt = dreamy_portfolio_the_excerpt( 20 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                } else{
                                     the_content(); 
                            }?>
                        </div><!-- .entry-content -->
                    <?php endif ?>
                    <div class="read-more">
                        <?php if ( ! empty( $details_button_label ) ) : ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php echo esc_html($details_button_label); ?></a>
                        <?php endif; ?>
                    </div>
                </div><!-- .entry-container -->
                
            </article>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
