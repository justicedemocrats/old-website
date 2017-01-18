<?php

/**
 * Add custom styles to the mce formats dropdown
 *
 * @url https://codex.wordpress.org/TinyMCE_Custom_Styles
 *
 */
function jdem_add_format_styles( $init_array ) {
  $style_formats = array(
    array(
      'title'    => __( 'Headline Underline', 'text-domain' ),
      'selector' => 'h1, h2, h3, h4, h5, h6',
      'classes'  => 'h--underline'
    ),
    array(
      'title'    => __( 'Medium Text', 'text-domain' ),
      'selector'   => 'p, li',
      'classes'  => 'text--medium'
    ),
    array(
      'title'    => __( 'Large Text', 'text-domain' ),
      'selector'   => 'p, li',
      'classes'  => 'text--large'
    ),
    array(
      'title'    => __( 'Button', 'text-domain' ),
      'selector'   => 'a',
      'classes'  => 'button'
    ),
    array(
      'title'    => __( 'Button Small', 'text-domain' ),
      'selector'   => 'a',
      'classes'  => 'button button--small'
    ),
  );
  $init_array['style_formats'] = json_encode( $style_formats );
  return $init_array;
}
add_filter( 'tiny_mce_before_init', 'jdem_add_format_styles' );
