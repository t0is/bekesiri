<?php 

/* Template Name: Home Page  Template */

get_header(); ?>

<div id="content">
    <?php
		// Get the parts.
		$template_parts = get_theme_mod( 'fashion_boutique_pro_sortable_setting', array( 'option1', 'option2', 'option3', 'option4', 'option5', 'option6', 'option7', 'option8', 'option9','option10') );

		// Loop parts.
		if ( is_array($template_parts) || is_object($template_part) ){
			foreach ( $template_parts as $template_part ) {
				get_template_part ( 'core/sections/' . $template_part );
			}
		}
	?>
</div>

<?php get_footer(); ?>
