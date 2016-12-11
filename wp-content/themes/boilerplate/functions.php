<?php

/**
 * https://developer.wordpress.org/reference/functions/add_action/
 */

add_action('after_setup_theme', 'boilerplate_setup');
function boilerplate_setup()
{
    load_theme_textdomain('boilerplate', get_template_directory() . '/languages');
    // https://developer.wordpress.org/reference/functions/add_theme_support/
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    // https://codex.wordpress.org/Content_Width
    global $content_width;
    if (!isset($content_width)) $content_width = 640;
    // https://codex.wordpress.org/Function_Reference/register_nav_menus
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu'
        )
    );
}

add_action('wp_enqueue_scripts', 'boilerplate_load_scripts');
function boilerplate_load_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/bundle.js', '', '', true);
}

add_action('wp_enqueue_scripts', 'boilerplate_load_styles');
function boilerplate_load_styles()
{
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style/main.css');
}

add_action('comment_form_before', 'boilerplate_enqueue_comment_reply_script');
function boilerplate_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('widgets_init', 'boilerplate_widgets_init');
function boilerplate_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar Widget Area', 'boilerplate'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</li>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

/*
 * https://developer.wordpress.org/reference/functions/add_filter/
 */

add_filter('the_title', 'boilerplate_title');
function boilerplate_title($title)
{
    if ($title == '') {
        return '&rarr;';
    } else {
        return $title;
    }
}

add_filter('wp_title', 'boilerplate_filter_wp_title');
function boilerplate_filter_wp_title($title)
{
    return $title . esc_attr(get_bloginfo('name'));
}
