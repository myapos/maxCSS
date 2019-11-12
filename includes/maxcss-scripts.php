<?php

if (!function_exists('maxcss_admin_scripts')) {
  // Conditionally load JS on plugin settings pages only
  function maxcss_admin_scripts( $hook ) {
    global $pagenow;

    wp_register_script(
      'maxcss-admin',
      MAX_CSS_PLUGIN_URL . 'admin/js/maxcss-admin.js',
      ['jquery'],
      time()
    );

    wp_localize_script( 'maxcss-admin', 'maxcss', [
        'hook' => $hook
    ]);


    if( 'customize.php' === $pagenow ) {
        wp_enqueue_script( 'maxcss-admin','',[],'',true );
    }

  }

  add_action( 'admin_enqueue_scripts', 'maxcss_admin_scripts' );
}

