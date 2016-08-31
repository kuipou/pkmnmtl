<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <meta name="theme-color" content="#191921">
  <?php wp_head(); ?>
</head>
<body>
<header id="top">

<?php 
      $args = array(
        'theme_location' => 'nav',
        'menu' => '',
        'container' => 'nav',
        'container_class' => 'top',
        'container_id' => '',
        'menu_class' => 'nav-item',
        'menu_id' => '',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'items_wrap' => '<ul>%3$s</ul>',
        'depth' => 0,
        'walker' => ''
      );
    
      wp_nav_menu( $args ); ?>
</header>