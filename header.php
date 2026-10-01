<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="logo-container">
        <?php 
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
            echo '<h1><a href="' . esc_url(home_url('/')) . '" style="text-decoration:none; color:inherit;">' . get_bloginfo('name') . '</a></h1>';
        }
        ?>
    </div>
    <nav class="main-navigation">
        <a href="#services" style="margin-right: 1.5rem; text-decoration:none; color:var(--text-secondary);">Services</a>
        <a href="#packages" style="margin-right: 1.5rem; text-decoration:none; color:var(--text-secondary);">Packages</a>
        <a href="#contact" class="btn-primary">Get Started</a>
    </nav>
</header>
