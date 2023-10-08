<?php


$foodie_restaurant_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$foodie_restaurant_text_transform = get_theme_mod( 'menu_text_transform_foodie_restaurant','CAPITALISE');
    if($foodie_restaurant_text_transform == 'CAPITALISE'){

		$foodie_restaurant_custom_css .='#main-menu ul li a{';

			$foodie_restaurant_custom_css .='text-transform: capitalize ; font-size:14px;';

		$foodie_restaurant_custom_css .='}';

	}else if($foodie_restaurant_text_transform == 'UPPERCASE'){

		$foodie_restaurant_custom_css .='#main-menu ul li a{';

			$foodie_restaurant_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$foodie_restaurant_custom_css .='}';

	}else if($foodie_restaurant_text_transform == 'LOWERCASE'){

		$foodie_restaurant_custom_css .='#main-menu ul li a{';

			$foodie_restaurant_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$foodie_restaurant_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$foodie_restaurant_container_width = get_theme_mod('foodie_restaurant_container_width');

		$foodie_restaurant_custom_css .='body{';

			$foodie_restaurant_custom_css .='width: '.esc_attr($foodie_restaurant_container_width).'%; margin: auto;';

		$foodie_restaurant_custom_css .='}';

	/*---------------------------Copyright Text alignment-------------------*/

	$foodie_restaurant_copyright_text_alignment = get_theme_mod( 'foodie_restaurant_copyright_text_alignment','CENTER-ALIGN');

	 if($foodie_restaurant_copyright_text_alignment == 'LEFT-ALIGN'){

			$foodie_restaurant_custom_css .='.copy-text p{';

				$foodie_restaurant_custom_css .='text-align:left;';

			$foodie_restaurant_custom_css .='}';


		}else if($foodie_restaurant_copyright_text_alignment == 'CENTER-ALIGN'){

			$foodie_restaurant_custom_css .='.copy-text p{';

				$foodie_restaurant_custom_css .='text-align:center;';

			$foodie_restaurant_custom_css .='}';


		}else if($foodie_restaurant_copyright_text_alignment == 'RIGHT-ALIGN'){

			$foodie_restaurant_custom_css .='.copy-text p{';

				$foodie_restaurant_custom_css .='text-align:right;';

			$foodie_restaurant_custom_css .='}';

		}

		/*---------------------------Slider-content-alignment-------------------*/

$foodie_restaurant_slider_content_alignment = get_theme_mod( 'foodie_restaurant_slider_content_alignment','LEFT-ALIGN');

 if($foodie_restaurant_slider_content_alignment == 'LEFT-ALIGN'){

		$foodie_restaurant_custom_css .='.blog_box{';

			$foodie_restaurant_custom_css .='text-align:left;';

		$foodie_restaurant_custom_css .='}';


	}else if($foodie_restaurant_slider_content_alignment == 'CENTER-ALIGN'){

		$foodie_restaurant_custom_css .='.blog_box{';

			$foodie_restaurant_custom_css .='text-align:center; right:30%; left:30%;';

		$foodie_restaurant_custom_css .='}';


	}else if($foodie_restaurant_slider_content_alignment == 'RIGHT-ALIGN'){

		$foodie_restaurant_custom_css .='.blog_box{';

			$foodie_restaurant_custom_css .='text-align:right; right:20%; left:50%;';

		$foodie_restaurant_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/


$foodie_restaurant_related_product_setting = get_theme_mod('foodie_restaurant_related_product_setting',true);

	if($foodie_restaurant_related_product_setting == false){

		$foodie_restaurant_custom_css .='.related.products, .related h2{';

			$foodie_restaurant_custom_css .='display: none;';

		$foodie_restaurant_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$foodie_restaurant_pagination_setting = get_theme_mod('foodie_restaurant_pagination_setting',true);

	if($foodie_restaurant_pagination_setting == false){

		$foodie_restaurant_custom_css .='.nav-links{';

			$foodie_restaurant_custom_css .='display: none;';

		$foodie_restaurant_custom_css .='}';
	}

	/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$foodie_restaurant_scroll_top_position = get_theme_mod( 'foodie_restaurant_scroll_top_position','Right');

	if($foodie_restaurant_scroll_top_position == 'Right'){

		$foodie_restaurant_custom_css .='.scroll-up{';

			$foodie_restaurant_custom_css .='right: 20px;';

		$foodie_restaurant_custom_css .='}';

	}else if($foodie_restaurant_scroll_top_position == 'Left'){

		$foodie_restaurant_custom_css .='.scroll-up{';

			$foodie_restaurant_custom_css .='left: 20px;';

		$foodie_restaurant_custom_css .='}';

	}else if($foodie_restaurant_scroll_top_position == 'Center'){

		$foodie_restaurant_custom_css .='.scroll-up{';

			$foodie_restaurant_custom_css .='right: 50%;left: 50%;';

		$foodie_restaurant_custom_css .='}';
	}

