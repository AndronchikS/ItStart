<?php
add_action('wp_enqueue_scripts', 'my_scripts_method'); //по событию вызов функции подключения

function my_scripts_method() {
	wp_register_style('stylesheet', get_template_directory_uri() . "/style.css", array(), null, 'all');
	wp_enqueue_style('stylesheet');

	wp_register_script('jquery', get_template_directory_uri() . 'js/jquery/jquery.js', false, null, true);
	wp_enqueue_script('jquery');

	wp_register_script('jquery-3', get_template_directory_uri() . "/js/jquery-3.2.1.min.js", false, null, true);
	wp_enqueue_script('jquery-3');

	wp_register_script('jquery_mixitup', get_template_directory_uri() . "/js/jquery.mixitup.min.js", false, null, true);
	wp_enqueue_script('jquery_mixitup');

	wp_register_script('jquery_fancybox', get_template_directory_uri() . "/js/jquery.fancybox.min.js", false, null, true);
	wp_enqueue_script('jquery_fancybox');

	wp_register_script('owl', get_template_directory_uri() . "/js/owl.carousel.js", false, null, true);
	wp_enqueue_script('owl');

	wp_register_script('typed', get_template_directory_uri() . "/js/typed.min.js", false, null, true);
	wp_enqueue_script('typed');

	wp_register_script('menu', get_template_directory_uri() . "/js/menu.js", false, null, true);
	wp_enqueue_script('menu');

	wp_register_script('custom', get_template_directory_uri() . "/js/custom.js", false, null, true);
	wp_enqueue_script('custom');

}

//Menu
register_nav_menus(array(
	'menutop' => __('Menu Top', 'меню верхнего уровня'),
	'menubottom' => __('Menu Bottom', 'меню нижнего уровня'),
));

//add first link at menu class "active"
add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);

function filter_nav_menu_link_attributes($atts, $item, $args, $depth) {
	if ($atts['title'] == "selectDefault") {
		$atts['class'] .= 'active';
	}

	return $atts;
}

//Pictures
add_theme_support('post-thumbnails');

function sgr_filter_image_sizes($sizes) {
	unset($sizes['thumbnail']);
	unset($sizes['medium']);
	unset($sizes['large']);
	return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'sgr_filter_image_sizes');

add_image_size('abaut', 375, 223, true);
add_image_size('abaut-right', 210, 214, true);
add_image_size('portfolio', 210, 210, true);
add_image_size('blog', 290, 219, false);
