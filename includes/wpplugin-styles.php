<?php

// Conditionally load CSS on plugin settings pages only
function wpplugin_admin_styles( $hook ) {
  global $pagenow;

  $path = WPPLUGIN_PATH . 'dist/';

  wp_register_style(
    'wpplugin-admin',
    WPPLUGIN_URL . 'admin/css/wpplugin-admin-style.css',
    [],
    time()
  );

  // if( 'toplevel_page_wpplugin' == $hook ) {
  //   wp_enqueue_style( 'wpplugin-admin' );
  // }

  if( 'customize.php' === $pagenow ) {
       wp_enqueue_style( 'wpplugin-admin' );
  }
}

add_action( 'admin_enqueue_scripts', 'wpplugin_admin_styles' );
