<?php
/**
 * Theme functions related to structure.
 *
 * This file contains structural hook functions.
 *
 * @package Dreamy Portfolio
 */

if ( ! function_exists( 'dreamy_portfolio_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since 1.0.0
	 */
function dreamy_portfolio_doctype() {
	?><!DOCTYPE html> <html <?php language_attributes(); ?>><?php
}
endif;

add_action( 'dreamy_portfolio_action_doctype', 'dreamy_portfolio_doctype', 10 );


if ( ! function_exists( 'dreamy_portfolio_head' ) ) :
	/**
	 * Header Codes.
	 *
	 * @since 1.0.0
	 */
function dreamy_portfolio_head() {
	?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php
}
endif;
add_action( 'dreamy_portfolio_action_head', 'dreamy_portfolio_head', 10 );

if ( ! function_exists( 'dreamy_portfolio_page_start' ) ) :
	/**
	 * Add Skip to content.
	 *
	 * @since 1.0.0
	 */
	function dreamy_portfolio_page_start() {
	?><div id="page" class="site"><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dreamy-portfolio' ); ?></a><?php
	}
endif;

add_action( 'dreamy_portfolio_action_before', 'dreamy_portfolio_page_start', 10 );

if ( ! function_exists( 'dreamy_portfolio_header_start' ) ) :
	/**
	 * Header Start.
	 *
	 * @since 1.0.0
	 */
	function dreamy_portfolio_header_start() { ?>
		<header id="masthead" class="site-header nav-shrink" role="banner">
<?php }
endif;
add_action( 'dreamy_portfolio_action_before_header', 'dreamy_portfolio_header_start' );

if ( ! function_exists( 'dreamy_portfolio_header_end' ) ) :
	/**
	 * Header Start.
	 *
	 * @since 1.0.0
	 */
	function dreamy_portfolio_header_end() {

		?></header> <!-- header ends here --><?php
	}
endif;
add_action( 'dreamy_portfolio_action_header', 'dreamy_portfolio_header_end', 15 );

if ( ! function_exists( 'dreamy_portfolio_content_start' ) ) :
	/**
	 * Header End.
	 *
	 * @since 1.0.0
	 */
	function dreamy_portfolio_content_start() { 
	?>
	<div id="content" class="site-content">
	<?php 

	}
endif;

add_action( 'dreamy_portfolio_action_before_content', 'dreamy_portfolio_content_start', 10 );

if ( ! function_exists( 'dreamy_portfolio_footer_start' ) ) :
	/**
	 * Footer Start.
	 *
	 * @since 1.0.0
	 */
	function dreamy_portfolio_footer_start() {
		if( !(is_home() || is_front_page()) ){
			echo '</div>';
		} ?>
		</div>
		<footer id="colophon" class="site-footer" role="contentinfo"><?php
		if ( true === dreamy_portfolio_get_option('scroll_top_visible') ) : ?>
			<div class="backtotop"><i class="fa fa-long-arrow-up"></i></div>
		<?php endif;
	} 
endif;
add_action( 'dreamy_portfolio_action_before_footer', 'dreamy_portfolio_footer_start' );


if ( ! function_exists( 'dreamy_portfolio_footer_end' ) ) :
	/**
	 * Footer End.
	 *
	 * @since 1.0.0
	 */
	function dreamy_portfolio_footer_end() {?>
		</footer><?php
	}
endif;
add_action( 'dreamy_portfolio_action_after_footer', 'dreamy_portfolio_footer_end', 100 );

