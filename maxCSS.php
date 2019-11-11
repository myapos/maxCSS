<?php
/**
* Plugin Name: Max CSS
* Plugin URI: https://github.com/myapos/maxCSS
* Description: Adds maximize button to extra css in customize theme section
* Version: 1.0
* Author: Apostolakis Myron
* Author URI: http://myapos.oncrete.gr/
* License: GPL v2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
**/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPPLUGIN_PATH', plugin_dir_path( __FILE__ ) );

// Enqueue Plugin CSS
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-styles.php');

// Enqueue Plugin JavaScript
include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-scripts.php');

?>
