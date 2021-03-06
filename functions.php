<?php
add_action('wp_enqueue_scripts', 'my_scripts_method'); //по событию вызов функции подключения

function my_scripts_method()
{
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

    wp_localize_script('jquery', 'myajax',
        array(
            'ajxurl' => admin_url('admin-ajax.php')
        )
    );


}

//Menu
register_nav_menus(array(
    'menutop' => __('Menu Top', 'меню верхнего уровня'),
    'menubottom' => __('Menu Bottom', 'меню нижнего уровня'),
));

//add first link at menu class "active"
add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);

/**
 * @param $atts
 * @param $item
 * @param $args
 * @param $depth
 * @return mixed
 */
function filter_nav_menu_link_attributes($atts, $item, $args, $depth)
{
    if ($atts['title'] == "selectDefault") {
        $atts['class'] .= 'active';
    }

    return $atts;
}

//Pictures
add_theme_support('post-thumbnails');

/**
 * @param $sizes
 * @return mixed
 */
function sgr_filter_image_sizes($sizes)
{
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
add_image_size('shape1', 1024, 52, false);
add_image_size('services', 480, 197, false);
add_image_size('Logo', 510, 238, false);
add_image_size('Mobile', 370, 290, false);
add_image_size('single', 510, 386, false);
add_image_size('author', 32, 32, false);
add_image_size('testimonial', 124, 124, false);

//add my recode
add_action('init', 'true_register_post_type_init');

function true_register_post_type_init()
{
    $labels = array(
        'name' => 'Services',
        'singular_name' => 'service', // админ панель Добавить->Функцию
        'add_new' => 'Добавить service',
        'add_new_item' => 'Добавить новый service', // заголовок тега <title>
        'edit_item' => 'Редактировать services',
        'new_item' => 'Новый service',
        'all_items' => 'Все services',
        'view_item' => 'Просмотр service на сайте',
        'search_items' => 'Искать service',
        'not_found' => 'Services не найдено.',
        'not_found_in_trash' => 'В корзине нет services.',
        'menu_name' => 'Services', // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-generic', // иконка в меню
        'menu_position' => 20, // порядок в меню
        'supports' => array('title', 'editor', 'comments', 'author', 'thumbnail'),
    );
    register_post_type('services', $args);
}

//add my portfolio
add_action('init', 'true_register_portfolio_post_type_init');

function true_register_portfolio_post_type_init()
{
    $labels = array(
        'name' => 'Portfolio',
        'singular_name' => 'portfolio', // админ панель Добавить->Функцию
        'add_new' => 'Добавить portfolio',
        'add_new_item' => 'Добавить новый portfolio', // заголовок тега <title>
        'edit_item' => 'Редактировать portfolio',
        'new_item' => 'Новый portfolio',
        'all_items' => 'Все portfolio',
        'view_item' => 'Просмотр portfolio на сайте',
        'search_items' => 'Искать portfolio',
        'not_found' => 'portfolio не найдено.',
        'not_found_in_trash' => 'В корзине нет portfolio.',
        'menu_name' => 'portfolio', // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'taxonomies' => array('forportfolio'),
        'menu_icon' => 'dashicons-hammer', // иконка в меню
        'menu_position' => 21, // порядок в меню
        'supports' => array('title', 'editor', 'comments', 'author', 'thumbnail'),
    );
    register_post_type('portfolio', $args);

    register_taxonomy('forportfolio', array('portfolio'), array(
        'label' => 'category', // определяется параметром $labels->name
        'labels' => array('name' => 'category'),
        'hierarchical' => true,

    ));
}

function get_recent($request)
{
    global $wpdb;
    $posts = $wpdb->get_results("SELECT guid, post_title, post_date FROM $wpdb->posts WHERE
post_status = 'publish' AND post_type='" . $request . "' ORDER BY post_date DESC LIMIT 0,3");
    return $posts;
}

function get_blog($request)
{
    global $wpdb;
    $posts = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE
post_status = 'publish' AND post_type='" . $request . "' ORDER BY post_date DESC LIMIT 0,3");
    return $posts;
}

function get_arhives($request)
{
    global $wpdb;
    $posts = $wpdb->get_results("SELECT guid, post_date FROM $wpdb->posts WHERE
post_status = 'publish' AND post_type='" . $request . "' ORDER BY post_date ASC LIMIT 0,4");
    return $posts;
}


add_action('wp_ajax_refresh', 'refresh_content');
add_action('wp_ajax_nopriv_refresh', 'refresh_content');

function refresh_content()
{

    if (!empty($_POST['link'])) {
        $param = esc_attr($_POST['link']);
        $requestID = preg_replace('/[^0-9]/', '', $param);
        $postSearch = get_post($requestID);


        $posts = new WP_Query(array(
            'post_type' => $postSearch->post_type,
            'p' => $requestID
        ));
        include(locate_template('parts/postAjax.php'));
        wp_die();
    }
    echo "Извините ошибка в поиске записи";
    wp_die();
}


function get_count_post_custom($request)
{
    global $wpdb;
    $posts = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE
post_status = 'publish' AND post_type='" . $request . "' ORDER BY post_date");
    $posts = array_chunk($posts, 3, TRUE);

    return count($posts);

}


function get_blog_all($request)
{
    global $wpdb;
    $posts = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE
post_status = 'publish' AND post_type='" . $request . "' ORDER BY post_date DESC ");
    return $posts;
}

add_action('wp_ajax_refreshBlog', 'refresh_blog');
add_action('wp_ajax_nopriv_refreshBlog', 'refresh_blog');

function refresh_blog()
{

    if (!empty($_POST['link'])) {
        $param = esc_attr($_POST['link']);
        $postsBlog = get_blog_all('portfolio');
        $postPagAll = array_chunk($postsBlog, 3, TRUE);
        $blogs = $postPagAll[$param];
        include(locate_template('parts/postPag.php'));
        wp_die();
    }
    echo "Извините ошибка в поиске записи";
    wp_die();
}

add_action('wp_ajax_refreshTaxon', 'refresh_taxonomy');
add_action('wp_ajax_nopriv_refreshTaxon', 'refresh_taxonomy');

function get_post_taxonomy($request)
{
    global $wpdb;
    $postsID = $wpdb->get_results("SELECT object_id FROM $wpdb->term_relationships WHERE
term_taxonomy_id = '" . $request . "' ");
    $currentTax = [];
    foreach ($postsID as $id) {
        $posts = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE ID='" . $id->object_id . "' ");
        $currentTax[] = $posts[0];
    }
    return $currentTax;
}

function refresh_taxonomy()
{

    if (!empty($_POST['link'])) {
        $param = esc_attr($_POST['link']);
        $blogs = get_post_taxonomy($param);
        include(locate_template('parts/postPag.php'));
        wp_die();
    }
    echo "Извините ошибка в поиске записи";
    wp_die();
}


add_action('init', 'true_register_post_testimonial_init');

function true_register_post_testimonial_init()
{
    $labels = array(
        'name' => 'Testimonial.',
        'singular_name' => 'testimonial', // админ панель Добавить->Функцию
        'add_new' => 'Добавить Testimonial',
        'add_new_item' => 'Добавить новый Testimonial', // заголовок тега <title>
        'edit_item' => 'Редактировать Testimonial',
        'new_item' => 'Новый Testimonial',
        'all_items' => 'Все Testimonial',
        'view_item' => 'Просмотр Testimonial на сайте',
        'search_items' => 'Искать Testimonial',
        'not_found' => 'Testimonial не найдено.',
        'not_found_in_trash' => 'В корзине нет Testimonial.',
        'menu_name' => 'Testimonial', // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-customizer', // иконка в меню
        'menu_position' => 23, // порядок в меню
        'supports' => array('title', 'editor', 'comments', 'author', 'thumbnail'),
    );
    register_post_type('testimonial', $args);
}