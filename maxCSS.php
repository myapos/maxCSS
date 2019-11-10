<?php
/**
* Plugin Name: Max CSS
* Plugin URI: http://myapos.oncrete.gr/
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: Apostolakis Myron
* Author URI: http://myapos.oncrete.gr/
**/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPPLUGIN_PATH', plugin_dir_path( __FILE__ ) );

// Enqueue Plugin CSS
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-styles.php');

// Create Plugin Admin Menus and Setting Pages
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-menus.php');

// Enqueue Plugin JavaScript
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-scripts.php');

?>
