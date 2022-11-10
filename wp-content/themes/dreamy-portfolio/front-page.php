<?php
/**
 * The template for displaying home page.
 * @package Dreamy Portfolio
 */

if ( 'posts' == get_option( 'show_on_front' )  || 'posts' != get_option( 'show_on_front' )){ 
    get_header(); ?>
    <?php $enabled_sections = dreamy_portfolio_get_sections();
    if( is_array( $enabled_sections ) ) {
        foreach( $enabled_sections as $section ) {

            if( ( $section['id'] == 'featured-slider' ) ){ ?>
                <?php $disable_featured_slider = dreamy_portfolio_get_option( 'disable_featured-slider_section' );
                if( true == $disable_featured_slider): ?>
                    
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">
                        <?php $slider_layout = dreamy_portfolio_get_option( 'slider_layout_option'); ?>
                        <?php if ($slider_layout=='default-slider'){ ?>
                            <div class="wrapper">
                                <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                            </div>
                        <?php } else {
                                 get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); 
                        } ?>
                    </section>
            <?php endif; ?>

            <?php } elseif( $section['id'] == 'details' ) { ?>
                <?php $disable_details_section = dreamy_portfolio_get_option( 'disable_details_section' );
                if( true ==$disable_details_section): ?>
                
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section> 
            <?php endif; ?>

            <?php } elseif( $section['id'] == 'services' ) { ?>
                <?php $disable_services_section = dreamy_portfolio_get_option( 'disable_services_section' );
                 $services_background_image = dreamy_portfolio_get_option( 'services_background_image' );
                 $disable_services_background=dreamy_portfolio_get_option( 'disable_services_background' );
                if( true ==$disable_services_section): ?>
                
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" <?php if (!empty($services_background_image) && true==$disable_services_background){ ?> class=" enable-services-background" <?php } if ( false==$disable_services_background ){ ?> style="background-image: url('<?php echo esc_url( $services_background_image );?>');" <?php }?> >
                        <div class="overlay"></div>
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section> 
            <?php endif; ?>

            <?php } elseif( $section['id'] == 'project' ) { ?>
                <?php $disable_project_section = dreamy_portfolio_get_option( 'disable_project_section' );
                if( true ==$disable_project_section): ?>
                
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section">
                        
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
                    
            <?php endif; ?> 
            <?php } elseif( $section['id'] == 'cta' ) { ?>
                <?php $disable_cta_section = dreamy_portfolio_get_option( 'disable_cta_section' );
                $background_cta_section = dreamy_portfolio_get_option( 'background_cta_section' );
                if( true ==$disable_cta_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
            <?php endif; ?> 

            <?php } elseif( $section['id'] == 'testimonial' ) { ?>
                <?php $disable_testimonial_section = dreamy_portfolio_get_option( 'disable_testimonial_section' );
                if( true ==$disable_testimonial_section): ?>
                
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
                        
            <?php endif; ?> 

            <?php } elseif ( $section['id'] == 'blog' ) { ?>
                <?php $disable_blog_section = dreamy_portfolio_get_option( 'disable_blog_section' );
                if( true === $disable_blog_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class=" page-section">
                        
                        <div class="wrapper">
                        <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                    </div>
                    </section>
                <?php endif; ?>
                <?php  } elseif( $section['id'] == 'client' ) { ?>
                <?php $disable_client_section = dreamy_portfolio_get_option( 'disable_client_section' );
                
                if( true ==$disable_client_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">
                        <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                    </section>
                <?php endif; ?>

           <?php
            }
        }
    }
    $disable_homepage_content_section = dreamy_portfolio_get_option( 'disable_homepage_content_section' );
    if('posts' == get_option( 'show_on_front' )){ ?>
       <?php include( get_home_template() ); ?>
    <?php } elseif(($disable_homepage_content_section == true ) && ('posts' != get_option( 'show_on_front' ))) { ?>
        <div class="wrapper">
           <?php include( get_page_template() ); ?>
        </div>
     <?php  }
    get_footer();
} ?>