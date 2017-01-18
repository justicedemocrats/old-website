<?php

// --------------------------------
// Register Custom Sidebars
// --------------------------------

// Duplicate this for each sidebar widget area.

// register_sidebar(array(
// 	'name'          => 'Updates',
// 	'id'            => 'sidebar-updates',
// 	'description'   => '',
// 	'before_widget' => '<div class="widget %2$s">',
// 	'after_widget'  => '</div>',
// 	'before_title'  => '<h3>',
// 	'after_title'   => '</h3>' ));


register_sidebar(array(
  'name'          => 'Blog',
  'id'            => 'sidebar-blog',
  'description'   => '',
  'before_widget' => '<div class="sidebar__block %2$s">',
  'after_widget'  => '</div>',
  'before_title'  => '<h4 class="sidebar__title">',
  'after_title'   => '</h4>' ));
