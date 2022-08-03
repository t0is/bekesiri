<footer class="footer-area">
  <div class="footer container mt-5">
    <div class="text-center text-lg-left text-md-left">
      <?php
        if ( is_active_sidebar('fashion-boutique-pro-footer-sidebar')) {
          echo '<div class="row footer-area">';
          dynamic_sidebar(' fashion-boutique-pro-footer-sidebar');
          echo '</div>';
        }
      ?>
    </div>
  </div>
  <?php if ( get_theme_mod('fashion_boutique_pro_footer_copyright_section_enable', true) == true ) : ?>
    <div class=" copyright mt-3">
      <div class="container  text-center copyright-box py-3">
        <div class="row">
          <div class="col-lg-6 col-md-6 align-self-center text-md-left text-center">
            <p class="">
              <?php
                if (!get_theme_mod('fashion_boutique_pro_footer_text') ) {
                  esc_html_e('Copyright 2022 ', 'fashion-boutique-pro');
                } else {
                  echo esc_html(get_theme_mod('fashion_boutique_pro_footer_text'));
                }
              ?>
              <a href="<?php echo esc_url(__('https://www.misbahwp.com/', 'fashion-boutique-pro' )); ?>" rel="generator"><?php printf( esc_html__( ' Fashion Boutique Pro.', 'fashion-boutique-pro' )); ?></a>
              <?php printf( esc_html__( 'All Right Reserved', 'fashion-boutique-pro' )); ?>
            </p>  
          </div>  
          <div class="col-lg-6 col-md-6 align-self-center text-center">
            <nav id="footer-menu" class="close-panal">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'footer-menu',
                  'container' => 'false'
                ));
              ?>
            </nav>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</footer>

<?php if ( get_theme_mod('fashion_boutique_pro_scroll_top_section_enable', true) == true ) : ?>
  <a id="button_scroll"><i class="fas fa-arrow-up"></i></a>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>