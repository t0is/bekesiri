<?php if ( get_theme_mod('fashion_boutique_pro_featured_category_section_enable', true) == true ) : ?>
<div id="featured_category" class="py-lg-5 ">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-6 col-md-12 featured-div1 px-md-0 px-3" id="featured_category1">
				<div class="owl-carousel mt-md-5 mt-0">
					<?php 
				    $featured_image1 = get_theme_mod('fashion_boutique_pro_featured1_counter','');
				    for ( $i = 1; $i <= $featured_image1; $i++ ){ ?>
				    <div class="featured-box  text-center ">
				    	<figure class="projects-img">
				    	    <img  src="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_category1_image'.$i)); ?>"/>
				    	 
				    	<figcaption>
				    		<div class="projects-content">
				    			<h4><a href="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_featured_category_title_url1'.$i));?>"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_featured_category_title1'.$i));?></a></h4>
				    		</div>
				    	</figcaption>
				    </figure>
				    </div>
				    <?php }?>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 featured-div2 text-lg-right align-self-center">
				<h3 class="mt-3"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_featured_category_main_heading'));?></h3>
				<p class="sub-text mb-md-0 mb-4"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_featured_category_content'));?></p>
			</div>
		</div>
		<div class="row mt-4" id="featured_category2">
			<div class="owl-carousel">
				<?php 
			    $featured_image2 = get_theme_mod('fashion_boutique_pro_featured2_counter','');
			    for ( $p = 1; $p <= $featured_image2; $p++ ){ ?>
			    <div class="featured-box text-center px-md-0 px-3">
			    	<figure class="projects-img">
			    	    <img  src="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_category2_image'.$p)); ?>"/>
			    	
			    	<figcaption>
			    		<div class="projects-content">
			    			<h4><a href="<?php echo esc_url(get_theme_mod('fashion_boutique_pro_featured_category_title_url2'.$i));?>"><?php echo esc_html(get_theme_mod('fashion_boutique_pro_featured_category_title2'.$i));?></a></h4>
			    		</div>
			    	</figcaption>

			    </div>
			    <?php }?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
