<?php if ( get_theme_mod('fashion_boutique_pro_reviews_section_enable', true) == true ) : ?>
<div id="reviews" class="py-5">
    <div class="container  text-center ">
        <h3><?php echo esc_html(get_theme_mod('fashion_boutique_pro_reviews_main_heading'));?></h3>
        <div class="owl-carousel mt-lg-5 mt-4 text-md-left reviews-box">
            <?php 
            $review_content = get_theme_mod('fashion_boutique_pro_reviews_counter','');
            for ( $i = 1; $i <= $review_content; $i++ ){ ?>
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <img src="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_reviews_image'.$i)); ?>"/>
                    </div>
                    <div class="col-lg-7 col-md-7 align-self-center px-lg-5 mt-md-0 mt-4">
                        <div class="">
                            <?php $icon = get_theme_mod( 'fashion_boutique_pro_reviews_icon_setting'.$i, '' ); ?>
                            <span class="dashicons dashicons-<?php echo esc_attr( $icon ); ?>"></span>                         
                        </div>
                        <p class="review_text mt-lg-5 mt-3"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_reviews_content'.$i));?></p>
                        <div class="mt-lg-5">
                            <h5 class="pt-lg-5 pt-md-4"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_reviews_name'.$i));?></h5>
                            <h6 class=""><?php echo esc_html(get_theme_mod('fashion_boutique_pro_reviews_title'.$i));?></h6>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<?php endif; ?>