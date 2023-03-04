<?php
// soporte para menus
add_theme_support('menus');


function loadScripts()
{
    wp_deregister_script('site');
    wp_register_script('site',  get_bloginfo('template_url') . '/js/site.js', array(), '1', true);
    wp_enqueue_script('site');


    if (is_page_template('templates/home.php')) {

        wp_enqueue_script('glide', 'https://cdn.jsdelivr.net/npm/@glidejs/glide@3.5.2/dist/glide.min.js', array(), '3.5.2', true);

        wp_deregister_script('home');
        wp_register_script('home',  get_bloginfo('template_url') . '/js/home.js', array(), '1', true);
        wp_enqueue_script('home');
    }

    if (is_page_template('templates/todos-somos-ccori.php')) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);
        wp_enqueue_script('jquery');

        wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), '1.8.1', true);

        wp_deregister_script('todos-somos-ccori');
        wp_register_script('todos-somos-ccori',  get_bloginfo('template_url') . '/js/todos-somos-ccori.js', array(), '1', true);
        wp_enqueue_script('todos-somos-ccori');
    }

    if (is_page_template('templates/nuestra-mision.php')) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);
        wp_enqueue_script('jquery');

        wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), '1.8.1', true);

        wp_deregister_script('nuestra-mision');
        wp_register_script('nuestra-mision',  get_bloginfo('template_url') . '/js/nuestra-mision.js', array(), '1', true);
        wp_enqueue_script('nuestra-mision');
    }
    if (is_page_template('templates/investigacion-y-desarrollo.php')) {

        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);
        wp_enqueue_script('jquery');

        wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), '1.8.1', true);

        wp_deregister_script('tabs');
        wp_register_script('tabs',  get_bloginfo('template_url') . '/js/tabs.js', array(), '1', true);
        wp_enqueue_script('tabs');

        wp_deregister_script('investigacion-y-desarrollo');
        wp_register_script('investigacion-y-desarrollo',  get_bloginfo('template_url') . '/js/investigacion-y-desarrollo.js', array(), '1', true);
        wp_enqueue_script('investigacion-y-desarrollo');
    }

    if (is_page_template('templates/programas-sociales.php')) {

        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);
        wp_enqueue_script('jquery');

        wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), '1.8.1', true);

        wp_deregister_script('tabs');
        wp_register_script('tabs',  get_bloginfo('template_url') . '/js/tabs.js', array(), '1', true);
        wp_enqueue_script('tabs');

        wp_deregister_script('programas-sociales');
        wp_register_script('programas-sociales',  get_bloginfo('template_url') . '/js/programas-sociales.js', array(), '1', true);
        wp_enqueue_script('programas-sociales');
    }

    if (is_singular('producto')) {
        wp_deregister_script('producto');
        wp_register_script('producto',  get_bloginfo('template_url') . '/js/producto.js', array(), '1', true);
        wp_enqueue_script('producto');
    }
}
add_action('wp_enqueue_scripts', 'loadScripts');

function addStylesheets()
{
    wp_deregister_style('site');
    wp_register_style('site', get_bloginfo('template_url') . '/css/site.css?ver=1.0.1');
    wp_enqueue_style('site');

    if (is_page_template('templates/home.php')) {
        wp_deregister_style('home');
        wp_register_style('home', get_bloginfo('template_url') . '/css/home.css?ver=1.0.1');
        wp_enqueue_style('home');

        wp_enqueue_style('glide', 'https://cdn.jsdelivr.net/npm/@glidejs/glide@3.5.2/dist/css/glide.core.min.css', array(), '3.5.2', 'all');
    }

    if (is_page_template('templates/todos-somos-ccori.php')) {
        wp_deregister_style('todos-somos-ccori');
        wp_register_style('todos-somos-ccori', get_bloginfo('template_url') . '/css/todos-somos-ccori-page.css?ver=1.0.1');
        wp_enqueue_style('todos-somos-ccori');

        wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), '1.8.1', 'all');
    }

    if (is_page_template('templates/nuestra-mision.php')) {
        wp_deregister_style('nuestra-mision');
        wp_register_style('nuestra-mision', get_bloginfo('template_url') . '/css/nuestra-mision.css?ver=1.0.1');
        wp_enqueue_style('nuestra-mision');

        wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), '1.8.1', 'all');
    }

    if (is_page_template('templates/investigacion-y-desarrollo.php') || is_page_template('templates/programas-sociales.php')) {
        wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), '1.8.1', 'all');

        wp_deregister_style('investigacion-y-desarrollo');
        wp_register_style('investigacion-y-desarrollo', get_bloginfo('template_url') . '/css/investigacion-y-desarrollo.css?ver=1.0.1');
        wp_enqueue_style('investigacion-y-desarrollo');
    }

    if (is_page_template('templates/donar.php')) {
        wp_deregister_style('donar');
        wp_register_style('donar', get_bloginfo('template_url') . '/css/donar.css?ver=1.0.1');
        wp_enqueue_style('donar');
    }

    if (is_singular('producto')) {
        wp_deregister_style('producto');
        wp_register_style('producto', get_bloginfo('template_url') . '/css/producto.css?ver=1.0.1');
        wp_enqueue_style('producto');
    }
}

add_action('wp_print_styles', 'addStylesheets');


// miniaturas en el post
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

// options page acf
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

//widget
function widget()
{
    register_sidebar(array(
        'id' => 'widget',
        'name' => __('Widget'),
        'description'   => __('Arrastra lo que quieras aquí'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>'
    ));
}

add_action('widgets_init', 'widget');


function custom_excerpt_length($length)
{
    return 30; //cambia el número 30 por la cantidad de caracteres deseados
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);
