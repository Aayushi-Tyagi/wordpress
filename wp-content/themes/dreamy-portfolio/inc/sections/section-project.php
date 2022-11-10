<?php
    $project_title       =dreamy_portfolio_get_option( 'project_title' );
    $project_subtitle       =dreamy_portfolio_get_option( 'project_subtitle' );
    $project_viewall_text       =dreamy_portfolio_get_option( 'project_viewall_text' );
    $project_btn_url       =dreamy_portfolio_get_option( 'project_btn_url' );
    $project_content_type     = dreamy_portfolio_get_option( 'project_content_type' );
    $enable_category     = dreamy_portfolio_get_option( 'project_category_enable' );
    $enable_content     = dreamy_portfolio_get_option( 'project_content_enable' );
    $enable_posted_on     = dreamy_portfolio_get_option( 'project_posted_on_enable' );
    $project_dots  = dreamy_portfolio_get_option( 'project_dots_enable' );
    $project_arrow  = dreamy_portfolio_get_option( 'project_arrow_enable' );
    $number_of_project_items  = dreamy_portfolio_get_option( 'number_of_project_items' );
    $project_category = dreamy_portfolio_get_option( 'project_category' );
    $project_layout = dreamy_portfolio_get_option('project_layout_option');
    $project_header_font_size =dreamy_portfolio_get_option( 'project_title_font_size');
    $project_content_font_size =dreamy_portfolio_get_option( 'project_content_font_size');
    $project_subtitle_font_size =dreamy_portfolio_get_option( 'project_subtitle_font_size');
    $project_section_header_font_size =dreamy_portfolio_get_option( 'project_section_header_font_size');

?>
    <style>
        <?php if ($project_subtitle_font_size != 0): ?>
            #project .section-subtitle{
                font-size:<?php echo esc_html($project_subtitle_font_size); ?>px;
            }
        <?php endif ?>
        <?php if ($project_section_header_font_size != 0): ?>
            #project .section-title{
                font-size:<?php echo esc_html($project_section_header_font_size); ?>px;
            }
        <?php endif ?>

        <?php if ($project_header_font_size != 0): ?>
            #project .entry-title{
                font-size:<?php echo esc_html($project_header_font_size); ?>px;
            }
        <?php endif ?>
        <?php if ($project_content_font_size != 0): ?>
            #project .entry-content p{
                font-size:<?php echo esc_html($project_content_font_size); ?>px;
            }
        <?php endif ?>
    </style>
<div class="slider-box"></div>
<div class="section-header-wrapper clear">
    <div class="section-header">
        <?php if (!empty($project_subtitle)): ?>
            <h3 class="section-subtitle"><?php echo esc_html($project_subtitle);?></h3>
        <?php endif; ?>
        <?php if( !empty($project_title)):?>
            <h2 class="section-title"><?php echo esc_html($project_title);?></h2>
        <?php endif;?>
        
    </div>
</div><!-- .section-header-wrapper -->
    <div class="project-slider modern-slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite": true, "speed": 1200, "dots": <?php if( true== $project_dots){ echo 'true'; } else{ echo 'false'; } ?>, "arrows":<?php if( true== $project_arrow ){ echo 'true'; } else{ echo 'false'; } ?>, "autoplay": true, "fade": false }'>
        <?php 
        $args = array (

            'posts_per_page' =>5,              
            'post_type' => 'post',
            'post_status' => 'publish',
            'paged' => 1,
            'ignore_sticky_posts' => true, 
            );
            if ( absint( $project_category ) > 0 ) {
                $args['cat'] = absint( $project_category );
            }
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
                $i=0;  
                while ($loop->have_posts()) : $loop->the_post(); $i++;?>  
                    <article>
                        <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full');?>');">
                            <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                        </div><!-- .featured-image -->

                        <div class="entry-container">
                            <?php if ( ($enable_category==true))  : ?>
                                <div class="entry-meta">
                                    <?php dreamy_portfolio_entry_meta(); ?>
                                </div><!-- .entry-meta -->
                            <?php endif; ?>

                            <header class="entry-header">
                                <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            </header>

                            <?php if ( ($enable_content==true)): ?>
                                <div class="entry-content">
                                    <?php 
                                        $excerpt = dreamy_portfolio_the_excerpt( 15 );
                                        echo wp_kses_post( wpautop( $excerpt ) );
                                    ?>
                                </div><!-- .entry-content -->
                            <?php endif; ?>
                        </div><!-- .entry-container -->
                    </article>         
                <?php endwhile;?>
            <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>