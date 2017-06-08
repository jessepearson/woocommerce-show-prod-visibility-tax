<?php
/*
Plugin Name: WooCommerce Show product_visibility Taxonomy
Plugin URI: https://github.com/jessepearson/woocommerce-show-prod-visibility-tax
Description: Makes it so that the product_visibility taxonomy can be viewed and edited in admin
Author: Automattic
Author URI: https://automattic.com/
Text Domain: woocommerce-spvt
Domain Path: /languages/
Version: 1.0.0
*/

function wcspvt_show_tax( $args ) {

	$args['public']  = true;
	$args['show_ui'] = true;

	return $args;
}
add_filter( 'woocommerce_taxonomy_args_product_visibility', 'wcspvt_show_tax' );