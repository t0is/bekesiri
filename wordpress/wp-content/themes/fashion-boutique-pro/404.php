<?php get_header(); ?>

<div id="content" class="py-5 page-404">
	<div class="container text-center">
	  <div class="row">
	    <div class="col-md-12">
	      <h1><?php echo esc_html(get_theme_mod('fashion_boutique_pro_404_page_main_heading'));?></h1>
	      <h3><?php echo esc_html(get_theme_mod('fashion_boutique_pro_404_page_sub_heading'));?></h3>
	      <hr>
	      <p class="my-4"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_404_page_content'));?></p>
	      <div class="intro-button animate__animated animate__fadeInLeft">
	      <a href="<?php echo esc_url(home_url()); ?>" class="button"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_404_page_button_text'));?></a>
	    </div>
	    </div>
	  </div>
    </div>
</div>
<?php get_footer(); ?>