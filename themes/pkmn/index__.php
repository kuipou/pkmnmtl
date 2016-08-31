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
<header id="front-top">

<?php 
      $args = array(
        'theme_location' => 'landing',
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
<img class="text-logo" src="<?php echo get_template_directory_uri(); ?>/images/plmtl_textlogo.png" alt="Montreal Pokemon League"> 
<div class="front-container">
  <header>
    <h1>Do you have what it takes to challenge the Montreal Gym Leaders?</h1>
    <p>The Montreal Pokemon League will be returning once again this year to the Montreal Comiccon and Otakuthon with <strong>TWO</strong> all new sets convention exclusive badges for trainers to collect! Bring your best teams for your chance to win 'em all!</p>
  </header>
 
  <h1>Come meet us at</h1>
  <section class="info">
    
    <aside class="split">
    <img src="<?php echo get_template_directory_uri(); ?>/images/comiccon_sm.png" alt="Montreal Comic Con Logo">
    
      <ul>
        <li><strong>Friday:</strong> 1:30 pm to 8:00pm</li>
        <li><strong>Saturday:</strong> 10:00 am to 7:00pm</li>
        <li><strong>Saturday:</strong> 10 am to 5:00pm</li>
      </ul>
    </aside>
    <aside class="split">
      <img src="<?php echo get_template_directory_uri(); ?>/images/otakuthon.png" alt="Otakuthon Logo">
       <ul>
        <li><strong>Friday:</strong> Hours to be announced</li>
        <li><strong>Saturday:</strong> Hours to be announced</li>
        <li><strong>Saturday:</strong> Hours to be announced</li>
      </ul>
    </aside>
  </section>
    <h1>How it works?</h1>
  <p>Each player is facing a Leader of a certain type in a 3v3 match.</p>
</div>
<footer class="front-footer"><span class="tag">Pokémon and its trademarks are &copy;1995-2016 Nintendo, Creatures, and GAMEFREAK</span>
<aside class="social"> 
        <ul>
          <span>Follow us on</span> 
          <a href="https://twitter.com/kuipou"><li><i class="fa fa-twitter"></i></li></a>
          <a href="https://www.facebook.com/PkmnLeagueMTL"><li><i class="fa fa-facebook-square"></i></li></a>
        </ul>
      </aside></footer>
<?php wp_footer(); ?>
</body>
</html>