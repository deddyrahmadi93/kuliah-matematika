<?php
/**
 * Display a link back to the site.
 *
 * @uses get_bloginfo() Gets the site link
 * @return string
 */
function generic_site_link() {
   return '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '</span></a>';
}

/**
 * Display a link to WordPress.org.
 *
 * @return string
 */
function generic_wp_link() {
   return '<a href="'.esc_url( 'http://laravel.com' ).'" target="_blank" title="' . esc_attr__('Laravel', 'travelify' ) . '"><span>' . __( 'Laravel', 'travelify' ) . '</span></a>';
}

/**
 * Display a link to colorlib.com.
 *
 * @return string
 */
function generic_colorlib_link() {
   return '<a href="'.esc_url( 'http://colorlib.com/generic/' ).'" target="_blank" title="'.esc_attr__( 'Colorlib', 'travelify' ).'" ><span>'.__( 'Colorlib', 'travelify') .'</span></a>';
}

?>