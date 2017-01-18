<?php

  // define whether there is a backdrop for styling
  $has_backdrop = !empty(get_post_thumbnail_id()) ? 'has-backdrop' : 'no-backdrop';

?><!DOCTYPE html>
<!--[if lte IE 9]><html class="no-js lt-ie10"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Anonymous+Pro|Roboto+Condensed:400,700|Roboto:300,400" rel="stylesheet">

  <script>
    // Set up site configuration
    window.config = window.config || {};
    // The base URL for the WordPress theme
    window.config.baseUrl = "<?php echo get_bloginfo('url'); ?>";
    // Empty default Gravity Forms spinner function
    // var gformInitSpinner = function() {};
  </script>

  <?php include( get_stylesheet_directory() . '/functions/site/theme-meta.php' ); ?>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header class="layout-header <?php echo $has_backdrop; ?>">

    <div class="header-logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <svg viewBox="0 0 249 53" version="1.1" xmlns="http://www.w3.org/2000/svg" class="header-logo__svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>JusticeDemocratsSiteLogo</title>
    <desc></desc>
    <defs></defs>
    <g id="Home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="logo-copy" transform="translate(0.000000, 1.000000)">
            <g id="Group-5" transform="translate(33.000000, 0.019005)" stroke="#FFFFFF" stroke-width="2">
                <path d="M6.91205775,0.0505543011 L0.622071831,7.05430699" id="Stroke-3"></path>
            </g>
            <path d="M23.9652324,36.9897024 L24.4652324,46.7541218" id="Stroke-6" stroke="#FFFFFF" stroke-width="2"></path>
            <text id="Justice-Democrats" font-family="RobotoCondensed-Bold, Roboto Condensed" font-size="22" font-style="condensed" font-weight="bold">
                <tspan x="59" y="26" fill="#FFFFFF">Justice </tspan>
                <tspan x="137.083984" y="26" fill="#F6FF00">Democrats</tspan>
            </text>
            <g id="mark" fill="#FFFFFF">
                <polyline id="Fill-21-Copy-22" points="9.59946487 14.8260807 6.9592056 16.7679322 7.97462768 19.9221102 5.32843343 17.9742545 2.67711351 19.9221102 3.69226581 16.7679322 1.05740199 14.8260807 4.31328112 14.8260807 5.32843343 11.6888239 6.33819029 14.8260807 9.59946487 14.8260807"></polyline>
                <path d="M0,0 L6.06669944,6.1816276 L6.64995311,6.78183788 L7.24935593,7.44718309 L7.27438713,7.42457427 L7.42592004,7.58068278 L16.6513943,7.58068278 L16.6513943,35.2517225 L7.0746759,25.119204 L0.803958795,30.2909711 L20.7260954,50.6189898 L40.71875,29.4471777 L40.71875,0 L0,0 Z M7.24289627,6.2338432 L1.81435763,0.807457778 L39.3304609,0.807457778 L33.2260801,6.773225 L23.4714519,6.773225 L23.4714519,37.3029344 L23.4714519,46.6678298 L20.7188283,49.4734764 L2.08727836,30.4277006 L6.94629011,26.1605554 L17.4591212,37.286247 L17.4591212,6.773225 L7.76720552,6.773225 L7.24289627,6.2338432 Z M24.2786405,36.4521431 L33.7377392,26.4870375 L33.8069114,26.2324192 L33.8069114,7.33521561 L39.9112922,1.36971754 L39.9112922,29.1169275 L24.2786405,45.5753394 L24.2786405,36.4521431 Z M24.2786405,7.58068278 L32.9994536,7.58068278 L32.9994536,26.0921907 L24.2786405,35.2794453 L24.2786405,7.58068278 Z" id="Fill-1-Copy-7" stroke="#FFFFFF"></path>
            </g>
        </g>
    </g>
</svg>
      </a>
    </div>

    <button type="button" aria-label="Open navigation" class="header__nav-toggle" data-js-menu-toggle></button>

    <nav class="header__nav">
      <?php wp_nav_menu( array( 'theme_location' => 'menu-header', 'menu_class' => 'menu-main', 'container' => '', 'walker' => new JDEM_Walker_Nav_Menu() ) ); ?>
    </nav>

  </header>

  <main class="<?php echo $has_backdrop; ?>" >
