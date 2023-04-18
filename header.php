<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div id="overlay">
            <?php get_search_form(); ?>
            <h1>
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="<?php bloginfo('name'); ?>" class="logo">
                </a>
            </h1>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'container_id' => 'main-nav'
            ));
            ?>
        </div>
        <div class="container" id="container">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
        </div>
    </header>
    <main>