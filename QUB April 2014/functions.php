<?php


/**
 * Remove Wrappers and DIVs
 **/
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);


/**
 * Disable Reviews
 **/
add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
function sb_woo_remove_reviews_tab($tabs) {

 unset($tabs['reviews']);

 return $tabs;
}

/**
 * Disable Related Products
 **/
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

/**
 * Enable Jetpack
 **/
add_action('init', 'cpt_sharedaddy');
function cpt_publicize() {
	add_post_type_support( 'good-vibration', 'sharedaddy' );
	add_post_type_support( 'qub-x-joyland', 'sharedaddy' );
	add_post_type_support( 'space-interrupted', 'sharedaddy' );
	add_post_type_support( 'the-inventives', 'sharedaddy' );
}

/**
 * Create a function for register_nav_menus()
 **/
function add_wp3menu_support() {

	register_nav_menus(
		array(
			'main-menu' => __('Navigation Menu'),
			)
		);

}

/**
 * Add the above function to init hook.
 **/
add_action('init', 'add_wp3menu_support');

/**
 * Add the above function to init hook.
 **/








