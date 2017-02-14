<?php
  $pid = get_the_ID();
  $footer_legal = get_option( 'options_footer_legal' );
  $footer_email = get_option( 'options_footer_email' );
  $social_facebook = esc_url( get_option( 'options_social_facebook' ) );
  $social_twitter = esc_url( get_option( 'options_social_twitter' ) );
  $social_instagram = esc_url( get_option( 'options_social_instagram' ) );
  $social_youtube = esc_url( get_option( 'options_social_youtube' ) );
?>

  </main>

  <footer class="layout-footer">
    <div class="container-gr">
      <div class="layout-footer__inner">
        <div class="row middle-md between-md layout-footer__sitemap">
          <div class="col-xs-24 col-md-reset">
            <nav class="footer__nav">
              <?php wp_nav_menu( array( 'theme_location' => 'menu-footer', 'menu_class' => 'menu-footer', 'container' => '', 'walker' => new JDEM_Walker_Nav_Menu() ) ); ?>
            </nav>
          </div>
          <div class="col-xs-24 col-md-reset">
            <ul class="comp-social">
              <?php if( !empty($social_twitter) ): ?><li><a href="<?php echo $social_twitter; ?>" tagret="_blank" class="sm--tw"><span>Twitter</span></a></li><?php endif; ?>
              <?php if( !empty($social_facebook) ): ?><li><a href="<?php echo $social_facebook; ?>" tagret="_blank" class="sm--fb"><span>Facebook</span></a></li><?php endif; ?>
              <?php if( !empty($social_youtube) ): ?><li><a href="<?php echo $social_youtube; ?>" tagret="_blank" class="sm--yt"><span>YouTube</span></a></li><?php endif; ?>
              <?php if( !empty($social_instagram) ): ?><li><a href="<?php echo $social_instagram; ?>" tagret="_blank" class="sm--ig"><span>Instagram</span></a></li><?php endif; ?>
            </ul>
          </div>
        </div>
        <div class="row between-md">
          <div class="col-xs-24 col-md-reset last-lg">
            <a href="mailto:<?php echo $footer_email; ?>" class="layout-footer__email"><?php echo $footer_email; ?></a>
          </div>
          <div class="col-xs-24 col-md-reset">
            <div class="layout-footer__legal">
              <p><?php echo nl2br($footer_legal); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script id="dsq-count-scr" src="//justice-democrats.disqus.com/count.js" async></script>

  <?php wp_footer(); ?>
  <script>setUTMCodes()</script>
</body>
</html>
