<?php
add_action('wp_enqueue_scripts', 'my_scripts_method'); //по событию вызов функции подключения

function my_scripts_method() {
	wp_enqueue_style('stylesheet', get_template_directory_uri() . "/style.css");

	wp_deregister_script('jquery'); //перерегистрация вывод jquery в футере
	wp_register_script('jquery', includes_url('js/jquery/jquery.js', false, null, true));
	wp_enqueue_script('jquery');

	wp_enqueue_script('jquery', get_template_directory_uri() . "/js/jquery-3.2.1.min.js", false, null, true/*true-выводится в футере*/);
	wp_enqueue_script('jquery_mixitup', get_template_directory_uri() . "/js/jquery.mixitup.min.js", false, null, true);
	wp_enqueue_script('jquery_fancybox', get_template_directory_uri() . "/js/jquery.fancybox.min.js", false, null, true);
	wp_enqueue_script('owl', get_template_directory_uri() . "/js/owl.carousel.js", false, null, true);
	wp_enqueue_script('typed', get_template_directory_uri() . "/js/typed.min.js", false, null, true);
	wp_enqueue_script('menu', get_template_directory_uri() . "/js/menu.js", false, null, true);
	wp_enqueue_script('custom', get_template_directory_uri() . "/js/custom.js", false, null, true);
}