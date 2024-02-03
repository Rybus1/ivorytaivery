<?php
/*
 * Подключение стилей и скриптов
 * */

function my_assets()
{
    wp_deregister_script('jquery-core');
    wp_register_script('jquery-core', get_stylesheet_directory_uri() . '/build/static/js/jquery-3.5.0.min.js');
    wp_enqueue_script('jquery');

    
    wp_enqueue_style('main-style', get_template_directory_uri() . '/build/static/css/main.css');
    wp_enqueue_script('utils-js', get_stylesheet_directory_uri() . '/build/static/js/utils.js',  array('jquery'), '1.0', true);
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/build/static/js/main.js',  array('jquery'), '1.0', true);
    // wp_enqueue_script('GSAP', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',  array('jquery'), '1.0', true);
    // wp_enqueue_script('scroll-magic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js',  array('jquery'), '1.0', true);
    // wp_enqueue_script('scroll-magic-animation', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js',  array('jquery'), '1.0', true);
    // wp_enqueue_script('scroll-magic-debug', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js',  array('jquery'), '1.0', true);
    
    // wp_enqueue_script('lenis', 'https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.28/bundled/lenis.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('header-js-file', get_stylesheet_directory_uri() . '/build/static/js/modules/header/header.js', array('jquery'), '1.0', true);
    wp_enqueue_script('footer-js-file', get_stylesheet_directory_uri() . '/build/static/js/modules/footer/footer.js', array('jquery'), '1.0', true);

    $page_template =  mb_substr(get_page_template_slug(), 0, -4); // get template file name and cut last 4 symbols

    $css_file_path_mob = get_template_directory_uri() . '/build/static/css/pages/' . $page_template . '_mob.css';
    $css_file_path = get_template_directory_uri() . '/build/static/css/pages/' . $page_template . '.css';
    $js_file_path = get_template_directory_uri() . '/build/static/js/pages/' . $page_template . '.js';

    if (!is_404() && !is_search()) {
        wp_enqueue_style($page_template . '_mob', $css_file_path_mob);
        wp_enqueue_style($page_template, $css_file_path);
        wp_enqueue_script($page_template, $js_file_path,  array('jquery'), '1.0', true);
    }

    if (is_page_template('page-home.php')) {
        // wp_enqueue_style('splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css');
        // wp_enqueue_script('splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js',  array('jquery'), '1.0', true);
        // wp_enqueue_script('splide-autoscroll', 'https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js',  array('jquery'), '1.0', true);
    }

    if (is_404()) {
        wp_enqueue_style('404', get_template_directory_uri() . '/build/static/css/pages/404.css');
    }
}

add_action('wp_enqueue_scripts', 'my_assets');

add_action('admin_enqueue_scripts', 'load_admin_style');
function load_admin_style()
{
    wp_enqueue_style('admin-style-css', get_template_directory_uri() . '/admin-style.css');
}
add_editor_style('admin-style.css');
