<?php if ( get_theme_mod('fashion_boutique_featured_category_section_enable') ) : ?>

<div class="featured-category py-5">
	<div class="container">
        <?php $args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'category_name' =>  get_theme_mod('fashion_boutique_featured_category'),
			'posts_per_page' => 12,
		); ?>
		<div class="row">
		    <?php $arr_posts = new WP_Query( $args );
		    	if ( $arr_posts->have_posts() ) :
		      	while ( $arr_posts->have_posts() ) :
		        $arr_posts->the_post();
		        ?>
		        <div class="col-lg-3 col-md-4 col-sm-4">
		        	<div class="box mb-4">
		                <?php if ( has_post_thumbnail() ) :
							the_post_thumbnail();
						endif; ?>
		                <div class="box-content">
		                   <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		                </div>
		            </div>
			    </div>
		      	<?php
		    endwhile;
		    wp_reset_postdata();
		    endif; ?>
		</div>
	</div>
</div>

<?php endif; ?>