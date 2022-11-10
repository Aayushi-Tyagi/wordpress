<?php 
/**
 * Template part for displaying CTA Section
 *
 *@package Dreamy Portfolio
 */
    $cta_content_type     = dreamy_portfolio_get_option( 'cta_content_type' );
    $cta_button_label       = dreamy_portfolio_get_option( 'cta_button_label' );
    $cta_content_enable       = dreamy_portfolio_get_option( 'cta_content_enable' );
    $cta_excerpt_enable       = dreamy_portfolio_get_option( 'cta_excerpt_enable' );
    $cta_button_url         = dreamy_portfolio_get_option( 'cta_button_url' );
    $cta_alt_button_label       = dreamy_portfolio_get_option( 'cta_alt_button_label' );
    $cta_alt_button_url         = dreamy_portfolio_get_option( 'cta_alt_button_url' );
    $cta_header_font_size = dreamy_portfolio_get_option( 'cta_font_size');
    $cta_content_font_size = dreamy_portfolio_get_option( 'cta_content_font_size');

?>
<div class="slider-box"></div>
    <style>
        <?php if ($cta_header_font_size != 0): ?>
            #cta .section-title{
                font-size:<?php echo esc_html($cta_header_font_size); ?>px;
            }
        <?php endif ?>
        <?php if ($cta_content_font_size != 0): ?>
            #cta .section-subtitle{
                font-size:<?php echo esc_html($cta_content_font_size); ?>px;
            }
        <?php endif ?>
    </style>
    <?php 
    $cta_id = dreamy_portfolio_get_option( 'cta_page' );
        $args = array (
        'post_type'     => 'page',
        'posts_per_page' => 1,
        'p' => $cta_id,
        
    ); 
             
        $the_query = new WP_Query( $args );

        // The Loop
        while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>  
        <div class="cta-container">
            <div class="section-header">
                <h2 class="section-title" ><?php the_title(); ?></h2>
                <?php if (!empty($cta_content_enable)): ?>
                    <h3 class="section-cta-subtitle">
                        <?php
                        if ($cta_excerpt_enable) {
                            $excerpt = dreamy_portfolio_the_excerpt( 15 );
                            echo wp_kses_post( wpautop( $excerpt ) );
                        } else{
                             the_content(); 
                        }?>
                    </h3>
                <?php endif; ?>
            </div><!-- .section-header -->

            <?php if ( !empty($cta_button_label ) || !empty($cta_alt_button_label ) )  :?>
                <div class="read-more">
                    <?php if ( ! empty( $cta_button_label ) ) : ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php echo esc_html($cta_button_label); ?></a>
                    <?php endif; ?>
                    <?php if ( ! empty( $cta_alt_button_label ) && ! empty( $cta_alt_button_url ) ) : ?>
                        <a href="<?php echo esc_url( $cta_alt_button_url ); ?>" class=" btn-transparent"><?php echo esc_html( $cta_alt_button_label); ?></a>
                    <?php endif; ?>
                </div><!-- .read-more -->
            <?php endif;?>
            </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
