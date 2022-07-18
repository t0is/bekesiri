<?php if ( get_theme_mod('fashion_boutique_pro_about_us_section_enable', true) == true ) : ?>
<div id="about_us" class="py-5">
	<div class="container text-center about-us my-lg-5">
		<div class="row py-lg-4">
			<div class="col-lg-6 col-md-6 about-box p-lg-5 p-md-4 mt-md-0 mt-5 mb-md-3">
				<h5 class=""><?php echo esc_html(get_theme_mod('fashion_boutique_pro_about_us_title'));?></h5>
				<hr class="about_hr">
				<h6 class="sub-heading mt-lg-4 mt-md-3"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_about_us_sub_heading'));?></h6>
    			<p class="sub-text mt-3"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_about_us_content'));?></p>
    			<div class="mt-lg-5 mt-md-4">
	                <?php if ( get_theme_mod('fashion_boutique_pro_about_us_button1_url', true) == true || get_theme_mod('fashion_boutique_pro_about_us_button1_text', true) == true ) : ?>
	                  <a href="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_about_us_button1_url'));?>" class="button1 animate__animated animate__pulse">
	                  <?php echo esc_html(get_theme_mod('fashion_boutique_pro_about_us_button1_text'));?></a>
	                <?php endif; ?>
	            </div>
			</div>
			<div class="col-lg-6 col-md-6 p-lg-5 p-md-4 mt-md-0 mt-5 mb-md-3">
				<h3 class=""><?php echo esc_html(get_theme_mod('fashion_boutique_pro_about_us_main_heading'));?></h3>
    			<p class="sub-text mt-lg-4 mt-md-2"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_about_us_content1'));?></p>
    			<div class="mt-lg-5 mt-md-4">
   	                <?php if ( get_theme_mod('fashion_boutique_pro_about_us_button2_url', true) == true || get_theme_mod('fashion_boutique_pro_about_us_button2_text', true) == true ) : ?>
	                  <a href="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_about_us_button2_url'));?>" class="button2 animate__animated animate__pulse">
	                  <?php echo esc_html(get_theme_mod('fashion_boutique_pro_about_us_button2_text'));?></a>
	                <?php endif; ?>
	            </div>
			</div>
      	</div>
	</div>
</div>
<?php endif; ?>