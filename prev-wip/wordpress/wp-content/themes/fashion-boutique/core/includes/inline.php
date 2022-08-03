<?php


$fashion_boutique_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$fashion_boutique_text_transform = get_theme_mod( 'menu_text_transform_fashion_boutique','CAPITALISE');
    if($fashion_boutique_text_transform == 'CAPITALISE'){

		$fashion_boutique_custom_css .='#main-menu ul li a{';

			$fashion_boutique_custom_css .='text-transform: capitalize ; font-size: 14px !important;';

		$fashion_boutique_custom_css .='}';

	}else if($fashion_boutique_text_transform == 'UPPERCASE'){

		$fashion_boutique_custom_css .='#main-menu ul li a{';

			$fashion_boutique_custom_css .='text-transform: uppercase ; font-size: 14px !important';

		$fashion_boutique_custom_css .='}';

	}else if($fashion_boutique_text_transform == 'LOWERCASE'){

		$fashion_boutique_custom_css .='#main-menu ul li a{';

			$fashion_boutique_custom_css .='text-transform: lowercase ; font-size: 14px !important';

		$fashion_boutique_custom_css .='}';
	}

		/*---------------------------Container Width-------------------*/

	$fashion_boutique_container_width = get_theme_mod('fashion_boutique_container_width');
			$fashion_boutique_custom_css .='body{';
				$fashion_boutique_custom_css .='width: '.esc_attr($fashion_boutique_container_width).'%; margin: auto';
			$fashion_boutique_custom_css .='}';
