<?php
if (!function_exists('maxcss_admin_styles')) {
  // Conditionally load CSS on plugin settings pages only
  function maxcss_admin_styles( $hook ) {
    global $pagenow;

    $path = MAX_CSS_PLUGIN_PATH . 'dist/';

    wp_register_style(
      'maxcss-admin',
      MAX_CSS_PLUGIN_URL . 'admin/css/maxcss-admin-style.css',
      [],
      time()
    );

    if( 'customize.php' === $pagenow ) {
        wp_enqueue_style( 'maxcss-admin' );
    }
  }

  add_action( 'admin_enqueue_scripts', 'maxcss_admin_styles' );
}

