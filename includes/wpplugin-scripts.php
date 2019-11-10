<?php

// Conditionally load JS on plugin settings pages only
function wpplugin_admin_scripts( $hook ) {
  global $pagenow;

  wp_register_script(
    'wpplugin-admin',
    WPPLUGIN_URL . 'admin/js/wpplugin-admin.js',
    ['jquery'],
    time()
  );

  wp_localize_script( 'wpplugin-admin', 'wpplugin', [
      'hook' => $hook
  ]);


  if( 'customize.php' === $pagenow ) {
      wp_enqueue_script( 'wpplugin-admin','',[],'',true );
  }

}

add_action( 'admin_enqueue_scripts', 'wpplugin_admin_scripts' );

