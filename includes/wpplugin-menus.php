<?php

function wpplugin_settings_pages()
{
  add_menu_page(
    __( 'Plugin Name', 'wpplugin' ),
    __( 'Plugin Menu', 'wpplugin' ),
    'manage_options',
    'wpplugin',
    'wpplugin_settings_page_markup',
    'dashicons-wordpress-alt',
    100
  );

}
add_action( 'admin_menu', 'wpplugin_settings_pages' );

function wpplugin_settings_page_markup()
{
  // Double check user capabilities
  if ( !current_user_can('manage_options') ) {
      return;
  }
  ?>
  <div id="rootAdmin"></div>

  <div class="wrap">
      <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
      <p><?php esc_html_e( 'Some content.', 'wpplugin' ); ?></p>
  </div>
  <?php
}

// Add a link to your settings page in your plugin
function wpplugin_add_settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=wpplugin">' . __( 'Settings' ) . '</a>';
    array_push( $links, $settings_link );
  	return $links;
}
$filter_name = "plugin_action_links_" . plugin_basename( __FILE__ );
add_filter( $filter_name, 'wpplugin_add_settings_link' );


// function theme_slug_filter_the_title( $title ) {
//     $custom_title = ' YOUR CONTENT GOES HERE';
//     $title .= $custom_title;
//     return $title;
// }
// add_filter( 'the_title', 'theme_slug_filter_the_title' );

function theme_slug_filter_the_content( $content ) {
    $custom_content = 'YOUR CONTENT GOES HERE<div id="rootFrontEnd"></div>';
    $custom_content .= $content;
    return $custom_content;
}
add_filter( 'the_content', 'theme_slug_filter_the_content' );