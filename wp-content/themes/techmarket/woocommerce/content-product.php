<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $woocommerce_loop;

$template_path = 'templates/contents/';
$template_name = 'content-product';

if( ! empty( $woocommerce_loop['template'] ) ) {
	$template_name = $woocommerce_loop['template'];
}

$template_name = preg_replace( '/.php$/', '', $template_name );
$template_name = "{$template_name}.php";

techmarket_get_template( $template_name, array(), $template_path );