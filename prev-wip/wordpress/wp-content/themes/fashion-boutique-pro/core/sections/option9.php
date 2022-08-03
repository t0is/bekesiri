<?php if ( get_theme_mod('fashion_boutique_pro_brands_section_enable', true) == true ) : ?>
<div id="brands" class="py-5">
	<div class="container brand-box text-center py-5">
        <h3 class=""><?php echo esc_html(get_theme_mod('fashion_boutique_pro_brands_main_heading'));?></h3>
        <p class=""><?php echo esc_html(get_theme_mod('fashion_boutique_pro_brands_content'));?></p>
        <div class="row mt-5">
            <div class="col-lg-1"></div>
            <div class=" col-lg-10" id="brands1">
                <div class="owl-carousel">
                    <?php 
                    $brands_image = get_theme_mod('fashion_boutique_pro_brands1_counter','');
                    for ( $i = 1; $i <= $brands_image; $i++ ){ ?> 
                        <div class="">
                        <img  src="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_brands1_image'.$i)); ?>"/>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
        
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8" id="brands2">
                <div class="owl-carousel ">
                    <?php 
                    $brands_img = get_theme_mod('fashion_boutique_pro_brands2_counter','');
                    for ( $p = 1; $p <= $brands_img; $p++ ){ ?>
                    <div class=""> 
                        <img  src="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_brands2_image'.$p)); ?>"/>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
<?php endif; ?>