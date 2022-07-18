<?php if ( get_theme_mod('fashion_boutique_pro_newsletter_section_enable', true) == true ) : ?>
<div id="newsletter" class="">
   	<div class="container-fluid text-md-left text-center">
   		<div class="row">
   			<section class="col-lg-5 col-md-5 newsletter_box1 p-xl-5 p-lg-3 p-md-4">
   				<div class="p-xl-5 p-lg-3 mt-lg-0 mt-md-4 py-5">
	   				<h2 class=""><?php echo esc_html(get_theme_mod('fashion_boutique_pro_newsletter_sub_heading'));?></h2>
	   				<h5 class="get_text"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_newsletter_get_text'));?></h5>
	   				<div class="number_off mt-lg-0 mt-md-4">
		   				<span class="number"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_newsletter_number_text'));?></span>
		   				<span><h4 class="per_text"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_newsletter_per_text'));?></h4>
		   				<h3 class="off_text"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_newsletter_off_text'));?></h3></span>
		   			</div>
		   		</div>
   			</section>
   			<section class="col-lg-7 col-md-7 newsletter_box2 p-xl-5 p-lg-3 p-md-4 py-5">
   				<div class="p-xl-5 p-lg-3 mt-lg-0 mt-md-4">
	   				<h3 class="news_heading"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_newsletter_main_heading'));?></h3>
	   				<p class="content"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_newsletter_content'));?></p>
	   				<div class="mt-5">
		          		<span class=""><?php echo do_shortcode( get_theme_mod('fashion_boutique_pro_newsletter_shortcode'));?></span>
		          	</div>
		        </div>
   			</section>
   		</div>
   	</div>
</div>
<?php endif; ?>