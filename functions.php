<?php

if (!function_exists('seed_project_theme_setup')) {
    function seed_project_theme_setup() {
        load_theme_textdomain('seed-project', get_template_directory() . '/languages');
        add_theme_support('custom-logo');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', array('search-form', 'gallery', 'caption'));
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('responsive-embeds');
        register_nav_menus(array(
            'primary'   =>  esc_html__('Primary Menu', 'seed-project')
        ));
    }
}

add_action('after_setup_theme', 'seed_project_theme_setup');

// Enqueue scripts and styles
function seed_project_assets() {

    // CSS files
    
    wp_enqueue_style('bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css'), array(), 'v5.3.2');

    wp_enqueue_style('seed-project', get_stylesheet_uri(), array('bootstrap'), 'v1.0');
    
    // Google Fonts
    // wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;1,300&display=swap');

    // JS files
    wp_enqueue_script('bootstrap', get_theme_file_uri('assets/js/bootstrap.min.js'), array(), 'v5.3.2', true);

    wp_enqueue_script('seed-project-js', get_theme_file_uri('assets/js/main-script.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-selectmenu', 'jquery-effects-core'), 'v1.0', true);

    // Icon library
    wp_enqueue_script('fontawesome', '//kit.fontawesome.com/088187ebe9.js');
}

add_action('wp_enqueue_scripts', 'seed_project_assets');


// Add search bar to nav
function seed_project_nav_search($items, $args) {
    $items .= '<li class="search-item">' . get_search_form(false) . '</li>';
    return $items;
}

add_filter('wp_nav_menu_items', 'seed_project_nav_search', 10, 2);

// Customize read more
function seed_project_readmore($more) {
    return '...';
}

add_filter('excerpt_more', 'seed_project_readmore');

?>