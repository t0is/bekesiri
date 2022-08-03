<?php if ( get_theme_mod('fashion_boutique_pro_slider_box_enable', true) == true ) : ?>
<div id="slider" class="">
  <div class="owl-carousel"> 
    <?php 
    $slider_image = get_theme_mod('fashion_boutique_pro_slider_counter','');
    for ( $i = 1; $i <= $slider_image; $i++ ){ ?>
    <div class="slider-box container-fluid">
      <div class="row">
        <div class="col-lg-1 col-md-1 slider-div1"></div>
        <div class="col-lg-4 col-md-4 pt-3 slider-div2">
          <div class="slider-content text-md-left text-center mt-lg-5 mt-md-4">
            <h1 class=""><?php echo esc_html(get_theme_mod('fashion_boutique_pro_slider_main_heading'.$i));?></h1>
            <p class="mt-4"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_slider_content'.$i));?></p>
              <div class="mt-lg-5 mt-md-4">
                <?php if ( get_theme_mod('fashion_boutique_pro_slider_button_url'.$i, true) == true || get_theme_mod('fashion_boutique_pro_slider_button_text'.$i, true) == true ) : ?>
                  <a href="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_slider_button_url'.$i));?>" class="button animate__animated animate__pulse">
                  <?php echo esc_html(get_theme_mod('fashion_boutique_pro_slider_button_text'.$i));?></a>
                <?php endif; ?>
              </div>
              <h2>#trend</h2>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 slider-div3 p-lg-4 p-md-2 ">
          <img  src="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_slider_image'.$i)); ?>"/>
        </div>
        <div class="col-lg-1 col-md-1 slider-div4 align-self-center text-md-left text-center mb-md-5 mb-3">
          <?php 
          $slider_icon = get_theme_mod('fashion_boutique_pro_slider_icon_counter'.$i,'');
          for ( $m = 1; $m <=$slider_icon; $m++ ){ ?>
              <span class=" icon-bg mb-lg-3 mb-md-2">
                  <a href="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_slider_icon_url'.$m .$i));?>"> 
                  <?php $icon = get_theme_mod( 'fashion_boutique_pro_slider_icon_setting'.$m .$i, 'menu' ); ?>
                  <span class="dashicons dashicons-<?php echo esc_attr( $icon ); ?>"></span></a>
              </span>
          <?php }?>
        </div>
      </div>
    </div>
    <?php }?>
  </div>      
</div>
<?php endif; ?>