<?php
// Functions parts
include_once 'functions-parts/Mobile_Detect.php';
include_once 'functions-parts/_assets.php';
// include_once 'functions-parts/_post-types-registration.php';
// include_once 'functions-parts/_taxonomies-registration.php';
// include_once 'functions-parts/_breadcrumbs.php';
// include_once 'functions-parts/_ajax.php';
include_once 'functions-parts/_hooks.php';
// include_once 'functions-parts/_custom-functions.php';
// include_once 'functions-parts/custom-buttons-tinymce.php';

/*
 * REMOVE EMOJI ICONS
 * */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


add_action('admin_menu', 'remove_menu_pages');

function remove_menu_pages()
{
    remove_menu_page('edit.php');
}


/*
 * Удаление "мусора"
 * */
remove_action('wp_head', 'feed_links_extra', 3); // убирает ссылки на rss категорий
remove_action('wp_head', 'feed_links', 2); // минус ссылки на основной rss и комментарии
remove_action('wp_head', 'rsd_link');  // сервис Really Simple Discovery
remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer
remove_action('wp_head', 'wp_generator');  // скрыть версию wordpress
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('template_redirect', 'rest_output_link_header', 11, 0);


/*
 * Удаление пунктов меню (убрать комментарий для нужного пункта)
 * */
function remove_menus()
{
    remove_menu_page('edit-comments.php');          //Комментарии
}

add_action('admin_menu', 'remove_menus');

define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
/*
 * Страница опций
 * */
if (function_exists('acf_add_options_page')) acf_add_options_page();

/*
 * Поддержка SVG
 * */
function my_myme_types($mime_types)
{
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);


// добавление редактора меню
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

/*
 * Add Menu Wp
 * */
register_nav_menus(
    array(
        'Header menu' => 'Header menu',
        'Footer menu' => 'Footer menu'
    )
);

add_theme_support('menus');



add_theme_support('post-thumbnails');
add_image_size('full_hd', 1920, 1080);


add_action('wp_print_styles', 'wps_deregister_styles', 100);
function wps_deregister_styles()
{
    wp_deregister_style('contact-form-7');
    wp_deregister_style('wp-block-library');
    wp_deregister_style('wp-block-library-theme');
    wp_deregister_style('wc-block-style');
}


/**
 * Filter URL entry before it gets added to the sitemap.
 *
 * @param array  $url  Array of URL parts.
 * @param string $type URL type. Can be user, post or term.
 * @param object $object Data object for the URL.
 */
add_filter('rank_math/sitemap/entry', function ($url, $type, $object) {

    $url = str_replace('/golovna', '', $url);
    return $url;
}, 10, 3);

/**
 * Filter the URL Rank Math SEO uses in the XML sitemap for this post type archive.
 *
 * @param string $archive_url The URL of this archive
 * @param string $post_type   The post type this archive is for.
 */
add_filter('rank_math/sitemap/post_type_archive_link', function ($archive_url, $post_type) {
    return 0;
}, 10, 2);

// Local acf fields
add_filter('acf/settings/save_json', 'local_acf_json_save_point');

function local_acf_json_save_point($path)
{

    // update path
    $path = get_stylesheet_directory() . '/acf';

    // return
    return $path;
}

function my_acf_json_load_point($paths)
{
    // Remove the original path (optional).
    unset($paths[0]);

    // Append the new path and return it.
    $paths[] = get_stylesheet_directory() . '/acf';

    return $paths;
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function modify_menu_items($items, $args) {
    $home_url = get_home_url() . '/';

    foreach ($items as &$item) {
        if (strpos($item->url, '#') === 0) {
            $item->classes[] = 'anchor';

            if (!is_front_page()) {
                $item->url = $home_url . $item->url;
            }
        }
    }

    return $items;
}

add_filter('wp_nav_menu_objects', 'modify_menu_items', 10, 2);

