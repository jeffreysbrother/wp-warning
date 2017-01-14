<?php

/*
 *	Plugin Name: WP Warning
 *	Plugin URI: http://wptreehouse.com/wptreehouse-badges-plugin/
 *	Description: Discourages idiot people from making accidental changes on the wrong environment.
 *	Version: 0.1
 *	Author: James Cool
 *	Author URI: http://jeffreysbrother.github.io/
 *	License: GPL2
 *
*/

/* Add a link to our plugin in the admin menu
 * under 'Settings > WP Warning'
 *
*/

function wp_warning_menu() {
  add_options_page(
    'The Official WP Warning Plugin',
    'WP Warning',
    'manage_options',
    'wp-warning',
    'wp_warning_options_page'
  );
}
add_action( 'admin_menu', 'wp_warning_menu' );


function wp_warning_options_page() {
  if ( !current_user_can( 'manage_options' ) ) {
    wp_die( "Sorry, bro. You can't do that." );
  }

  require( 'inc/options-page-wrapper.php' );
}
