<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<div id="wrapper" class="hfeed">
    <header id="header" role="banner">
        <section id="branding">
            <div id="site-title">
                <?php if (is_front_page() || is_home() || is_front_page() && is_home()): ?>
                    <?= '<h1>' ?>
                <?php endif ?>
                <a href="<?= esc_url(home_url('/')) ?>"
                   title="<?= esc_html(get_bloginfo('name')) ?>"
                   rel="home"><?= esc_html(get_bloginfo('name')) ?></a>
                <?php if (is_front_page() || is_home() || is_front_page() && is_home()): ?>
                    <?= '</h1>' ?>
                <?php endif ?>
            </div>
            <div id="site-description"><?php bloginfo('description') ?></div>
        </section>
        <nav id="menu" role="navigation">
            <div id="search">
                <?php get_search_form() ?>
            </div>
            <?php wp_nav_menu(array('theme_location' => 'main-menu')) ?>
        </nav>
    </header>
    <div id="container">